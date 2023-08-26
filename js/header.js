'use strict';
const menuBtn = document.querySelector('.js_mobile-menu_btn');
const mobileMenu = document.querySelector('.js_mobile-menu');
const mobileMenuList = document.querySelector('.js_mobile-menu_list');
const menuMainList = document.querySelector('.js_mobile-main-list');
const allSections = document.querySelectorAll('.js_section');
const header = document.querySelector('.js_header');
const allMobileMenuLinks = document.querySelectorAll('.js_mobile-menu_link');
const allMenuLinks = document.querySelectorAll('.js_menu_link');
const allHighlight = document.querySelectorAll('.js_highlight');
const logoLinks = document.querySelectorAll('.js_logo_link');

// console.log('logoLinks: ', logoLinks)

menuBtn.addEventListener('click', toggleMobileMenu);
logoLinks.forEach(link => {
  link.addEventListener('click', (e) => {
    console.log('click');
    const section = document.querySelector('#home');
    scrollTo({
      section: section,
      top: 0
    });
  })
})
function toggleMobileMenu() {
  if (!mobileMenu.classList.contains('mobile-menu--active')) {
    mobileMenu.classList.add('mobile-menu--active');
    menuBtn.classList.add('mobile-menu_btn--active');
    document.body.classList.add('hidden');
  } else {
    mobileMenu.classList.remove('mobile-menu--active');
    menuBtn.classList.remove('mobile-menu_btn--active');
    document.body.classList.remove('hidden');
  }
}


mobileMenuList.addEventListener('click', (e) => {
  if (e.target.classList.contains('js_mobile-menu_link')) {
    const linkDataId = e.target.getAttribute('data-id');
    allSections.forEach(section => {
      if (section.getAttribute('id') === linkDataId) {
        const top = header.offsetHeight;
        scrollTo({
          section,
          top
        });
      }
    })
    toggleMobileMenu();
  }
});

menuMainList.addEventListener('click', (e) => {
  if (e.target.classList.contains('js_menu_link')) {
    const linkDataId = e.target.getAttribute('data-id');
    allSections.forEach(section => {
      if (section.getAttribute('id') === linkDataId) {
        const top = header.offsetHeight;
        scrollTo({
          section,
          top
        });
      }
    })
  }
});

//smooth scroll
function scrollTo({
  section,
  top
}) {
  const height = section.offsetTop - top;
  window.scroll({
    left: 0,
    top: height,
    behavior: 'smooth',
  })
}


//add current link active class
const onEntry = (entries) => {

  entries.forEach(entry => {
    if (entry.isIntersecting) {
      allHighlight.forEach(item => {
        if (item.classList.contains('mobile-menu_link--current')) {
          item.classList.remove('mobile-menu_link--current');
        }
        if (item.getAttribute('data-id') === entry.target.getAttribute('id')) {
          item.classList.add('mobile-menu_link--current');
        }
      })
    }
  })

}
const options = {
  treshold: 0.6,
}
const observer = new IntersectionObserver(onEntry, options);
allSections.forEach(section => {
  observer.observe(section)
})