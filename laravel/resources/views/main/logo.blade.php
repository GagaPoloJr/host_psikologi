<style>
  .ftco-section {
    padding-bottom: 7em;
  }

  .img {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
  }

  .slider-hero {
    position: relative;
  }

  .owl-carousel {
    position: relative;
  }

  .owl-carousel .owl-item {
    opacity: 1;
  }

  .owl-carousel .owl-item.active {
    opacity: 1;
  }

  .owl-carousel .owl-nav {
    position: absolute;
    top: 50%;
    width: 100%;
  }

  .owl-carousel .owl-nav .owl-prev,
  .owl-carousel .owl-nav .owl-next {
    position: absolute;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    margin-top: 0;
    color: white !important;
    -webkit-transition: 0.7s;
    -o-transition: 0.7s;
    transition: 0.7s;
    opacity: 1;
  }

  @media (prefers-reduced-motion: reduce) {

    .owl-carousel .owl-nav .owl-prev,
    .owl-carousel .owl-nav .owl-next {
      -webkit-transition: none;
      -o-transition: none;
      transition: none;
    }
  }

  .owl-carousel .owl-nav .owl-prev span:before,
  .owl-carousel .owl-nav .owl-next span:before {
    font-size: 30px;
  }

  .owl-carousel .owl-nav .owl-prev {
    left: 20px;
  }

  .owl-carousel .owl-nav .owl-next {
    right: 20px;
  }

  .owl-carousel .owl-dots {
    text-align: center;
    margin-top: 0;
    position: absolute;
    bottom: 20px;
    right: 0;
    left: 0;
  }

  .owl-carousel .owl-dots .owl-dot {
    width: 10px;
    height: 10px;
    margin: 5px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.5);
    position: relative;
  }

  .owl-carousel .owl-dots .owl-dot:hover,
  .owl-carousel .owl-dots .owl-dot:focus {
    outline: none !important;
  }

  .owl-carousel .owl-dots .owl-dot.active {
    background: #ff5959;
  }

  .owl-carousel.owl-drag .owl-item {
    -ms-touch-action: pan-y;
    touch-action: pan-y;
  }

  .work {
    width: 100%;
  }

  .work .img {
    width: 100%;
    height: 600px;
    position: relative;
    z-index: 0;
    border-radius: 10px;
    overflow: hidden;
    -webkit-box-shadow: 0px 20px 35px -30px rgba(0, 0, 0, 0.26);
    -moz-box-shadow: 0px 20px 35px -30px rgba(0, 0, 0, 0.26);
    box-shadow: 0px 20px 35px -30px rgba(0, 0, 0, 0.26);
  }

  .work .img:after {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    content: '';
    z-index: -1;
    background: #000;
    opacity: .3;
  }

  .work .text h2 {
    font-size: 60px;
    font-weight: 200;
    color: #fff;
    text-transform: uppercase;
  }

  @media (max-width: 991.98px) {
    .work .text h2 {
      font-size: 40px;
    }
  }

  .work .text span {
    font-size: 12px;
    letter-spacing: 1px;
    color: rgba(0, 0, 0, 0.3);
    text-transform: uppercase;
    font-weight: 500;
  }

  .thumbnail {
    list-style: none;
    padding: 0;
    margin: 0;
    position: absolute;
    bottom: 0px;
    left: 50%;
    -webkit-transform: translateY(50%) translateX(-50%);
    -ms-transform: translateY(50%) translateX(-50%);
    transform: translateY(50%) translateX(-50%);
    z-index: 99;
    width: 100%;
  }

  .thumbnail li {
    display: inline-block;
  }

  .thumbnail li a {
    display: block;
    margin: 4px;
  }

  .thumbnail li a img {
    width: 80px;
    border-radius: 50%;
    -webkit-transform: scale(0.8);
    -ms-transform: scale(0.8);
    transform: scale(0.8);
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;
    -webkit-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.2);
    box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.2);
  }

  .thumbnail li.active a img {
    border: 4px solid #fff;
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
    -webkit-box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.2);
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.2);
  }

  @media (max-width: 767.98px) {
    .thumbnail li a img {
      width: 50px;
    }
  }

  .heading-section {
    font-size: 28px;
  }
</style>
<section class="ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="heading-section mb-5 pb-md-4">Penjelasan Logo dan Warna</h2>
      </div>
      <div class="col-md-12">
        <div class="slider-hero">
          <div class="featured-carousel owl-carousel">
            <div class="item">
              <div class="work">
                <div class="d-flex justify-content-center align-items-center">
                  <img style="width: 30%;" src="{{ asset('img/logo/1.png') }}" alt="Image" class="mr-3 img-fluid">
                  <p>
                    Bunga Seroja yang Mekar, Bunga Seroja tampil dengan keindahan yang elegan di tengah lingkungan habitatnya yang tidak indah, melambangkan semangat juang yang adaptif menuju kemanfaatan melalui karya-karya indah yang tergambar dari keindahan bunga Seroja saat mekar.

                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="work">
              <div class="d-flex justify-content-center align-items-center">
                  <img style="width: 30%;" src="{{ asset('img/logo/2.png') }}" alt="Image" class="mr-3 img-fluid">
                  <p>
                  Burung Merak dengan Sayap yang Mekar, melambangkan keindahan dan keabadian serta mampu melihat masa depan. BEM F.Psi Undip sebagai lembaga yang mampu
                   menganalisis dan melihat potensi serta melihat perkembangan pengetahuan di dunia sehingga dapat melahirkan karya-karya yang membekas indah dan abadi (keberlanjutan) bagi lingkungan sekitar.
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="work">
              <div class="d-flex justify-content-center align-items-center">
                  <img style="width: 30%;" src="{{ asset('img/logo/3.png') }}" alt="Image" class="mr-3 img-fluid">
                  <p>
                  Badan Burung Merak yang berbentuk huruf S dan C, melambangkan Inisial nama kabinet BEM Fakultas Psikologi Undip, yaitu kabinet “Seroja Cita”
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="work">
                <div class="d-flex justify-content-center align-items-center">
                  <img style="width: 30%;" src="{{ asset('img/logo/2.png') }}" alt="Image" class="mr-3 img-fluid">
                  <p>
                  Daun dan Kelopak Bunga Seroja yang berjumlah 11, melambangkan 8 Bidang 2 Biro dan 1 Unit (8+2+1= 11) 
                  yang membangun keutuhan dalam sistem Kabinet Seroja Cita, serta melambangkan 11 Lembaga Kemahasiswaan yang ada di Fakultas Psikologi.
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="work">
              <div class="d-flex justify-content-center align-items-center">
                  <img class="mr-3 img-fluid rounded-circle" style="width: 30%;" src="{{ asset('img/logo/4.png') }}" alt="Image" >
                  <p>
                  Warna Orange, melambangkan optimisme, percaya diri, serta kemampuan bersosialisasi dengan orang 
                  lain dalam rangka memunculkan kehangatan dalam sebuah sistem teamwork.
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="work">
              <div class="d-flex justify-content-center align-items-center">
                  <img class="mr-3 img-fluid rounded-circle" style="width: 30%;" src="{{ asset('img/logo/5.png') }}" alt="Image" >
                  <p>
                  Warna Hijau Keabu-abuan, warna hijau melambangkan ketenangan dan abu-abu melambangkan kestabilan dan kemandirian serta tanggung jawab.
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="work">
                <div class="d-flex justify-content-center align-items-center">
                  <img class="mr-3 img-fluid rounded-circle" style="width: 30%;" src="{{ asset('img/logo/6.png') }}" alt="Image" >
                  <p>
                  Warna Merah, melambangkan gairah dan energi yang kuat dalam menyerukan suatu perjuangan menuju kemanfaatan bagi sekitar.
                  </p>
                </div>
              </div>
            </div>
            
          </div>
          
          <br>
          <div class="my-5 text-center">
            <ul class="thumbnail">
              <li class="active img"><a href="#"><img src="{{ asset('img/logo/1.png') }}" alt="Image" class="img-fluid"></a></li>
              <li><a href="#"><img src="{{ asset('img/logo/2.png') }}" alt="Image" class="img-fluid"></a></li>
              <li><a href="#"><img src="{{ asset('img/logo/3.png') }}" alt="Image" class="img-fluid"></a></li>
              <li><a href="#"><img src="{{ asset('img/logo/2.png') }}" alt="Image" class="img-fluid"></a></li>
              <li><a href="#"><img src="{{ asset('img/logo/4.png') }}" alt="Image" class="img-fluid"></a></li>
              <li><a href="#"><img src="{{ asset('img/logo/5.png') }}" alt="Image" class="img-fluid"></a></li>
              <li><a href="#"><img src="{{ asset('img/logo/6.png') }}" alt="Image" class="img-fluid"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>