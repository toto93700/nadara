# Views view unformatted

Implementation to display a view of unformatted rows.

## Key Features

- **Title Integration**: Supports the inclusion of a title for the group of rows, enhancing the structure and readability of the content.
- **Unformatted Row Rendering**: Efficiently displays each row in the view without additional formatting, keeping the focus on the content itself.
- **Default Row Class Option**: Offers the ability to use default row classes for basic styling and consistency.

## Customization Options

- **Simplicity and Clarity**: Emphasizes content without additional styling distractions, ideal for straightforward data presentation.
- **Flexible Row Classes**: Incorporates the option to add or omit default row classes based on styling preferences.

## Usage

```twig
  {% include 'radix:views-view--unformatted' with {
    title: 'View Title',
    rows: view_rows,
    default_row_class: true
  } %}
```
