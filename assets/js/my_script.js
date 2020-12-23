/**
* Template Name: BizLand - v1.1.1
* Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function($) {

    $('[data-toggle="modal"]').click(function(e) {
      e.preventDefault();
      var url = $(this).attr('href');
      if (url.indexOf('#') == 0) {
        $(url).modal('open');
      } else {
        $.get(url, function(data) {
          $('<div class="modal hide fade">' + data + '</div>').modal();
        });
      }
    });

    $(document).on('click', '.btn-ajax-resp' , function (e) {
      // write your logic
      e.preventDefault();
      var url = $(this).attr('href');
      if (url.indexOf('#') == 0) {
        $(url).modal('open');
      } else {
        $.get(url, function(data) {
          $('<div class="modal hide fade">' + data + '</div>').modal();
        });
      }
  });

})(jQuery);