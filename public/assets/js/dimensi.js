$(function() {
    $('.accordion').find('.accordion__title').click(function(){
        // Adds active class
        $(this).toggleClass('active');
        // Expand or collapse this panel
        $(this).next().slideToggle('fast');
        // Removes active class from other titles
        $('.accordion__title').not($(this)).removeClass('active');
    });
});
