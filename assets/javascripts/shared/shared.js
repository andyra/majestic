(function() {
  $(function() {
    return $('.header').affix({
      offset: {
        top: $('.main').position().top
      }
    });
  });

}).call(this);
