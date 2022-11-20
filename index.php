<?php include 'config/database.php'; ?>
<?php include 'extras/common.php'; ?>
<?php
if (isset($_POST['submit'])) {
    if (empty($nameErr) && empty($passwordErr)) {
        $invalid = false;
        $sql = "select * from log";
        $result = mysqli_query($conn, $sql);
        $arr = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach ($arr as $i) {
            if ($i['name'] === $name) {
                $invalid = true;
                break;
            }
        }
        //Addddd to database
        if ($invalid == false) {
            $sql = "insert into log (name,password) values ('$name','$password')";
            if (mysqli_query($conn, $sql)) {
                //sucess
                header('Location:index.html');
            }
        }
    }
}
?>

<body class="text-center">
    <main class="form-signin w-100 m-auto">

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <img class="mb-4" src="bank.png" alt="" width="72" height="57" />
            <h1 class="h3 mb-3 fw-normal">Melon Lusk</h1>

            <div class="form-floating ">
                <input type="text" class="form-control <?php echo $nameErr || $invalid ? "is-invalid" : null ?>" id="floatingInput" placeholder="name@example.com" name="name" />
                <label for="floatingInput">Username</label>
                <div class="invalid-feedback">
                    <?php echo $invalid ?  "Username already exists" : $nameErr  ?>
                </div>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control <?php echo  $passwordErr ? "is-invalid" : null ?>" id="floatingPassword " placeholder="Password" name="password" />
                <label for="floatingPassword">Password</label>
                <div class="invalid-feedback">
                    <?php echo $passwordErr ?>
                </div>
            </div>
            <button class="w-100 btn btn-lg btn-secondary" type="submit" name="submit">Signup</button>

            <a href="login.php" class="link">Login</a>
            <br>
            <!-- <a href="feedback.php" class="link">feedback</a> -->
            <p class="mt-5 mb-3 text-muted">&copy; 2020–2024</p>

        </form>

    </main>
</body>

</html>