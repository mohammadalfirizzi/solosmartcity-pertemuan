{{-- isi konten dimensi utama --}}
@extends('index')

@section('title', 'dimensi utama')

@section('content')
<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2>Smart City</h2>
          <h3>Solo Metamorfosa Kota Budaya</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="section properties">
    <div class="container">
      <ul class="properties-filter smart">
        <li>
          <a href="/dimensi">Smart Governance</a>
        </li>
        <li>
          <a href="/dimensi">Smart Branding</a>
        </li>
        <li>
          <a href="/dimensi">Smart Economy</a>
        </li>
        <li>
          <a href="/dimensi">Smart Living</a>
        </li>
        <li>
          <a href="/dimensi">Smart Environment</a>
        </li>
        <li>
          <a href="/dimensi">Smart Society</a>
        </li>
      </ul>
    </div>
  </div>

  <h1 class="judul">Definisi Dimensi Smart City</h1>
  
  <div class="wrap">
  
    <ul class="accordion">
      <li class="accordion__item">
        <a class="accordion__title" href="javascript:void(0)">Definisi Smart Governance
        <div class="bmenu x7"><span class="btop"></span><span class="bmid"></span><span class="bbot"></span></div>
        <img src="assets/images/governance.jpg" class="foto">
        </a>
        <p class="accordion__content">
          Smart Governance merujuk pada tata kelola kota yang pintar, terfokus pada peran pemerintah daerah sebagai pengendali kehidupan kota. Ini mencakup transformasi kebijakan dan praktik birokrasi menuju pendekatan yang lebih cepat, efektif, efisien, dan inovatif. Sasarannya adalah mencapai tata kelola pemerintahan daerah yang optimal melalui integrasi inovasi dan teknologi.
        </p>
      </li>
      <li class="accordion__item">
        <a class="accordion__title" href="javascript:void(0)">Definisi Smart Branding
        <div class="bmenu x7"><span class="btop"></span><span class="bmid"></span><span class="bbot"></span></div>
        <img src="assets/images/branding.jpg" class="foto">
        </a>
        <p class="accordion__content">
          Smart Branding dalam konteks Smart City adalah strategi inovatif dalam mempromosikan daya saing daerah melalui pengembangan pariwisata, sektor bisnis, dan peningkatan citra kota. Dalam era informasi, kota tidak hanya harus memanfaatkan potensi lokal, tetapi juga menarik partisipasi masyarakat, pelaku bisnis, dan investor untuk mendorong pertumbuhan dan perkembangan daerah. Konsep branding daerah menekankan peningkatan nilai daerah untuk merangsang aktivitas ekonomi dan pengembangan sosial-budaya, dengan tujuan akhir meningkatkan kesejahteraan masyarakat.
        </p>
      </li>
      <li class="accordion__item">
        <a class="accordion__title" href="javascript:void(0)">Definisi Smart Economy
        <div class="bmenu x7"><span class="btop"></span><span class="bmid"></span><span class="bbot"></span></div>
        <img src="assets/images/economy.jpg" class="foto">
        </a>
        <p class="accordion__content">
          Smart Economy dalam Smart City bertujuan menciptakan ekosistem perekonomian yang responsif terhadap tantangan era informasi saat ini. Fokusnya adalah membangun ekosistem ekonomi yang mendukung aktivitas masyarakat, sesuai dengan sektor ekonomi unggulan daerah yang adaptif terhadap perubahan. Sasaran utama melibatkan peningkatan financial literacy masyarakat dan transformasi ke arah masyarakat yang lebih efisien secara finansial, dengan mengembangkan ekosistem industri, meningkatkan kesejahteraan masyarakat, dan menciptakan ekosistem transaksi keuangan.
        </p>
      </li>
      <li class="accordion__item">
        <a class="accordion__title" href="javascript:void(0)">Definisi Smart Living
        <div class="bmenu x7"><span class="btop"></span><span class="bmid"></span><span class="bbot"></span></div>
        <img src="assets/images/living.jpg" class="foto">
        </a>
        <p class="accordion__content">
          Smart Living dalam Smart City bertujuan untuk menjamin kelayakan hidup masyarakat. Fokusnya melibatkan tiga elemen penting, yakni kelayakan pola hidup, kualitas kesehatan, dan moda transportasi yang mendukung mobilitas orang dan barang di dalam kota pintar tersebut.
        </p>
      </li>
      <li class="accordion__item">
        <a class="accordion__title" href="javascript:void(0)">Definisi Smart Environment
        <div class="bmenu x7"><span class="btop"></span><span class="bmid"></span><span class="bbot"></span></div>
        <img src="assets/images/environtment.jpg" class="foto">
        </a>
        <p class="accordion__content">
          Smart Environment, sebagai dimensi keenam dalam Smart City, menekankan pada pengelolaan lingkungan yang responsif terhadap keberlanjutan. Dalam konteks Smart City, perhatian terhadap lingkungan sejajar dengan pembangunan infrastruktur fisik dan pelayanan bagi warga. Prinsip dasar Smart Environment adalah menciptakan pembangunan berkelanjutan tanpa mengorbankan nilai teknologi sebagai pendorongnya.Sasaran dari Smart Environment adalah mewujudkan tata kelola lingkungan yang baik, bertanggung jawab, dan berkelanjutan.
        </p>
      </li>
      <li class="accordion__item">
        <a class="accordion__title" href="javascript:void(0)">Definisi Smart Society
        <div class="bmenu x7"><span class="btop"></span><span class="bmid"></span><span class="bbot"></span></div>
        <img src="assets/images/society.jpg" class="foto">
        </a>
        <p class="accordion__content">
          Smart Society, sebagai bagian integral dari Smart City, menitikberatkan peran manusia sebagai unsur utama dalam kota cerdas. Dalam Smart City, interaksi antar manusia melibatkan ekosistem sosio-teknis di mana dimensi fisik dan virtual kehidupan kota semakin terintegrasi. Sasaran Smart Society adalah menciptakan ekosistem sosio-teknis yang humanis dan dinamis, baik dalam aspek fisik maupun virtual, guna membentuk masyarakat yang produktif, komunikatif, dan interaktif dengan tingkat literasi digital yang tinggi. Pengembangan Smart Society fokus pada tiga elemen utama: komunitas warga, ekosistem pembelajaran, dan sistem keamanan.
        </p>
      </li>
    </ul>
    
  </div>    
@endsection