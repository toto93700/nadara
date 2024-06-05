# Select

A select component is a dropdown list of options that allows users to choose one option.

## Key Features

- **HTML Attributes Customization**: Supports the addition of HTML attributes to the `<select>` tag, enhancing styling and accessibility.
- **Options Rendering**: Dynamically displays a list of options, including optgroups, for comprehensive select field functionality.
- **Selected State Handling**: Manages the selected state for each option, ensuring accurate reflection of user input or pre-set values.

## Customization Options

- **Standard Styling**: Applies the `form-control` class by default.
- **Optgroup Support**: Efficiently handles option groups, allowing for hierarchical structuring of complex selections.

## Usage

```twig
  {% include 'radix:select' with {
    attributes: attributes.addClass(['form-control']),
    options: options
  } %}
```
