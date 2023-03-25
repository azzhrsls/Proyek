<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>List Usulan Event</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('layout.stylesheet')
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
        </a>

        @include('layout.navbar')


        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
            </a>
        </li><!-- End Search Icon-->


        <li class="nav-item dropdown pe-3">

            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets4/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
                <h6>Kevin Anderson</h6>
                <span>Web Designer</span>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>

            <li>
                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
                </a>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>

            <li>
                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
                </a>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>

            <li>
                <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
                </a>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>

            <li>
                <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-left"></i>
                <span>Logout</span>
                </a>
            </li>

            </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    
<main id="main" class="main">

    <div class="pagetitle">
    <h1>Profile</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item">Usulan Event</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

    <section>
        <div class="container">
            <div class="table-striped">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nama Event</th>
                            <th scope="col">Asal Cabang</th>
                            <th scope="col">Gambar Terkait</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <td>Webinar</td>
                            <td>Indramayu</td>
                            <td>
                                <img src="assets3/upload/webinar.jpg">
                            </td>
                            <td>
                                <a href="#"><i class="badge bg-success">Approved</i></a>
                                <a href="#"><i class="badge bg-danger">Rejected</i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Webinar</td>
                            <td>Jambi</td>
                            <td>
                                <img src="assets3/upload/webinar.jpg">
                            </td>
                            <td>
                                <a href="#"><i class="badge bg-success">Approved</i></a>
                                <a href="#"><i class="badge bg-danger">Rejected</i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    @include('layout.footer')

    @include('layout.javascript')

</body>

</html>