<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rockville Volleyball Academy - Recreation</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&display=swap" rel="stylesheet">    
    <!-- Custom Style Sheet -->
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/da53fde61e.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Embed navbar -->
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/components/"; include($IPATH."nav.html"); ?>

    <main>
        <div class="page-heading">
            <h1 class="page-heading__title">open gyms</h1>
            <hr>
        </div>

        <section class="container">
            <h2 class="page__subtitle">information</h2>
            <p>
                Lorem ipsum dolor sit aet consectetur adipisicing elit. 
                Ducimus tenetur rem incidunt, repudiandae quia tempore facilis, 
                possimus hic deserunt nulla vitae quaerat corporis distinctio explicabo libero 
                aspernatur minus animi. Soluta. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Iste odio voluptates dolores in. Lorem ipsum dolor sit aet consectetur adipisicing elit. 
                Ducimus tenetur rem incidunt.
            </p>
        </section>

        <section class="container">
            <h2 class="page__subtitle">gallery</h2>
            <div id="carousel" class="carousel">
                <div class="carousel__slide-container fade">
                    <div class="carousel__slide carousel__img carousel__img--rec1"></div>

                    <div class="carousel__slide carousel__img carousel__img--rec2"></div>

                    <div class="carousel__slide carousel__img carousel__img--rec3"></div>

                    <a id="prev-slide-btn" class="carousel__button carousel__button--left">&#10094;</a>
                    <a id="next-slide-btn" class="carousel__button carousel__button--right">&#10095;</a>
                </div>
                
                <div class="carousel__nav">
                    <div class="carousel__indicator slide-active"></div>
                    <div class="carousel__indicator"></div>
                    <div class="carousel__indicator"></div>
                </div>
            </div>
        </section>
    </main>

    <!-- Embedd footer -->
    <?php include($IPATH."footer.html"); ?>

    <script src="/js/main.js"></script>
</body>
</html>