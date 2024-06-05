# Region

A region in Drupal is a designated area on a web page where content can be displayed. These regions act as containers for various elements, such as blocks, menus, and other content modules.

## Usage

```twig
  {% include 'radix:region' with {
    attributes: create_attribute({'class': ['custom-region-class']}),
    children: rendered_region_content,
  } %}
```
