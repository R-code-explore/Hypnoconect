//To the top BTN

jQuery(function(){
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 200 ) {
                $('#scrollUp').css('right','30px');
            } else { 
                $('#scrollUp').removeAttr( 'style' );
            }
        });
    });
});

////

//nav menu phone

const navMenuPhone = document.querySelector('.nav_menu_phone')
const navMenuBtn = document.querySelector('.nav_btn')

navMenuBtn.addEventListener('click', () => {
    if(navMenuPhone.style.display == "block"){
        navMenuPhone.style.display = "none"
    }else{
        navMenuPhone.style.display = "block"
    }
})

if(window.innerWidth > 1050){
    navMenuPhone.style.display = "none"
}