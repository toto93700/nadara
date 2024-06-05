# Form

The 'form' element template is designed to create structured, interactive forms in web applications. It is essential for collecting user input in a structured and accessible manner. This template is flexible, supporting various form elements and layouts.

## Key Features

- **HTML Attribute Integration**: The template allows for the integration of custom HTML attributes, enhancing accessibility and styling capabilities.
- **Dynamic Children Elements**: It supports a variety of child elements, enabling the creation of diverse forms with different input types and controls.
- **Customizable Classes**: Utilize `form_utility_classes` for additional styling and functional customizations.

## Template Structure

- **Classes Configuration**: Pre-defined and customizable classes (`is_inline`, `form_utility_classes`) determine the form's appearance and layout.
- **Form Container**: The main `<form>` tag, which includes dynamically added classes and custom attributes for enhanced styling and functionality.
- **Children Handling**: Inside the form tag, `children` are rendered, allowing for the inclusion of various form elements like input fields, buttons, and labels.

## Customization

- **Inline Forms**: The template supports inline forms through the `is_inline` variable, enabling a more compact layout.
- **Utility Classes**: You can apply additional utility classes to modify the form's appearance and behavior, providing a high degree of customization.

## Usage

```twig
  {% include "radix:form" with {
    is_inline: true,
  } %}
```
