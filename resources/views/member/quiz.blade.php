<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Quiz</title>
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
                                <th scope="col">Jenis Quiz</th>
                                <th scope="col">Waktu Pengerjaan</th>
                                <th scope="col">Materi Quiz</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr>
                                <td>Rabu, 19 januari 2023</td>
                                <td>True & False</td>
                                <td>45 Menit</td>
                                <td>Pengelasan</td>
                                <td>
                                    <button href="" class="btn btn-primary">Kerjakan</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Jum'at, 23 januari 2023</td>
                                <td>Choice</td>
                                <td>60 Menit</td>
                                <td>Pembubutan</td>
                                <td>
                                    <button href="" class="btn btn-primary">Kerjakan</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Senin, 23 Februari 2023</td>
                                <td>True & False</td>
                                <td>30 Menit</td>
                                <td>Permesinan</td>
                                <td>
                                    <button href="" class="btn btn-primary">Kerjakan</button>
                                </td>
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