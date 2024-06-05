# HTML

This default theme implementation is designed for the primary structure of a Drupal page. It is a comprehensive template that manages the overall layout and structure of a page in a Drupal site, integrating various dynamic elements and features.

## Key Features

- **User Status**: The template adapts based on the user's logged-in status.
- **Dynamic Root Path**: It identifies and classifies pages based on their root path (e.g., 'node', 'admin', 'user').
- **Content Type Recognition**: For pages representing a node, the template can identify the content type.
- **Flexible Head Title**: Comprises elements like page title, site name, and slogan, assembled dynamically.
- **Page Segmentation**: Divides the page into `page_top`, `page`, and `page_bottom` segments for structured content rendering.
- **Offline Database Flag**: Indicates if the database is offline.
- **Head, CSS, and JS Management**: Integrates placeholders for head elements, CSS, and JavaScript.
- **Accessibility Features**: Includes a 'Skip to main content' link for enhanced keyboard navigation.

## Template Structure

- **HTML Structure**: Outlines the complete HTML structure of a Drupal page, including `DOCTYPE`, `html`, `head`, and `body` tags.
- **Body Classes**: Customizable classes based on the root path and language, with additional utility classes.
- **Content Rendering**: Sequentially renders `page_top`, `page`, and `page_bottom` content within the body.

## Customization

- **CSS and JS Integration**: Easily integrate custom stylesheets and JavaScript files using placeholders.
- **Language and Path-based Styling**: Customize the appearance based on language settings and the root path.

## Usage

```twig
  {% embed "radix:html" with {
    attributes: { class: ['custom-class'], id: 'custom-page-id' },
    logged_in: true,
    root_path: 'node',
    node_type: 'article',
    head_title: { title: 'Example Radix Page', name: 'Yolo!', slogan: 'Yolo today!' },
  } %}
    {% block body_end %}
      <!-- 'Some JS code that needs to run at the end of the body tag' -->
    {% endblock %}
  {% endembed %}
```
