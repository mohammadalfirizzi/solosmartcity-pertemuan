{{-- isi beranda --}}
@extends('index')

@section('title', 'beranda')

@section('content')
<div class="main-banner">
    <div class="owl-carousel owl-banner">
      <div class="item item-1">
        <div class="header-text">
          <span class="category">SmartCity <em>Kota Solo</em></span>
          <h2>Pasar Gede Surakarta</h2>
        </div>
      </div>
      <div class="item item-2">
        <div class="header-text">
          <span class="category">SmartCity <em>Kota Solo</em></span>
          <h2>Keraton Mangkunegaran</h2>
        </div>
      </div>
      <div class="item item-3">
        <div class="header-text">
          <span class="category">SmartCity <em>Kota Solo</em></span>
          <h2>Solo Art Ngarsopuro</h2>
        </div>
      </div>
      <div class="item item-4">
        <div class="header-text">
          <span class="category">SmartCity <em>Kota Solo</em></span>
          <h2>Masjid Zayyed</h2>
        </div>
      </div>
      <div class="item item-5">
        <div class="header-text">
          <span class="category">SmartCity <em>Kota Solo</em></span>
          <h2>Taman Balekambang</h2>
        </div>
      </div>
    </div>
  </div>

  <!-- 6 dimensi -->
  <div class="dimensi-smart">
    <h3>Dimensi Smartcity</h3><br><br>
    <div class="smart-card">
      <div class="smart_link">
        <a href="/dimensi">
        <div class="konten">
          <img src="{{asset("assets/images/governance.jpg")}}" />
          <h1>Smart Governance</h1>
        </div>
        </a>
      </div>
      <div class="smart_link">
        <a href="/dimensi">
        <div class="konten">
          <img src="{{asset("assets/images/branding.jpg")}}" />
          <h1>Smart Branding</h1>
        </div>
        </a>
      </div>
      <div class="smart_link">
        <a href="/dimensi">
        <div class="konten">
          <img src="{{asset("assets/images/economy.jpg")}}" />
          <h1>Smart Economy</h1>
        </div>
        </a>
      </div>
      <div class="smart_link">
        <a href="/dimensi">
        <div class="konten">
          <img src="{{asset("assets/images/living.jpg")}}" />
          <h1>Smart Living</h1>
        </div>
        </a>
      </div>
      <div class="smart_link">
        <a href="/dimensi">
        <div class="konten">
          <img src="{{asset("assets/images/environtment.jpg")}}" />
          <h1>Smart Environment</h1>
        </div>
        </a>
      </div>
      <div class="smart_link">
        <a href="/dimensi">
        <div class="konten">
          <img src="{{asset("assets/images/society.jpg")}}" />
          <h1>Smart Society</h1>
        </div>
        </a>
      </div>
    </div>
  </div>

  <!-- end 6 dimensi -->

  <!-- deskripsi kota budaya -->

  <div class="kota-budaya">
        <div class="container-foto">
          <div class="row">
            <div class="budaya-foto">
              <div class="des-foto">
                <div class="des-foto1">
                  <img src="{{asset("assets/images/budaya-1.jpg")}}"/>
                </div>
              </div>
              <div class="des-foto">
                <div class="des-foto2">
                  <img src="{{asset("assets/images/budaya-2.jpg")}}"/>
                </div>
              </div>
            </div>
            <div class="des-budaya">
              <h2>Solo Metamorfosa Kota Budaya</h2></br>
              <div class="budaya-text">
                <p>menata kembali
                  wajah kota yang mencerminkan
                  nilai-nilai daerah dan mengikuti
                  dinamika modernisasi yang
                  menginginkan sebuah tata wilayah
                  kota yang indah, bersih, rapi, dan
                  
                  membanggakan</p></br>
                <p>membangun
                  platform dan memasarkan
                  ekosistem perdagangan yang
                  kondusif dan nyaman, ekosistem
                  investasi yang mudah dan efektif,
                  dan memasarkan produk dan
                  jasa industri kreatif daerah baik
                  tingkat lokal, nasional maupun
                  internasional</p></br>
              </div>
              <h4></h4>
            </div>
          </div>
        </div>
      </div>

  <!-- end deskripsi kota budaya -->
  <div class="video section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="video-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="video-frame">
            <a href="https://www.youtube.com/watch?v=NeSyvBIsSxM" target="_blank">
              <img
                src="{{asset("assets/images/videoo.jpg")}}"
                alt=""
                href="https://youtube.com"
              />
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="kota-budaya">
        <div class="container-foto">
          <div class="row">
          <div class="des-budaya">
              <h2>Solo Metamorfosa Kota Budaya</h2></br>
              <p>menata kembali
                wajah kota yang mencerminkan
                nilai-nilai daerah dan mengikuti
                dinamika modernisasi yang
                menginginkan sebuah tata wilayah
                kota yang indah, bersih, rapi, dan
                
                membanggakan</p></br>
              <p>membangun
                platform dan memasarkan
                ekosistem perdagangan yang
                kondusif dan nyaman, ekosistem
                investasi yang mudah dan efektif,
                dan memasarkan produk dan
                jasa industri kreatif daerah baik
                tingkat lokal, nasional maupun
                internasional</p></br>
              <h4></h4>
            </div>
            <div class="budaya-foto">
              <div class="des-foto">
                <div class="des-foto1">
                  <img src="{{asset("assets/images/budaya-1.jpg")}}"/>
                </div>
              </div>
              <div class="des-foto">
                <div class="des-foto2">
                  <img src="{{asset("assets/images/budaya-2.jpg")}}"/>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      
  <!-- slider -->
  {{-- <div class="card__container swiper">
    <div class="card__content">
      <div class="swiper-wrapper">
        <article class="card__article swiper-slide">
          <a href="https://surakarta.go.id/">
            <div class="card__data">
              <img
                src="{{asset("assets/images/logo-ska.jpg")}}"
                alt="image"
                class="card__img"
              />
              <h3 class="card__name">Web Surakarta</h3>
            </a>
            </div>
        </article>
        <article class="card__article swiper-slide">
          <a href="https://surakarta.go.id/">
            <div class="card__data">
              <img
                src="{{asset("assets/images/logo-ska.jpg")}}"
                alt="image"
                class="card__img"
              />
              <h3 class="card__name">Web Surakarta</h3>
            </a>
            </div>
        </article>
        <article class="card__article swiper-slide">
          <a href="https://surakarta.go.id/">
            <div class="card__data">
              <img
                src="{{asset("assets/images/logo-ska.jpg")}}"
                alt="image"
                class="card__img"
              />
              <h3 class="card__name">Web Surakarta</h3>
            </a>
            </div>
        </article>
        <article class="card__article swiper-slide">
          <a href="https://surakarta.go.id/">
            <div class="card__data">
              <img
                src="{{asset("assets/images/logo-ska.jpg")}}"
                alt="image"
                class="card__img"
              />
              <h3 class="card__name">Web Surakarta</h3>
            </a>
            </div>
        </article>
        <article class="card__article swiper-slide">
          <a href="https://surakarta.go.id/">
            <div class="card__data">
              <img
                src="{{asset("assets/images/logo-ska.jpg")}}"
                alt="image"
                class="card__img"
              />
              <h3 class="card__name">Web Surakarta</h3>
            </a>
            </div>
        </article>
        <article class="card__article swiper-slide">
          <a href="https://surakarta.go.id/">
            <div class="card__data">
              <img
                src="{{asset("assets/images/logo-ska.jpg")}}"
                alt="image"
                class="card__img"
              />
              <h3 class="card__name">Web Surakarta</h3>
            </a>
            </div>
        </article>
        <article class="card__article swiper-slide">
          <a href="https://surakarta.go.id/">
            <div class="card__data">
              <img
                src="{{asset("assets/images/logo-ska.jpg")}}"
                alt="image"
                class="card__img"
              />
              <h3 class="card__name">Web Surakarta</h3>
            </a>
            </div>
        </article>
        <article class="card__article swiper-slide">
          <a href="https://surakarta.go.id/">
            <div class="card__data">
              <img
                src="{{asset("assets/images/logo-ska.jpg")}}"
                alt="image"
                class="card__img"
              />
              <h3 class="card__name">Web Surakarta</h3>
            </a>
            </div>
        </article>
      </div>
    </div>

    <!-- Navigation buttons -->
    <!-- <div class="swiper-button-next">
       <i class="ri-arrow-right-s-line"></i>
    </div>
    
    <div class="swiper-button-prev">
       <i class="ri-arrow-left-s-line"></i>
    </div> -->

    <!-- Pagination -->
    <div class="swiper-pagination"></div>
  </div> --}}

  <div class="container">
    <div class="card-container" id="main-swiper">
      <div class="card-items" id="items">
        <div class="card-item" id="item">
          <img class="card-item-img" src="{{asset("assets/images/logo-ska.jpg")}}" alt="category" />
          <div class="card-item-circle"></div>
          <p class="card-item-text">Web Surakarta</p>
        </div>
        <div class="card-item" id="item">
          <img class="card-item-img" src="{{asset("assets/images/logo-ska.jpg")}}" alt="category" />
          <div class="card-item-circle"></div>
          <p class="card-item-text">Web Surakarta</p>
        </div>
        <div class="card-item" id="item">
          <img class="card-item-img" src="{{asset("assets/images/logo-ska.jpg")}}" alt="category" />
          <div class="card-item-circle"></div>
          <p class="card-item-text">Web Surakarta</p>
        </div>
        <div class="card-item" id="item">
          <img class="card-item-img" src="{{asset("assets/images/logo-ska.jpg")}}" alt="category" />
          <div class="card-item-circle"></div>
          <p class="card-item-text">Web Surakarta</p>
        </div>
        <div class="card-item" id="item">
          <img class="card-item-img" src="{{asset("assets/images/logo-ska.jpg")}}" alt="category" />
          <div class="card-item-circle"></div>
          <p class="card-item-text">Web Surakarta</p>
        </div>
        <div class="card-item" id="item">
          <img class="card-item-img" src="{{asset("assets/images/logo-ska.jpg")}}"alt="category" />
          <div class="card-item-circle"></div>
          <p class="card-item-text">Web Surakarta</p>
        </div>
        <div class="card-item" id="item">
          <img class="card-item-img" src="{{asset("assets/images/logo-ska.jpg")}}"alt="category" />
          <div class="card-item-circle"></div>
          <p class="card-item-text">Web Surakarta</p>
        </div>
        <div class="card-item" id="item">
          <img class="card-item-img" src="{{asset("assets/images/logo-ska.jpg")}}"alt="category" />
          <div class="card-item-circle"></div>
          <p class="card-item-text">Web Surakarta</p>
        </div>
        <div class="card-item" id="item">
          <img class="card-item-img" src="{{asset("assets/images/logo-ska.jpg")}}"alt="category" />
          <div class="card-item-circle"></div>
          <p class="card-item-text">Web Surakarta</p>
        </div>
      </div>
      <div class="btn next" id="next">
        <button>Next</button>
      </div>
      <div class="btn prev" id="prev">
        <button>Previus</button>
      </div>
    </div>
  </div>

@endsection