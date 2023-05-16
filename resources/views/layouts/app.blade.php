<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <title>SocialV | Responsive Bootstrap 5 Admin Dashboard Template</title>

        <link rel="shortcut icon" href="{{ asset('/images/favicon.ico') }}" />
        <link rel="stylesheet" href="{{ asset('/css/libs.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('/css/socialv.css?v=4.0.0') }}" />
        <link
            rel="stylesheet"
            href="{{ asset('/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('/vendor/remixicon/fonts/remixicon.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('/vendor/vanillajs-datepicker/dist/css/datepicker.min.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('/vendor/font-awesome-line-awesome/css/all.min.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}"
        />
    </head>
    <body class="  ">

        @yield('content')

        <footer class="iq-footer bg-white">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="../dashboard/privacy-policy.html"
                                    >Privacy Policy</a
                                >
                            </li>
                            <li class="list-inline-item">
                                <a href="../dashboard/terms-of-service.html"
                                    >Terms of Use</a
                                >
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-end">
                        Copyright 2020 <a href="#">SocialV</a> All Rights
                        Reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- Backend Bundle JavaScript -->
        <script src="../assets/js/libs.min.js"></script>
        <!-- slider JavaScript -->
        <script src="../assets/js/slider.js"></script>
        <!-- masonry JavaScript -->
        <script src="../assets/js/masonry.pkgd.min.js"></script>
        <!-- SweetAlert JavaScript -->
        <script src="../assets/js/enchanter.js"></script>
        <!-- SweetAlert JavaScript -->
        <script src="../assets/js/sweetalert.js"></script>
        <!-- app JavaScript -->
        <script src="../assets/js/charts/weather-chart.js"></script>
        <script src="../assets/js/app.js"></script>
        <script src="../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
        <script src="../assets/js/lottie.js"></script>

        <!-- offcanvas start -->

        <div
            class="offcanvas offcanvas-bottom share-offcanvas"
            tabindex="-1"
            id="share-btn"
            aria-labelledby="shareBottomLabel"
        >
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="shareBottomLabel">Share</h5>
                <button
                    type="button"
                    class="btn-close text-reset"
                    data-bs-dismiss="offcanvas"
                    aria-label="Close"
                ></button>
            </div>
            <div class="offcanvas-body small">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="text-center me-3 mb-3">
                        <img
                            src="../assets/images/icon/08.png"
                            class="img-fluid rounded mb-2"
                            alt=""
                        />
                        <h6>Facebook</h6>
                    </div>
                    <div class="text-center me-3 mb-3">
                        <img
                            src="../assets/images/icon/09.png"
                            class="img-fluid rounded mb-2"
                            alt=""
                        />
                        <h6>Twitter</h6>
                    </div>
                    <div class="text-center me-3 mb-3">
                        <img
                            src="../assets/images/icon/10.png"
                            class="img-fluid rounded mb-2"
                            alt=""
                        />
                        <h6>Instagram</h6>
                    </div>
                    <div class="text-center me-3 mb-3">
                        <img
                            src="../assets/images/icon/11.png"
                            class="img-fluid rounded mb-2"
                            alt=""
                        />
                        <h6>Google Plus</h6>
                    </div>
                    <div class="text-center me-3 mb-3">
                        <img
                            src="../assets/images/icon/13.png"
                            class="img-fluid rounded mb-2"
                            alt=""
                        />
                        <h6>In</h6>
                    </div>
                    <div class="text-center me-3 mb-3">
                        <img
                            src="../assets/images/icon/12.png"
                            class="img-fluid rounded mb-2"
                            alt=""
                        />
                        <h6>YouTube</h6>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
