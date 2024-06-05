# Pagination

Documentation and examples for showing pagination to indicate a series of related content exists across multiple pages.

## Key Features

- **Utility Class Integration**: Allows for the addition of custom utility classes for further customization and styling of the pagination component.
- **Size Customization**: Supports different sizes such as 'sm' (small) and 'lg' (large) for pagination buttons.
- **Flexible Alignment**: Includes alignment options like 'start', 'end', 'center', and 'vertical' for positioning the pagination within the layout.
- **Accessibility Features**: Designed with accessibility in mind, ensuring that the pagination component is usable by all audiences.

## Customization Options

- **Dynamic CSS Classes**: Customize the appearance of the pagination with custom CSS classes, size options, and alignment settings.
- **Adaptive Content**: Easily adapt the pagination component to different content types and page structures.

## Template Structure

- **Navigation Wrapper**: A `<nav>` element with role 'navigation' serves as the main container, encapsulating the pagination items.
- **Pagination Items**: Dynamically generated pagination items, including first, previous, next, and last buttons, with ellipses for skipped page numbers.
- **Current Page Indicator**: Highlights the current page number within the pagination.

## Usage

```twig
  {% include 'radix:pagination' with {
    pagination_utility_classes: ['custom-pagination-class'],
    size: 'lg',
    alignment: 'center',
    items: items,
  } %}
```
