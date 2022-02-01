<?php
session_start();
include('includes/dbconfig.php');
// ini_set('display_errors', 1);


if (isset($_POST['save_puch_data'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];

    $data = [
        'username' => $username,
        'email' => $email,
        'phoneno' => $phoneno

    ];

    $ref = "contact/";
    $postdata = $database->getReference($ref)->push($data);
    if ($postdata) {
        $_SESSION['status'] = "Data Inserted Successfuly";
        header("Location: index.php");
    } else {
        $_SESSION['status'] = "Data Not Inserted Something went wrong";
        header("Location: index.php");
    }
}


if (isset($_POST['update_data'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $token = $_POST['token'];

    $data = [
        'username' => $username,
        'email' => $email,
        'phoneno' => $phoneno

    ];

    $ref = "contact/" . $token;
    $postdata = $database->getReference($ref)->update($data);
    if ($postdata) {
        $_SESSION['status'] = "Data updated Successfuly";
        header("Location: index.php");
    } else {
        $_SESSION['status'] = "Data Not updated Something went wrong";
        header("Location: index.php");
    }
}
if (isset($_POST['delete_data'])) {
    $token = $_POST['ref_tok_delete'];
    $ref = "contact/" . $token;
    $deleteData = $database->getReference($ref)->remove();
    if ($deleteData) {
        $_SESSION['status'] = "Data deleted Successfuly";
        header("Location: index.php");
    } else {
        $_SESSION['status'] = "Data Not deleted Something went wrong";
        header("Location: index.php");
    }
}
