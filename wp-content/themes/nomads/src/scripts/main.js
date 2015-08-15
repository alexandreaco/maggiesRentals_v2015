
(function($) {

  $(document).ready(function() {

    // Flickity
    $('.main-gallery').flickity({
      // options
      wrapAround: true,
      cellAlign: 'left',
      contain: true,
      imagesLoaded: true,
      setGallerySize: false
    })

    // Isotope
    $('.home-grid').isotope({

      // options
      itemSelector: '.grid-item',
      layoutMode: 'cellsByRow',
      getSortData: {
        category: '[data-category]'
      },
      sortBy: 'category'

    })
  })


  // filter items on button click
  $('.filter-controls').on( 'click', 'button', function() {
    var filterValue = $(this).attr('data-filter');
    $('.home-grid').isotope({ filter: filterValue });
  });

  //console.log('hello world')


})(jQuery);
