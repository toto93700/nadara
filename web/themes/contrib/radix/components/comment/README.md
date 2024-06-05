# Comment

A generic Drupal comment field override.

## Key Features

- **Class Configuration**: Includes classes for JavaScript interaction and styling, with additional handling for unpublished comments.
- **User Picture Integration**: Supports the inclusion of user pictures alongside comments, adding a personal touch to each entry.
- **Responsive Layout**: Utilizes a row and column structure for a responsive layout, ensuring comments are easily readable on various devices.
- **Accessibility Considerations**: Implements features like semantic relationships and visually hidden elements for improved accessibility.

## Customization Options

- **Styling Flexibility**: Offers the ability to customize the appearance of comments using utility classes and Bootstrap components.
- **Content Layout**: Manages comment content within a card layout, providing a modern and organized display.

## Usage

```twig
  {% include 'radix:comment' with {
    user_picture: 'path/to/user/picture.jpg',
    user_picture_alt: 'User description',
    submitted: 'Submitted info',
    permalink: 'Link to comment',
    title: 'Comment Title',
    content: 'Comment content',
    parent: 'Parent comment info',
  } %}
```
