# Media

A theme override for displaying a media item in Drupal. It is designed to render various types of media content with a focus on accessibility and flexibility.

## Key Features

- **Media Object Support**: Handles rendering of a media item object, providing controlled access to its properties and methods.
- **Customizable Display**: Supports different view modes and publishing states for media items, allowing for varied presentation styles.
- **Content Integration**: Pre-structured media content is ready for output, ensuring consistent and efficient rendering.

## Customization Options

- **Dynamic CSS Classes**: Automatically applies CSS classes based on media type, publication status, and view mode, facilitating custom styling.
- **Contextual Links**: Includes contextual links for easy content management and editing when available.

## Template Structure

- **CSS Class Configuration**: A set of predefined and context-based classes are applied to the media item, enhancing its styling and visibility.
- **Content Rendering**: Media content is rendered within the template, ensuring that it is displayed appropriately in the context of the page.

## Usage

```twig
  {% include 'radix:media' with {
    media: media_item,
    content: media_content,
    view_mode: 'full',
  } %}
```
