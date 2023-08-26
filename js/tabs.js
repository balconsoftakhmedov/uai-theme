const allSubTabs = document.querySelectorAll('.tab');
const allRadioInputs = document.querySelectorAll('.radio');
const allPanels = document.querySelectorAll('.panel');

const allSubTabsArray = [ ...allSubTabs];
const allRadioInputsArray = [ ...allRadioInputs];
const allPanelsArray = [ ...allPanels];

allSubTabsArray.forEach(tab => {
  tab.addEventListener('click', sliderInitialization)
});

allRadioInputsArray.forEach(item => {
  if(item.checked) {
    const id = item.getAttribute('id');
    set(id);
  }
});

function sliderInitialization(e) {
  const id = e.currentTarget.getAttribute('for');
  set(id);
}

function set(id) {
	console.log('go')
  allPanelsArray.forEach(currentItem => {
    if(currentItem.getAttribute('id') === `${id}-panel`) {
      const slider = currentItem.querySelector('.swiper-container');
      const nextBtn = slider.querySelector('.swiper-button-next');
      const prevBtn = slider.querySelector('.swiper-button-prev');
      const swiperClass = `swiper-container-subtab--${id}`;
	
		
      if(document.querySelector(`.${swiperClass}`)) {
        return;
      }
      const nextBtnClass = `swiper-button-next-subtab--${id}`;
      const prevBtnClass = `swiper-button-prev-subtab--${id}`;
      slider.classList.add(swiperClass);
      nextBtn.classList.add(nextBtnClass);
      prevBtn.classList.add(prevBtnClass);
      
      const tm = setTimeout(() => {
        new Swiper(`.swiper-container.${swiperClass}`, {
			effect: "fade",
          autoHeight: true,
          observer: true,
          observeParents: true,
          navigation: {
            nextEl: `.swiper-button-next.${nextBtnClass}`,
            prevEl: `.swiper-button-prev.${prevBtnClass}`,
          },
          });
          clearTimeout(tm)
      }, 100)
      
    }
  });
}



