<?php if(!defined('KIRBY')) exit ?>

title: Calendar
pages: false
files: false
deletable: false
fields:
  title:
    label: Title
    type: text
  happy_hours:
    label: Happy Hours
    type: textarea
  events:
    label: Events
    type: structure
    modalsize: large
    entry: >
      <strong>{{title}}</strong><br />
      {{date}} | {{start}}<br>
    fields:
      title:
        label: Title
      date:
        label: Date
        type:  date
        required: true
        format: MM/DD/YYYY
        width: 1/3
      start:
        label: Start
        type: time
        format: 12
        interval: 30
        placeholder: End Time
        width: 1/3
      end:
        label: End
        type: time
        format: 12
        interval: 30
        placeholder: End Time
        width: 1/3
      description:
        label: Description
        type: textarea
        buttons:
          - bold
          - italic
          - link
