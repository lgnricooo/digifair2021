
(function($) {
  'use strict';
  $(function() {
    var body = $('body');
    var mainWrapper = $('.main-wrapper');
    var footer = $('footer');
    var sidebar = $('.sidebar');
    var navbar = $('.navbar').not('.top-navbar');

    // Buy Now button. 
    

    // Enable feather-icons with SVG markup
    feather.replace();

    // initializing bootstrap tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // initialize clipboard plugin
    if ($('.btn-clipboard').length) {
      var clipboard = new ClipboardJS('.btn-clipboard');

      // Enabling tooltip to all clipboard buttons
      $('.btn-clipboard').attr('data-toggle', 'tooltip').attr('title', 'Copy to clipboard');

      // initializing bootstrap tooltip
      $('[data-toggle="tooltip"]').tooltip();

      // initially hide btn-clipboard and show after copy
      clipboard.on('success', function(e) {
        e.trigger.classList.value = 'btn btn-clipboard btn-current'
        $('.btn-current').tooltip('hide');
        e.trigger.dataset.originalTitle = 'Copied';
        $('.btn-current').tooltip('show');
        setTimeout(function(){
            $('.btn-current').tooltip('hide');
            e.trigger.dataset.originalTitle = 'Copy to clipboard';
            e.trigger.classList.value = 'btn btn-clipboard'
        },1000);
        e.clearSelection();
      });
    }


    // Applying perfect-scrollbar 
    if ($('.sidebar .sidebar-body').length) {
      const sidebarBodyScroll = new PerfectScrollbar('.sidebar-body');
    }
    if ($('.content-nav-wrapper').length) {
      const contentNavWrapper = new PerfectScrollbar('.content-nav-wrapper');
    }

    // Sidebar toggle to sidebar-folded
    


    // Settings sidebar toggle
    


    // sidebar-folded on large devices
    


    //  open sidebar-folded when hover
    

    //Close other submenu in sidebar on opening any
    



  });
})(jQuery);