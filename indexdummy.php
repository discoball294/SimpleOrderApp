<html>
<head>
    <link href="css/materialize.min.css" rel="stylesheet" type="text/css">
    <link href="css/ghpages-materialize.css" rel="stylesheet" type="text/css">
    <title>Login</title>
</head>
<body>

<div class="row col s12">
    <div class="row col s3"></div>
    <div class="row col s6" rel="">
        <nav class="top-nav deep-orange darken-2">
            <div class="container">
                <div class="nav-wrapper"><a class="page-title">Login</a></div>

            </div>
        </nav>
        <form class="col s12" action="login.php" method="post" style="margin: 15px;">

            <div class="row">
                <div class="input-field col s6">
                    <input name="user" placeholder="Username" type="text" class="validate" required>
                    <label class="active deep-orange-text">Username</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input name="pass" type="password" class="validate waves-input-wrapper" required>
                    <label class="active deep-orange-text">Password</label>
                </div>
            </div>
            <p>
                <input class="with-gap" name="group1" type="radio" id="test1" value="mahasiswa" />
                <label for="test1">Mahasiswa</label>
            </p>
            <p>
                <input class="with-gap" name="group1" type="radio" id="test2" value="penjual" />
                <label for="test2">Penjual</label>
            </p>
            <button class="btn waves-effect waves-light deep-orange darken-2" type="submit" name="action">Submit
            </button>
        </form>
    </div>
    <div class="row col s3"></div>
</div>
<script src="js/materialize.min.js" type="application/javascript"></script>
<script src="js/jquery-2.1.4.min.js" type="application/javascript"></script>


</body>

</html>