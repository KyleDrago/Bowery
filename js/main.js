'use strict';

/* global document */

var dddMainNav = {
  hamburgerButton: document.getElementById('hamburger'),
  dropdownMenu: document.getElementById('menu-main-nav'),
  subMenuButton: document.getElementsByClassName('sub-menu-button'),
  subMenuButtonSetup: function () {
    this.nextElementSibling.classList.toggle('hidden-block');
  },
  hamburgerButtonSetup: function () {
    dddMainNav.hamburgerButton.classList.toggle('is-active');
    dddMainNav.dropdownMenu.classList.toggle('hidden');
  },
  init: function () {
    let i;
    dddMainNav.hamburgerButton.addEventListener('mouseup', dddMainNav.hamburgerButtonSetup);
    for (i = 0; i < dddMainNav.subMenuButton.length; i += 1) {
      dddMainNav.subMenuButton[i].addEventListener('mouseup', dddMainNav.subMenuButtonSetup);
    }
  },
};

dddMainNav.init();
