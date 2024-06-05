# Textarea

A theme override for a `textarea` form element enhances multi-line text input areas.

## Key Features

- **HTML Attributes Customization**: Supports adding HTML attributes to the textarea, improving styling and accessibility.
- **Default Styling with `form-control`**: Incorporates Bootstrap's `form-control` class for consistent styling.
- **Utility Class Integration**: Allows adding extra utility classes for specific design and styling needs.

## Customization Options

- **Flexible Styling**: Utilize Bootstrap and custom utility classes for tailored appearance and functionality.
- **Adaptive Content**: Easily adaptable to various types of text input, suitable for multiple form designs.

## Usage

```twig
  {% include 'radix:textarea' with {
    value: 'Initial content',
    textarea_utility_classes: ['additional-custom-class']
  } %}
```
