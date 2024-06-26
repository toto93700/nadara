# Image

Image component with responsive behavior for the system image.

Images in Bootstrap are made responsive with `.img-fluid`. This applies
`max-width: 100%;` and `height: auto;` to the image so that it scales
with the parent width.

## Bootstrap Documentation

https://getbootstrap.com/docs/5.3/content/images

## Available Properties:

#### Aligning images (`align`):

(optional) Align images with the helper float classes or text alignment classes.
block-level images can be centered using the .mx-auto margin utility class.
options (`start`, `center`, `end`)

#### Responsive image (`responsive`):

(optional) Images in Bootstrap are made responsive with `.img-fluid`.
This applies max-width with 100% and height with auto to the image so that
it scales with the parent width.

#### Image thumbnails (`thumbnails`):

(optional) In addition to Bootstrap border-radius utilities, you can use
`.img-thumbnail` to give an image a rounded 1px border appearance.

#### Rounded image (`rounded`):

(optional) Rounded image

#### Utility Classes (`body_utility_classes`):

(optional) This property contains an array of utility classes that can be used to
add extra Bootstrap utility classes or custom classes to this component.

## Examples

**Example #1:** Default system image

```twig
  {% include 'radix:image' %}
```

**Example #2:** Use the Image component with a responsive image

```twig
  {% include 'radix:image' with {
      responsive: true
    }
  %}
```

**Example #3:** Use the Image component with aligned center, rounded, and thumbnails

```twig
  {% include 'radix:image' with {
      align: 'center',
      responsive: true,
      rounded: true,
      thumbnails: true,
    }
  %}
```
