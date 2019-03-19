<?php
include("./templates/header.php");
require_once "connection.php";
require_once "./validation/recaptchalib.php";
require_once "./validation/form_validation.php";

if(!empty($_POST)){
	$first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $patronymic = $_POST['patronymic'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $date_of_birth = $_POST['date_of_birth'];
    $comment = $_POST['comment']; 

 $form;
	$form['first_name'] = $db->quote($_POST['first_name']);
    $form['last_name'] = $db->quote($_POST['last_name']);
    $form['patronymic'] = $db->quote($_POST['patronymic']);
    $form['phone_number'] = $db->quote($_POST['phone_number']);
    $form['email'] = $db->quote($_POST['email']);
    $form['date_of_birth'] = $db->quote($_POST['date_of_birth']);
    $form['comment'] = $db->quote($_POST['comment']);

    $form_message_errors = form_validation($form);

    if (count($form_message_errors) == 0) {
        $db->exec(
            "INSERT INTO academy (first_name, last_name, patronymic, phone_number, email, date_of_birth, comment) 
            VALUES ('{$first_name}', '{$last_name}', '{$patronymic}', '{$phone_number}', '{$email}', '{$date_of_birth}', '{$comment}')"
        );
        echo("<div class=\"alert alert-success\" role=\"alert\">Комментарий был успешно отправлен!</div>");
    }
    else {
        foreach ($form_message_errors as $error) {
            echo("<div class=\"alert alert-danger\" role=\"alert\">$error</div>");
        } 
    }
}

function form_validation($form) {
    $form_message_error = array();
    if (!name_is_valid($form['first_name'])) array_push($form_message_error, 'Неправильно введено имя!');
    if (!name_is_valid($form['last_name'])) array_push($form_message_error, 'Неправильно введена фамилия!');
    if (!name_is_valid($form['patronymic_name'])) array_push($form_message_error, 'Неправильно введено отчество!');
    if (!phone_is_valid($form['phone_number'])) array_push($form_message_error, 'Неправильно введен телефон!');
    if (!email_is_valid($form['email'])) array_push($form_message_error, 'Неправильно введен email!');
   if (!date_is_valid($form['date_of_birth'])) array_push($form_message_error,'Неправильно введена дата рождения!');
   return $form_message_error;
}

include("./templates/footer.php");


