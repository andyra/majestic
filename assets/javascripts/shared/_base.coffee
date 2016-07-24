$ ->
  # Sticky header
  $header = $(".header")
  headerHeight = $header.outerHeight()

  $header.headroom
    offset: headerHeight
    tolerance: 0
    classes:
      initial: "header"
      pinned: "header--pinned"
      unpinned: "header--unpinned"
      top: "header--top",
      notTop: "header--not-top",
      bottom: "header--bottom",
      notBottom: "header--not-bottom"
