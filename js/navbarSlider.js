const change=$('.side-bar');
const x=$('.close-btn');

const myElement = $('.menu-btn');
myElement.on('click', function() {
console.log('Element clicked!');
change.addClass('active');
});

x.on('click', function() {
console.log('close navbar!');
change.removeClass('active');
});



$(document).ready(function()
{
    //jquery for toggling
    $('.sub-btn').click(function()
    {
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.dropdown').toggleClass('rotate')
    });



});