# Figure

A figure is a visual representation of data, such as a chart or a graph or an image wrapper.

## Usage

```twig
{% embed 'radix:figure' with {
  figure_utility_classes: ['my-3'],
  align: 'center',
  caption: 'A caption describing the context of the image.',
  attributes: create_attribute({'class': ['additional-attributes']})
} %}
  {% block image %}
    <img src="path/to/image.jpg" alt="Descriptive text for the image" class="img-fluid">
  {% endblock %}
{% endembed %}
```
