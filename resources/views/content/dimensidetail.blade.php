{{-- isi konten dimensi detail --}}
@extends('index')

@section('title', 'dimensi detail')

@section('content')
<div class="header-text">
  <div class="container">
  </div>
</div>


<div class="single-property section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="main-image">
          <img src="{{ asset("data_file/$data->image_url") }}" alt="">
        </div>
        <div class="main-content">
          <span class="category">{{$data->category_name}}</span>
          <h6 class="tanggal">Surakarta, 05 Maret 2024</h6>
          <h6 class="author">{{$data->author_name}}</h6>
          <h4>{{$data->title}}</h4>
          <p>
            <?php echo $data->content; ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection