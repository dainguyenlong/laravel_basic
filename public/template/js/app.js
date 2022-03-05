$(".tour-list").slick({
   infinite: true,
   slidesToShow: 3,
   slidesToScroll: 1,
   prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fas fa-angle-left'></i></button>",
   nextArrow: "<button type='button' class='slick-next pull-right'><i class='fas fa-angle-right'></i></button>",
   autoplay: true,
   swipeToSlide: true,
   infinite: true,
   cssEase: 'linear',
   responsive: [{
         breakpoint: 1025,
         settings: {
            slidesToShow: 2,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 1500,
         },
      },
      {
         breakpoint: 480,
         settings: {
            slidesToShow: 1,
            infinite: true,
            autoplay: true,
            arrows: false,
            infinite: false,
            autoplaySpeed: 1500,
         },
      },
   ],
});
$(".explore-list").slick({
   infinite: true,
   slidesToShow: 4,
   slidesToScroll: 1,
   prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fas fa-angle-left'></i></button>",
   nextArrow: "<button type='button' class='slick-next pull-right'><i class='fas fa-angle-right'></i></button>",
   autoplay: true,
   swipeToSlide: true,
   infinite: true,
   cssEase: 'linear',
   autoplaySpeed: 2000,
   responsive: [{
         breakpoint: 1025,
         settings: {
            slidesToShow: 2,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 1500,
         },
      },
      {
         breakpoint: 480,
         settings: {
            slidesToShow: 1,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            infinite: false,
         },
      },
   ],
});

//Custom Button
function inc(element) {
   let el = document.querySelector(`[name="${element}"]`);
   el.value = parseInt(el.value) + 1;
}

function dec(element) {
   let el = document.querySelector(`[name="${element}"]`);
   if (parseInt(el.value) > 0) {
      el.value = parseInt(el.value) - 1;
   }
}

var model = document.querySelector('.location-model')
var searchLocation = document.querySelector('.search-location')

searchLocation.onclick = function (event) {
   model.style.display = 'flex';
}

var document = document.getRootNode(document)

function hidePassenger() {
   showPassengerModel.style.display = 'none';
}

function hideModel() {
   model.style.display = 'none';
}

document.addEventListener('click', function (event) {
   if (!$(event.target).closest(".location-model,.search-location").length) {
      hideModel();
   }

   if (!$(event.target).closest(".passenger-model,.search-pass").length) {
      hidePassenger();
      passengerIcon.classList.remove('fa-chevron-up');
      passengerIcon.classList.add('fa-chevron-down');
   }
})

let fillDatas = document.querySelectorAll('.item-detail')
for (const fillData of fillDatas) {
   fillData.onclick = function (event) {
      fillsquare(fillData);
      hideModel();
      event.stopPropagation();
   }
}

var inputData = document.getElementById('local')

function fillsquare(element) {
   let input = element.textContent;
   input = input.replace(/^\s+|\s+$/gm, ' ');
   input = input.trim();
   input = input.replace(/^\s+|\s+$/gm, ', ');
   inputData.value = input;
}

let showPassenger = document.querySelector('.search-pass')
let showPassengerModel = document.querySelector('.passenger-model')
let passengerIcon = document.querySelector('.passengerIcon')
var searchPassengerMobile = document.querySelector('.search-passenger-mobile')
showPassenger.onclick = function () {
   if (showPassengerModel.style.display == 'flex') {
      showPassengerModel.style.display = 'none';
      passengerIcon.classList.remove('fa-chevron-up');
      passengerIcon.classList.add('fa-chevron-down');
   } else {
      showPassengerModel.style.display = 'flex';
      passengerIcon.classList.remove('fa-chevron-down');
      passengerIcon.classList.add('fa-chevron-up');
   }
}
searchPassengerMobile.onclick = function (event) {
   showPassengerModel.style.display = 'flex';
}