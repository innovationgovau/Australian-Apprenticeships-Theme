(function ($) {
  Drupal.behaviors.australianApprenticeshipsOffCanvas = {
    attach: function () {
      var showSidebar = function() {
        $('body').toggleClass("active");
      };
      $(window).resize(function() {
        var offCanvas = $('.off-canvas-nav').css('display');
        if (offCanvas === 'block') {
          $('body').removeClass("active");
        }
      });
      $(document).ready(function() {
        $('.off-canvas-button').click(function(e) {
          e.preventDefault();
          showSidebar();
        });
      });
    }
  };
})(jQuery);
