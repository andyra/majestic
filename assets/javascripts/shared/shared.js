(function() {
  $(function() {
    var $header, headerHeight, subnavLink;
    $header = $(".header");
    headerHeight = $header.outerHeight();
    $header.headroom({
      offset: headerHeight,
      tolerance: 0,
      classes: {
        initial: "header",
        pinned: "header--pinned",
        unpinned: "header--unpinned",
        top: "header--top",
        notTop: "header--not-top",
        bottom: "header--bottom",
        notBottom: "header--not-bottom"
      }
    });
    $(".gallery__link").fluidbox({
      resize: true,
      preload: true,
      touch: true,
      animated: true,
      padding: 20,
      templates: {
        inner: '<div id="fluidbox-inner" class="gallery--inner"></div>',
        outer: '<div id="fluidbox-outer" class="gallery--outer"></div>',
        overlay: '<div id="fluidbox-overlay" class="gallery--overlay"></div>',
        loading: '<div id="fluidbox-loading" class="gallery--loader"></div>',
        title: '<div id="fluidbox-title" class="gallery--title"></div>',
        buttons: {
          close: '<div id="fluidbox-btn-close" class="gallery--close">&times;</div>',
          next: '<div id="fluidbox-btn-next" class="gallery--nav gallery--next"></div>',
          prev: '<div id="fluidbox-btn-prev" class="gallery--nav gallery--prev"></div>'
        }
      }
    });
    subnavLink = $('a[href^="#"');
    return subnavLink.click(function() {
      var target;
      target = void 0;
      if (location.pathname.replace(/^\//, "") === this.pathname.replace(/^\//, "") && location.hostname === this.hostname) {
        target = $(this.hash);
        target = (target.length ? target : $("[name=" + this.hash.slice(1) + "]"));
        if (target.length) {
          $("html,body").animate({
            scrollTop: target.offset().top - 55
          }, 500);
          return false;
        }
      }
    });
  });

  $(document).keydown(function(e) {
    if (e.keyCode === 27) {
      return $(".gallery__link").fluidbox('close');
    }
  });

}).call(this);
