# Page Header

This template is crafted for constructing the Page Header component within your main Page component.

## Key Features

- **Integrated Navbar**: Embeds the 'radix:navbar' component within the header for cohesive navigation integration.
- **Customizable Navbar Settings**: Provides configuration options for the navbar, such as container type and color theme.
- **Flexible Content Blocks**: Features dedicated blocks for branding, left-aligned, and right-aligned content within the navbar.

## Customization Options

- **Navbar Customization**: Adjust navbar settings like container type and color to align with the overall site theme.
- **Utility Class Integration**: Utilizes utility classes for additional styling and customization of the navbar.
- **Content Placement Flexibility**: Easily configure the placement of content in the left and right sections of the navbar.

## Template Structure

- **Navbar Embedding**: Incorporates the 'radix:navbar' template with predefined settings for seamless integration.
- **Branding Block**: A dedicated block for navbar branding, allowing for the inclusion of logos or brand names.
- **Left and Right Content Blocks**: Configurable blocks for inserting custom content or navigation elements on either side of the navbar.

## Usage

```twig
  {% include 'radix:page-header' with {
    page: {
      navbar_branding: branding_content,
      navbar_left: left_navigation_content,
      navbar_right: right_navigation_content
    }
  } %}
```
