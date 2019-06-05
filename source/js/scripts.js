import Masonry from 'masonry-layout';
// import $ from 'jquery';
// import Popper from 'popper.js';

// global.Popper = Popper;
// global.jQuery = global.$ = $;

require('bootstrap');

;(function() {
  const $masonryGrid = $('.masonry-grid');

  if ($masonryGrid.length) {
    setTimeout(() => {
      var msnry = new Masonry( '.masonry-grid', {
        itemSelector: '.masonry-grid-item',
        columnWidth: 200,
        gutter: 10
      });
    }, 1000);
  }

  const $dateTimePicker = $('#datetimepicker1');

  if ($dateTimePicker.length) {
    $('#datetimepicker1').datetimepicker();
  }
})(jQuery);
