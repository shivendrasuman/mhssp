@extends('admin.layouts.layout')
@section('content')
<main id="main">
    <!-- ======= About Section ======= -->
    <div id="about" class="about-area area-padding" >
        <div class="container">      
            <div class="row">
                <!-- single-well start-->
                <div class="col-md-12 col-sm-12 col-xs-12" data-aos="zoom-in" style="padding-right: 100px;">
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
            </div>

        </div>
    </div>

</main>
     
@endsection