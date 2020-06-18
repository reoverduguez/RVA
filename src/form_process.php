<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['action'])):
        
        if (isset($_POST['firstname'])) { $first_name = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING); }
        if (isset($_POST['lastname'])) { $last_name = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING); }
        if (isset($_POST['email'])) { $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); }
        if (isset($_POST['interest'])) { $interest = $_POST['interest']; }
        if (isset($_POST['message'])) { $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING); }
        if (isset($_POST['ajaxrequest'])) { $ajaxrequest = $_POST['ajaxrequest']; }

        $error = false;

        if (empty($first_name)):
            $first_name_error = '<span class="input__error">first name is required</span>';
            $error = true;
        endif;

        if (empty($last_name)):
            $last_name_error = '<span class="input__error">last name is required</span>';
            $error = true;
        endif;

        if (empty($email)):
            $email_error = '<span class="input__error">email is required</span>';
            $error = true;
        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)):
            $email_error = '<span class="input__error">Invalid email. Please use format myemail@mail.com</span>';
            if ($ajaxrequest) { echo "<script>$('#email').addClass('invalid'); $('#email').after('<span class=\"input__error\">Invalid email. Please use format myemail@mail.com</span>')</script>"; }
            $error = true;
        endif;

        if (empty($interest)):
            $interest_error = '<span class="input__error">interest is required</span>';
            $error = true;
        endif;

        if (empty($message)):
            $msg_error = '<span class="input__error">message is required</span>';
            $error = true;
        endif;

        if (!$error):
            $form_data = array (
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'interest' => $interest,
                'message' => $message
            );

            $to = 'reoverduguez@gmail.com';
            $subject = "From $first_name -- RVA Email Form";
            $message = json_encode($form_data);
            $from = "From: $email \r\n".
                    "Reply-To: reoverduguez@gmail.com";

            if (mail($to, $subject, $message, $from)):
                if ($ajaxrequest):
                    echo "<script>alert('Thank you, your email was sent.')</script>";
                endif; // check for ajax request
            else:
                echo "<script>alert('Error, your email was not sent.')</script>";
            endif; // check for successful form submission
        endif; // check for form errors
    endif;
?>