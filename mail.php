<?php
    require_once('../../../wp-load.php');
    $to = get_option( 'admin_email' );
    $name =  sanitize_text_field( $_POST['name'] );
    $subject = $name . " | " . "$subject_line";
    $headers = "From: " . sanitize_email( $_POST["email"] ) . "\r\n";
    $headers .= "Reply-To: ". sanitize_email( $_POST["email"] ) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $body = esc_textarea( $_POST['message'] );
    $message = '<b>Message From:</b> ' . $name . '<br><br>';
    $message .= $body;
    $send = wp_mail($to, $subject, $message, $headers);
?>
