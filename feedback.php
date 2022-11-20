<?php include 'config/database.php'; ?>

<?php
$sql = "select * from log";
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <?php foreach ($feedback as $i) : ?>
        <blockquote class="blockquote">
            <p class="mb-0"><?php echo "Username: " . $i['name'] ?></p>
            <p class="mb-0"><?php echo "Password: " . $i['password'] ?></p>
        </blockquote>
    <?php endforeach; ?>


</body>

</html>