# Modal

Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user notifications, or completely custom content.

## Bootstrap Documentation

https://getbootstrap.com/docs/5.3/components/modal/

## Available Properties:

- `size`: Sets the size of the modal. Accepts 'sm', 'lg', 'xl', or 'fullscreen'.
- `id`: The unique identifier for the modal. A random ID is generated if not specified.
- `fullscreen_responsive`: Makes the modal fullscreen on specified breakpoints. Options are 'sm', 'md', 'lg', 'xl', 'xxl'.
- `static_backdrop`: If true, clicking the backdrop does not close the modal.
- `verticaly_centered`: If true, centers the modal vertically in the viewport.
- `scrollable`: If true, makes the modal's body scrollable if the content overflows.
- `header`: Content for the modal's header, can be plain text or HTML.
- `messages`: Area for displaying messages or alerts inside the modal.
- `body`: The main content of the modal, can contain text, forms, or any HTML content.
- `footer`: Content for the modal's footer, typically used for buttons or secondary information.
- `modal_attributes`: A list of HTML attributes for the modal.
- `modal_utility_classes`: An array of utility classes for additional styling.
- `modal_dialog_utility_classes`: An array of utility classes for additional styling on the modal dialog.
- `modal_header_classes`: An array of utility classes for additional styling on the modal header.
- `modal_body_classes`: An array of utility classes for additional styling on the modal body.
- `modal_footer_classes`: An array of utility classes for additional styling on the modal footer.

## Available Slots:

## Examples

**Example #1:** A basic modal with a header, body, and footer.

```twig
  {% include 'radix:modal' with {
    header: 'Modal Title',
    static_backdrop: true,
    close_button: true,
    verticaly_centered: true,
    id: 'modal-login',
    size: 'lg',
    body: 'The modal content that goes here.',
    footer: 'Modal footer text goes here.'
  } %}
```
