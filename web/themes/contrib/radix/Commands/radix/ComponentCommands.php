<?php

declare(strict_types=1);

namespace Drush\Commands\radix;

use Drush\Commands\DrushCommands;
use Drush\Drush;
use Symfony\Component\Console\Helper\QuestionHelper;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Yaml\Yaml;

/**
 * Class ComponentCommands handles components.
 *
 * Provides many helper function for radix components.
 */
class ComponentCommands extends DrushCommands {

  /**
   * Lists all Radix components.
   *
   * @command radix:list
   * @aliases list
   * @bootstrap full
   *
   * @usage drush radix:list
   *   List all components available in the Radix theme.
   */
  public function listComponents() {
    $components = $this->getComponents();
    foreach ($components as $component) {
      $formattedName = "<fg=green;options=bold>{$component['name']}</>";
      $this->logger()->notice("{$formattedName}: {$component['description']}");
    }
  }

  /**
   * Adds a Radix component to the active theme.
   *
   * @command radix:add
   * @aliases add
   * @bootstrap full
   *
   * @usage drush radix:add
   *   Adds a selected Radix component to the active theme's components
   *   directory.
   */
  public function addComponent() {
    $activeTheme = $this->getActiveThemeName();
    $components = $this->getComponents();
    $questionHelper = new QuestionHelper();

    // Extract the names for the choice question.
    $componentNames = array_map(function ($component) {
      return $component['name'];
    }, $components);

    $question = new ChoiceQuestion(
      'Please select the component you wish to add to your subtheme (defaults to the first component on the list):',
      // Now we pass the flat array of names.
      $componentNames,
      0
    );
    $question->setErrorMessage('Component %s is invalid.');

    $componentName = $questionHelper->ask($this->input(), $this->output(), $question);

    // Find the selected component in the original array to get the full details
    // .
    $selectedComponent = current(array_filter($components, function ($component) use ($componentName) {
      return $component['name'] === $componentName;
    }));

    if ($selectedComponent) {
      $this->copyComponentToSubtheme($componentName, $activeTheme);
      $this->logger()->success("Component {$componentName} has been added to your {$activeTheme}. You should update the related html.twig files to use your subtheme namespace.");
    }
    else {
      $this->logger()->error("The selected component '{$componentName}' was not found.");
    }
  }

  /**
   * Helper function to get the list of components.
   */
  private function getComponents() {
    $radixPath = $this->getRadixPath();
    $componentsDirectory = $radixPath . '/components';
    $filesystem = new Filesystem();

    if (!$filesystem->exists($componentsDirectory)) {
      throw new \Exception("The components directory at {$componentsDirectory} does not exist.");
    }

    $components = [];
    $componentFiles = scandir($componentsDirectory);

    foreach ($componentFiles as $componentDirName) {
      if ($componentDirName === '.' || $componentDirName === '..') {
        continue;
      }

      $componentPath = $componentsDirectory . DIRECTORY_SEPARATOR . $componentDirName;
      if (is_dir($componentPath)) {
        $ymlFilePath = $componentPath . DIRECTORY_SEPARATOR . $componentDirName . '.component.yml';
        if ($filesystem->exists($ymlFilePath)) {
          try {
            $ymlContent = Yaml::parseFile($ymlFilePath);
            // Fallback to the directory name if 'name' key is missing.
            $componentName = $ymlContent['name'] ?? $componentDirName;
            $description = $ymlContent['description'] ?? 'No description available';
            $components[] = ['name' => $componentName, 'description' => $description];
          }
          catch (\Exception $e) {
            $this->logger()->error("Error parsing YAML file for component '{$componentDirName}': " . $e->getMessage());
          }
        }
        else {
          $components[] = ['name' => $componentDirName, 'description' => 'YAML file not found'];
        }
      }
    }

    return $components;
  }

  /**
   * Function to copy a component to the active theme's components directory.
   *
   * @param string $componentName
   *   The component name.
   * @param string $activeTheme
   *   The active theme name.
   */
  private function copyComponentToSubtheme($componentName, $activeTheme) {
    $filesystem = new Filesystem();
    $activeThemeComponentDir = $this->getThemePath($activeTheme) . '/components';
    $radixComponentDir = $this->getRadixPath() . "/components/{$componentName}";

    // Check if the component directory exists in the Radix theme.
    if (!$filesystem->exists($radixComponentDir)) {
      $this->logger()->error("The component '{$componentName}' does not exist in the Radix theme.");
      return;
    }

    // Check if the active theme's components directory exists, if not create it
    // .
    if (!$filesystem->exists($activeThemeComponentDir)) {
      $filesystem->mkdir($activeThemeComponentDir);
    }

    // Copy component from Radix to the active theme.
    $filesystem->mirror($radixComponentDir, $activeThemeComponentDir . "/{$componentName}");
    $this->logger()->notice("Copied '{$componentName}' to '{$activeThemeComponentDir}/{$componentName}'.");
  }

  /**
   * Retrieves the name of the active theme.
   */
  private function getActiveThemeName() {
    $themeHandler = \Drupal::service('theme_handler');
    return $themeHandler->getDefault();
  }

  /**
   * Retrieves the path to the Radix theme.
   */
  private function getRadixPath() {
    return Drush::bootstrapManager()->getRoot() . '/themes/contrib/radix';
  }

  /**
   * Retrieves the path to the specified theme.
   *
   * @param string $themeName
   *   The theme name.
   */
  private function getThemePath($themeName) {
    return Drush::bootstrapManager()->getRoot() . "/themes/custom/{$themeName}";
  }

}
