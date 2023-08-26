const allBlocks = document.querySelectorAll('.js_acc-btn');
const allHiddenBlocks = document.querySelectorAll('.js_hidden-block');
const allVisibleText = document.querySelectorAll('.js-accordion_box__text');
// const allInvisibleText = document.querySelectorAll('.js_accordion-text');
const allProjectBlocks = document.querySelectorAll('.js_project');

allBlocks.forEach(block => {
  block.addEventListener('click', collapseBlock);
  block.classList.add('js_block-close')
});
allVisibleText.forEach(text => {
  const currentText = text.textContent;
  const parent = findAncestor(text, 'js_project');
  // parent.querySelector('.js_accordion-text').textContent = `${currentText.substring(0, 200)}...`;
});

function collapseBlock(e) {
  const clickedId = e.currentTarget.getAttribute('id');
  if (!e.currentTarget.classList.contains('js_block-close')) {
    e.currentTarget.classList.add('js_block-close');
    e.currentTarget.nextElementSibling.classList.remove('accordion_box-open');
    e.currentTarget.nextElementSibling.querySelector('.js_hidden-block').style.maxHeight = '0px';
    return;
  }
  allBlocks.forEach(block => {
    block.classList.add('js_block-close');
    block.nextElementSibling.classList.remove('accordion_box-open');
  });
  allHiddenBlocks.forEach(block => {
    block.style.maxHeight = 0;
    if (block.getAttribute('data-id') === clickedId) {
		
	  const currentBlock = block;
	  const swiperWrapper = block.querySelector('.swiper-wrapper');
	  let allSlids = block.querySelectorAll('.swiper-slide');
	  allSlids = [...allSlids];
	  let maxHeight = 0; 
	  allSlids.forEach(slide => {
		  if(slide.scrollHeight > maxHeight) {
			  maxHeight = slide.scrollHeight;
		  }
       });
	   const tm = setTimeout(() => {
       swiperWrapper.style.height = `${allSlids[0].scrollHeight}px`;
       clearTimeout(tm);  
       }, 100);
      block.style.maxHeight = `${maxHeight}px`;
      const activeBox = findAncestor(block, 'accordion_box');
      activeBox.classList.add('accordion_box-open');
    }
  });
  e.currentTarget.classList.remove('js_block-close');
}



function findAncestor(el, cls) {
  while ((el = el.parentElement) && !el.classList.contains(cls));
  return el;
}