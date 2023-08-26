const allButtons = document.querySelectorAll('.js_services_btn');
const popUpsBlock = document.querySelector('.js_pop-ups');
const allPopUps = document.querySelectorAll('.js_pop-up');
const allCloseBtns = document.querySelectorAll('.js_pop-up_close');
const newsBtns = document.querySelectorAll('.js_news-btn');
const closeNewsBtn = document.querySelector('.js_news-pop-up_close');
const NewsPopUp = document.querySelector('.js_news_pop-up');
const menu = document.querySelector('.js_mobile-menu_wrapper')
const mobileMenuSec = document.querySelector('.js_mobile-menu');
const menuBtnSec = document.querySelector('.js_mobile-menu_btn');
newsBtns.forEach(btn => {
  btn.addEventListener('click', openNewsPopUp);
});
closeNewsBtn.addEventListener('click', closeNewsPopUp);
allButtons.forEach(btn => {
  btn.addEventListener('click', openPopUp);
});
allCloseBtns.forEach(btn => {
  btn.addEventListener('click', closePopUp);
});

function toggleMobileMenu() {
  if (!mobileMenuSec.classList.contains('mobile-menu--active')) {
    mobileMenuSec.classList.add('mobile-menu--active');
    menuBtnSec.classList.add('mobile-menu_btn--active');
    document.body.classList.add('hidden');
    menu.classList.add('mobile-menu_wrapper--active');
  } else {
    mobileMenuSec.classList.remove('mobile-menu--active');
    menuBtnSec.classList.remove('mobile-menu_btn--active');
    document.body.classList.remove('hidden');
    menu.classList.remove('mobile-menu_wrapper--active');
  }
}

function openNewsPopUp() {
  if (menu && menu.classList.contains('mobile-menu_wrapper--active')) {
    toggleMobileMenu()
  }
  window.addEventListener('keydown', handleKeyPressNews);
  document.body.classList.add('hidden');
  NewsPopUp.classList.add('news_pop-up--visible');
}

function closeNewsPopUp() {
  window.removeEventListener('keydown', handleKeyPressNews);
  document.body.classList.remove('hidden');
  NewsPopUp.classList.remove('news_pop-up--visible');
}

function openPopUp(e) {
  console.log('open');
  document.body.classList.add('hidden');
  window.addEventListener('keydown', handleKeyPress);
  const clickedBtn = e.currentTarget.getAttribute('id');
  allPopUps.forEach(popUp => {
    popUp.classList.remove('pop-ups--visible');
    if (popUp.getAttribute('data-id') === clickedBtn) {
      popUpsBlock.classList.add('pop-ups--visible');
      popUp.classList.add('pop-up--visible');

      // if(document.querySelector(`.tabs-${popUp.getAttribute('data-id')}`)) {
        new TabsSlider(`.tabs-${popUp.getAttribute('data-id')}`, {
          animate: false,
          autoHeight: true,
          slide: 0,
          draggable: false,
          underline: false,
          duration: 500,
          easing: 'cubic-bezier(0.0, 0.0, 0.2, 1)'
        });
      // }
   
    }
  });
}

function closePopUp() {
  popUpsBlock.scrollTo(0, 0);
  document.body.classList.remove('hidden');
  window.removeEventListener('keydown', handleKeyPress);
  allPopUps.forEach(popUp => {
    popUp.classList.remove('pop-up--visible');
    const parent = findAncestor(popUp, 'js_pop-ups');
    parent.classList.remove('pop-ups--visible');
  });
}

function handleKeyPressNews(e) {
  if (e.code !== 'Escape') {
    return
  }
  closeNewsPopUp();
}

function handleKeyPress(e) {
  if (e.code !== 'Escape') {
    return
  }
  closePopUp();
}


function findAncestor(el, cls) {
  while ((el = el.parentElement) && !el.classList.contains(cls));
  return el;
}