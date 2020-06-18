<?php 
if(!empty($_GET['error'])) {
    $GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);
    $error_msg = $GET['error'];
} else {
    header('Location: ../index.php');
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rockville Volleyball Academy - Payment Failure</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,400;0,500;0,600;0,900;1,700&display=swap" rel="stylesheet">
    <!-- Custom Style -->
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/da53fde61e.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="result__container">
        <div class="result__layout">
            <h1 class="result__title">Error: <span class="result__error"><?php echo $error_msg; ?></span></h1>
            <img src="/img/Logo2.png" class="result__logo" alt="Rockville Volleyball Academy Logo">
            <p class="result__msg">Please try again.</p>
            <button class="btn"><a class="btn__link" href="programs.php">Go Back</a></button>
        </div>
    </div>
</body>
</html>