<!DOCTYPE html>
<html lang="en">

<?php
//Validation
$name = $password = '';
$nameErr = $passwordErr = $invalid = false;
if (isset($_POST['submit'])) {
    if (empty($_POST['name'])) {
        $nameErr = 'Name is required';
    } else
        $name = htmlspecialchars($_POST['name']);

    if (empty($_POST['password'])) {
        $passwordErr = "Password can't be empty";
    } else
        $password = htmlspecialchars($_POST['password']);
}
?>

<head>
    <meta charset="utf-8" />
    <title>Signup</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/" />
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="Extras/signin.css" rel="stylesheet" />  
</head>