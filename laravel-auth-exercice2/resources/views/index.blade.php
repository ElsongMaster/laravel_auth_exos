<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Freelancer - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

         <!-- Boxicons CDN Link -->
        {{-- <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'> --}}
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
         
        <script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>
        
        <!-- Font Awesome icons (free version)-->
        <script
            src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"
            crossorigin="anonymous"
        ></script>
        <!-- Google fonts-->
        <link
            href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
            rel="stylesheet"
            type="text/css"
        />
        <link
            href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic"
            rel="stylesheet"
            type="text/css"
        />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        
        <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <div class="container-fluid d-flex justify-content-end mb-5 me-5 bg-secondary ">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block me-5">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline text-light ">{{Auth::user()!==NULL?Auth::user()->name:""}}</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline me-3 text-light">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline text-light">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        @include('partials.navBar')
        <div class="container w-75">
            @foreach ( $titres as $titre)
                
            <!-- Masthead-->
            @include('partials.header')
    
            <!-- Portfolio Section-->
            @include('partials.sections.portfolio')
    
            <!-- About Section-->
            @include('partials.sections.about')
    
            <!-- Contact Section-->
            @include('partials.sections.contact')
    
            @endforeach

            <!-- Footer-->
            <footer class="footer text-center">
                <div class="container">
                    <div class="row">
                        <!-- Footer Location-->
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <h4 class="text-uppercase mb-4">Location</h4>
                            <p class="lead mb-0">
                                2215 John Daniel Drive
                                <br />
                                Clark, MO 65243
                            </p>
                        </div>
                        <!-- Footer Social Icons-->
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <h4 class="text-uppercase mb-4">Around the Web</h4>
                            <a
                                class="btn btn-outline-light btn-social mx-1"
                                href="#!"
                                ><i class="fab fa-fw fa-facebook-f"></i
                            ></a>
                            <a
                                class="btn btn-outline-light btn-social mx-1"
                                href="#!"
                                ><i class="fab fa-fw fa-twitter"></i
                            ></a>
                            <a
                                class="btn btn-outline-light btn-social mx-1"
                                href="#!"
                                ><i class="fab fa-fw fa-linkedin-in"></i
                            ></a>
                            <a
                                class="btn btn-outline-light btn-social mx-1"
                                href="#!"
                                ><i class="fab fa-fw fa-dribbble"></i
                            ></a>
                        </div>
                        <!-- Footer About Text-->
                        <div class="col-lg-4">
                            <h4 class="text-uppercase mb-4">About Freelancer</h4>
                            <p class="lead mb-0">
                                Freelance is a free to use, MIT licensed Bootstrap
                                theme created by
                                <a href="http://startbootstrap.com"
                                    >Start Bootstrap</a
                                >
                                .
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Copyright Section-->
            <div class="copyright py-4 text-center text-white">
                <div class="container">
                    <small>Copyright &copy; Your Website 2021</small>
                </div>
            </div>
            <!-- Portfolio Modals-->
            <!-- Portfolio Modal 1-->
            <div
                class="portfolio-modal modal fade"
                id="portfolioModal1"
                tabindex="-1"
                aria-labelledby="portfolioModal1"
                aria-hidden="true"
            >
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                            <button
                                class="btn-close"
                                type="button"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body text-center pb-5">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <!-- Portfolio Modal - Title-->
                                        <h2
                                            class="
                                                portfolio-modal-title
                                                text-secondary text-uppercase
                                                mb-0
                                            "
                                        >
                                            Log Cabin
                                        </h2>
                                        <!-- Icon Divider-->
                                        <div class="divider-custom">
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-icon">
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="divider-custom-line"></div>
                                        </div>
                                        <!-- Portfolio Modal - Image-->
                                        <img
                                            class="img-fluid rounded mb-5"
                                            src="{{asset('assets/img/portfolio/cabin.png')}}"
                                            alt="..."
                                        />
                                        <!-- Portfolio Modal - Text-->
                                        <p class="mb-4">
                                            Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Mollitia neque
                                            assumenda ipsam nihil, molestias magnam,
                                            recusandae quos quis inventore quisquam
                                            velit asperiores, vitae? Reprehenderit
                                            soluta, eos quod consequuntur itaque.
                                            Nam.
                                        </p>
                                        <button
                                            class="btn btn-primary"
                                            href="#!"
                                            data-bs-dismiss="modal"
                                        >
                                            <i class="fas fa-times fa-fw"></i>
                                            Close Window
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio Modal 2-->
            <div
                class="portfolio-modal modal fade"
                id="portfolioModal2"
                tabindex="-1"
                aria-labelledby="portfolioModal2"
                aria-hidden="true"
            >
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                            <button
                                class="btn-close"
                                type="button"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body text-center pb-5">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <!-- Portfolio Modal - Title-->
                                        <h2
                                            class="
                                                portfolio-modal-title
                                                text-secondary text-uppercase
                                                mb-0
                                            "
                                        >
                                            Tasty Cake
                                        </h2>
                                        <!-- Icon Divider-->
                                        <div class="divider-custom">
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-icon">
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="divider-custom-line"></div>
                                        </div>
                                        <!-- Portfolio Modal - Image-->
                                        <img
                                            class="img-fluid rounded mb-5"
                                            src="{{asset('assets/img/portfolio/cake.png')}}"
                                            alt="..."
                                        />
                                        <!-- Portfolio Modal - Text-->
                                        <p class="mb-4">
                                            Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Mollitia neque
                                            assumenda ipsam nihil, molestias magnam,
                                            recusandae quos quis inventore quisquam
                                            velit asperiores, vitae? Reprehenderit
                                            soluta, eos quod consequuntur itaque.
                                            Nam.
                                        </p>
                                        <button
                                            class="btn btn-primary"
                                            href="#!"
                                            data-bs-dismiss="modal"
                                        >
                                            <i class="fas fa-times fa-fw"></i>
                                            Close Window
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio Modal 3-->
            <div
                class="portfolio-modal modal fade"
                id="portfolioModal3"
                tabindex="-1"
                aria-labelledby="portfolioModal3"
                aria-hidden="true"
            >
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                            <button
                                class="btn-close"
                                type="button"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body text-center pb-5">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <!-- Portfolio Modal - Title-->
                                        <h2
                                            class="
                                                portfolio-modal-title
                                                text-secondary text-uppercase
                                                mb-0
                                            "
                                        >
                                            Circus Tent
                                        </h2>
                                        <!-- Icon Divider-->
                                        <div class="divider-custom">
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-icon">
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="divider-custom-line"></div>
                                        </div>
                                        <!-- Portfolio Modal - Image-->
                                        <img
                                            class="img-fluid rounded mb-5"
                                            src="{{asset('assets/img/portfolio/circus.png')}}"
                                            alt="..."
                                        />
                                        <!-- Portfolio Modal - Text-->
                                        <p class="mb-4">
                                            Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Mollitia neque
                                            assumenda ipsam nihil, molestias magnam,
                                            recusandae quos quis inventore quisquam
                                            velit asperiores, vitae? Reprehenderit
                                            soluta, eos quod consequuntur itaque.
                                            Nam.
                                        </p>
                                        <button
                                            class="btn btn-primary"
                                            href="#!"
                                            data-bs-dismiss="modal"
                                        >
                                            <i class="fas fa-times fa-fw"></i>
                                            Close Window
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio Modal 4-->
            <div
                class="portfolio-modal modal fade"
                id="portfolioModal4"
                tabindex="-1"
                aria-labelledby="portfolioModal4"
                aria-hidden="true"
            >
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                            <button
                                class="btn-close"
                                type="button"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body text-center pb-5">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <!-- Portfolio Modal - Title-->
                                        <h2
                                            class="
                                                portfolio-modal-title
                                                text-secondary text-uppercase
                                                mb-0
                                            "
                                        >
                                            Controller
                                        </h2>
                                        <!-- Icon Divider-->
                                        <div class="divider-custom">
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-icon">
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="divider-custom-line"></div>
                                        </div>
                                        <!-- Portfolio Modal - Image-->
                                        <img
                                            class="img-fluid rounded mb-5"
                                            src="{{asset('assets/img/portfolio/game.png')}}"
                                            alt="..."
                                        />
                                        <!-- Portfolio Modal - Text-->
                                        <p class="mb-4">
                                            Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Mollitia neque
                                            assumenda ipsam nihil, molestias magnam,
                                            recusandae quos quis inventore quisquam
                                            velit asperiores, vitae? Reprehenderit
                                            soluta, eos quod consequuntur itaque.
                                            Nam.
                                        </p>
                                        <button
                                            class="btn btn-primary"
                                            href="#!"
                                            data-bs-dismiss="modal"
                                        >
                                            <i class="fas fa-times fa-fw"></i>
                                            Close Window
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio Modal 5-->
            <div
                class="portfolio-modal modal fade"
                id="portfolioModal5"
                tabindex="-1"
                aria-labelledby="portfolioModal5"
                aria-hidden="true"
            >
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                            <button
                                class="btn-close"
                                type="button"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body text-center pb-5">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <!-- Portfolio Modal - Title-->
                                        <h2
                                            class="
                                                portfolio-modal-title
                                                text-secondary text-uppercase
                                                mb-0
                                            "
                                        >
                                            Locked Safe
                                        </h2>
                                        <!-- Icon Divider-->
                                        <div class="divider-custom">
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-icon">
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="divider-custom-line"></div>
                                        </div>
                                        <!-- Portfolio Modal - Image-->
                                        <img
                                            class="img-fluid rounded mb-5"
                                            src="{{asset('assets/img/portfolio/safe.png')}}"
                                            alt="..."
                                        />
                                        <!-- Portfolio Modal - Text-->
                                        <p class="mb-4">
                                            Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Mollitia neque
                                            assumenda ipsam nihil, molestias magnam,
                                            recusandae quos quis inventore quisquam
                                            velit asperiores, vitae? Reprehenderit
                                            soluta, eos quod consequuntur itaque.
                                            Nam.
                                        </p>
                                        <button
                                            class="btn btn-primary"
                                            href="#!"
                                            data-bs-dismiss="modal"
                                        >
                                            <i class="fas fa-times fa-fw"></i>
                                            Close Window
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio Modal 6-->
            <div
                class="portfolio-modal modal fade"
                id="portfolioModal6"
                tabindex="-1"
                aria-labelledby="portfolioModal6"
                aria-hidden="true"
            >
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                            <button
                                class="btn-close"
                                type="button"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body text-center pb-5">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <!-- Portfolio Modal - Title-->
                                        <h2
                                            class="
                                                portfolio-modal-title
                                                text-secondary text-uppercase
                                                mb-0
                                            "
                                        >
                                            Submarine
                                        </h2>
                                        <!-- Icon Divider-->
                                        <div class="divider-custom">
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-icon">
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="divider-custom-line"></div>
                                        </div>
                                        <!-- Portfolio Modal - Image-->
                                        <img
                                            class="img-fluid rounded mb-5"
                                            src="assets/img/portfolio/submarine.png"
                                            alt="..."
                                        />
                                        <!-- Portfolio Modal - Text-->
                                        <p class="mb-4">
                                            Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Mollitia neque
                                            assumenda ipsam nihil, molestias magnam,
                                            recusandae quos quis inventore quisquam
                                            velit asperiores, vitae? Reprehenderit
                                            soluta, eos quod consequuntur itaque.
                                            Nam.
                                        </p>
                                        <button
                                            class="btn btn-primary"
                                            href="#!"
                                            data-bs-dismiss="modal"
                                        >
                                            <i class="fas fa-times fa-fw"></i>
                                            Close Window
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="js/scripts.js"></script>
            <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
            <!-- * *                               SB Forms JS                               * *-->
            <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
            <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
            <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        </div>
    </body>
</html>
