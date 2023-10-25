jQuery(window).on('scroll', function () {
    let height = jQuery(window).scrollTop();
    if (height > 200) {
        jQuery('#scroll2top').fadeIn();
    } else {
        jQuery('#scroll2top').fadeOut();
    }
});