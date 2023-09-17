$(document).ready(function() {
    $('.list-item a').on('click', function(e) {
        $('.list-item a').removeClass('active-item');
        $(this).addClass('active-item');
    });
    
});

   