jQuery(function ($) {
  $(".mass-times-list .more").on("click", function () {
    const dropdownToggle = $(this);
    const dropdownId = dropdownToggle.attr("data-dropdown");
    const dropdownContainer = $(
      `.mass-times-dropdown-container[data-dropdown='${dropdownId}']`
    );

    // Close all other dropdowns before opening the current one
    $(".mass-times-dropdown-container").removeClass("active");
    dropdownContainer.addClass("active");
  });

  $(document).on("click", function (event) {
    const target = $(event.target);
    const isDropdownToggle = target.closest(".more").length;
    const isDropdownContainer = target.closest(
      ".mass-times-dropdown-container"
    ).length;

    if (!isDropdownToggle && !isDropdownContainer) {
      $(".mass-times-dropdown-container").removeClass("active");
    }
  });

  $(document).on("keydown", function (event) {
    if (event.key === "Escape") {
      $(".mass-times-dropdown-container").removeClass("active");
    }
  });
});
