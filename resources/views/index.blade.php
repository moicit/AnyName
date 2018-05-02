@extends('layouts.app')

@section('content')

  <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('css/layerslider.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style-layer-slider.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style-responsive.css') }}">
  <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
  <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('css/buttons.css') }}">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <link rel="stylesheet" href="{{ asset('js/slider-layer-slider/skins/fullwidth/skin.css') }}">
  <link href="{{ asset('css/app.css')}}" rel="stylesheet">
  <link href="{{ asset('css/fa-svg-with-js.css')}}" rel="stylesheet">

  <link href="{{ asset('css/custom.css')}}" rel="stylesheet">
  <!-- BEGIN SLIDER -->
      <div class="page-slider margin-bottom-35">
        <!-- LayerSlider start -->
        <div id="layerslider" style="width: 100%; height: 494px; margin: 0 auto;">

          <div class="ls-slide ls-slide1" data-ls="offsetxin: right; slidedelay: 7000; transition2d: 24,25,27,28;">
            <img src="{{ asset('img/bg1.jpg') }}" class="ls-bg" alt="Slide background">
          </div>

          <div class="ls-slide ls-slide2" data-ls="offsetxin: right; slidedelay: 7000; transition2d: 110,111,112,113;">
            <img src="{{ asset('img/bg2.jpg') }}" class="ls-bg" alt="Slide background">
          </div>

          <div class="ls-slide ls-slide3" data-ls="offsetxin: right; slidedelay: 7000; transition2d: 92,93,105;">
            <img src="{{ asset('img/bg3.jpg') }}" class="ls-bg" alt="Slide background">
          </div>

          <div class="ls-slide ls-slide4" data-ls="offsetxin: right; slidedelay: 7000; transition2d: 110,111,112,113;">
            <img src="{{ asset('img/bg4.jpg') }}" class="ls-bg" alt="Slide background">
          </div>
        </div>
        <!-- LayerSlider end -->
      </div>
      <!-- END SLIDER -->

       <!--ABOUT US-->
     <div class="container">
              <h1>About Us</h1>
              <div class="content-page">
                <div class="row margin-bottom-30">
                  <!-- BEGIN INFO BLOCK -->
                  <div class="col-md-6">

                    <h2 class="no-top-space" style="direction: rtl; font-family: GE;"> عن مويك</h2>
                    <p style="direction: rtl; font-family: GE;" >
                      مويك هو نموذج محاكاة منظمة التعاون الإسلامي ، نشأ منذ 12 عام في كلية الإقتصاد و العلوم السياسية بجامعة القاهرة ..
                      و هو أحد الأنشطة الطلابية الرائدة على مستوى مصر و الشرق الأوسط و إنتشر في العديد من الجامعات المصرية و الدول العربية  ..
                      و يعمل  على بناء الأعضاء مهارياً و فكرياً و يسعى لتطوير الجانب الشخصي ، و توطيد شعور الإنتماء للأمة لدى المشاركين به و لكل دوائر التأثير التى يعمل عليها كطلاب الجامعة و طلاب المدارس و أطفال مشروع النوايا الحسنة و المتابعين على صفحات التواصل الإجتماعي .

                    </p>
                  </div>
                  <div style="text-align:left;" class="col-md-6">
                    <h2 style="text-align:left;" class="no-top-space">Description</h2>
                    <p style="text-align:left;">MOIC standing for Model Organization of IslamicCooperation, is one of the leading student activities,
                      established 12 years ago in Faculty of Economics &Political Science - Cairo University that empowers
                      individuals technically, academically and personally to have an insight on their country’s and nation’s
                      issues and the ability to fix them. We were able to spread MOIC’s vision in various
                      segments, ages, cultures. MOIC has spread into Ain shams, Helwan, Alexandria and German University inEgypt.
                    </p>
                  </div>


                  <!-- END INFO BLOCK -->


                </div>
            </div>
  </div>


       <!--END ABOUT US-->


      <div class="brands">
        <div class="container">
          <h1>Sponsors</h1>
            <div class="owl-carousel owl-carousel6-brands" >
              <img src="{{ asset('img/1.jpg') }}" style="" alt="canon" title="canon">
              <img src="{{ asset('img/1.jpg') }}" style="" alt="canon" title="canon">
              <img src="{{ asset('img/1.jpg') }}" style="" alt="canon" title="canon">
              <img src="{{ asset('img/1.jpg') }}" style="" alt="canon" title="canon">
              <img src="{{ asset('img/1.jpg') }}" style="" alt="canon" title="canon">
              <img src="{{ asset('img/1.jpg') }}" style="" alt="canon" title="canon">
              <img src="{{ asset('img/1.jpg') }}" style="" alt="canon" title="canon">
              <img src="{{ asset('img/1.jpg') }}" style="" alt="canon" title="canon">
              <img src="{{ asset('img/1.jpg') }}" style="" alt="canon" title="canon">
              <img src="{{ asset('img/1.jpg') }}" style="" alt="canon" title="canon">
            </div>

          </div>
      </div>


          <footer class="footer-distributed">
              <div class="footer-left">
                  <p style="color: white;">MOIC &copy; 2017</p>

                  <div class="footer-icons">

                    <a href="https://www.facebook.com/moiceg/"><i class="fa fa-facebook"></i></a>
                   <a href="https://twitter.com/moic_cu"><i class="fa fa-twitter"></i></a>
                   <a href="https://www.instagram.com/moic_cu/"><i class="fa fa-instagram"></i></a>
                   <a href="https://soundcloud.com/moiccu"><i class="fa fa-soundcloud"></i></a>
                   <a href="https://www.youtube.com/user/MOICmedia "><i class="fa fa-youtube"></i></a>

                  </div>

              </div>

              <div  class="footer-right">
              <div class="Quick_links ">
                     <ul>
                        <li><a href="index.php?r=moic/index">Home</a></li>
                        <li><a href="index.php?r=moic/about-us">About Us</a></li>
                        <li><a href="index.php?r=moic/documentation-page">History</a></li>
                        <li><a href="index.php?r=moic/projects">projects</a></li>
                        <li><a href="index.php?r=moic/all-product">Products</a></li>
                        <li><a href="index.php?r=moic/newsletter">Moic Blog</a></li>
                     </ul>
                  </div>
                  <div id="notification" style="display: none;">
                    <span  class="dismiss"><a title="dismiss this notification">x</a></span>
                    <h4 id = "notification_body"></h4>
                  </div>

                  <p>Contact Us</p>

                  <form action="" method="post">

                      <input type="text" name="name" placeholder="Name" id='name'/>
                      <input type="text" name="email" placeholder="Email" id='email' />
                      <input type="text" name="tag" placeholder="Tag" id='tag'/>
                      <textarea name="message" placeholder="Message" id='message'></textarea>
                      <button type= "button" id="contact_us" >Send</button>

                  </form>


              </div>

          </footer>



          <script src="{{ asset('js/app.js') }}"></script>
          <script src="{{ asset('js/custom.js') }}"></script>
          <script src="{{ asset('js/fontawesome-all.min.js')}}"></script>
          <script src="{{ asset('js/jquery.min.js') }}"></script>
          <script src="{{ asset('js/jquery-migrate.min.js') }}"></script>
          <script src="{{ asset('js/bootstrap.min.js') }}"></script>
          <script src="{{ asset('js/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
          <script src="{{ asset('js/carousel-owl-carousel/owl-carousel/owl.carousel.min.js') }}"></script>
          <script src="{{ asset('js/zoom/jquery.zoom.min.js') }}"></script>
          <script src="{{ asset('js/bootstrap-touchspin/bootstrap.touchspin.js') }}"></script>
          <script src="{{ asset('js/slider-layer-slider/js/greensock.js') }}"></script>
          <script src="{{ asset('js/slider-layer-slider/js/layerslider.transitions.js') }}"></script>
          <script src="{{ asset('js/slider-layer-slider/js/layerslider.kreaturamedia.jquery.js') }}"></script>
          <script src="{{ asset('js/layerSliderTest-init.js') }}"></script>
          <script src="{{ asset('js/layout.js') }}"></script>
          <script src="{{ asset('js/needed.js') }}"></script>
          <script src="{{ asset('js/jquery.noty.packaged.js') }}"></script>

@endsection
