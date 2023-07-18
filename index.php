<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="canonical" href="https://sggsmis.42web.io/" />
    <meta name="google-site-verification" content="PzRpP5oqBMUvxhNNLp5kMMPaH9qVohEa30TBkcde0IU" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Management Information System For SAE College club">
    <meta name="keywords" content="sggs,mis,sggsmis,team phoniex,sae,mis software">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <?php include 'links.php' ?>
    <style>
        form {
    display: block;
    width: 25rem;
    margin: 0 auto;
    background-color: #e6e6e6;
}
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light p-2 mb-5">
        <div class="container-fluid mb-1">
            <a class="navbar-brand" href="#"><img src="https://www.sggs.ac.in/uploads/logos/logo.jpeg" alt="University of Education and knowledge" width="50" height="35"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active fs-4" aria-current="page" href="#">Home</a>
                    <a class="nav-link  fs-4" href="about.php">About Us</a>
                    <a class="nav-link  fs-4" href="help.php">Help</a>

                </div>
            </div>
        </div>
    </nav>


    <div class="loginPage mt-4">
        <form action="logincheck.php" method="POST" class="p-3">
            <h2 class="mb-3 text-center">Admin Login</h2>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Login ID</label>
                <input type="email" class="form-control" name="userName" value="" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" value="" id="exampleInputPassword1">
            </div>

            <button type="submit" name="submit" class="btn btn-primary fs-5">Login</button>
        </form>
    </div>



    </body>

</html>