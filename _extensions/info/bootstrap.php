<?php include_once('../functions/main.php') ?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>✤...</title>

    <!-- JQUERY -->             <script src="../js/jquery.js" ></script>
    <!-- BOOTSTRAP JS  -->      <script src="../functions/bootstrap/js/bootstrap.min.js" ></script>
    <!-- BOOTSTRAP CSS -->      <link rel="stylesheet" type="text/css" href="../functions/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/info.css">


</head>

<body>

<?php include_once('php/head.php') ?>

<h1 class="effect_cim">Főcím</h1>
<br/>
<span class="effect_leiras_source"><?php echo htmlspecialchars('<script src="../js/jquery.js" ></script>');?></span><br/>
<span class="effect_leiras_source"><?php echo htmlspecialchars('<script src="../functions/bootstrap/js/bootstrap.min.js" ></script>');?></span><br/>
<span class="effect_leiras_source"><?php echo htmlspecialchars('<link rel="stylesheet" type="text/css" href="../functions/bootstrap/css/bootstrap.min.css">');?></span><br/>
<br/>
<br/>

<!-- ______________________________________________________________________________________________________________________________ -->

<h1>Cím</h1>
<p class="effect_leiras">
    <b>Alcím</b> leírás.... <br/><br/>
    <b>Alcím</b> leírás.... <br/><br/>
</p>
https://getbootstrap.com/docs/4.0/getting-started/introduction/
<form>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="" alt="First slide">
            vall
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="..." alt="Second slide">
            vall
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="..." alt="Third slide">
            vall
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
<div class="effect_elvalaszto_kek" ></div>
<div class="alert alert-primary" role="alert">
    This is a primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div class="alert alert-secondary" role="alert">
    This is a secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>

<div class="alert alert-success" role="alert">
    This is a success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<!-- ______________________________________________________________________________________________________________________________ -->


<pre></pre>

</body>
</html>
