const mapHidden = document.querySelector('.js_mapanalyst_hidden');
const mapBtn = document.querySelector('.js_mapanalyst_btn');
const mapBtnIcon = document.querySelector('.js_mapanalyst_icon');

mapBtn.addEventListener('click', showMapHidden);
const btnText = {
  close: 'More',
  open: 'Close',
}
const iconUrl = {
  close: `/img/down-arrow.png`,
  open: `/img/up-arrow.png`,
}
const path = mapBtnIcon.getAttribute('src');
mapBtnIcon.setAttribute('src', `${path}${iconUrl.close}`);

function showMapHidden() {
  if (!mapBtn.classList.contains('mapanalyst_block__btn--invisible')) {
    mapHidden.style.maxHeight = mapHidden.scrollHeight + 'px';
    mapBtn.classList.add('mapanalyst_block__btn--invisible');
    mapBtn.querySelector('span').textContent = `${btnText.open}`;
    // console.log(mapBtnIcon.getAttribute('src'));
    mapBtnIcon.setAttribute('src', `${path}${iconUrl.open}`)
  } else {
    mapHidden.style.maxHeight = '0px';
    mapBtn.classList.remove('mapanalyst_block__btn--invisible');
    mapBtn.querySelector('span').textContent = `${btnText.close}`
    mapBtnIcon.setAttribute('src', `${path}${iconUrl.close}`)
  }
}