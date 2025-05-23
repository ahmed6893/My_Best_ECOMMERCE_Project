<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from freshcart.codescandy.com/dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Nov 2024 06:08:49 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Codescandy" name="author">
    <title>Dashboard eCommerce HTML Template - FreshCart</title>
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/')}}admin/assets/images/favicon/favicon.ico">


    <!-- Libs CSS -->
    <link href="{{asset('/')}}admin/assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="{{asset('/')}}admin/assets/libs/feather-webfont/dist/feather-icons.css" rel="stylesheet">
    <link href="{{asset('/')}}admin/assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet">
    <link href="{{asset('/')}}admin/assets/css/bootstrap-select.css" rel="stylesheet">
    <link href="{{asset('/')}}admin/assets/summernote/summernote.css" rel="stylesheet">
    <style>
        .note-editor {
            border-radius: 8px !important;
            border: 1px solid #ddd !important;
            overflow: hidden;
        }
    </style>

    select[multiple] {
    height: auto !important;
    }

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/css/theme.min.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
    <script>
        $(document).ready(function() {
            $('.selectpicker').selectpicker();
        });
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-M8S4MT3EYG");
    </script>
    <script type="text/javascript">
        (function (c, l, a, r, i, t, y) {
            c[a] =
                c[a] ||
                function () {
                    (c[a].q = c[a].q || []).push(arguments);
                };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "kuc8w5o9nt");
    </script>

</head>

<body>
<!-- main -->
<div>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-glass">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center w-100">
                <div class="d-flex align-items-center">
                    <a class="text-inherit d-block d-xl-none me-4" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-text-indent-right" viewBox="0 0 16 16">
                            <path
                                d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm10.646 2.146a.5.5 0 0 1 .708.708L11.707 8l1.647 1.646a.5.5 0 0 1-.708.708l-2-2a.5.5 0 0 1 0-.708l2-2zM2 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"
                            />
                        </svg>
                    </a>

                    <form role="search">
                        <label for="search" class="form-label visually-hidden">Search</label>
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" id="search" />
                    </form>
                </div>
                <div>
                    <ul class="list-unstyled d-flex align-items-center mb-0 ms-5 ms-lg-0">
                        <li class="dropdown-center">
                            <a class="position-relative btn-icon btn-ghost-secondary btn rounded-circle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-bell fs-5"></i>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger mt-2 ms-n2">
								2
								<span class="visually-hidden">unread messages</span>
							</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg p-0 border-0">
                                <div class="border-bottom p-5 d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="mb-1">Notifications</h5>
                                        <p class="mb-0 small">You have 2 unread messages</p>
                                    </div>
                                    <a href="#!" class="text-muted">
                                        <a href="#" class="btn btn-ghost-secondary btn-icon rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Mark all as read">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check2-all text-success" viewBox="0 0 16 16">
                                                <path
                                                    d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"
                                                />
                                                <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z" />
                                            </svg>
                                        </a>
                                    </a>
                                </div>
                                <div data-simplebar style="height: 250px">
                                    <!-- List group -->
                                    <ul class="list-group list-group-flush notification-list-scroll fs-6">
                                        <!-- List group item -->
                                        <li class="list-group-item px-5 py-4 list-group-item-action active">
                                            <a href="#!" class="text-muted">
                                                <div class="d-flex">
                                                    <img src="{{asset('/')}}admin/assets/images/avatar/avatar-1.jpg" alt="" class="avatar avatar-md rounded-circle" />
                                                    <div class="ms-4">
                                                        <p class="mb-1">
                                                            <span class="text-dark">Your order is placed</span>
                                                            waiting for shipping
                                                        </p>
                                                        <span>
														<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock text-muted" viewBox="0 0 16 16">
															<path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
															<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
														</svg>
														<small class="ms-2">1 minute ago</small>
													</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item px-5 py-4 list-group-item-action">
                                            <a href="#!" class="text-muted">
                                                <div class="d-flex">
                                                    <img src="{{asset('/')}}admin/assets/images/avatar/avatar-5.jpg" alt="" class="avatar avatar-md rounded-circle" />
                                                    <div class="ms-4">
                                                        <p class="mb-1">
                                                            <span class="text-dark">Jitu Chauhan</span>
                                                            answered to your pending order list with notes
                                                        </p>
                                                        <span>
														<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock text-muted" viewBox="0 0 16 16">
															<path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
															<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
														</svg>
														<small class="ms-2">2 days ago</small>
													</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item px-5 py-4 list-group-item-action">
                                            <a href="#!" class="text-muted">
                                                <div class="d-flex">
                                                    <img src="{{asset('/')}}admin/assets/images/avatar/avatar-2.jpg" alt="" class="avatar avatar-md rounded-circle" />
                                                    <div class="ms-4">
                                                        <p class="mb-1">
                                                            <span class="text-dark">You have new messages</span>
                                                            2 unread messages
                                                        </p>
                                                        <span>
														<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock text-muted" viewBox="0 0 16 16">
															<path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
															<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
														</svg>
														<small class="ms-2">3 days ago</small>
													</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="border-top px-5 py-4 text-center">
                                    <a href="#!">View All</a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown ms-4">
                            <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('/')}}admin/assets/images/avatar/avatar-1.jpg" alt="" class="avatar avatar-md rounded-circle" />
                            </a>

                            <div class="dropdown-menu dropdown-menu-end p-0">
                                <div class="lh-1 px-5 py-4 border-bottom">
                                    <h5 class="mb-1 h6">FreshCart Admin</h5>
                                    <small>admindemo@email.com</small>
                                </div>

                                <ul class="list-unstyled px-2 py-3">
                                    <li>
                                        <a class="dropdown-item" href="#!">Home</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#!">Profile</a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="#!">Settings</a>
                                    </li>
                                </ul>
                                <div class="border-top px-5 py-3">
                                    <a href="#">Log Out</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <div class="main-wrapper">
@include('admin.include.left-sidebar')
@yield('body')
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Libs JS -->
<!-- <script src="{{asset('/')}}admin/assets/libs/jquery/dist/jquery.min.js"></script> -->
<script src="{{asset('/')}}admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="{{asset('/')}}admin/assets/js/theme.min.js"></script>

<script src="{{asset('/')}}admin/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/vendors/chart.js"></script>
<script src="{{asset('/')}}admin/assets/libs/quill/dist/quill.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/flatpickr/dist/flatpickr.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/vendors/dropzone.js"></script>
<script src="{{asset('/')}}admin/assets/js/bootstrap-select.js"></script>

<script src="{{asset('/')}}admin/assets/summernote/js/summernote.min.js"></script>
<script src="{{asset('/')}}admin/assets/summernote/js/summernote-init.js"></script>



</body>

<!-- Mirrored from freshcart.codescandy.com/dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Nov 2024 06:08:53 GMT -->
</html>
