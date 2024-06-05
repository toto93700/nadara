# Navbar brand

The Drupal Navbar-brand component/block. It offers options for site name, slogan, image branding, and link configuration.

## Key Features

- **Text Branding**: Allows the inclusion of text for the brand, suitable for simple or text-based branding.
- **Link Configuration**: Supports the option to make the brand a clickable link, directing to a specified path.
- **Image Branding**: Provides the capability to include an image as the brand logo, with customizable width, height, and alternative text.
- **Utility Class Integration**: Facilitates the addition of custom utility classes for further customization and styling.

## Customization Options

- **Text and Link Customization**: Configure the brand text and the path to create a link or non-link brand representation.
- **Image Customization**: Easily integrate a brand image with control over its dimensions and alternative text.
- **Styling Flexibility**: Apply additional utility classes to tailor the appearance and positioning of the navbar-brand.

## Usage

```twig
  {% include 'radix:navbar-brand' with {
    text: site_name,
    slogan: site_slogan,
    image: site_logo,
    width: '40px',
    height: 'auto',
    path: path('<front>'),
    alt: elements.content.site_name['#markup'] ~ ' logo' ,
  } %}
```
