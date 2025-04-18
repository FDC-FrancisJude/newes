@extends('layouts.app')

@section('title', 'Dashboard | Madridejos Community College')

@section('content')
    <main class="main light-background">
        
        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <nav class="breadcrumbs">
                <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li class="current">Dashboard</li>
                </ol>
                </div>
            </nav>
        </div>

        <section id="profile" class="profile section">
            <div class="container container pb-3 flex-grow-1 overflow-auto">
                <div class="row flex-grow-sm-1 flex-grow-0" style="overflow: hidden;">
                    @include('profile.inc.sidebar')
                    <main class="col overflow-auto h-100" data-aos="fade-up" data-aos-delay="200">   
                        <div class="bg-light border rounded-3 p-2" >                
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="cbp_tmtimeline">
                                            <li>
                                                <time class="cbp_tmtime" datetime="2017-11-04T18:30"><span class="hidden">25/12/2017</span> <span class="large">Now</span></time>
                                                <div class="cbp_tmicon"><i class="zmdi zmdi-account"></i></div>
                                                <div class="cbp_tmlabel empty"> <span>No Activity</span> </div>
                                            </li>
                                            <li>
                                                <time class="cbp_tmtime" datetime="2017-11-04T03:45"><span>03:45 AM</span> <span>Today</span></time>
                                                <div class="cbp_tmicon bg-info"><i class="zmdi zmdi-label"></i></div>
                                                <div class="cbp_tmlabel">
                                                    <h2><a href="javascript:void(0);">Art Ramadani</a> <span>posted a status update</span></h2>
                                                    <p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <time class="cbp_tmtime" datetime="2017-11-03T13:22"><span>01:22 PM</span> <span>Yesterday</span></time>
                                                <div class="cbp_tmicon bg-green"> <i class="zmdi zmdi-case"></i></div>
                                                <div class="cbp_tmlabel">
                                                    <h2><a href="javascript:void(0);">Job Meeting</a></h2>
                                                    <p>You have a meeting at <strong>Laborator Office</strong> Today.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <time class="cbp_tmtime" datetime="2017-10-22T12:13"><span>12:13 PM</span> <span>Two weeks ago</span></time>
                                                <div class="cbp_tmicon bg-blush"><i class="zmdi zmdi-pin"></i></div>
                                                <div class="cbp_tmlabel">
                                                    <h2><a href="javascript:void(0);">Arlind Nushi</a> <span>checked in at</span> <a href="javascript:void(0);">New York</a></h2>
                                                    <blockquote>
                                                        <p class="blockquote blockquote-primary">
                                                            "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."                                    
                                                            <br>
                                                            <small>
                                                                - Isabella
                                                            </small>
                                                        </p>
                                                    </blockquote>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-12">
                                                            <div class="map m-t-10">
                                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.91477011208!2d-74.11976308802028!3d40.69740344230033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1508039335245" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                                                            </div>
                                                        </div>
                                                    </div>        					
                                                </div>
                                            </li>
                                            <li>
                                                <time class="cbp_tmtime" datetime="2017-10-22T12:13"><span>12:13 PM</span> <span>Two weeks ago</span></time>
                                                <div class="cbp_tmicon bg-orange"><i class="zmdi zmdi-camera"></i></div>
                                                <div class="cbp_tmlabel">
                                                    <h2><a href="javascript:void(0);">Eroll Maxhuni</a> <span>uploaded</span> 4 <span>new photos to album</span> <a href="javascript:void(0);">Summer Trip</a></h2>
                                                    <blockquote>Pianoforte principles our unaffected not for astonished travelling are particular.</blockquote>
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6 col-6"><a href="javascript:void(0);"><img src="assets/images/image1.jpg" alt="" class="img-fluid img-thumbnail m-t-30"></a> </div>
                                                        <div class="col-lg-3 col-md-6 col-6"><a href="javascript:void(0);"> <img src="assets/images/image2.jpg" alt="" class="img-fluid img-thumbnail m-t-30"></a> </div>
                                                        <div class="col-lg-3 col-md-6 col-6"><a href="javascript:void(0);"> <img src="assets/images/image3.jpg" alt="" class="img-fluid img-thumbnail m-t-30"> </a> </div>
                                                        <div class="col-lg-3 col-md-6 col-6"><a href="javascript:void(0);"> <img src="assets/images/image4.jpg" alt="" class="img-fluid img-thumbnail m-t-30"> </a> </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <time class="cbp_tmtime" datetime="2017-11-03T13:22"><span>01:22 PM</span> <span>Two weeks ago</span></time>
                                                <div class="cbp_tmicon bg-green"> <i class="zmdi zmdi-case"></i></div>
                                                <div class="cbp_tmlabel">
                                                    <h2><a href="javascript:void(0);">Job Meeting</a></h2>
                                                    <p>You have a meeting at <strong>Laborator Office</strong> Today.</p>                            
                                                </div>
                                            </li>
                                            <li>
                                                <time class="cbp_tmtime" datetime="2017-10-22T12:13"><span>12:13 PM</span> <span>Month ago</span></time>
                                                <div class="cbp_tmicon bg-blush"><i class="zmdi zmdi-pin"></i></div>
                                                <div class="cbp_tmlabel">
                                                    <h2><a href="javascript:void(0);">Arlind Nushi</a> <span>checked in at</span> <a href="javascript:void(0);">Laborator</a></h2>
                                                    <blockquote>Great place, feeling like in home.</blockquote>                            
                                                </div>
                                            </li>
                                        </ul>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>

        </section>
    </main>

    <script>
        let currentStep = 1;
        const maxSteps = 5;

        function updateSteps(stepElements, step) {
            stepElements.forEach((element, index) => {
                if (index < step - 1) {
                    element.className = element.className.replace(/ active| complete|\b$/, ' complete');
                } else if (index === step - 1) {
                    element.className = element.className.replace(/ active| complete|\b$/, ' active');
                } else {
                    element.className = element.className.replace(/ active| complete|\b$/, '');
                }
            });
        }

        function nextStep() {
            if (currentStep < maxSteps) {
                currentStep++;
                updateSteps(document.querySelectorAll('.step-vertical'), currentStep);
            }
        }

        function previousStep() {
            if (currentStep > 1) {
                currentStep--;
                updateSteps(document.querySelectorAll('.step-vertical'), currentStep);
            }
        }
    </script>
@endsection