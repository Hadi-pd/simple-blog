// Carousel Fun

function dotClickHandler (event) {
    const id = event.id;
    const img = document.querySelectorAll('.carousel-img ');
    const txt = document.querySelectorAll('.dev-projects-main-text');
    for (let index = 0; index < img.length; index++) {
        if (img[index].id === id) {
            img[index].style.display = 'block';
        }else {
            img[index].style.display = 'none'
        }
    }
    for (let index = 0; index < txt.length; index++) {
        if (txt[index].id === id) {
            txt[index].style.display = 'flex';
        }else {
            txt[index].style.display = 'none'
        }
    }
    
}

// Menu fun

function menuClickHandler (event) {
    if (event.classList.value === "las la-bars") {
        document.querySelector('.ham-menu-container').style.transform = "translateX(0)";
        event.classList.value = "las la-times";
        document.getElementById('body').style.maxHeight = '100vh'
        document.getElementById('body').style.overflow = 'hidden'
    }else {
        document.querySelector('.ham-menu-container').style.transform = "translateX(50vw)";
        event.classList.value = "las la-bars";
        document.getElementById('body').style.maxHeight = 'unset'
        document.getElementById('body').style.overflow = 'unset'
    }
}

function hamCloseHandler () {
        document.querySelector('.ham-menu-container').style.transform = "translateX(50vw)";
        document.querySelector('.la-times').classList.value = "las la-bars";
        document.getElementById('body').style.maxHeight = 'unset'
        document.getElementById('body').style.overflow = 'unset'
}

// Slider Fun

$('.jou-first-slider').owlCarousel({
    rtl:true,
    loop:true,
    margin:0,
    nav:false,
    items:1,
    dots:true,
})
$('.hint-slider').owlCarousel({
    rtl:true,
    loop:true,
    margin:0,
    nav:false,
    items:1,
    dots:true,
})
$('.jou-second-slider').owlCarousel({
    rtl:true,
    loop:true,
    margin:20,
    nav:false,
    items:4,
    dots:true,
    responsive:{
        300:{
            items:1,
        },
        400:{
            items:1,
        },
        600:{
            items:2,
        },
        1000:{
            items:4,
        }
    }
})

// Rater Fun

function reSizeHandler () {
    const w = window.outerWidth;
    if (w > 1160) {
        $(".readOnly1").starRating({
            readOnly: true,
            starSize:30,
            emptyColor: "rgba(0,0,0,0)",
            strokeWidth:10,
            strokeColor: "#ae7f2d",
          });
          $(".readOnly2").starRating({
            readOnly: false,
            hoverColor: "#ae7f2d !important",
            starSize:30,
            emptyColor: "rgba(0,0,0,0)",
            strokeWidth:10,
            strokeColor: "#000000",
            activeColor:"#ae7f2d !important",
            ratedColor:"#ae7f2d !important"
          });
          $(".readOnly3").starRating({
            readOnly: true,
            starSize:30,
            emptyColor: "rgba(0,0,0,0)",
            strokeWidth:10,
            strokeColor: "#fff",
          });
    }else if (w < 1160) {
        $(".readOnly1").starRating({
            readOnly: true,
            starSize:5,
            emptyColor: "rgba(0,0,0,0)",
            strokeWidth:10,
            strokeColor: "#ae7f2d",
          });
          $(".readOnly2").starRating({
            readOnly: true,
            starSize:5,
            emptyColor: "rgba(0,0,0,0)",
            strokeWidth:10,
            strokeColor: "#000000",
          });
          $(".readOnly3").starRating({
            readOnly: true,
            starSize:5,
            emptyColor: "rgba(0,0,0,0)",
            strokeWidth:10,
            strokeColor: "#fff",
          });
    }
   
    
    
}
const player = new Plyr('#player1');


