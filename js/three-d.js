const threeDBtn = document.querySelector('.js_mapanalyst-btn');
const iframe = document.querySelector('.iframe-box');
const iframeClose = document.querySelector('.js_iframe-close');

threeDBtn.addEventListener('click', zoomInModel);
iframeClose.addEventListener('click', zoomOutModel);

function zoomInModel() {
    iframe.classList.add('zoomIn');
    window.addEventListener('keydown', handleKeyPress);
}

function zoomOutModel() {
    iframe.classList.remove('zoomIn');
    window.removeEventListener('keydown', handleKeyPress);
}

function handleKeyPress(e) {
    if (e.code !== 'Escape') {
      return
    }
    zoomOutModel()
}


const mapanalystBlock = document.querySelector('.js_mapanalyst_block__box');

function iOS() {
    return [
      'iPad Simulator',
      'iPhone Simulator',
      'iPod Simulator',
      'iPad',
      'iPhone',
      'iPod'
    ].includes(navigator.platform)
    || (navigator.userAgent.includes("Mac") && "ontouchend" in document)
}

if(iOS()) {
    mapanalystBlock.classList.add('mapanalyst_block__box--invisible')
} 
