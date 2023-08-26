const hiddenBox = document.querySelector('.js_hero-section_box');
hiddenBox.addEventListener('click', toggleHiddenBox);
// hiddenBox.addEventListener('mouseenter', toggleHiddenBox);

let hiddenToggle = true;

function toggleHiddenBox() {
  console.log(1);
  if (hiddenToggle) {
    hiddenBox.classList.add('hero-section_box--active');
    hiddenToggle = false;
    return;
  } else {
    hiddenBox.classList.remove('hero-section_box--active');
    hiddenToggle = true;
  }
}