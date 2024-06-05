# Views view table

Component implementation for displaying a view as a table.

## Key Features

- **Enhanced HTML Attributes**: Allows for the addition of HTML attributes to the table for improved styling and accessibility.
- **Dynamic Header and Row Rendering**: Capable of efficiently rendering table headers and rows with customizable HTML attributes.
- **Responsive and Sticky Table Options**: Includes features for responsive tables and sticky headers, enhancing user interaction and readability.
- **Accessibility Considerations**: Provides options for captions, accessibility descriptions, and summaries to improve the understanding of table content.

## Customization Options

- **Flexible Styling with Utility Classes**: Utilize a range of utility classes to modify the table's appearance and functionality to fit specific requirements.
- **Adaptable Content Layout**: Suitable for displaying various types of data, making it versatile for different use cases.

## Usage

```twig
  {% include 'radix:views-view--table' with {
    attributes: create_attribute({'class': ['custom-table-class']}),
    title: 'Table Title',
    header: table_header_elements,
    rows: table_row_elements,
    responsive: true,
    sticky: true,
    views_view__table_utility_classes: ['additional-utility-classes']
  } %}
```
