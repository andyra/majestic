<?php if(!defined('KIRBY')) exit ?>

title: About
pages: false
files: true
  type: document
  sortable: true
  fields:
    title:
      label: Title
      type: text
deletable: false
fields:
  title:
    label: Title
    type:  text
  amenities:
    label: Amenities
    type: textarea
    size: large
  forms:
    label: Forms
    type:  selector
    mode:  multiple
    types:
      - document
  rates:
    label: Rates
    type: structure
    entry: >
      <strong>{{heading}}</strong> {{subheading}}<br>
      {{content}}
    fields:
      heading:
        label: Heading
        type: text
        width: 1/2
      subheading:
        label: Subheading
        type: text
        width: 1/2
      content:
        label: Content
        type: textarea

  formCaption:
    label: Forms Caption
    type: text
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
