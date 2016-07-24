$ ->

  # Sticky header
  # ----------------------------------------------------------------------------
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

  # Lightbox galleries
  # ----------------------------------------------------------------------------

  $(".gallery--link").fluidbox(
    resize: true
    preload: true
    touch: true
    animated: true
    padding: 20
    templates:
      inner: '<div id="fluidbox-inner" class="gallery--inner"></div>'
      outer: '<div id="fluidbox-outer" class="gallery--outer"></div>'
      overlay: '<div id="fluidbox-overlay" class="gallery--overlay"></div>'
      loading: '<div id="fluidbox-loading" class="gallery--loader"></div>'
      title: '<div id="fluidbox-title" class="gallery--title"></div>'
      buttons:
        close: '<div id="fluidbox-btn-close" class="gallery--close">&times;</div>',
        next: '<div id="fluidbox-btn-next" class="gallery--nav gallery--next"></div>'
        prev: '<div id="fluidbox-btn-prev" class="gallery--nav gallery--prev"></div>'
  )
