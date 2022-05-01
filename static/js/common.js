(function () {

  const header = $('header');

  function isMenuVisible () {
    return header.hasClass('opened-menu');
  }

  function toggleMenuVisibility () {
    header.toggleClass('opened-menu');
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