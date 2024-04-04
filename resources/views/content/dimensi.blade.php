{{-- isi konten dimensi --}}
@extends('index')

@section('title', 'dimensi')

@section('content')
<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2>Smart City</h2>
          <h1>Branding</h1>
          <h3>Solo Metamorfosa Kota Budaya</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="section properties">
    <div class="container">
      <ul class="properties-filter smart">
        <li>
          <a href="#!" data-filter=".all" class="is_active">Show All</a>
        </li>
        <li>
          <a href="#!" data-filter=".gvn">Smart Governance</a>
        </li>
        <li>
          <a href="#!" data-filter=".brd">Smart Branding</a>
        </li>
        <li>
          <a href="#!" data-filter=".ecn">Smart Economy</a>
        </li>
        <li>
          <a href="#!" data-filter=".lvg">Smart Living</a>
        </li>
        <li>
          <a href="#!" data-filter=".env">Smart Environment</a>
        </li>
        <li>
          <a href="#!" data-filter=".soc">Smart Society</a>
        </li>
      </ul>

      <!-- Popular News Start -->
      <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="single_footer_top wow fadeInRight">
          <h2>Tranding Post</h2>
          <ul class="catg3_snav ppost_nav">
            <li>
              <div class="media"> 
                <div class="media-body"> <a class="catg_title" href="#"> Revitalisasi Taman Balekambang</a></div>
              </div>
           </li>
            <li>
              <div class="media"> 
                <div class="media-body"> <a class="catg_title" href="#"> Museum Lokananta</a></div>
              </div>
           </li>
            <li>
              <div class="media">
                <div class="media-body"> <a class="catg_title" href="#"> Solo Technopark</a></div>
              </div>
           </li>
            <li>
              <div class="media">
                <div class="media-body"> <a class="catg_title" href="#"> Solo Technopark</a></div>
              </div>
           </li>
            <li>
              <div class="media">
                <div class="media-body"> <a class="catg_title" href="#"> Solo Technopark</a></div>
              </div>
           </li>
          </ul>
        </div>
      </div>
    <!-- Popular News End -->

    {{-- Lapor Wali --}}
    <div class="col-lg-3 col-md-3 col-sm-6">
      <div class="single_footer_top">
        <h2>Layanan Lapor MasWali</h2>
        <ul class="ppost_nav">
          <li>
            <img src="{{ asset('assets/images/lapor-wali.jpg') }}">
          </li>
        </ul>
      </div>
    </div>
    
    



      <div class="row properties-box">
        <div class="col-lg-4 col-md-6 align-self-center  properties-items soc all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Society</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">18 Old Street Miami, OR 97219</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items gvn all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Governance</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">18 Old Street Miami, OR 97219</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items env all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Environment</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">18 Old Street Miami, OR 97219</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items gvn all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Governance</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">18 Old Street Miami, OR 97219</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items soc all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Society</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">18 Old Street Miami, OR 97219</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items soc all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Society</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">18 Old Street Miami, OR 97219</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items lvg all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Living</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">18 Old Street Miami, OR 97219</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items brd all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Branding</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">54 New Street Florida, OR 27001</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items soc all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Society</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">18 Old Street Miami, OR 97219</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items soc all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Society</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">18 Old Street Miami, OR 97219</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items env all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Environment</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">18 Old Street Miami, OR 97219</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items brd all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Branding</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">54 New Street Florida, OR 27001</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items gvn all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Governance</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">18 Old Street Miami, OR 97219</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items env all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Environment</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">18 Old Street Miami, OR 97219</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items soc all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Society</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">18 Old Street Miami, OR 97219</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items brd all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Branding</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">54 New Street Florida, OR 27001</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items lvg all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Living</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">26 Mid Street Portland, OR 38540</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items soc all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Society</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">18 Old Street Miami, OR 97219</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items ecn all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Economy</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">22 Hope Street Portland, OR 16540</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items brd all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Branding</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">54 New Street Florida, OR 27001</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items gvn all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Governance</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">12 Hope Street Portland, OR 12650</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items env all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Environment</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">18 Old Street Miami, OR 97219</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items brd all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Governance</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">34 Hope Street Portland, OR 42680</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items brd all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Branding</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">54 New Street Florida, OR 27001</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items ecn all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Economy</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">22 Hope Street Portland, OR 16540</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items lvg all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Living</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">18 Old Street Miami, OR 97219</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items ecn all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Economy</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">22 Hope Street Portland, OR 16540</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items env all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Environment</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">18 Old Street Miami, OR 97219</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items lvg all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Living</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">18 Old Street Miami, OR 97219</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items gvn all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Governance</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">14 Mid Street Miami, OR 36450</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items lvg all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Living</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">18 Old Street Miami, OR 97219</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items lvg all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Living</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">18 Old Street Miami, OR 97219</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items ecn all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Economy</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">22 Hope Street Portland, OR 16540</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items brd all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Governance</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">26 Old Street Miami, OR 12870</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items ecn all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Economy</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">22 Hope Street Portland, OR 16540</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items env all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Environment</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">18 Old Street Miami, OR 97219</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center  properties-items gvn all">
          <div class="item">
            <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
            <span class="category">Smart Governance</span>
            <span class="category year">2022</span>
            <h4><a href="/dimensidetail">34 New Street Miami, OR 24650</a></h4>
            <h6><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></h6><br>
            <div class="main-button">
              <a href="/dimensidetail">Selengkapnya ecn</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="pagination">
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">>></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection