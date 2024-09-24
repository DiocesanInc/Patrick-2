jQuery(document).ready(function ($) {
  $(window).bind("load", function () {
    const $grid = $(".ministry-container.taxonomy-container").masonry({
      itemSelector: ".teaser-box",
      gutter: 40,
    });
  });
  $('.ministry-container.taxonomy-container .ui-accordion').bind('accordionchange', function(event, ui) {
    $('.ministry-container.taxonomy-container').masonry();
  });
  // const $grid2 = $(
  //   ".mass-times-container.grid-container"
  // ).masonry({
  //   itemSelector: ".teaser-box",
  //   gutter: 40,
  // });
});
