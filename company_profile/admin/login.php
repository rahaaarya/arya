<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        body {
            background-image: linear-gradient(to bottom right, #00C0FF, #4218B8);

        }
    </style>

</head>

<body>

    <main class="text-center">
        <div class="w-50 m-auto px-5 py-3">
            <form class="p-5 px-5" method="post" action="proses/prs_login.php">
                <div class="px-5">
                    <img class="mb-4" src="../assets/img/logo title.png" alt="" width="100" height="90">
                    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                    <?php
                    if (isset($_GET['pesan'])) { ?>
                        <p class="text-danger"><b>Incorrect Username and Password!</b></p>
                    <?php } ?>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="place username" name="username">
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="mt-4">
                        <button class="w-100 btn btn-lg btn-warning" type="submit" name="submit">Sign in</button>
                    </div>
                </div>
            </form>
            <p class="mt-5 mb-3">&copy; 2023</p>
        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>