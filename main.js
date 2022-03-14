let navMenu = document.querySelector('.nav-menu')

let menuBtn = document.querySelector('.menu-btn')

menuBtn.addEventListener('click', () => {
    if(navMenu.classList.contains('close')){
        navMenu.classList.remove('close')
        navMenu.classList.add('open')
    }else{
        navMenu.classList.remove('open')
        navMenu.classList.add('close')
    }
})