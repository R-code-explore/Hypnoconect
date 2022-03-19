

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

//Discover Btn
const discoverBtn = document.querySelector('.discover')
const closeDiscover = document.querySelector('.gg-close-o')
const discoverContent = document.querySelector('.discover-content')

function openDiscover(){
    if(discoverContent.classList.contains('close-discover')){
        discoverContent.classList.remove('close-discover')
        discoverContent.classList.add('open-discover')
    }
}

closeDiscover.addEventListener('click', () => {
    discoverContent.classList.remove('open-discover')
    discoverContent.classList.add('close-discover')
})

//info page

//let infoGlobal = document.querySelector('.info-block')

function info1Open(){
    if(document.querySelector('.info-block').classList.contains('off')){
        document.querySelector('.info-block').classList.remove('off')
        document.querySelector('.info-block').classList.add('on')

        if(document.querySelector('.horaire').classList.contains('info-content-open')){
            document.querySelector('.horaire').classList.remove('info-content-open')
            document.querySelector('.horaire').classList.add('info-content-close')
            document.querySelector('.prix').classList.remove('info-content-close')
            document.querySelector('.prix').classList.add('info-content-open')
        }else if(document.querySelector('.prix2').classList.contains('info-content-open')){
            document.querySelector('.prix2').classList.remove('info-content-open')
            document.querySelector('.prix2').classList.add('info-content-close')
            document.querySelector('.prix').classList.remove('info-content-close')
            document.querySelector('.prix').classList.add('info-content-open')
        }else{
            document.querySelector('.prix').classList.remove('info-content-close')
            document.querySelector('.prix').classList.add('info-content-open')
        }
    }else{
        if(document.querySelector('.horaire').classList.contains('info-content-open')){
            document.querySelector('.horaire').classList.remove('info-content-open')
            document.querySelector('.horaire').classList.add('info-content-close')
            document.querySelector('.prix').classList.remove('info-content-close')
            document.querySelector('.prix').classList.add('info-content-open')
        }else if(document.querySelector('.prix2').classList.contains('info-content-open')){
            document.querySelector('.prix2').classList.remove('info-content-open')
            document.querySelector('.prix2').classList.add('info-content-close')
            document.querySelector('.prix').classList.remove('info-content-close')
            document.querySelector('.prix').classList.add('info-content-open')
        }else{
            document.querySelector('.prix').classList.remove('info-content-close')
            document.querySelector('.prix').classList.add('info-content-open')
        }
    }
}

function info2Open(){
    if(document.querySelector('.info-block').classList.contains('off')){
        document.querySelector('.info-block').classList.remove('off')
        document.querySelector('.info-block').classList.add('on')

        if(document.querySelector('.prix').classList.contains('info-content-open')){
            document.querySelector('.prix').classList.remove('info-content-open')
            document.querySelector('.prix').classList.add('info-content-close')
            document.querySelector('.horaire').classList.remove('info-content-close')
            document.querySelector('.horaire').classList.add('info-content-open')
        }else if(document.querySelector('.prix2').classList.contains('info-content-open')){
            document.querySelector('.prix2').classList.remove('info-content-open')
            document.querySelector('.prix2').classList.add('info-content-close')
            document.querySelector('.horaire').classList.remove('info-content-close')
            document.querySelector('.horaire').classList.add('info-content-open')
        }else{
            document.querySelector('.horaire').classList.remove('info-content-close')
            document.querySelector('.horaire').classList.add('info-content-open')
        }
    }else{
        if(document.querySelector('.prix').classList.contains('info-content-open')){
            document.querySelector('.prix').classList.remove('info-content-open')
            document.querySelector('.prix').classList.add('info-content-close')
            document.querySelector('.horaire').classList.remove('info-content-close')
            document.querySelector('.horaire').classList.add('info-content-open')
        }else if(document.querySelector('.prix2').classList.contains('info-content-open')){
            document.querySelector('.prix2').classList.remove('info-content-open')
            document.querySelector('.prix2').classList.add('info-content-close')
            document.querySelector('.horaire').classList.remove('info-content-close')
            document.querySelector('.horaire').classList.add('info-content-open')
        }else{
            document.querySelector('.horaire').classList.remove('info-content-close')
            document.querySelector('.horaire').classList.add('info-content-open')
        }
    }
}

function info3Open(){
    if(document.querySelector('.info-block').classList.contains('off')){
        document.querySelector('.info-block').classList.remove('off')
        document.querySelector('.info-block').classList.add('on')

        if(document.querySelector('.horaire').classList.contains('info-content-open')){
            document.querySelector('.horaire').classList.remove('info-content-open')
            document.querySelector('.horaire').classList.add('info-content-close')
            document.querySelector('.prix2').classList.remove('info-content-close')
            document.querySelector('.prix2').classList.add('info-content-open')
        }else if(document.querySelector('.prix').classList.contains('info-content-open')){
            document.querySelector('.prix').classList.remove('info-content-open')
            document.querySelector('.prix').classList.add('info-content-close')
            document.querySelector('.prix2').classList.remove('info-content-close')
            document.querySelector('.prix2').classList.add('info-content-open')
        }else{
            document.querySelector('.prix2').classList.remove('info-content-close')
            document.querySelector('.prix2').classList.add('info-content-open')
        }
    }else{
        if(document.querySelector('.horaire').classList.contains('info-content-open')){
            document.querySelector('.horaire').classList.remove('info-content-open')
            document.querySelector('.horaire').classList.add('info-content-close')
            document.querySelector('.prix2').classList.remove('info-content-close')
            document.querySelector('.prix2').classList.add('info-content-open')
        }else if(document.querySelector('.prix').classList.contains('info-content-open')){
            document.querySelector('.prix').classList.remove('info-content-open')
            document.querySelector('.prix').classList.add('info-content-close')
            document.querySelector('.prix2').classList.remove('info-content-close')
            document.querySelector('.prix2').classList.add('info-content-open')
        }else{
            document.querySelector('.prix2').classList.remove('info-content-close')
            document.querySelector('.prix2').classList.add('info-content-open')
        }
    }
}