
// jQuery code
// Prevent closing from click inside dropdown
$(document).on('click', '.dropdown-menu', function (e) {
    e.stopPropagation();
});

// A $( document ).ready() block.
$( document ).ready(function() {


    $("#mobile-menu-icon").on('click', function(){

        // lets close mobile menu
        if($('#navbarSupportedContent').hasClass('show'))
        {
            closeMobileMenu();
        }

        // lets open mobile menu
        else
        {
            closeNavbarPhone();
            openMobileMenu();
        }

    });

    $("#mobile-phone-icon").on('click', function(){

        // lets close mobile navbarPhone
        if($('#navbarPhone').hasClass('show'))
        {
            closeNavbarPhone();
        }

        // lets open mobile navbarPhone
        else
        {
            closeMobileMenu();
            openNavbarPhone();
        }

    });


});

function openMobileMenu()
{
    $('#navbarSupportedContent').addClass('show');
    

    $('body').addClass('body-no-scroll');
    $('#header__navbar').addClass('fixed-bottom-null');
    $('#header__navbar').addClass('fixed');
}

function closeMobileMenu()
{
    $('#navbarSupportedContent').removeClass('show');

    $('body').removeClass('body-no-scroll');
    $('#header__navbar').removeClass('fixed-bottom-null');
}

function openNavbarPhone()
{
    $('#navbarPhone').addClass('show');
}

function closeNavbarPhone()
{
    $('#navbarPhone').removeClass('show');
}