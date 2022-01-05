<footer>
    <div class="footer-area" data-aos="zoom-in-down">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h4>State Health Portal</h4>
                </div>
				<ul class="list-group list-group-flush list-arrow">
				 <li class="list-group-item"><a href="https://meghealth.gov.in/" title="DoHFW Meghalaya Website">DoHFW Meghalaya Website</a></li>
				  <li class="list-group-item"><a href="https://meghealth.in/" title="Covid 19 Meghalaya Website">Covid 19 Meghalaya Website</a></li>
				  <li class="list-group-item"><a href="https://rch.nhm.gov.in" title="RCH Portal">RCH Portal</a></li>
				  <li class="list-group-item"><a href="https://hmis.nhp.gov.in" title="HMIS Portal">HMIS Portal</a></li>				
                </ul>
                <!--<div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="bi bi-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-instagram"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                    </li>
                  </ul>
                </div>-->
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-3" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Website Policies</h4>
                <ul class="list-group list-group-flush list-arrow">
				        <li class="list-group-item"><a href="./accessibility-statement" title="Accessibility Statement">Accessibility Statement</a></li>
                <li class="list-group-item"><a href="./disclaimer" title="Disclaimer">Disclaimer</a></li>
				        <li class="list-group-item"><a href="./copyright-policy" title="Copyright Policy">Copyright Policy</a></li>
				        <li class="list-group-item"><a href="./hyperlinking-policy" title="Hyperlinking Policy">Hyperlinking Policy</a></li>
				       <li class="list-group-item"><a href="./privacy-policy" title="Privacy Policy">Privacy Policy</a></li>			
               <li class="list-group-item"><a href="./terms-use" title="Terms of Use">Terms of Use</a></li>					
                </ul>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-3" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Other Links</h4>
                <ul class="list-group list-group-flush list-arrow">
				 <li class="list-group-item"><a href="./grievance" title="Grievance Redressal">Grievance Redressal</a></li>				
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Contact Us</h4>
                <p>Meghalaya Health Systems Strengthening Project (MHSSP)
Health Complex, Red Hills, Laitumkhrah<br>
Shillong – 793003<br>
Meghalaya</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>MHSSP</strong>. All Rights Reserved
              </p>
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->
<div style="display: none;">

    <!-- Authentication -->
    <form method="POST" id="logout_form" action="{{ route('logout') }}">
        @csrf
        <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
    </form>

</div>
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
 <script src="{{asset('assets/js/jquery.min.js')}}"></script>
 <script src="{{asset('assets/js/owl.carousel.js')}}"></script>
 <link rel="stylesheet" href="{{asset('assets/css/jquery.fancybox.min.css')}}" />

<script src="{{asset('assets/js/jquery.fancybox.min.js')}}"></script>
 
  <script>
    
   
            $(document).ready(function() {
              $('.footer-carousel1').owlCarousel({
                loop: true,
                responsiveClass: true,
				        autoplay:true,
                autoplayTimeout:5000,
                autoplayHoverPause:true,
            margin: 10,
            nav: true,
            navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 6
                },
                1000: {
                    items: 6
                }
            }
        });
			var owl = $('.footer-carousel');
              owl.owlCarousel({
                loop: true,
                margin: 5,
                responsiveClass: true,
				        autoplay:true,
                 autoplayTimeout:5000,
                autoplayHoverPause:true,
			      	 nav : true,
               navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
                responsive: {
                  0: {
                    items: 1,
                    nav: true,
					loop: true,
                  },
                  600: {
                    items: 3,
                    nav: false,
					loop: true,
                  },
                  1000: {
                    items: 5,
                    nav: true,
                    loop: true,
                    margin: 5
                  }
                }
              });

            
              var owl = $('.project-activites-carousel');
              owl.owlCarousel({
                loop: true,
                margin: 20,
                responsiveClass: true,
				         autoplay:false,
                 autoplayTimeout:5000,
                autoplayHoverPause:true,
				        navigation : false,
                /*navigationText : ['<span class="fa-stack"><i class="fa fa-circle fa-stack-1x"></i><i class="fa fa-chevron-circle-left fa-stack-1x fa-inverse"></i></span>','<span class="fa-stack"><i class="fa fa-circle fa-stack-1x"></i><i class="fa fa-chevron-circle-right fa-stack-1x fa-inverse"></i></span>'],*/

                responsive: {
                  0: {
                    items: 1,
                    nav: false,
				          	loop: true,
                  },
                  600: {
                    items: 4,
                    nav: false,
					          loop: true,
                  },
                  1000: {
                    items: 4,
                    nav: false,
                    loop: true,
                    margin: 0
                  }
                }
              });
              var owl = $('.news-events-carousel');
              owl.owlCarousel({
                loop: true,
                margin: 20,
                responsiveClass: true,
				        autoplay:true,
                 autoplayTimeout:5000,
                autoplayHoverPause:true,
			      	 nav : true,
               navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
                responsive: {
                  0: {
                    items: 1,
                    nav: true,
				          	loop: true,
                  },
                  600: {
                    items: 3,
                    nav: true,
					          loop: true,
                    margin: 20
                  },
                  1000: {
                    items: 3,
                    nav: true,
                    loop: false,
                    margin: 20
                  }
                }
              });
			  
				  $('.play').on('click',function(){
				   owl.trigger('play.owl.autoplay',[1000])
					});
			   $('.stop').on('click',function(){
				 owl.trigger('stop.owl.autoplay')
				})

      
            });
			
			document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        document.getElementById('navbar').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('navbar').classList.remove('fixed-top');
         // remove padding top from body
        document.body.style.paddingTop = '0';
      } 
  });
}); 
 function tourl(url){
	  window.location.href=url;
  }
            </script>
            
    <script type="text/javascript">
      $(document).ready(function () {
          $('#sidebarCollapse').on('click', function () {
              $('#sidebar').toggleClass('active');
          });
      });
  </script>