<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rockville Volleyball Academy - About</title>
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
            <h1 class="page-heading__title">about rva</h1>
            <hr>
        </div>

        <section class="container">
            <h2 class="page__subtitle">mission</h2>
            <p>
                Lorem ipsum dolor sit aet consectetur adipisicing elit. 
                Ducimus tenetur rem incidunt, repudiandae quia tempore facilis, 
                possimus hic deserunt nulla vitae quaerat corporis distinctio explicabo libero 
                aspernatur minus animi. Soluta. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Iste odio voluptates dolores in.
            </p>
        </section>

        <section class="container">
            <h2 class="page__subtitle">vision</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ducimus tenetur rem incidunt, repudiandae quia tempore facilis, 
                possimus hic deserunt nulla vitae quaerat corporis distinctio explicabo libero 
                aspernatur minus animi. Soluta. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Iste odio voluptates dolores in.
            </p>
        </section>

        <section class="container">
            <h2 class="page__subtitle">staff</h2>
            <div class="card">
                <div class="card__container">
                    <div class="card__image-container">
                        <img src="/img/temp.jpg" alt="">
                    </div>
                    <h3 class="card__full-name">Edgar Arana Martinez</h3>
                    <h4 class="card__job-title">Head Coach</h4>
                    <div class="card__main">
                        <div class="card__content">
                            <div class="card__subtitle">About</div>
                            <p class="card__desc">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita inventore, 
                                vitae numquam nihil earum odio ducimus ea. Voluptas quis error aliquid.
                            </p>
                        </div>
                        <div class="card__social-icons">
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-instagram"></i>
                        </div>
                    </div>
                </div>
            </div>
           
        </section>
    </main>

    <!-- Embedd footer -->
    <?php include($IPATH."footer.html"); ?>

    <script src="/js/main.js"></script>
</body>
</html>