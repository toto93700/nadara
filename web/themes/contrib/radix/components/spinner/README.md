# Spinners

Indicate the loading state of a component or page with Bootstrap spinners, built entirely with HTML, CSS, and no JavaScript.

## Bootstrap Documentation

https://getbootstrap.com/docs/5.3/components/spinners/

## Key Features

- **Flexible HTML Tag**: Choose between `div` or `span` for the spinner's HTML element.
- **Spinner Types**: Offers both border and grow spinner types, catering to different aesthetic preferences.
- **Color Customization**: Leverages the current color scheme, allowing for easy appearance changes with text color utilities.
- **Size Options**: Includes size customization for creating smaller spinners that fit within other components.
- **Accessibility**: Supports hidden status messages for screen readers, enhancing accessibility.

## Customization Options

- **Type, Size, and Color Classes**: Apply classes based on the spinner type, size, and color for tailored visual appearance.
- **Utility Classes**: Incorporate additional utility classes for further customization and styling.

## Usage:

```twig
  {% include 'radix:spinner' with {
    spinner_html_tag: 'div',
    type: 'border',
    color: 'primary',
    size: 'sm',
    hidden_status: false,
    spinner_utility_classes: ['custom-spinner'],
    attributes: create_attribute({'id': 'spinnerId'}),
    spinner_status_attributes: create_attribute({'class': ['status-message']}),
    content: 'Loading...'
  } %}
```
