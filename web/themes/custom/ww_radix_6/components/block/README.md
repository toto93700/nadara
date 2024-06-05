# Block

The block component template serves as a flexible and dynamic structure for creating block elements in your Drupal theme.

## Features

- **Dynamic Layout**: The template supports different layouts, which can be specified using the `layout` variable.
- **Customization**: You can customize the block by setting various configuration values, such as `label`, `label_display`, and `provider`.
- **Unique Identification**: Each block comes with a unique `id`, ensuring no conflicts in the HTML document.
- **HTML Attributes**: The template supports adding custom HTML attributes to the main container, title, and content tags.
- **Custom Class Handling**: It utilizes the `block_classes` set for applying CSS classes based on the block's configuration and plugin ID.
- **Content Rendering**: The content of the block is rendered within a designated area, with the ability to add custom attributes and classes.
- **Label Handling**: The block's label is managed with flexibility, allowing for inclusion only if specified.
- **HTML Tag Customization**: The HTML tag for the block can be defined, offering further control over the block's markup.

## Template Structure

The template is structured into several sections, each handling different aspects of the block:

- **Block Container**: Defined by `block_html_tag`, it wraps the entire block.
- **Title Prefix and Suffix**: Allows for additional content before and after the main title.
- **Block Label**: Managed within its own block for conditional rendering.
- **Block Content**: A dedicated section for the main content of the block.

## Usage

```twig
{% include 'radix:block' with {
  block_html_tag: 'div',
  block_utility_classes: [
    'some-utility-class',
  ],
} %}
```
