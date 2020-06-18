<?php include 'src/form_process.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rockville Volleyball Academy</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&display=swap" rel="stylesheet">    
    <!-- Custom Style Sheet -->
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/da53fde61e.js" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <!-- Embed navbar -->
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/components/"; include($IPATH."nav.html"); ?>

        <section id="intro" class="intro">
            <img src="/img/Logo.png" alt="Rockville Volleyball Academy Logo" class="intro__img">
            <h1 class="intro__title">rockville volleyball academy</h1>
            <button class="btn"><a class="btn__link linkJS" href="/src/about.php">learn more</a></button>
        </section>

        <section class="announcement container">

            <h1 class="announcement__title">announcements</h1>

            <p class="announcement__text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe numquam aliquid natus molestiae nulla 
                doloremque repudiandae obcaecati? Officiis quisquam quidem, ex cum non, blanditiis 
                excepturi corporis eos provident accusamus rem? Lorem ipsum dolor sit amet consectetur adipisicing 
                elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            </p>

        </section>

        <section class="events container">
            <h1 class="event__title">upcoming events</h1>
            <div id="carousel" class="carousel carousel--events carouselJS">
                <div class="carousel__slide-container fade">
                    <div class="carousel__slide carousel__slide--text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quis architecto 
                        voluptatum soluta sit fuga laudantium quaerat dicta commodi placeat officiis assumenda repellat 
                        odio, saepe magni voluptate, quibusdam corporis quo? Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quis architecto.
                        </p>
                    </div>

                    <div class="carousel__slide carousel__img carousel__img--events1"></div>

                    <div class="carousel__slide carousel__img carousel__img--events2"></div>

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

        <section class="menu container">

            <h1 class="menu__title">what we offer</h1>

            <div class="menu__box menu__box--tp">
                <a class="menu__link linkJS" href="/src/programs.php">training programs</a>
            </div>

            <div class="menu__box menu__box--tourn">
                <a class="menu__link linkJS" href="/src/tourn.php">tournaments</a>
            </div>

            <div class="menu__box menu__box--og">
                <a class="menu__link linkJS" href="/src/rec.php">open gyms</a>
            </div>

        </section>

        <section id="contact" class="contact container">
            
            <h1 class="contact__title">contact us</h1>

            <div class="contact__container">

                <div id="option-call" class="contact__option contact__option--call option-active">
                    <i class="contact__icon fas fa-phone"></i>
                    <h2 class="contact__option-title">call</h2>
                </div>

                <div id="option-email" class="contact__option contact__option--email option-inactive">
                    <i class="contact__icon far fa-envelope"></i>
                    <h2 class="contact__option-title">e-mail</h2>
                </div>

                <div id="content-call" class="contact__call">
                    <p class="contact__call-content">
                        <span class="contact__call-subtitle">For all phone inquiries</span> <br>
                        999 - 999 - 9999
                    </p>
                    <p class="contact__call-content">
                        <span class="contact__call-subtitle">For all e-mail inquiries</span> <br>
                        info@rockvillevolleyball.com
                    </p>
                </div>

                <div id="content-email" class="contact__option-content-email">

                    <form
                    id="form"
                    name="form"
                    method="POST" 
                    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                    class="contact__form">
                        
                        <input type="text"
                        id="first name"
                        name="firstname"
                        class="contact__input"
                        placeholder="First name"
                        autocomplete="off"
                        required>
                        <?php if (isset($first_name_error)) { echo $first_name_error; } ?>

                        <input type="text"
                        id="last name"
                        name="lastname"
                        class="contact__input"
                        placeholder="Last name"
                        autocomplete="off"
                        required>
                        <?php if (isset($last_name_error)) { echo $last_name_error; } ?>

                        <input type="email"
                        id="email"
                        name="email"
                        class="contact__input"
                        placeholder="Email"
                        autocomplete="off"
                        required>
                        <?php if (isset($email_error)) { echo $email_error; } ?>
                        
                        <select
                        id="interest"
                        name="interest" 
                        class="contact__input" 
                        autocomplete="off" 
                        required>
                            <option value="" hidden>Interest</option>
                            <option value="group_training">Group Training</option>
                            <option value="tournament">Tournaments</option>
                            <option value="private_lessons">Private Lessons</option>
                            <option value="open_gym">Open Gyms</option>
                        </select>
                        <?php if (isset($interest_error)) { echo $interest_error; } ?>

                        <textarea
                        id="message"
                        name="message" 
                        class="contact__input"
                        placeholder="Write Your Message Here"
                        autocomplete="off"
                        cols="20" 
                        rows="10"
                        spellcheck="true"
                        autocomplete="off"
                        required></textarea>
                        <?php if (isset($msg_error)) { echo $msg_error; } ?>

                        <button type="submit"
                        id="submit-btn"
                        name="action"
                        value="submit"
                        class="btn btn__link">send</button>
                    </form>
                </div>
            </div>
        </section>

    <!-- Embedd footer -->
    <?php include($IPATH."footer.html"); ?>

    <script>

        $(document).ready(function() {
            $('#form').submit(function (e) {

                e.preventDefault()
                
                let error = false

                $('span.input__error').remove()

                $('.contact__input').each(function () {
                    if ($(this).val() === '') {
                        $(this).addClass('invalid')
                        $(this).after('<span class="input__error">' + $(this).attr('id') + ' is required</span>')
                        error = true
                    }
                })

                if (!error) {
                    let post_data = $('#form').serialize()
                    $.post('src/form_process.php', post_data+'&action=submit&ajaxrequest=1', function(msg) {
                        if (msg) {
                            $('#form').after(msg)
                        }
                    })
                }
            })
        })

        contactFormSetup()

        preliminaryValidation()

        function contactFormSetup() {

            const form_options = document.getElementsByClassName('contact__option')
            const form_option_call = document.getElementById('option-call')
            const form_option_email = document.getElementById('option-email') 
            const option_call = document.getElementById('content-call')
            const option_email = document.getElementById('content-email')

            for(var i = 0; i < form_options.length; i++) {
                const option = form_options[i]
                option.addEventListener('click', (e) => {
                    e.preventDefault()

                    if (option.id == 'option-call') {
                        if (!option_call.classList.contains('active')) {
                            
                            option_call.classList.add('active')
                            form_option_call.classList.add('option-active')
                            form_option_email.classList.add('option-inactive')

                            option_email.classList.remove('active')
                            form_option_call.classList.remove('option-inactive')
                            
                            // displays content for call option
                            option_call.style.display = 'grid'
                            option_email.style.display = 'none'
                        }
                    } else {
                        if (!option_email.classList.contains('active')) {

                            option_email.classList.add('active')
                            form_option_email.classList.add('option-active')
                            form_option_call.classList.add('option-inactive')

                            option_call.classList.remove('active')
                            form_option_email.classList.remove('option-inactive')

                            // displays content for email option
                            option_email.style.display = 'block'
                            option_call.style.display = 'none'
                        }
                    }
                })
            }
        }

        function preliminaryValidation() {
            $('.contact__input').blur(function () {
                $(this).next().remove('.contact__input + .input__error')
                if ($(this).val() === '') {
                    $(this).addClass('invalid')
                    $(this).after('<span class="input__error">' + $(this).attr('id') + ' is required</span>')
                } else {
                    $(this).removeClass('invalid')
                    $(this).next().remove('.contact__input + .input__error')
                }
            })
        }
    </script>

    <script src="/js/main.js"></script>
</body>
</html>