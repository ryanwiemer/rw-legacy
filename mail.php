<?php

    require_once('../../../wp-load.php');
    require_once('Akismet.class.php');
    $to = get_option( 'admin_email' );
    $name =  sanitize_text_field( $_POST['name'] );
    $subject_line = sanitize_text_field( $_POST['subject'] );
    $subject = "$name | $subject_line";
    $headers = "From: " . sanitize_email( $_POST["email"] ) . "\r\n";
    $headers .= "Reply-To: ". sanitize_email( $_POST["email"] ) . "\r\n";
    $body = esc_textarea( $_POST["message"] );


    if (isset($email) &&  !empty($email)) {

    $apikey = 'ba8bb1c44043';
    $blogurl = 'http://stage.ryanwiemer.com/';
    $akismet = new Akismet($blogurl ,$apikey);
    $akismet->setCommentAuthor($name);
    $akismet->setCommentAuthorEmail($email);
    $akismet->setCommentContent($message);
    if($akismet->isCommentSpam()) {
    $myFile = "spam.txt";
    $fh = fopen($myFile, 'a') or die("can't open spam file");
    $stringData = sprintf("Name: %s\r\nEmail: %s \r\nMessage: %s\r\n------------------------------------\r\n",$name,$email,$want,$message);
    fwrite($fh, $stringData);
    fclose($fh);
    } else {
    $send = wp_mail($to, $subject, $body, $headers);
  }
?>
