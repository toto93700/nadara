# views-view--grid

Component implementation for views to display rows in a grid.

## Key Features

- **Customizable HTML Attributes**: Supports adding HTML attributes to the wrapping element, enhancing both functionality and styling.
- **Flexible Grid Options**: Adapts to various grid styles based on the view's configuration, including alignment and column settings.
- **Dynamic Item Rendering**: Efficiently handles the rendering of grid items, with support for both horizontal and vertical alignments.

## Customization Options

- **Styling Flexibility**: Utilize utility classes to tailor the appearance and layout of the grid.
- **Adaptive Content Display**: Configurable for different types of content, making it suitable for a wide range of applications.

## Usage

```twig
  {% include 'radix:views-view--grid' with {
    attributes: create_attribute({'class': ['custom-grid-class']}),
    title: 'Grid Title',
    view: view_object,
    rows: view_rows,
    options: grid_options,
    items: grid_items,
    view_view__grid_utility_classes: ['additional-utility-class']
  } %}
```
