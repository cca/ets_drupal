// implement custom functions using bootstrap-toolkit.js
(function($, document, window, viewport){

    // make drop-down nav flush left for collapsed menu
    function resizeNavigation() {

        var $navbar = $('.navbar-collapse');

        if (viewport.is('xs') || viewport.is('sm')) {
          $navbar.removeClass('pull-right');
        }
        else {
          $navbar.addClass('pull-right');
        }
    }
  
  

  // Executes once whole document has been loaded
  $(document).ready(function() {

        resizeNavigation();

  });

 
  // Executes each time window size changes
  $(window).bind('resize', function() {
      viewport.changed(function(){

        resizeNavigation();

      });
  });
  
})(jQuery, document, window, ResponsiveBootstrapToolkit);
