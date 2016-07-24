<?php if(!defined('KIRBY')) exit ?>

title: About
pages: false
files: true
  sortable: true
  fields:
    caption:
      label: Caption
      type: text
deletable: false
fields:
  title:
    label: Title
    type:  text
  about:
    label: Content
    type: structure
    modalsize: large
    entry: >
      <strong>{{heading}}</strong><br><br>
      {{text}}<br><br>
      {{gallery}}
    fields:
      heading:
        label: Heading
        type: text
      text:
        label: Text
        type: textarea
      gallery:
        label: Gallery
        type:  selector
        mode:  multiple
        types:
          - image
      <!-- gallery_layout:
        label: Gallery Layout
        type: text
        help: Type a number of images you want on each row, followed by a comma. For instance, typing "3,1,2" means the first row has 3 images, the second row has 1 image, and the third row has 2 images. Make sure the total number equals the number of images you have selecte -->d above (example—3+1+2 = 6 images).
