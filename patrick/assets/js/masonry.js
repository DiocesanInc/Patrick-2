jQuery(document).ready(function ($) {
  $(window).bind("load", function () {
    const $grid = $(".ministry-container.taxonomy-container").masonry({
      itemSelector: ".teaser-box",
      gutter: 40,
    });
  });

  // const $grid2 = $(
  //   ".mass-times-container.grid-container"
  // ).masonry({
  //   itemSelector: ".teaser-box",
  //   gutter: 40,
  // });
});
