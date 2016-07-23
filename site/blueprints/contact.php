<?php if(!defined('KIRBY')) exit ?>

title: Contact
pages: false
deletable: false
files: false
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
    buttons: false
  address:
    label: Address
    type: text
    icon: map-marker
  city:
    label: City
    type: text
    width: 1/2
  state:
    label: State
    type: text
    width: 1/4
  zip:
    label: Zip
    type: text
    width: 1/4
  phone:
    label: Phone No.
    type: tel
    width: 1/2
  email:
    label: Email
    type: email
    width: 1/2
  facebook:
    label: Facebook Link
    type: text
    icon: facebook-square
    width: 1/2
  instagram:
    label: Instagram Link
    type: text
    icon: instagram
    width: 1/2
  office_hours:
    label: Office Hours
    type: structure
    entry: >
      {{days}}<br>
      {{from}}&mdash;{{to}}
    fields:
      days:
        label: Day(s)
        type: text
        icon: calendar
      from:
        label: From
        type: text
        width: 1/2
        icon: clock-o
      to:
        label: To
        type: text
        width: 1/2
        icon: clock-o
