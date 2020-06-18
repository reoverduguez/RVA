<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rockville Volleyball Academy - Programs</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,400;0,500;0,600;0,900;1,700&display=swap" rel="stylesheet">
    <!-- Custom Style -->
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/da53fde61e.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Embed navbar -->
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/components/"; include($IPATH."nav.html"); ?>

    <main>

        <div class="page-heading">
            <h1 class="page-heading__title">training programs</h1>
            <hr>
        </div>

        <section class="container">
            <h2 class="page__subtitle">Session Summary</h2>
            <p class="page__content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique repellendus 
                rerum mollitia autem, quaerat porro odio commodi, tempore assumenda natus aliquam consectetur, 
                optio nam magnam id totam enim! Quae, eius! Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                laceat veniam totam, modi sunt porro debitis minus accusantium assumenda mollitia laudantium 
                tempora ipsam iusto? Illum rem aut amet. Nostrum, earum sapiente. Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                laceat veniam totam, modi sunt porro debitis minus accusantium assumenda mollitia laudantium 
                tempora ipsam iusto? Illum rem aut amet. Nostrum, earum sapiente.
            </p>
        </section>
        <section class="container session-details">
            <h2 class="page__subtitle">Session Details</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quis eos officia quas, omnis 
                eligendi atque ad ullam, obcaecati modi beatae nulla vitae repellendus voluptatibus 
                corrupti autem praesentium. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quis eos officia quas, omnis 
                eligendi atque ad ullam, obcaecati modi beatae nulla vitae repellendus voluptatibus 
                corrupti autem praesentium.
            </p>
            <p>
                <span class="page__info-heading">Dates:</span> Tuesdays & Thursdays
                <br>
                <span class="page__info-heading">Time:</span> 6-8pm
                <br>
                <span class="page__info-heading">Location:</span> 12034 Happyvill rd
                <br>
                <span class="page__info-heading">Cost:</span> $99.00
                <br>
                <span class="page__info-heading">Ages:</span> 6-15 yrs boys & girls
            
            </p>
            <p>
                <span class="page__info-heading">2020-2021 Session Details</span>
                <br>
                Session 1: Janurary - March
                <br>
                Session 2: April - June
                <br>
                Session 3: July - September
                <br>
                Session 4: October - December
            </p>
        </section>
        
        <div class="btn__container">
            <button id="modal-open-btn" class="btn btn__link">register</button>
        </div>
    </main>


    <?php include($IPATH."modal.html") ?>

    <?php include($IPATH."footer.html"); ?>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="/js/charge.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>