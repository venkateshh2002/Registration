<?php include 'config/database.php'; ?>
<?php include 'extras/common.php'; ?>
<?php
if (isset($_POST['submit'])) {
    if (empty($nameErr) && empty($passwordErr)) {
        $invalid = true;
        $sql = "select * from log";
        $result = mysqli_query($conn, $sql);
        $arr = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach ($arr as $i) {
            if ($i['name'] === $name && $i['password'] === $password) {
                $invalid = false;
                header('Location:feedback.php');
            }
        }
    }
}
?>
<body class="text-center">
    <main class="form-signin w-100 m-auto">
        <form method="post" target="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
            <img class="mb-4" src="bank.png" alt="" width="72" height="57" />
            <h1 class="h3 mb-3 fw-normal">Melon Lusk</h1>
            <div class="form-floating">
                <input type="text" class="form-control <?php echo $nameErr ? "is-invalid" : null ?>" id="floatingInput" placeholder="name@example.com" name="name" />
                <label for=" floatingInput">Username</label>
                <div class="invalid-feedback text-left">
                    <?php echo $nameErr; ?>
                </div>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control  <?php echo $passwordErr || $invalid ? "is-invalid" : null ?>" id="floatingPassword" placeholder="Password" name="password" />
                <label for="floatingPassword">Password</label>
                <div class="invalid-feedback">
                    <?php echo $invalid ? "Invalid username or password:" : $passwordErr; ?>
                </div>
            </div>
            <button class="w-100 btn btn-lg btn-secondary" type="submit" name="submit">Login</button>
            <a href="index.php" class="link">Signup</a><br>
            <!-- <a href="feedback.php" class="link">feedback</a> -->
            <a href="form.php" class="link">form</a>
            <br>
            <p class="mt-5 mb-3 text-muted">&copy; 2020–2024</p>
        </form>
    </main>
</body>

</html>