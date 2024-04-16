{{-- navbar --}}
<header class="header-area header-sticky">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="main-nav">
          <!-- ***** Logo Start ***** -->
          <a href="/beranda" class="logo">
            <h1>SoloSmartcity</h1>
          </a>
          <!-- ***** Logo End ***** -->
          <!-- ***** Menu Start ***** -->
          <ul class="nav">
            <li><a href="/beranda" class="{{ request()->is('beranda') ? 'active' : '' }}">Beranda</a></li>
            <li><a href="/tentang" class="{{ request()->is('tentang') ? 'active' : '' }}">Tentang</a></li>
            <li><a href="/dimensiutama" class="{{ request()->is('dimensiutama') ? 'active' : '' }}">Dimensi</a></li>
            <li><a href="/soloevent" class="{{ request()->is('soloevent') ? 'active' : '' }}">Solo Events</a></li>
            <li><a href="/experience" class="{{ request()->is('experience') ? 'active' : '' }}">Digital Experience</a></li>
            <li>
              <a href="#" data-toggle="modal" data-target="#searchModal"><i class="fa fa-search"></i> Search</a>
            </li>
          </ul>
          <a class="menu-trigger">
            <span>Menu</span>
          </a>
          <!-- ***** Menu End ***** -->
        </nav>
      </div>
    </div>
  </div>
</header>

<div class="modal fade" id="searchModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="input-group mb-3">
          <span class="input-group-text">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="#fcc010">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
              </path>
            </svg>
          </span>
          <input type="text" class="form-control pencarian" id="searchDimensi" placeholder="Pencarian..." aria-label="Pencarian..." aria-describedby="search-icon">
        </div>
      </div>
      <div class="modal-body">
        <div id="beritalist" class="list-group">
        </div>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript">
  $('#searchDimensi').on('keyup', function() {
    $value = $(this).val();
    $.ajax({
      type: 'get',
      url: "{{URL::to('/search/dimensi')}}",
      data: {
        'search': $value
      },
      success: function(data) {
        if (data != '') {
          $('#beritalist').html(data);
        } else {
          $('#beritalist').html('<li class="list-group-item disabled" aria-disabled="true">Data Tidak Ditemukan</li>');
        }
      }
    });
  })
</script>

<script type="text/javascript">
  $.ajaxSetup({
    headers: {
      'csrftoken': '{{ csrf_token() }}'
    }
  });
</script>