/*Caroline & Fanny & Amanda*/ 
const bars = document.getElementById('bars')
const crossCross = document.getElementById('crossCross')
const dropDown = document.getElementById('dropDown')
const menuText = document.getElementById('menuText')
const overlay = document.getElementById('overlay')

//BARS IKON
bars.onclick = () => {
    dropDown.classList.add('active')
    overlay.style.display = "block"
}

//DROPDOWN MENU REMOVE
crossCross.onclick = () => {
    dropDown.classList.remove('active')
    overlay.style.display = "none"
}


//MENUBAR SCROLL
let oldScrollHeight = 0

window.addEventListener('scroll', e => {
    const currentScrollHeight = window.scrollY

    console.log(window.scrollY)

    if (currentScrollHeight < oldScrollHeight) {

        if (window.scrollY > 450) {
            navbar.classList.add('show')
        }

    } else {
        navbar.classList.remove('show')
    }

    if (window.scrollY < 450) {
        navbar.classList.remove('show')
    }

    oldScrollHeight = window.scrollY
})

$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
})

$('.Slideshow-Faq').owlCarousel({
    loop: true,
    autoplay: true,
    margin: 10,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 1
        }
    }
})