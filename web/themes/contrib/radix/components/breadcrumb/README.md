# Breadcrumb Component

This is a Twig template for rendering a responsive breadcrumb component.

## Component Properties

- `breadcrumb`: An array containing the breadcrumb items. Each item should be an associative array with `text` and `url` properties. The `url` property can be `null` for the current page.
- `breadcrumb_utility_classes` (optional): An array of additional CSS classes that will be added to the `.breadcrumb` element.
- `breadcrumb_attributes` (optional): A `drupal attributes` array that can be used to add additional attributes to the `.breadcrumb` element.

## Usage

Include the breadcrumb component in your Twig template and pass the necessary parameters:

```twig
  {% include 'radix:breadcrumb' with {
    breadcrumb: [
      { text: 'Home', url: '/home' },
      { text: 'Blog', url: '/blog' },
      { text: 'Post Title', url: null }  // The current page
    ],
    breadcrumb_utility_classes: ['my-custom-class']
  } %}
```
