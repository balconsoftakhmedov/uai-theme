
const allContentMainSlider = document.querySelectorAll('.tabs .js_tabs__section');
const allContentFiestSubslider = document.querySelectorAll('.js_subtab-tabs .tabs__section');

[ ...allContentMainSlider].forEach(content => {
    const subContentsArray = [ ...content.querySelectorAll('.tabs__section')];
    subContentsArray.forEach(subContent => {
    });
});


