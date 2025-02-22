<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AFMDC Jobs</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

        <link href="{{asset('css/bootstrap-icons.css')}}" rel="stylesheet">

        <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">

        <link href="{{ asset('css/templatemo-first-portfolio-style.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/photoviewer.css') }}">

        <link href="{{ asset('css/sweetalert2.min.css')}}" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

        <style>
            .section-title-wrap {
                background-color: #294a70;
            }
            .avatar-image {
                background: floralwhite;
            }
            
            .section-padding {
                padding-top: 15px;
                padding-bottom: 120px;
            }

            .avatar-image {
                object-fit: contain;
            }

            .button {
                display: flex;
                justify-content: center;
                align-items: center;    
            }

            .dt-layout-row:first-child {
                display: flex;
                justify-content: flex-start;
                align-items: center;
                padding-top: 20px;
                paddingleft: 10px;
            }

            .dt-layout-cell.dt-layout-start {
                display: none !important;
            }

            .dt-layout-cell.dt-layout-end {
                margin-bottom: 20px;
                margin-left: 20px;
                text-align: center;
            }

            button.dt-paging-button {
                border: 1px solid #294a70;
                margin: 0 5px;
                border-radius: 5px;
                color: #294a70;
                padding: 5px 15px;
            }

            button.dt-paging-button:hover {
                background-color: #294a70;
                color: #fff;
            }

            input#dt-search-0 {
                margin-left: 25px;
                border-radius: 5px;
                border: 1px solid #294a70;
                padding: 5px;
            }

            input#dt-search-0:focus-visible {
                outline: none;
            }

            .back-btn {
                border-color: var(--secondary-color);
                color: var(--secondary-color);
                background: transparent;
                border-width: 2px;
                padding: 8px 22px;
            }

            .back-btn:hover {
                background: var(--secondary-color);
                color: #fff;
            }
            
            #applicants-data_wrapper.dt-container {
                padding: 0 20px;
            }

            .profile-small-title {
                width: 250px;
            }

            .profile-title {
                background-color: white;
            }
/* 
            .profile-thumb {
                overflow: hidden;
                transition: all 0.5s;
            }

            .profile-thumb:hover {
                border: 2px solid var(--secondary-color);
                box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175);
            } */
                        

        </style>    
        
    </head>
    
    <body>

        <section class="preloader">
            <div class="spinner">
                <span class="spinner-rotate"></span>    
            </div>
        </section>

        <main>
            <section class="services section-padding" id="section_3">
                <div class="container">
                    <div class="row">

                        <div class="col-12 mx-auto">
                            <div class="section-title-wrap d-flex justify-content-center align-items-center mb-3">
                                <img src="{{asset('images/logo.png')}}" style='width:100px; height:100px;' class="avatar-image img-fluid" alt="">

                                <h2 class="text-white ms-4 mb-0">AFMDC Jobs</h2>
                            </div>
                            @yield('content')
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="copyright-text-wrap">
                            <p class="mb-0">
                                <span class="copyright-text">Copyright © 2025 <a href="https://afmdc.edu.pk">AFMDC.</a> All rights reserved.</span>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script>
            // Overall Js
            
            // End Overall Js
            
            // Page Specific Js
            @stack('script')
        </script>

        
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/DataTables.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/jquery.sticky.js')}}"></script>
        <script src="{{asset('js/click-scroll.js')}}"></script>
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('js/magnific-popup-options.js')}}"></script>
        <script src="{{asset('js/custom.js')}}"></script>
        <script src="{{asset('js/photoviewer.js')}}"></script>
        <script src="{{asset('js/sweetalert2.all.min.js')}}"></script>

    </body>
</html>