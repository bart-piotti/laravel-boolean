require('./bootstrap');

// if ($('.header_right a').attr('data-page').toLowerCase() == $('title').attr('data-page').toLowerCase()) {
//     $(this).addClass('active')
//     console.log('ok');
// }

$('.header_right a').each(function(){
    if ($(this).attr('data-page').toLowerCase() == $('title').attr('data-page').toLowerCase()) {
        $('.header_right a').removeClass('active')
        $(this).addClass('active')
    }
})
