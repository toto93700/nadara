# Local Tasks

Drupal local tasks are the tabs that appear at the top of the page. They are mainly for administrative tasks, but can be used for other purposes as well.

## Key Features

- **Primary Local Tasks**: Handles the display of main navigation tasks, commonly known as primary tabs.
- **Secondary Local Tasks**: Manages secondary tasks, typically used for sub-navigation or secondary actions related to the primary content.
- **Accessible Design**: Includes visually hidden headers for screen readers, ensuring better accessibility.

## Customization Options

- **Tab and Pill Styles**: Primary tasks are displayed as tabs, while secondary tasks are shown as pills, offering a distinct visual difference.
- **Flexible Integration**: Can be easily customized and integrated into various parts of a web application where local task navigation is required.

## Template Structure

- **Primary Local Tasks**: Rendered as a list of tabs if they exist, preceded by a visually hidden header for accessibility.
- **Secondary Local Tasks**: Displayed as a list of pills when available, with a similar visually hidden header for screen reader users.

## Usage

```twig
  {% include 'radix:local-tasks' with {
    primary: primary_local_tasks,
    secondary: secondary_local_tasks
  } %}
```
