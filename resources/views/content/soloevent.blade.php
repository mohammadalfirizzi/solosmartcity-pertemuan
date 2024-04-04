{{-- isi konten solo event --}}
@extends('index')

@section('title', 'solo event')

@section('content')
<div class="page-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2>Solo Events</h2>
        <h3>Nikmati Kegiatan di Solo</h3>
      </div>
    </div>
  </div>
</div>

<section class="featured-items" id="featured-items">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="owl-features owl-carousel" style="position: relative; z-index: 5;">
          @foreach ($dataatas as $d)
          <div class="item">
            <div class="thumb">
              <img src="{{asset("data_file/$d->image_url")}}" style="width: 300px; height: 337px; object-fit: fill;" alt="">
              <div class=" hover-effect">
                <div class="content">
                  <h4>{{$d->title}}</h4>
                  <ul>
                    <li><span>Periode:</span> {{$d->start_periode}} - {{$d->end_periode}}</li>
                    <li><span>Lokasi:</span> {{$d->location}}</li>
                    <!-- <li><span>Awards:</span> $1.000 + Camera Nikon</li> -->
                    <button>Selengkapnya</button>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </div>
  </div>
</section>

<section class="popular-categories">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading">
          <h4>Kegiatan yang sudah terselenggara</em></h4>
        </div>
      </div>
      @foreach ($datatengah as $p)
      <div class="col-lg-3 col-sm-6">
        <div class="popular-item">
          <div class="top-content">
            <div class="right">
              <h4>{{$p->title}}</h4>
            </div>
          </div>
          <div class="thumb">
            <img src="{{asset("data_file/$p->image_url")}}" alt="">
          </div>
          <div class="border-button">
            <h5>{{$p->description}}</h5>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- galeri event -->

<section class="galeri-main">
  <h1>GALERY SOLOEVENT</h1>
  <div class="gallery">
    @foreach ($databawah as $q)
    <div class="galeri-img">
      <img src="{{asset("data_file/$q->image_url")}}" />
    </div>
    @endforeach

  </div>
</section>
@endsection