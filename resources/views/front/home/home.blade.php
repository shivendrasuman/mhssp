@extends('front.layouts.layout')
@section('content')
@include('front.home.home_slider')
<main id="main">
    <!-- ======= About Section ======= -->
    <div id="about" class="about-area area-padding" >
        <div class="container">      
            <div class="row">
                <!-- single-well start-->
                <div class="col-md-8 col-sm-8 col-xs-12" data-aos="zoom-in" style="padding-right: 100px;">
                    <div class="section-headline">
                        <h2 class="sub-heading">About Project</h2>
                    </div>
                    <div class="well-middle text-justify">
                        <div class="single-well">
                            <p>
                                The Meghalaya Health Systems Strengthening Project (MHSSP) is designed to enhance the health system performance and quality of services through strategic investment in the areas of program management, health insurance and quality of service delivery. This project will also invest in iterative learning processes from small scale innovative services that can be meaningfully integrated in the local context. The learnings from the project are expected to shed light on the health systems in other north eastern states, India and neighbouring countries with similar challenges.
                            </p>	
                            <button type="button" class="btn btn-primary floatright mb-10" onclick="tourl('./about-project');"><i class="icofont-arrow-right"></i> Read More</button>
                            <img src="{{asset('assets/img/Meghalaya_Map_Chart.svg')}}" data-aos="zoom-in" class=""  style="max-width: 57%; height:auto;" alt="meghalaya map" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 blue-bg" data-aos="zoom-out">
                    <div class="section-headline">
                        <h2 class="sub-heading white-text">About Meghalya</h2>
                    </div>
                    <div class="well-middle text-justify white-text">
                        <div class="single-well">
                            <p>
                                The Meghalaya Health Systems Strengthening Project (MHSSP) is designed to enhance the health system performance and quality of services through strategic investment in the areas of program management, health insurance and quality of service delivery. This project will also invest in iterative learning processes from small scale innovative services that can be meaningfully integrated in the local context. The learnings from the project are expected to shed light on the health systems in other north eastern states, India and neighbouring countries with similar challenges.
                            </p>	
                            <button type="button" class="btn btn-primary floatright mb-10" onclick="tourl('./about-meghalaya.php');"><i class="icofont-arrow-right"></i> Read More</button>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div><!-- End About Section -->
    <!-- Start Project Activites Section -->
    <div class="container">      
        <div class="row">
            <!-- single-well start-->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h2>Project Activites</h2>
                </div>
                <div class="project-activites-carousel owl-carousel owl-theme "  data-aos="fade-down"
                     data-aos-easing="linear"
                     data-aos-duration="1500">				
                    <div class="item">					 
                        <div class="card h-100">
                            <img src="assets/img/civil-works.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Civil Works</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary btn-sm"><i class="icofont-arrow-right"></i> Read More</a>
                            </div>
                        </div>				
                    </div>
                    <div class="item">					 
                        <div class="card h-100" >
                            <img src="{{asset('assets/img/biomedical-waste-management.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Bio-Medical Waste Management</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary btn-sm"><i class="icofont-arrow-right"></i> Read More</a>
                            </div>
                        </div>				
                    </div>
                    <div class="item">					 
                        <div class="card h-100" >
                            <img src="{{asset('assets/img/business-consulting-services.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Consultancies</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary btn-sm"><i class="icofont-arrow-right"></i> Read More</a>
                            </div>
                        </div>				
                    </div>
                    <div class="item">					 
                        <div class="card h-100" >
                            <img src="{{asset('assets/img/goods-equpiments.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Goods & Equipment</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary btn-sm"> <i class="icofont-arrow-right"></i> Read More</a>
                            </div>
                        </div>				
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- End Project Activities-->
    <!--News & Events Start -->
    <div id="news-events" class="news-events-heading-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>News & Events</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="news-events-area">
        <div class="container">      
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">		   
                    <div class="news-events-carousel owl-carousel owl-theme" data-aos="fade-left"     data-aos-offset="300" data-aos-easing="ease-in-sine">				
                        <div class="item">					 
                            <div class="card h-100" >
                                <div class="embed-responsive embed-responsive-16by9 text-center" >
                                    <img alt="Card image cap" class="card-img-top embed-responsive-item rounded-circle " src="{{asset('assets/img/civil-works-news-events.png')}}"  />
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Civil Works</h5>
                                    <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="icofont-arrow-right"></i> Read More</a>
                                </div>
                            </div>				
                        </div>
                        <div class="item">					 
                            <div class="card h-100" >
                                <div class="embed-responsive embed-responsive-16by9 text-center" >
                                    <img alt="Card image cap" class="card-img-top embed-responsive-item rounded-circle " src="{{asset('assets/img/events-1.jpeg')}}"  />
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Bio-Medical Waste Management</h5>
                                    <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="icofont-arrow-right"></i> Read More</a>
                                </div>
                            </div>				
                        </div>
                        <div class="item">					 
                            <div class="card h-100" >
                                <div class="embed-responsive embed-responsive-16by9 text-center" >
                                    <img alt="Card image cap" class="card-img-top embed-responsive-item rounded-circle " src="{{asset('assets/img/civil-works-news-events.png')}}"  />
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title ">Consultancies</h5>
                                    <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="icofont-arrow-right"></i> Read More</a>
                                </div>
                            </div>				
                        </div>
                        <div class="item">					 
                            <div class="card h-100" >
                                <div class="embed-responsive embed-responsive-16by9 text-center" >
                                    <img alt="Card image cap" class="card-img-top embed-responsive-item rounded-circle " src="{{asset('assets/img/events-1.jpeg')}}"  />
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Goods & Equipment</h5>
                                    <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="icofont-arrow-right"></i> Read More</a>
                                </div>
                            </div>				
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    <!--News & Events End -->
    <!-- Meghalaya Health Facilities Start -->
    <div id="" class="health-facilities-heading-area area-padding-tb">
        <!-- <div class="container">-->
        <div class="row">
            <!--<div class="col-md-4 col-sm-4 col-xs-4"  data-aos="zoom-in">
                    <h4 class="health-facilites-text">Meghalya Health Facilities</h4>
            </div>-->
            <div class="col-md-12 col-sm-12 col-xs-12" data-aos="fade-right">
                <img src="assets/img/health-facilities.png')}}" class="img-fluid" >
            </div>
        </div>
        <!--</div>-->
    </div>
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1NYlYS3y-8GlV5oSEsOJVTrim1TPFlJlr&center=25.567938,90.412735&z=9" width="100%" height="480"></iframe>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <!-- Meghalaya Health Facilities End -->
    <!-- Tender Procuremnet Start -->
    <div id="tender-heading" class="tender-heading area-padding-tb">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12"  data-aos="zoom-in">
                <h4 class="tender-facilites-text">Tender/Recruitments/Others</h4>
            </div>				
        </div>

    </div>
    <div id="tender-area" class="tender-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12"  data-aos="zoom-in">
                    <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3" id="tender-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-tenders-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tenders" type="button" role="tab" aria-controls="v-pills-tenders" aria-selected="true">Tenders</button>
                            <button class="nav-link" id="v-pills-recruitments-tab" data-bs-toggle="pill" data-bs-target="#v-pills-recruitments" type="button" role="tab" aria-controls="v-pills-recruitments" aria-selected="false">Recruitments</button>
                            <button class="nav-link" id="v-pills-others-tab" data-bs-toggle="pill" data-bs-target="#v-pills-others" type="button" role="tab" aria-controls="v-pills-others" aria-selected="false">Others</button>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent">
                            <!-- Tenders Start-->
                            <div class="tab-pane fade show active" id="v-pills-tenders" role="tabpanel" aria-labelledby="v-pills-tenders-tab">
                                <marquee id="home_notice_tender_list" behavior="scroll" direction="up" height="250" loop="true" scrolldelay="550" scrollamount="" onmouseover="document.all.home_notice_tender_list.stop()" onmouseout="document.all.home_notice_tender_list.start()">
                                    <ul class="tab-ul-list">
                                        <li>
                                            <a href="http://nhmmeghalaya.nic.in/tenders/MHSSP/Notice%20for%20Award%20of%20Contract%20under%20MHSSP.pdf" target="_blank" title=" Notice for Award of Contract under MHSSP">   Notice for Award of Contract under MHSSP <img src="assets/img/newCircle.gif"></a>
                                        </li>
                                        <li>
                                            <a href="http://nhmmeghalaya.nic.in/tenders/MHSSP/RFQ%20for%20procuring%20Bolero%20Neo%20under%20MHSSP.pdf" target="_blank" title="RFQ for procuring Bolero Neo under MHSSP"> RFQ for procuring Bolero Neo under MHSSP <img src="assets/img/newCircle.gif"></a>
                                        </li>
                                        <li>
                                            <a href="http://nhmmeghalaya.nic.in/tenders/MHSSP/Advertisement%20Notice%20for%20Procurement%20of%20Bolero.pdf" target="_blank" title="Advertisement Notice for Procurement of Bolero">  Advertisement Notice for Procurement of Bolero <img src="assets/img/newCircle.gif"></a>
                                        </li>
                                        <li>
                                            <a href="http://nhmmeghalaya.nic.in/tenders/MHSSP/Signed%20Minutes%20of%20the%20opening%20of%20bids%20for%20MHSSp%20Office.pdf" target="_blank" title="Signed Minutes of the opening of bids for MHSSp Office">  Signed Minutes of the opening of bids for MHSSp Office <img src="assets/img/newCircle.gif"></a>
                                        </li>
                                        <li>
                                            <a href="http://nhmmeghalaya.nic.in/tenders/MHSSP/Notice%20for%20opening%20of%20bids%20for%20MHSSP%20Office.pdf" target="_blank" title="Notice for opening of bids for MHSSP Office">  Notice for opening of bids for MHSSP Office <img src="assets/img/newCircle.gif"></a>
                                        </li>
                                    </ul>
                                </marquee>
                                <button type="button" class="btn btn-primary" onclick="tourl('./notice-tender');"><i class="icofont-arrow-right"></i> View All</button>                           

                            </div>
                            <!-- Tenders End-->
                            <div class="tab-pane fade" id="v-pills-recruitments" role="tabpanel" aria-labelledby="v-pills-recruitments-tab">
                                <marquee id="home_notice_recruitment_list" behavior="scroll" direction="up" height="250" loop="true" scrolldelay="550" scrollamount="" onmouseover="document.all.home_notice_requirements_list.stop()" onmouseout="document.all.home_notice_requirements_list.start()">

                                    <ul class="tab-ul-list">
                                        <li>
                                            <a href="http://nhmmeghalaya.nic.in/recruitment/MHSSP%20Recruitment/List%20of%20qualified%20candidates%20for%20personal%20interview%20wrt%20the%20post%20of%20Project%20Architect.pdf" target="_blank" title="List of qualified candidates for personal interview wrt the post of Project Architect">   List of qualified candidates for personal interview wrt the post of Project Architect <img src="assets/img/newCircle.gif"></a>
                                        </li>
                                        <li>
                                            <a href="http://nhmmeghalaya.nic.in/recruitment/MHSSP%20Recruitment/List%20of%20successful%20candidates%20for%20the%20post%20of%20Training%20Consultant,%20MHSSP.pdf" target="_blank" title="List of successful candidates for the post of Training Consultant, MHSSP"> List of successful candidates for the post of Training Consultant, MHSSP <img src="assets/img/newCircle.gif"></a>
                                        </li>
                                        <li>
                                            <a href="http://nhmmeghalaya.nic.in/recruitment/MHSSP%20Recruitment/List%20of%20qualified%20candidates%20for%20personal%20interview%20regarding%20the%20post%20of%20Training%20Consultant,%20MHSSP.pdf" target="_blank" title="List of qualified candidates for personal interview regarding the post of Training Consultant, MHSSP">  List of qualified candidates for personal interview regarding the post of Training Consultant, MHSSP <img src="assets/img/newCircle.gif"></a>
                                        </li>
                                        <li>
                                            <a href="http://nhmmeghalaya.nic.in/recruitment/MHSSP%20Recruitment/Advertisement_Notice_for_the_posts_of_Project_Architect_and_Training_Consultant_MHSSP.pdf" target="_blank" title="Advertisement Notice for the posts of Project Architect and Training Consultant-MHSSP">  Advertisement Notice for the posts of Project Architect and Training Consultant-MHSSP <img src="assets/img/newCircle.gif"></a>
                                        </li>
                                        <li>
                                            <a href="http://nhmmeghalaya.nic.in/recruitment/MHSSP%20Recruitment/List%20of%20successful%20candidates%20for%20the%20post%20of%20Project%20Associate,%20MHSSP.pdf" target="_blank" title="List of successful candidates for the post of Project Associate, MHSSP">  List of successful candidates for the post of Project Associate, MHSSP <img src="assets/img/newCircle.gif"></a>
                                        </li>
                                    </ul>
                                </marquee>
                                <button type="button" class="btn btn-primary" onclick="tourl('./notice-recruitment');"><i class="icofont-arrow-right"></i> View All</button>                           

                            </div>
                            <div class="tab-pane fade" id="v-pills-others" role="tabpanel" aria-labelledby="v-pills-others-tab">
                                <marquee id="home_notice_others_list" behavior="scroll" direction="up" height="250" loop="true" scrolldelay="250" scrollamount="" onmouseover="document.all.home_notice_others_list.stop()" onmouseout="document.all.home_notice_others_list.start()">

                                    <ul class="tab-ul-list">
                                        <li>
                                            <a href="http://nhmmeghalaya.nic.in/tenders/MHSSP/Environmental%20and%20Social%20Commitment%20Plan(ESCP)%20-%20MHSSP.pdf" target="_blank" title="Environmental and Social Commitment Plan(ESCP) - MHSSP">   Environmental and Social Commitment Plan(ESCP) - MHSSP <img src="assets/img/newCircle.gif"></a>
                                        </li>
                                        <li>
                                            <a href="http://nhmmeghalaya.nic.in/tenders/MHSSP/ESMF_MHSSP%20Garo_Executive%20Summary.pdf" target="_blank" title="ESMF_MHSSP Garo_Executive Summary"> ESMF_MHSSP Garo_Executive Summary <img src="assets/img/newCircle.gif"></a>
                                        </li>
                                        <li>
                                            <a href="http://nhmmeghalaya.nic.in/tenders/MHSSP/ESMF_MHSSP%20Khasi_Executive%20Summary.pdf" target="_blank" title="ESMF_MHSSP Khasi_Executive Summary">  ESMF_MHSSP Khasi_Executive Summary <img src="assets/img/newCircle.gif"></a>
                                        </li>
                                        <li>
                                            <a href="http://nhmmeghalaya.nic.in/tenders/MHSSP/Stakeholders%20Engagement%20Plan_Megh_HSSP.pdf" target="_blank" title="Stakeholders Engagement Plan_Megh_HSSP"> Stakeholders Engagement Plan_Megh_HSSP <img src="assets/img/newCircle.gif"></a>
                                        </li>
                                        <li>
                                            <a href="http://nhmmeghalaya.nic.in/tenders/MHSSP/Environmental%20&%20Social%20Management%20Framework_Megh_HSSP.pdf" target="_blank" title="Environmental & Social Management Framework_Megh_HSSP"> Environmental & Social Management Framework_Megh_HSSP <img src="assets/img/newCircle.gif"></a>
                                        </li>
                                    </ul>
                                </marquee>
                                <button type="button" class="btn btn-primary" onclick="tourl('./notice-other');"><i class="icofont-arrow-right"></i> View All</button>                           

                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>

    <!-- Tender Procuremnet Start -->
    <!-- Help Desk Start-->
    <!-- Tender Procuremnet Start -->
    <div id="helpdesk-heading" class="helpdesk-heading area-padding-tb">	
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12"  data-aos="zoom-in">
                <h4 class="helpdesk-facilites-text">Help Desk</h4>
            </div>				
        </div>

    </div>
    <div id="helpdesk-area" class="helpdesk-area ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12"  data-aos="zoom-in">
                    <div class="row">

                        <div class="col-sm col-sm-offset-1 helpdesk-content">
                            <dl class="row">
                                <dt class="col-sm-4 helpdesk-text"><img src="assets/img/phone-icon.png">  Police Control Room</dt>
                                <dd class="col-sm-8 helpdesk-text-number">100 / 2224400/ 2222277</dd>
                                <hr>
                            </dl>

                            <dl class="row">
                                <dt class="col-sm-4 helpdesk-text"><img src="assets/img/phone-icon.png"> Helpline</dt>
                                <dd class="col-sm-8 helpdesk-text-number">1800-0000-1892</dd>
                                <hr>
                            </dl>
                            <dl class="row">
                                <dt class="col-sm-4 helpdesk-text"><img src="assets/img/ambulance-icon.png"> Ambulance</dt>
                                <dd class="col-sm-8 helpdesk-text-number">108 / 2224100 / 2223889</dd>
                                <hr>
                            </dl>
                            <dl class="row">
                                <dt class="col-sm-4 helpdesk-text"><img src="assets/img/hospital-icon.png"> Hospitals</dt>
                                <dd class="col-sm-8 helpdesk-text-number">0364-2224100</dd>
                                <hr>
                            </dl>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12"  data-aos="zoom-in">
                    <img src="assets/img/help.png" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
    <!--Help Desk End -->

    <div id="important-link-crowl" class="">  
        <div class="container">    
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 carousel-wrap">
                    <div class="footer-carousel owl-carousel owl-theme">
                        <div class="item d-flex align-items-center">
                            <a href="https://www.mygov.in/aarogya-setu-app/" title="" target="_blank"><img src="assets/img/aarogya.jpg" alt="" /></a>
                        </div>
                        <div class="item d-flex align-items-center">
                            <a href="http://poshanabhiyaan.gov.in/" title="" target="_blank"><img src="assets/img/poshan.jpg" alt="" /></a>
                        </div>
                        <div class="item d-flex align-items-center">
                            <a href="https://www.mohfw.gov.in/" title="" target="_blank"><img src="assets/img/mohw.jpg" alt="" /></a>
                        </div>
                        <div class="item d-flex align-items-center">
                            <a href="https://www.india.gov.in/" title="" target="_blank"><img src="assets/img/indiagov.jpg" alt="" /></a>
                        </div>
                        <div class="item d-flex align-items-center">
                            <a href="http://meghalaya.gov.in/" title="" target="_blank"><img src="assets/img/meg.jpg" alt="" /></a>
                        </div>
                        <div class="item d-flex align-items-center">
                            <a href="http://nhmmeghalaya.nic.in/" title="" target="_blank"><img src="assets/img/nhm.png" alt="" /></a>
                        </div>
                        <div class="item d-flex align-items-center">
                            <a href="http://mhis.org.in/" title="" target="_blank"><img src="assets/img/mhis.jpg" alt="" /></a>
                        </div>
                        <div class="item d-flex align-items-center">
                            <a href="https://dashboard.ehospital.gov.in/" title="" target="_blank"><img src="assets/img/ehospital.jpg" alt="" /></a>
                        </div>
                        <div class="item d-flex align-items-center">
                            <a href="https://ors.gov.in/" title="" target="_blank"><img src="assets/img/ors.jpg" alt="" /></a>
                        </div>
                        <div class="item d-flex align-items-center">
                            <a href="http://megbirthdeath.gov.in/" title="" target="_blank"><img src="assets/img/birth.jpg" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>   
        </div>  
    </div>
</main><!-- End #main -->
@endsection