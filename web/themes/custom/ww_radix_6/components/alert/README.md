# Alert

Alerts are available for any length of text, as well as an optional close button. For proper styling, use one of the eight required contextual classes (e.g., .alert-success).

## Bootstrap documentation

https://getbootstrap.com/docs/5.3/components/alerts/

## Usage

```twig
    {% include 'radix:alert' with {
      type: 'danger',
      heading: 'Important Notice!',
      dismissible: true,
      alert_utility_classes: ['mb-4', 'shadow-sm'],
      content: 'This is an important alert message. Please pay attention!'
    } %}
```
