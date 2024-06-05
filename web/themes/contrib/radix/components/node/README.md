# Node

A template for rendering a Node in Drupal.

## Key Features

- **Promotion and Stickiness Indicators**: Includes class-based indicators for nodes that are promoted or sticky.
- **Publication Status**: Marks unpublished nodes with a specific class for styling or visibility control.
- **Dynamic Class Application**: Automatically applies classes based on node characteristics like content type and view mode.
- **Content Type and View Mode Specific Styling**: Facilitates unique styling for different content types and view modes.

## Customization Options

- **Content Type-Based Styling**: Customize the appearance of nodes based on their content type.
- **View Mode Adaptation**: Adjust styling for different view modes like 'full', 'teaser', etc.
- **Status Indicators**: Style nodes differently based on whether they are promoted, sticky, or unpublished.

## Usage

```twig
  {% include 'radix:node' with {
    node: node_object,
    title_attributes: title_attributes,
    author_attributes: author_attributes,
    content_attributes: content_attributes,
    content: node_content,
    label: node_label,
    url: node_url,
    display_submitted: true,
    author_name: author_name,
    date: published_date
  } %}
```
