<?php
    require_once('../../../wp-load.php');
    $to = get_option( 'admin_email' );
    $name =  sanitize_text_field( $_POST['name'] );
    $subject_line = sanitize_text_field( $_POST['subject'] );
    $subject = "$name | $subject_line";
    $headers = "From: " . sanitize_email( $_POST["email"] ) . "\r\n";
    $headers .= "Reply-To: ". sanitize_email( $_POST["email"] ) . "\r\n";
    $body = esc_textarea( $_POST["message"] );

    $send = wp_mail($to, $subject, $body, $headers);
?>
