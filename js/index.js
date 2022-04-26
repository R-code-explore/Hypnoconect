//index section
//index section

const textSection1 = document.getElementById('textSection1')
const listenBtn1 = document.querySelector('.openSection1')

listenBtn1.addEventListener('click', () => {
    if(textSection1.classList.contains('textSection1')){
        textSection1.classList.remove('textSection1')
        textSection1.classList.add('textSection1_2')
        listenBtn1.innerHTML = "Reduire ^^"
    }else if(textSection1.classList.contains('textSection1_2')){
        textSection1.classList.add('textSection1')
        textSection1.classList.remove('textSection1_2')
        listenBtn1.innerHTML = "Lire la suite >>"
    }
})

///////////////
///////////////