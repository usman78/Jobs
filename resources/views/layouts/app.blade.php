<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

        <link href="{{asset('css/bootstrap-icons.css')}}" rel="stylesheet">

        <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">

        <link href="{{ asset('css/templatemo-first-portfolio-style.css')}}" rel="stylesheet">

        <link href="{{ asset('css/sweetalert2.min.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/photoviewer.css') }}">

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
                        

        </style> 

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
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
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                {{-- <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        Dashboard
                    </div>
                </header> --}}
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <script>
            // Overall Js
            
            // End Overall Js
            
            // Page Specific Js
            @stack('script')
        </script>
    </body>
</html>
