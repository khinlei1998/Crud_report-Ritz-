
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- timepicker -->
        
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <style>
            .bgmain {
            background: url('image/cover5.jpg');
            
            } 
            ul li {
            margin-bottom:1.4rem;
            }
            .pricing-divider {
            border-radius: 20px;
            background: #C64545;
            padding: 1em 0 4em;
            position: relative;
            }
            .blue .pricing-divider{
            background: #2D5772; 
            }
            .green .pricing-divider {
            background: #1AA85C; 
            }
            .yellow .pricing-divider {
            background: #c67345; 
            }
            .purple .pricing-divider {
            background: #90337d; 
            }
            .pink .pricing-divider {
            background: #505050; 
            }
            .red b {
            color:#C64545
            }
            .blue b {
            color:#2D5772
            }
            .green b {
            color:#1AA85C
            }
            .yellow b {
            color:#c67345
            }
            .purple b {
            color:#90337d
            }
            .pink b {
            color:#505050
            }
            
            .pricing-divider-img {
                position: absolute;
                bottom: -2px;
                left: 0;
                width: 100%;
                height: 80px;
            }
            .deco-layer {
                -webkit-transition: -webkit-transform 0.5s;
                transition: transform 0.5s;
            }
            .btn-custom  {
            background:#C64545; color:#fff; border-radius:20px
            }
            .btn-custom1  {
            background:#2D5772; color:#fff; border-radius:20px
            }
            .btn-custom2  {
            background:#1AA85C; color:#fff; border-radius:20px
            }
            .btn-custom3  {
            background:#c67345; color:#fff; border-radius:20px
            }
            .btn-custom4  {
            background:#90337d; color:#fff; border-radius:20px
            }
            .btn-custom5  {
            background:#505050; color:#fff; border-radius:20px
            }
            .img-float {
            width:10px; position:absolute;top:-3.5rem;right:1rem
            }

            .princing-item {
            transition: all 50ms ease-out;
            }
            .princing-item:hover {
            transform: scale(1.05);
            }
            .princing-item:hover .deco-layer--1 {
            -webkit-transform: translate3d(15px, 0, 0);
            transform: translate3d(15px, 0, 0);
            }
            .princing-item:hover .deco-layer--2 {
            -webkit-transform: translate3d(-15px, 0, 0);
            transform: translate3d(-15px, 0, 0);
            }
            
            
            .submit-left h3{
                color:white;
                text-align:center;
                margin-bottom: 2%;
            }
            .submit-left img{
                margin-top: 0%;
                margin-bottom: 0%;
                width: 8%;
            
                -webkit-animation: mover 2s infinite  alternate;
                animation: mover 1s infinite  alternate;
            }
            @-webkit-keyframes mover {
                0% { transform: translateY(0); }
                100% { transform: translateY(-20px); }
            }
            @keyframes mover {
                0% { transform: translateY(0); }
                100% { transform: translateY(-20px); }
            }
           
        </style>

    </head>
    <body>

        <div class="container-fluid bgmain p-5">
            <div class="row pt-2 align-center">
                    <div class="col-md-12 submit-left">
                        <center><img src="{{asset('/image/ritz_logo2.png')}}" alt="logo" /></center>
                        <h3>Report Generator</h3>
                       
                    </div>
            </div>
            <div class="row m-auto text-center w-75">
                
                <div class="col-4 princing-item red">
                <div class="pricing-divider ">
                    <h3 class="text-light p-5">Daily Report Form</h3>
                    <!-- <h4 class="my-0 display-2 text-light font-weight-normal mb-3"><span class="h3">$</span> 120 <span class="h5">/mo</span></h4> -->
                    <svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='20px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
                            <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
                        c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                            <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
                        c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                            <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
                        H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                            <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
                        c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
                    </svg>
                </div>
                <div class="card-body bg-white mt-0 shadow">
                <ul class="list-unstyled mb-5 position-relative">
                    <li>Total <b>53 </b>forms included</li>
                    <!-- <li><b>10 GB</b> of storage</li>
                    <li><b>Free</b>Email support</li>
                    <li><b>Help center access</b></li> -->
                    </ul>
                    <a href="{{ url('daily_rp') }}" style="text-decoration:none;">
                    <button type="submit" class="btn btn-lg btn-block  btn-custom shadow">View Form</button>
                    </a>
                    
                </div>
                </div>
            

                
                
                <div class="col-4 princing-item blue">
                <div class="pricing-divider ">
                    <h3 class="text-light p-5">IT Service Report</h3>
                    <!-- <h4 class="my-0 display-2 text-light font-weight-normal mb-3"><span class="h3">$</span> 250 <span class="h5">/mo</span></h4> -->
                    <svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
                            <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
                        c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                            <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
                        c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                            <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
                        H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                            <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
                        c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
                    </svg>
                </div>

                <div class="card-body bg-white mt-0 shadow">
                    <ul class="list-unstyled mb-5 position-relative">
                    <li>Total <b>100 </b>forms included</li>
                    <!-- <li><b>10 GB</b> of storage</li>
                    <li><b>Free</b>Email support</li>
                    <li><b>Help center access</b></li> -->
                    </ul>
                    <a href="{{ url('daily_rp') }}" style="text-decoration:none;">
                    <button type="submit" class="btn btn-lg btn-block  btn-custom1 shadow">View Form</button>
                    </a>
                </div>
                </div>
                    
                
        
                
                
                
                <div class="col-4 princing-item green">
                <div class="pricing-divider ">
                    <h3 class="text-light p-5">IT Service Request</h3>
                    <!-- <h4 class="my-0 display-2 text-light font-weight-normal mb-3"><span class="h3">$</span> 450 <span class="h5">/mo</span></h4> -->
                    <svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
                            <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
                        c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                            <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
                        c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                            <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
                        H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                            <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
                        c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
                    </svg>
                </div>

                <div class="card-body bg-white mt-0 shadow">
                <ul class="list-unstyled mb-5 position-relative">
                    <li>Total <b>73 </b>forms included</li>
                    <!-- <li><b>10 GB</b> of storage</li>
                    <li><b>Free</b>Email support</li>
                    <li><b>Help center access</b></li> -->
                    </ul>
                    <a href="{{ url('daily_rp') }}" style="text-decoration:none;">
                    <button type="submit" class="btn btn-lg btn-block  btn-custom2 shadow">View Form</button>
                    </a>
                </div>
                </div>
                    
                
                
                
                
                
            </div>
            <div class="row m-auto text-center w-75 pt-4">
                
                <div class="col-4 princing-item yellow">
                <div class="pricing-divider ">
                    <h3 class="text-light p-5">Daily Report Form</h3>
                    <!-- <h4 class="my-0 display-2 text-light font-weight-normal mb-3"><span class="h3">$</span> 120 <span class="h5">/mo</span></h4> -->
                    <svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
                            <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
                        c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                            <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
                        c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                            <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
                        H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                            <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
                        c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
                    </svg>
                </div>
                <div class="card-body bg-white mt-0 shadow">
                <ul class="list-unstyled mb-5 position-relative">
                    <li>Total <b>53 </b>forms included</li>
                    <!-- <li><b>10 GB</b> of storage</li>
                    <li><b>Free</b>Email support</li>
                    <li><b>Help center access</b></li> -->
                    </ul>
                    <a href="{{ url('daily_rp') }}" style="text-decoration:none;">
                    <button type="submit" class="btn btn-lg btn-block  btn-custom3 shadow">View Form</button>
                    </a>
                </div>
                </div>
            

                
                
                <div class="col-4 princing-item purple">
                <div class="pricing-divider ">
                    <h3 class="text-light p-5">IT Service Report</h3>
                    <!-- <h4 class="my-0 display-2 text-light font-weight-normal mb-3"><span class="h3">$</span> 250 <span class="h5">/mo</span></h4> -->
                    <svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
                            <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
                        c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                            <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
                        c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                            <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
                        H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                            <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
                        c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
                    </svg>
                </div>

                <div class="card-body bg-white mt-0 shadow">
                    <ul class="list-unstyled mb-5 position-relative">
                    <li>Total <b>100 </b>forms included</li>
                    <!-- <li><b>10 GB</b> of storage</li>
                    <li><b>Free</b>Email support</li>
                    <li><b>Help center access</b></li> -->
                    </ul>
                    <a href="{{ url('daily_rp') }}" style="text-decoration:none;">
                    <button type="submit" class="btn btn-lg btn-block  btn-custom4 shadow">View Form</button>
                    </a>
                </div>
                </div>
                    
                
        
                
                
                
                <div class="col-4 princing-item pink">
                <div class="pricing-divider ">
                    <h3 class="text-light p-5">IT Service Request</h3>
                    <!-- <h4 class="my-0 display-2 text-light font-weight-normal mb-3"><span class="h3">$</span> 450 <span class="h5">/mo</span></h4> -->
                    <svg class='pricing-divider-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
                            <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
                        c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                            <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
                        c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                            <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
                        H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                            <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
                        c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
                    </svg>
                </div>

                <div class="card-body bg-white mt-0 shadow">
                <ul class="list-unstyled mb-5 position-relative">
                    <li>Total <b>73 </b>forms included</li>
                    <!-- <li><b>10 GB</b> of storage</li>
                    <li><b>Free</b>Email support</li>
                    <li><b>Help center access</b></li> -->
                    </ul>
                    <a href="{{ url('daily_rp') }}" style="text-decoration:none;">
                    <button type="submit" class="btn btn-lg btn-block  btn-custom5 shadow">View Form</button>
                    </a>
                </div>
                </div>
                    
            </div>
        </div>

       
        


    </body>
    
</html>
