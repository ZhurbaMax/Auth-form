<!DOCTYPE HTML>

<html>

<head>
    <title> Registration // Authorization</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/register.php">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/auth.php">Authorization</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="h2 mt-5 mb-5" style="text-align: center" > Registration </div>
        </div>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-8">
            <form method="post">
                <div style="color: #a71d2a">
                    <? foreach ($errors as $error): ?>
                        <p> <?php echo $error; ?></p>
                    <? endforeach; ?>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputLogin">Login</label>
                    <input type="text" name="login"  class="form-control" id="inputLogin" placeholder="Login">
                </div>
                <div class="form-group">
                    <label for="inputСountry">Сountry</label>
                    <input type="text" name="country" class="form-control" id="inputСountry" placeholder="Сountry">
                </div>

                <div class="form-group">
                    <label for="inputCity">City</label>
                    <input type="text" name="city"  class="form-control" id="inputCity">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
        </div>
        <div class="col-1"></div>
    </div>
</div>
</body>
</html>
