{{-- isi tentang --}}
@extends('index')

@section('title', 'tentang')

@section('content')
<div class="main-banner">
    <div class="item item-51">
        <div class="header-text">
            <span class="category">Surakarta, <em>Jawa Tengah</em></span>
            <h3>Kota Budaya<br />yang Modern Tangguh Gesit Kreatif dan Sejahtera.</h3>
        </div>
    </div>
</div>
<div class='container-w3-bgc'>
    <div class="w3-container">
        <h2>SMART CITY</h2>
        <p>merupakan salah satu konsep pengembangan kota/kabupaten
            berdasarkan prinsip teknologi informasi yang dibuat untuk kepentingan bersama secara efektif dan
            efisien.
            Gerakan tersebut bertujuan membimbing Kabupaten/Kota dalam menyusun
            Masterplan Smart City agar bisa lebih memaksimalkan pemanfaatan teknologi,
            baik dalam meningkatkan pelayanan masyarakat maupun mengakselerasikan
            potensi yang ada di masing-masing daerah.</p>
    </div>
    <div class="w3-container-2">
        <h2>VISI</h2>
        <p>Menuju Kota Smart Culture dan Smart Urban Services</p>
    </div>
    <div class="w3-container-2">
        <h2>SASARAN</h2>
        <p><b>Smart Governance</b> merupakan Tata kelola Pemerintahan Kota Surakarta yang menghasilkan
            business process yang lebih efektif, cepat, efisien, komunikatif dan inovatif.
            Seperti program Kota Surakarta memiliki ULAS (Unit Layanan Aduan Surakarta)
            yang terintegrasi dengan layanan aduan pada medsos dan WA lapor Mas Wali.</p>
        <p><b>Smart Branding</b> yaitu Memasarkan dan meningkatkan daya saing Kota Surakarta
            pada elemen pariwisata, bisnis, dan wajah kota. Dengan adanya Event di Kota Surakarta yang
            merupakan kota budaya yang mengakar pada kehidupan masyarakat masyarakatnya melalui
            pelestarian budaya sebagai warisan dari dua kraton (keraton Kasunanan dan Pura Mangkunegaran)
            sehingga menjadikan Kota Surakarta menjadi Kota Pertunjukan. </p>
        <p><b>Smart Economy</b> Kota Surakarta mengembangkan ekonomi di era informasi disruptif
            dengan program digitalisasi pada 26 dari 44 pasar tradisional.
            Ini termasuk e-Retribusi, pembayaran cashless, dan belanja online.
            Program ini, bekerjasama dengan BNI, mencatat prestasi MURI dengan
            1.046 pedagang menggunakan transaksi non-tunai. </p>
        <p><b>Smart Living</b> yaitu menjamin kelayakan taraf hidup masyarakat Surakarta melalui
            pola hidup kualitas kesehatan dan moda transportasi. Kota Surakarta
            memiliki program peningkatan kualitas kehidupan Kota melalui
            peningkatan kesehatan dan kualitas transportasi umum seperti
            menggunakan konsep penataan permukiman Semanggi yang nantinya
            akan menggunakan Land Consolidation (LC) serta peremajaan kawasan.</p>
        <p><b>Smart Society</b> yaitu Membangun SDM Kota Surakarta yang tangguh dan tetap berbudaya
            di tengah perkembangan teknologi. Kota Surakarta memiliki program BPMKS
            Siswa Winasis untuk mencukupi kebutuhan personal anak dari keluarga
            kurang mampu, serta terwujudnya transparansi dalam pengelolaannya.
            Pemerintah Kota Surakarta juga membangun generasi muda yang berkarakter
            budaya di Kota Surakarta.</p>
        <p><b>Smart Environment</b> yaitu Keseimbangan pembangunan lingkungan dan infrastruktur fisik
            yang berkelanjutan bagi warga Surakarta. Untuk mendukung pembangunan
            infrastruktur dan pembangunan lingkungan yang berkelanjutan pemerintah
            Kota Surakarta menerapkan konsep smart building(Gor Manahan, Pondok Kawruh Tirta),
            smart energy(water resource management), dan smart urban planning
            (penataan kawasan gilimanuk yang terkoneksi dengan system kota).</p>
    </div>
</div>
<div class="header-text4">
    <h2>Produk Hukum</h2>
</div>

<div class="row align-items-center choose-c">
    <div class="col-md-12">
        <table id="cobadatatable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                <tr>
                    <td style="vertical-align: middle; " data-label="Jenis Dokumen" class="sorting_1"><img class="imgprodukhukum" src="https://smartcity.tangerangkota.go.id/assets/gambar/pdf.png"></td>
                    <td style="vertical-align: middle; " data-label="Produk Hukum"><a href="{{asset("data_file/$d->file_url")}}">
                            {{$d->title}}</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection