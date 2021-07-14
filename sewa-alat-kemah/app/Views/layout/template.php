<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <!-- CSS only (CDN from bootstrap) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- icon (CDN from bootstrap icons) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- cdn font awesome versi free and open source -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
    <!-- navbar -->
    <!-- style="backdrop-filter: saturate(180%) blur(20px);" -->
    <!-- style diatas hanya berfungsi di chrome sejauh ini -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark position-fixed" style="background-color:rgba(0,0,0,0.15) !important; top:0; z-index: 10; width:100%;">
        <div class="container-fluid justify-content-end">
            <a class="navbar-brand" href="#">Mulai Berkemah sekarang!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-grow-0" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/Penyewaan/index">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Penyewaan/daftar_barang">Alat Kemah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Apa itu Berkemah?</a>
                    </li>
                </ul>
                <!-- <span class="navbar-text">
                    Navbar text with an inline element
                </span> -->
            </div>
        </div>
    </nav>
    <!-- end of navbar -->


    <?= $this->renderSection('content'); ?>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>