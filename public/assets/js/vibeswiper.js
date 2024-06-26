const next = document.getElementById('next');
const prev = document.getElementById('prev');
const swiper = document.getElementById('items');
const swiperItem = document.getElementById('item');
const main = document.getElementById('main-swiper');
const swiperItemWidth = swiperItem.getBoundingClientRect().width;

let isDown = false;
let scrollLeft;
let startX;


function showHideButtons() {

    const swiperWidth = swiper.scrollWidth;
    const mainWidth = main.getBoundingClientRect().width;

    if (swiperWidth > mainWidth) {

        if (swiper.clientWidth + swiper.scrollLeft >= swiper.scrollWidth - 2) {
            next.style.visibility = "hidden";
        }
        else if (swiper.clientWidth - swiper.scrollLeft >= swiper.clientWidth - 2) {
            prev.style.visibility = "hidden";
        }
        else {
            next.style.visibility = "visible";
            prev.style.visibility = "visible";
        }
        swiper.style.justifyContent = "start";
    }
    else {
        swiper.style.justifyContent = "center";
    }
}

window.addEventListener('resize', showHideButtons);
onload = showHideButtons();


swiper.addEventListener('scroll', () => {
    showHideButtons();
});

swiper.addEventListener('mousedown', (e) => {
    isDown = true;
    swiper.classList.add('active');
    startX = e.pageX - swiper.offsetLeft;
    scrollLeft = swiper.scrollLeft;
});

swiper.addEventListener('mouseleave', () => {
    isDown = false;
    swiper.classList.remove('active');
});

swiper.addEventListener('mouseup', () => {
    isDown = false;
    swiper.classList.remove('active');
});

swiper.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - swiper.offsetLeft;
    const walk = (x - startX);
    swiper.scrollLeft = scrollLeft - walk;
});

prev.addEventListener('click', (e) => {
    startX = e.pageX - swiper.offsetLeft;
    swiper.scrollLeft -= swiperItemWidth * 2;
});

next.addEventListener('click', (e) => {
    startX = e.pageX - swiper.offsetLeft;
    swiper.scrollLeft += swiperItemWidth * 2;
});

try {
    fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function (response) {
      return true;
    }).catch(function (e) {
      var carbonScript = document.createElement("script");
      carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CE7DC2JW&placement=wwwcssscriptcom";
      carbonScript.id = "_carbonads_js";
      document.getElementById("carbon-block").appendChild(carbonScript);
    });
  } catch (error) {
    console.log(error);
  }


  window.dataLayer = window.dataLayer || [];
  function gtag() { dataLayer.push(arguments); }
  gtag('js', new Date());
  gtag('config', 'G-LLWL5N9CSM');