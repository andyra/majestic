<?php if(!defined('KIRBY')) exit ?>

title: About
pages: false
files: true
  type: image
  sortable: true
deletable: false
fields:
  title:
    label: Title
    type:  text
  faqs:
    label: FAQs
    type: structure
    modalsize: large
    entry: >
      <strong>{{question}}</strong><br>
      {{answer}}
    fields:
      question:
        label: Heading
        type: text
      answer:
        label: Text
        type: textarea
