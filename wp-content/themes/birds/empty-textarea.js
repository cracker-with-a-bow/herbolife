document.addEventListener('DOMContentLoaded', function () {

  //burger
  const siteNavigation = document.getElementById('site-navigation');

  const menuUL = siteNavigation.getElementsByTagName('ul')[0];
  menuUL.setAttribute('class', 'gg');
  links = menuUL.getElementsByTagName('a');
  let menuBtn = document.querySelector('.menu-btn');
  menuBtn.addEventListener('click', function () {
    menuBtn.classList.toggle('active');

    menuUL.classList.toggle('activeMenu');
    document.body.classList.toggle('stop-scroll');

  })


})

