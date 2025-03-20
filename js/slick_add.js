jQuery(document).ready(function(){
  jQuery('.slider').slick({
      autoplay:true,
      autoplaySpeed:3000,
      lazyLoad: 'progressive',
      prevArrow: `<img 
        style="transform: scale(-1, 1); position: absolute; left: 28px; top: 45%; z-index: 1; cursor: pointer;" 
        src="/wp-content/themes/su-7/img/slider-arrow.svg"
        />`,
      nextArrow: `<img
        style="position: absolute; right: 28px; top: 45%; z-index: 1; cursor: pointer;" 
        src="/wp-content/themes/su-7/img/slider-arrow.svg"
        />`
  });
});
