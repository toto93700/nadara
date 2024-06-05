# Field

A field is a form element that allows the user to input data. It can be used to input text, numbers, dates, etc.

## Usage

```twig
{% include 'radix:field' with {
  label_hidden: false,
  multiple: true,
  label: 'Field Label',
  items: [
    { content: '<p>Item one content</p>' },
    { content: '<p>Item two content</p>' },
    { content: '<p>Item three content</p>' }
  ],
  entity_type: 'node',
  field_name: 'field_example',
  field_type: 'text_long',
  label_display: 'above',
  attributes: create_attribute(),
  title_attributes: create_attribute()
} %}
```
