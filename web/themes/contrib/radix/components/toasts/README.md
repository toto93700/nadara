# Toast

Push notifications to your visitors with a toast, a lightweight and easily customizable alert message.
Toasts are lightweight notifications designed to mimic the push notifications that have been popularized by mobile and desktop operating systems. They’re built with flexbox, so they’re easy to align and position.

## Bootstrap Documentation

https://getbootstrap.com/docs/5.3/components/toasts/

## Considerations:

- Toasts are opt-in for performance reasons, so **you must initialize them yourself**.
- Toasts will automatically hide if you do not specify autohide: false.

## Usage

```twig
  {% include 'radix:toasts' with {
    with_wrapper: true,
    with_container: true,
    container_classes: 'toast-container position-fixed bottom-0 end-0 p-3',
    toasts: [
      {
        header: {
          title: 'Radix Toast Title',
          subtitle: '11 mins ago',
          classes: 'text-primary bg-light'
        },
        body: 'This is the first toast message.',
        role: 'alert',
        autohide: false,
        with_body_wrapper: false,
        with_close: true,
        delay: 10000,
        attributes: {
          'class': ['extra-toast-class'],
          'id': 'liveToast'
        },
        additional_buttons: [
          {
            text: 'Action 1',
            color: 'secondary',
            outline: true,
            button_utility_classes: ['me-2'],
          },
          {
            text: 'Action 2',
            color: 'success',
            outline: false,
            button_utility_classes: ['me-2'],
          }
        ]
      }
    ],
  } %}
```

You should also trigger the toasts with JS like so:

```js
const toastTrigger = document.getElementById('liveToastBtn');
const toastLiveExample = document.getElementById('liveToast');

if (toastTrigger) {
	const toastBootstrap = Toast.getOrCreateInstance(toastLiveExample);
	toastTrigger.addEventListener('click', () => {
		toastBootstrap.show();
	});
}
```
