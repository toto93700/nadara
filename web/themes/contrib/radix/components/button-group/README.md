# Button Group

Creates a group of buttons or inputs. The group can be vertically aligned, and different sizes can be specified.

## Bootstrap Documentation

https://getbootstrap.com/docs/5.3/components/button-group

## Available Properties:

- `vertical`: Whether to render the button group vertically. (default: false)
- `size`: The size of the button group (sm | md | lg). Defaults to `md`.
- `aria_label`: The aria-label attribute of the button group.
- `toolbar`: Whether to render the button group as a toolbar. (default: false)
- `toolbar_aria_label`: The aria-label attribute of the toolbar.
- `items`: An array of buttons or inputs.

## Available Slots:

- `content`: The content for the button.

## Examples

**Example #1:** Horizontal Button Group

```twig
{% include 'radix:button-group' with {
  size: 'lg',
  items: [
    [
      {button_html_tag: 'button', color: 'primary', content: 'Left'},
      {button_html_tag: 'button', color: 'primary', content: 'Middle'},
      {button_html_tag: 'button', color: 'primary', content: 'Right'},
    ],
  ]
} %}
```

**Example #2**: Vertical Input Button Group

```twig
    {% include 'radix:button-group' with {
      vertical: true,
      items: [
          [
            {
              type: 'input',
              input_type: 'radio',
              label: 'First Input',
              remove_wrapper: true,
              toggle: true,
              toggle_variant: 'outline-danger',
              id: 'first-input',
              name: 'vbtn-radio',
              checked: true,
            },
            {
              type: 'input',
              input_type: 'radio',
              label: 'Second Input',
              remove_wrapper: true,
              toggle: true,
              toggle_variant: 'outline-danger',
              id: 'second-input',
              name: 'vbtn-radio'
            },
            {
              type: 'input',
              input_type: 'radio',
              label: 'Third Input',
              remove_wrapper: true,
              toggle: true,
              toggle_variant: 'outline-danger',
              id: 'third-input',
              name: 'vbtn-radio'
            },
          ],
      ]
  } %}
```

These examples represent a horizontal and vertical button group where each item array creates a group of buttons. Please adjust as necessary.
