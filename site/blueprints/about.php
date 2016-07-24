<?php if(!defined('KIRBY')) exit ?>

title: About
pages: false
files: true
  sortable: true
  fields:
    caption:
      label: Caption
      type: textarea
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
        type: textarea
        help: Make sure you have added the images to the page on the left, then type the name of the images in this field, one per line like so:<br>image-one.jpg<br>image-two.jpg<br>image-three.jpg
