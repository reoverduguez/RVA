<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rockville Volleyball Academy - Tournaments</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,400;0,500;0,600;0,900;1,700&display=swap" rel="stylesheet">  
    <!-- Custom Style Sheet -->
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/da53fde61e.js" crossorigin="anonymous"></script>
</head>
<body>

    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/components/"; include($IPATH."nav.html"); ?>

    <main>
        <div class="page-heading">
            <h1 class="page-heading__title">RVA Tournaments</h1>
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
                Ducimus tenetur rem incidunt, repudiandae quia tempore facilis, 
                possimus hic deserunt nulla vitae quaerat corporis distinctio explicabo libero 
                aspernatur minus animi. Soluta. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Iste odio voluptates dolores in.
            </p>
            <div class="btn__container">
                <button id="modal-open-btn" class="btn btn__link">register</button>
            </div>
        </section>

        <section class="container">
            <h2 class="page__subtitle">general rules</h2>
            <p>
                Lorem ipsum dolor sit aet consectetur adipisicing elit. 
                Ducimus tenetur rem incidunt, repudiandae quia tempore facilis, 
                possimus hic deserunt nulla vitae quaerat corporis distinctio explicabo libero 
                aspernatur minus animi. Soluta. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Iste odio voluptates dolores in.
            </p>
            <div class="btn__container">
                <button class="btn btn__link">view rules</button>
            </div>
        </section>

        <section class="container">
            <h2 class="page__subtitle">latest news</h2>
            <p>
                Lorem ipsum dolor sit aet consectetur adipisicing elit. 
                Ducimus tenetur rem incidunt, repudiandae quia tempore facilis, 
                possimus hic deserunt nulla vitae quaerat corporis distinctio explicabo libero 
                aspernatur minus animi. Soluta. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Iste odio voluptates dolores in.
            </p>
        </section>

        <?php include($IPATH."modal.html") ?>

        <?php include($IPATH."footer.html"); ?>

    </main>

    <script src="https://js.stripe.com/v3/"></script>
    <script src="/js/charge.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>