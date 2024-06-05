# User

A theme implementation for rendering user profiles.

## Key Features

- **Support for Multiple View Modes**: Handles different view modes like "full" or "teaser", catering to diverse display requirements.
- **Dynamic Content Rendering**: Capable of displaying all content related to the user, ensuring a comprehensive presentation of user profiles.
- **Utility Class Integration**: Provides the option to include additional utility classes for custom design and styling.

## Customization Options

- **Adaptive Styling**: Leverage utility classes to customize the appearance and layout of user profiles.
- **Versatile Content Display**: Efficiently manage and present various types of user-related content, adapting to specific user profile requirements.

## Usage

```twig
  {% include 'radix:user' with {
    view_mode: 'full',
    content: user_content,
    user_utility_classes: ['custom-user-class'],
    attributes: create_attribute({'id': 'user-profile'})
  } %}
```
