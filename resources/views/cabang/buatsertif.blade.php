<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>Buat Sertifikat</title>

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
                @include('layouts.landing-page.navcabang')
            </div>
            </header><!-- End Header -->

            <section>
                <section>
                <div class="container">
                    <div class="card">
                    <div class="card-header bg-primary text-white">Buat Sertifikat</div>
                    <div class="card-body">
                        <form action="action.php">
                        <div class="form-group">
                            <label for="nama">Sertifikat</label>
                            <input type="text" class="form-control" id="nama">
                        </div>
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Gambar Sertifikat</label>
                            <input class="form-control form-control-sm" id="formFileSm" type="file">
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                    </div>
                </div>
                </section>
            </section>

            @include('layouts.landing-page.footer')

            @include('layouts.landing-page.javascript')
</body>
</html>