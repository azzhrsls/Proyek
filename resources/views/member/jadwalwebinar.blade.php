<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Jadwal Webinar</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    @include('layouts.landing-page.stylesheet')

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="welcome" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span>IMFEA </span>
        </a>
        @include('layouts.landing-page.navmember')

    </div>
    </header><!-- End Header -->

    <section>
        <section>
            <div class="container">
                <div class="table-striped">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Hari & Tanggal</th>
                                <th scope="col">Nama Pemateri</th>
                                <th scope="col">Foto Pemateri</th>
                                <th scope="col">Tema</th>
                                <th scope="col">Link Webinar</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr>
                                <td>Rabu, 19 januari 2023</td>
                                <td>Alfiyah</td>
                                <td>
                                    <img src="assets3/upload/1.jpg">
                                </td>
                                <td>Pengelasan</td>
                                <td>https://getbootstrap.com/docs/5.3/content/tables/#overview</td>
                            </tr>
                            <tr>
                                <td>Jum'at, 27 januari 2023</td>
                                <td>Azzahra</td>
                                <td>
                                    <img src="assets3/upload/2.jpg">
                                </td>
                                <td>Bubut</td>
                                <td>https://getbootstrap.com/docs/5.3/content/tables/#overview</td>
                            </tr>
                            <tr>
                                <td>Rabu, 02 Februari 2023</td>
                                <td>Siffa</td>
                                <td>
                                    <img src="assets3/upload/3.jpg">
                                </td>
                                <td>Permesinan</td>
                                <td>https://getbootstrap.com/docs/5.3/content/tables/#overview</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </section>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    @include('layouts.landing-page.footer')

    @include('layouts.landing-page.javascript')

</body>

</html>