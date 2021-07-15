<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<main>
    <!-- slideshow / carousel -->

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/kevin-ianeselli-ebnlHkqfUHY-unsplash.jpg" class="d-block w-100" alt="..." style="height:55vh;object-fit:cover;">
                <div class="carousel-caption d-none d-md-block">
                    <p>Photo by Kevin Ianeselli on Unsplash</p>
                    <p>Mengapresiasi alam dengan mencoba lebih dekat dengannya~</p>
                    <p class="d-flex justify-content-center">
                        <a href="#" class="btn btn-outline-light d-flex align-items-center" style="padding-top:1rem;padding-bottom:1rem;">
                            <img src="/img/camping.svg" alt="" height="24px" width="24px" class="me-2">
                            Yuk Berkemah!
                        </a>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/kevin-ianeselli-ebnlHkqfUHY-unsplash.jpg" class="d-block w-100" alt="..." style="height:55vh;object-fit:cover;">
                <div class=" carousel-caption d-none d-md-block">
                    <p>Memulai sesuatu yang baru sering membuat kita kewalahan.</p>
                    <p>Yuk, kita coba pelajari dasarnya!.</p>
                    <p class="d-flex justify-content-center">
                        <a href="#" class="btn btn-outline-light d-flex align-items-center" style="padding-top:1rem;padding-bottom:1rem;">
                            <i class="bi bi-question-diamond-fill me-2"></i>
                            Tentang Berkemah
                        </a>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/kevin-ianeselli-ebnlHkqfUHY-unsplash.jpg" class="d-block w-100" alt="..." style="height:55vh;object-fit:cover;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <div class="container mt-5">


        <div class="card" style="width: 100%; margin-top:2rem;">
            <img class="card-img-top" src="https://i.pinimg.com/originals/75/05/13/7505135e6c2296f72ec70b1bf0ce56e6.png" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Jl. New York</p>
            </div>
        </div>
</main>


<?= $this->endSection(); ?>