<!DOCTYPE html>
<html lang="en">
<head>
    <title>WebDev</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
   <style>
   .navbar-custom {
    background-color: #123c4a;
}
.navbar-custom .navbar-brand,
.navbar-custom .navbar-text{
  color: white;
  
}
.navbar-custom .navbar-brand,
.navbar-custom .nav-link {
    color: white;
}
.navbar-custom .btn {
    color: white;
    background-color: #11769b; 
    border-color: #11769b; 
}

</style>
</head>
<body>
    <div>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid" >
            <a class="navbar-brand" href="#">WebDev</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item" style="margin-right: 20px;">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item" style="margin-right: 20px;">
                        <a class="nav-link" href="#">Jegyzetek</a>
                    </li>
                    <li class="nav-item dropdown" style="margin-right: 20px;">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Témák
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Webfejlesztés</a></li>
                            <li><a class="dropdown-item" href="#">Üzleti Stratégia</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Egyéb</a></li>
                        </ul>
                    </li>
                    <li class="nac-item" style="margin-right: 20px;">
                      <a class="nav-link" href="#">Képek</a>
                    </li>
                    <li class="nav-item" style="margin-right: 20px;">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class= "d-flex">
                <button class="btn">Bejelentkezés</button>
                </form>
                <form class= "d-flex ml-auto">
    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>


            </div>
        </div>
    </nav>


    <div class="image-container">
        <div class="dark-overlay"></div>
        <img src="img/dd.jpeg" alt="kep">
        
    </div>
    <div class="welcome">Ismerkedj meg a</div>
    <div class="kep_szoveg">Webfejlesztés és az</div>
    <div class="kep_szoveg2">üzleti stratégia összefonódásával</div>
    <div class="leiras">A webfejlesztés és az üzleti élet érdekességei.</div>
    
<p></p>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</div>
</body>
</html>
