# Table

A template for creating a Table, designed to present data in a structured, tabular format.

## Key Features

- **Utility Classes**: Incorporates a range of utility classes for customized styling and functionality.
- **Bootstrap Integration**: Fully compatible with Bootstrap's table styling options, as outlined in their documentation.
- **Flexible Structure**: Supports various table elements like captions, column groups, headers, bodies, and footers for comprehensive table construction.

## Customization Options

- **Styling Flexibility**: Apply Bootstrap and custom utility classes to modify the table's appearance and behavior.
- **Content Adaptability**: Easily tailor the table's content and structure to fit different data presentation needs.

## Usage

```twig
  {% include 'radix:table' with {
    table_utility_classes: ['custom-table-class'],
    caption: 'Table Caption',
    colgroups: colgroup_data,
    header: header_cells,
    rows: row_data,
    footer: footer_cells,
    empty: 'No data available',
    attributes: create_attribute({'class': ['additional-classes']})
  } %}
```
