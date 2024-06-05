# Navbar

Documentation and examples for Bootstrap’s powerful, responsive navigation header, the navbar. Includes support for branding, navigation, and more, including support for our collapse plugin.

## Bootstrap Documentation

https://getbootstrap.com/docs/5.3/components/navbar/

## Key Features

- **Container Options**: Supports fixed and fluid container types for different layout needs.
- **Placement Options**: Includes placement configurations like default, fixed-top, fixed-bottom, and sticky-top.
- **Color Themes**: Offers color themes such as light and dark for style customization.
- **Expandable Navbars**: Configurable expansion settings for responsive design at breakpoints like sm, md, lg, xl.
- **Utility Class Integration**: Allows for the addition of custom utility classes for further styling and functionality customization.

## Customization Options

- **Flexible Container**: Choose between a fixed-width or full-width container to match the layout of your site.
- **Navbar Placement**: Customize the placement of the navbar to suit different design requirements.
- **Color Schemes**: Select from light or dark color schemes to align with your site's theme.
- **Responsive Behavior**: Set the navbar to expand at specific screen sizes for optimal responsiveness.

## Usage

```twig
  {% include 'radix:navbar' with {
    container: 'fixed',
    placement: 'sticky-top',
    color: 'dark',
    navbar_expand: 'md',
    navbar_utility_classes: ['bg-light'],
    branding: branding_content,
    left: left_block_content,
    right: right_block_content
  } %}
```
