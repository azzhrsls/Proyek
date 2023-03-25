<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Berita</title>
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
                                <th scope="col">No</th>
                                <th scope="col">Materi</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr>
                                <td>1</td>
                                <td>
                                    <img src="assets3/upload/materi1.jpg">
                                </td>
                                <td>
                                    <p>Buku ini berisi tentang dunia teknik mesin, dimana isinya sangat lengkap</p>
                                </td>
                                <td>
                                    <button href="" class="btn btn-primary">Download</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <img src="assets3/upload/materi2.jpg">
                                </td>
                                <td>
                                    <p>Buku ini berisi tentang dunia teknik mesin, dimana isinya sangat lengkap mengenai cara merawat mesin kapal</p>
                                </td>
                                <td>
                                    <button href="" class="btn btn-primary">Download</button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    <img src="assets3/upload/materi3.jpg">
                                </td>
                                <td>
                                    <p>Buku ini berisi tentang dunia teknik mesin, dimana isinya sangat lengkap mengenai pembubutan di teknik mesin</p>
                                </td>
                                <td>
                                    <button href="" class="btn btn-primary">Download</button>
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