# Input

Give textual form controls <input>s an upgrade with custom styles, sizing, focus states, and more.

## Key Features

**Custom HTML Attributes**: Supports the addition of a variety of HTML attributes to the input element, allowing for extensive customization and accessibility enhancements.
**Optional Child Elements**: Allows for the inclusion of additional rendered elements alongside the input field, providing flexibility for complex form designs.
**Class Management**: Integrates options for removing default classes and adding custom utility classes for tailored styling.

## Customization Options

**Removing Default Classes**: The template includes an option (remove_form_control) to omit the default `form-control` class, particularly useful for checkboxes and radio buttons.
**Utility Classes**: Additional utility classes (input_utility_classes) can be applied for more specific styling needs, offering a high degree of customization.

## Template Structure

**Input Classes**: A set of predefined and customizable classes are applied to the input element based on the configuration.
**Rendering Children**: The template allows for the rendering of optional child elements, enhancing the input's functionality and presentation.

## Usage

```twig
  {% include 'radix:input' with {
    attributes: attributes.removeClass('button'),
    remove_form_control: false,
    input_utility_classes: ['the-class', 'the-other-class'],
  } %}
```
