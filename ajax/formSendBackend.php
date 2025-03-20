<?php
    if( isset($_POST['name']) and !empty($_POST['phone']) ){
        $name = $_POST['name'];
        $phone  = $_POST['phone'];
        $title = $_POST['title'];
        $mail = $_POST['mail'];
        $pageUrl = $_POST['pageUrl'];

        $message = "" . $name . "\r\n" . $phone . "\r\n" . $mail . "\r\n" . $pageUrl . "";

        mail('su7-k@mail.ru', $title, $message, 'From su-7');
        echo 'Спасибо!';
        exit();
    }
    else{
        echo 'Необходимые поля не заполнены!';
        exit();
    }
?>
