# Views view

Component implementation for main view component.

## Key Features

- **Dynamic Class Assignment**: Incorporates multiple classes based on the view's properties, such as the view ID, display ID, and a CSS-safe version of the view name.
- **Flexible Content Areas**: Supports various optional sections like header, footer, exposed filters, and attachment views for comprehensive content display.
- **Utility Class Integration**: Facilitates the addition of extra utility classes for specific design and styling requirements.

## Customization Options

- **Adaptive Styling**: Utilize utility classes to customize the appearance and layout of the view.
- **Content Sections**: Manage multiple content areas including headers, footers, and attachments for a versatile presentation of view data.

## Usage

```twig
  {% include 'radix:view-view' with {
    attributes: create_attribute({'class': ['custom-view-class']}),
    title: 'View Title',
    header: view_header,
    footer: view_footer,
    rows: view_rows,
    empty: 'No data available',
    pager: view_pager,
    exposed: exposed_filters,
    feed_icons: feed_icons,
    more: more_link,
    attachment_before: attachment_before_content,
    attachment_after: attachment_after_content,
    css_name: 'css-safe-view-name',
    dom_id: 'unique-dom-id',
    view_view_utility_classes: ['additional-utility-class']
  } %}
```
