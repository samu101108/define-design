(function () {

  const body   = $('body');
  const header = $('#header');

  function isMenuVisible () {
    return header.hasClass('menu--opened');
  }

  function toggleMenuVisibility () {
    header.toggleClass('menu--opened');

    body.toggleClass('no-scroll', isMenuVisible());
  }

  function hasContext (context, selector) {
    return context.closest(selector).length;
  }

  $(document).ready(function () {
    // toggle menu visibility when hamburger gets a click
    header.find('#hamburger').on('click', toggleMenuVisibility);

    // handle a global click
    $(document).on('click', function (e) {
      if (isMenuVisible() && !hasContext($(e.target), '#header')) {
        toggleMenuVisibility();
      }
    });
  });

})();