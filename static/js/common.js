(function () {

  const body   = $('body');
  const header = $('header');

  function isMenuVisible () {
    return header.hasClass('opened-menu');
  }

  function toggleMenuVisibility () {
    header.toggleClass('menu--opened');
  }

  function hasContext (selector, selector) {
    return selector.closest(selector);
  }

  $(document).ready(function () {
    // toggle menu visibility when hamburger gets a click
    header.find('#hamburger').on('click', toggleMenuVisibility);

    // handle a global click
    $(document).on('click', function (e) {
    });
  });

})();