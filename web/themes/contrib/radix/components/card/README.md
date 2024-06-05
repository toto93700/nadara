# Card Component

This Twig template is designed to create a versatile and customizable Card component.

## Bootstrap Documentation

https://getbootstrap.com/docs/5.3/components/card/

## Component Properties

The Card component takes a variety of properties to customize its appearance and content:

- `card_header` (optional): Text for the Card's header.
- `card_footer` (optional): Text for the Card's footer.
- `card_title` (optional): Text for the Card's title.
- `card_subtitle` (optional): Text for the Card's subtitle.
- `card_body` (optional): Main text for the Card's body.
- `card_text` (optional): Additional text for the Card.
- `card_link_url` (optional): URL for the Card's link.
- `card_link_text` (optional): Text for the Card's link.
- `card_image_src` (optional): Source URL for an image on the Card.
- `card_image_alt` (optional): Alt text for the Card's image.
- `card_image_cap` (optional): Position for the Card's image cap (either 'top' or 'bottom').
- `card_image_overlays` (optional): Boolean value to determine if the card has image overlays.
- `card_body_tag` (optional): The HTML tag for the Card's body.
- `card_title_tag` (optional): The HTML tag for the Card's title.
- `card_subtitle_tag` (optional): The HTML tag for the Card's subtitle.
- `card_title_tag` (optional): The HTML tag for the Card's title.
- `card_text_tag` (optional): The HTML tag for the card text.
- `card_border` (optional): Set to true if the card should be borderless.
- `card_utility_classes` (optional): An array of additional CSS classes is added to the card.

## Usage

Here's an example of a basic Card component usage:

```twig
{% include 'radix:card' with {
  card_title: 'Card Title',
  card_body: 'This is the card body.',
  card_link_url: '/link',
  card_link_text: 'Click Here'
} %}
```
