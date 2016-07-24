(function() {
  $(function() {
    var $header, headerHeight;
    $header = $(".header");
    headerHeight = $header.outerHeight();
    return $header.headroom({
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
  });

}).call(this);
