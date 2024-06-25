<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Libbre Creative</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('/assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/lib/owlcarousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <style>
        
    </style>
</head>

<body>
    <div id="loader">
        <span id="text">
            <img src="{{asset('/assets/img/footer_logo.png')}}" alt="logo_footer.png" width="150">
        </span>
        <span id="percent">0%</span>
        <div id="bar">
            <div class="progress"></div>
        </div>
    </div>

    <div class="content">
        @include('layouts.header')
        @include('sections.about-services')

        <div class="container-fluid mt-5">
            <div class="row p-4 justify-content-center" style="background: #1D1D1D">
                <div class="col-12 text-center">
                    <h3 class="text-white">WE GROW TOGETHER</h3>
                </div>
            </div>
        </div>

        @include('sections.portfolio')

        @include('sections.organize-process')

        @include('sections.why-us')

        @include('sections.team')

        @include('sections.contact-us')

        <div class="container-flue" style="background-color: #1D1D1D; padding-top: 40px;" id="page-content">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-md-12">
                        <img src="{{asset('/assets/img/footer_logo.png')}}" alt="logo_footer.png" width="150">
                        <div class="underline my-3"></div>
                        <div class="row justify-content-center">
                            <div class="col-xl-2 col-md-2 col-sm-12">
                                <a href="" class="text-white font-weight-400">Categories</a>
                            </div>
                            <div class="col-xl-2 col-md-2 col-sm-12">
                                <a href="" class="text-white font-weight-400">About</a>
                            </div>
                            <div class="col-xl-2 col-md-2 col-sm-12">
                                <a href="" class="text-white font-weight-400">Services</a>
                            </div>
                            <div class="col-xl-2 col-md-2 col-sm-12">
                                <a href="" class="text-white font-weight-400">Portfolio</a>
                            </div>
                            <div class="col-xl-2 col-md-2 col-sm-12">
                                <a href="" class="text-white font-weight-400">Pages</a>
                            </div>
                            <div class="col-xl-2 col-md-2 col-sm-12">
                                <a href="" class="text-white font-weight-400">Support</a>
                            </div>
                        </div>
                        <p class="text-white font-weight-300 my-3">
                            Lorem ipsum Neque porro quisquam est qui do lorem ipsum quia dolor sit amet, Neque porro
                            elit
                            NeDque
                        </p>
                        <div class="text-white icon-footer mb-5 mt-5">
                            <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 0.0800781C4.5 0.0800781 0 4.57008 0 10.1001C0 15.1001 3.66 19.2501 8.44 20.0001V13.0001H5.9V10.1001H8.44V7.89008C8.44 5.38008 9.93 4.00008 12.22 4.00008C13.31 4.00008 14.45 4.19008 14.45 4.19008V6.66008H13.19C11.95 6.66008 11.56 7.43008 11.56 8.22008V10.1001H14.34L13.89 13.0001H11.56V20.0001C13.9164 19.6279 16.0622 18.4256 17.6099 16.6101C19.1576 14.7947 20.0054 12.4857 20 10.1001C20 4.57008 15.5 0.0800781 10 0.0800781Z"
                                    fill="white" />
                            </svg>

                            <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.8 0H14.2C17.4 0 20 2.6 20 5.8V14.2C20 15.7383 19.3889 17.2135 18.3012 18.3012C17.2135 19.3889 15.7383 20 14.2 20H5.8C2.6 20 0 17.4 0 14.2V5.8C0 4.26174 0.61107 2.78649 1.69878 1.69878C2.78649 0.61107 4.26174 0 5.8 0ZM5.6 2C4.64522 2 3.72955 2.37928 3.05442 3.05442C2.37928 3.72955 2 4.64522 2 5.6V14.4C2 16.39 3.61 18 5.6 18H14.4C15.3548 18 16.2705 17.6207 16.9456 16.9456C17.6207 16.2705 18 15.3548 18 14.4V5.6C18 3.61 16.39 2 14.4 2H5.6ZM15.25 3.5C15.5815 3.5 15.8995 3.6317 16.1339 3.86612C16.3683 4.10054 16.5 4.41848 16.5 4.75C16.5 5.08152 16.3683 5.39946 16.1339 5.63388C15.8995 5.8683 15.5815 6 15.25 6C14.9185 6 14.6005 5.8683 14.3661 5.63388C14.1317 5.39946 14 5.08152 14 4.75C14 4.41848 14.1317 4.10054 14.3661 3.86612C14.6005 3.6317 14.9185 3.5 15.25 3.5ZM10 5C11.3261 5 12.5979 5.52678 13.5355 6.46447C14.4732 7.40215 15 8.67392 15 10C15 11.3261 14.4732 12.5979 13.5355 13.5355C12.5979 14.4732 11.3261 15 10 15C8.67392 15 7.40215 14.4732 6.46447 13.5355C5.52678 12.5979 5 11.3261 5 10C5 8.67392 5.52678 7.40215 6.46447 6.46447C7.40215 5.52678 8.67392 5 10 5ZM10 7C9.20435 7 8.44129 7.31607 7.87868 7.87868C7.31607 8.44129 7 9.20435 7 10C7 10.7956 7.31607 11.5587 7.87868 12.1213C8.44129 12.6839 9.20435 13 10 13C10.7956 13 11.5587 12.6839 12.1213 12.1213C12.6839 11.5587 13 10.7956 13 10C13 9.20435 12.6839 8.44129 12.1213 7.87868C11.5587 7.31607 10.7956 7 10 7Z"
                                    fill="white" />
                            </svg>

                            <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.99 0C4.53 0 0.0800002 4.45 0.0800002 9.91C0.0800002 11.66 0.54 13.36 1.4 14.86L0 20L5.25 18.62C6.7 19.41 8.33 19.83 9.99 19.83C15.45 19.83 19.9 15.38 19.9 9.92C19.9 7.27 18.87 4.78 17 2.91C15.13 1.03 12.64 0 9.99 0ZM10 1.67C12.2 1.67 14.26 2.53 15.82 4.09C17.37 5.65 18.23 7.72 18.23 9.92C18.23 14.46 14.53 18.15 9.99 18.15C8.51 18.15 7.06 17.76 5.8 17L5.5 16.83L2.38 17.65L3.21 14.61L3.01 14.29C2.19 13 1.75 11.47 1.75 9.91C1.76 5.37 5.45 1.67 10 1.67ZM6.48 5.33C6.32 5.33 6.05 5.39 5.82 5.64C5.6 5.89 4.95 6.5 4.95 7.71C4.95 8.93 5.84 10.1 5.95 10.27C6.09 10.44 7.71 12.94 10.2 14C10.79 14.27 11.25 14.42 11.61 14.53C12.2 14.72 12.74 14.69 13.17 14.63C13.65 14.56 14.63 14.03 14.84 13.45C15.05 12.87 15.05 12.38 14.99 12.27C14.92 12.17 14.76 12.11 14.51 12C14.26 11.86 13.04 11.26 12.82 11.18C12.59 11.1 12.45 11.06 12.26 11.3C12.1 11.55 11.62 12.11 11.48 12.27C11.33 12.44 11.19 12.46 10.95 12.34C10.69 12.21 9.89 11.95 8.95 11.11C8.21 10.45 7.72 9.64 7.57 9.39C7.45 9.15 7.56 9 7.68 8.89C7.79 8.78 7.95 8.6 8.05 8.45C8.18 8.31 8.22 8.2 8.3 8.04C8.38 7.87 8.34 7.73 8.28 7.61C8.22 7.5 7.72 6.26 7.51 5.77C7.31 5.29 7.11 5.35 6.95 5.34C6.81 5.34 6.65 5.33 6.48 5.33Z"
                                    fill="white" />
                            </svg>

                            <svg viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.9004 0C17.4308 0 17.9395 0.210714 18.3146 0.585786C18.6897 0.960859 18.9004 1.46957 18.9004 2V16C18.9004 16.5304 18.6897 17.0391 18.3146 17.4142C17.9395 17.7893 17.4308 18 16.9004 18H2.90039C2.36996 18 1.86125 17.7893 1.48618 17.4142C1.1111 17.0391 0.900391 16.5304 0.900391 16V2C0.900391 1.46957 1.1111 0.960859 1.48618 0.585786C1.86125 0.210714 2.36996 0 2.90039 0H16.9004ZM16.4004 15.5V10.2C16.4004 9.33539 16.0569 8.5062 15.4456 7.89483C14.8342 7.28346 14.005 6.94 13.1404 6.94C12.2904 6.94 11.3004 7.46 10.8204 8.24V7.13H8.03039V15.5H10.8204V10.57C10.8204 9.8 11.4404 9.17 12.2104 9.17C12.5817 9.17 12.9378 9.3175 13.2003 9.58005C13.4629 9.8426 13.6104 10.1987 13.6104 10.57V15.5H16.4004ZM4.78039 5.56C5.22595 5.56 5.65327 5.383 5.96833 5.06794C6.28339 4.75288 6.46039 4.32556 6.46039 3.88C6.46039 2.95 5.71039 2.19 4.78039 2.19C4.33217 2.19 3.90232 2.36805 3.58538 2.68499C3.26844 3.00193 3.09039 3.43178 3.09039 3.88C3.09039 4.81 3.85039 5.56 4.78039 5.56ZM6.17039 15.5V7.13H3.40039V15.5H6.17039Z"
                                    fill="white" />
                            </svg>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer id="sticky-footer" style="background: #000;" class="flex-shrink-0 py-4 text-white-50">
            <div class="container text-center">
                <small>Copyright &copy; 2022-2024 Libbre Creative Integrate All rights reserved.</small>
            </div>
        </footer>
    </div>
    {{-- @include('layouts.section') --}}
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('/assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('/assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('/assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('/assets/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('/assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function () {
            const loader = document.getElementById('loader');
            const percent = document.getElementById('percent');
            const progress = document.querySelector('#bar .progress');
            const content = document.querySelector('.content');

            let loaded = 0;
            const interval = setInterval(() => {
                loaded += Math.random() * 5; // Random increment to simulate loading
                percent.textContent = `${Math.floor(loaded)}%`;
                progress.style.width = `${loaded}%`;
                if (loaded >= 100) {
                    clearInterval(interval);
                    loader.style.display = 'none'; // Hide loader after completion
                    content.classList.add('loaded'); // Add class to trigger animations
                }
            }, 100); // Update every 100ms
        });
    </script>
    <script>
        $(document).ready(function () {
            $("#team-carousel").owlCarousel({
                loop:true,
                margin:20,
                nav:true,
                center: true,
                dots: true,
                pagination: true,
                navigation: true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:3
                    }
                }
            })
            $("#serviceCarousel").owlCarousel({
                loop:true,
                margin:20,
                nav:true,
                center: true,
                dots: true,
                pagination: true,
                navigation: true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:3
                    }
                }
            });

            $("#portfolioServices").owlCarousel({
                loop:true,
                margin:20,
                nav:true,
                dots: true,
                center: true,
                pagination: true,
                navigation: true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:3
                    }
                }
            });
            
            $("#comprehensiveService").owlCarousel({
                loop:true,
                margin:20,
                nav:true,
                dots: true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            });
            var elements = $('div.tithome div').length;

            for(var i=0;i < elements; i++){
                $(".tithome").clone().prependTo( ".scorri" );
            };

            var liEle = [];
            var liEle = $(".tithome div");
        });
    </script> --}}
    @yield('script')
</body>

</html>