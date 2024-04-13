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
    <nav>
      <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-berita" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Berita</button>
        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-inovasi" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Inovasi</button>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-berita" role="tabpanel" aria-labelledby="nav-home-tab">

        <div class="row properties-box">

          @foreach ($data as $d)
          <div class="col-lg-4 col-md-6 align-self-center  properties-items {{$d->category_alias}} all mb-4">
            <div class="item">
              <a href="/dimensidetail"><img src="{{asset("assets/images/pura.jpeg")}}" alt=""></a>
              <span class="category">{{$d->category_name}}</span>
              <span class="category year">{{date('Y')}}</span>
              <h4><a href="/dimensidetail">{{$d->title}}</a></h4>
              <h6><a>{{html_entity_decode(strip_tags($d->content))}}</a></h6><br>
              <div class="main-button">
                <a href="{{route('dimensiDetail', $d->id)}}">Selengkapnya</a>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
      <div class="tab-pane fade" id="nav-inovasi" role="tabpanel" aria-labelledby="nav-profile-tab">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="owl-features owl-carousel" style="position: relative; z-index: 5;">
                @foreach ($data as $d)
                <div class="item">
                  <div class="thumb">
                    <img src="{{asset("data_file/$d->image_url")}}" style="width: 300px; height: 337px; object-fit: fill;" alt="">
                    <div class=" hover-effect">
                      <div class="content">
                        <h4>{{$d->title}}</h4>
                        <button class="btn btn-success">Selengkapnya</button>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    {{$data->links('pagination::bootstrap-4')}}
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