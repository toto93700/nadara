# Details

Details tag that can be used to show and hide content.

## Usage

```twig
{% include 'radix:details' with {
  title: 'More Information',
  description: 'Additional details about the topic can be found here.',
  children: 'Content that provides more in-depth information about the subject matter.',
  value: 'Some important value',
  required: true,
  errors: 'There was an error processing this section.',
  attributes: create_attribute({'id': 'unique-details-id'}),
  summary_attributes: create_attribute({'class': ['text-success']}),
  content_attributes: create_attribute()
} %}
```
