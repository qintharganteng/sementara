<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="p-3 m-0 border-0 bd-example">

    <!-- Example Code -->
    
    <nav class="navbar navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">PX Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"></h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Log In</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="register.php">Sign up</a>
              </li>
            </ul>
            <form class="d-flex mt-3" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </div>
    </nav>

    

    
   <section id="home">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Skin.1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Skin.2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Skin.3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <br><br><br>

      <div class="pinggir">
     
  
    <div class="card" style="width: 18rem;"><br>
    <center>
    <img src="https://img.utdstc.com/icon/78d/66f/78d66ff1ab1bd23f7fd6d9cdb93854881cb8f0b69e8a301faaf4f4eab058d19e:200" class="card-img-top" alt="...">
    </center>
    <div class="card-body">
    <h5 class="card-title">Mobile Legends</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <center>
    <img href="https://apps.apple.com/us/app/mobile-legends-bang-bang/id1160056295" class="btn btn-outline-dark" src="play_store.png">
    <img href="https://apps.apple.com/us/app/mobile-legends-bang-bang/id1160056295" class="btn btn-outline-dark" src="app_store.jpg">
    </center>
  </div>
</div>


<br>


<div class="card">
  <div class="card-body">
  <label for="inputPassword5" class="form-label">Masukan Id </label>
<input type="teks"  class="form-control" aria-describedby="passwordHelpBlock">
<div id="passwordHelpBlock" class="form-text">
  Masukan Id Akun Mobile Legends Anda
  
</div>
  </div>
</div><br>

</div>

<div class="card">
  <div class="card-body">

  <label for="inputPassword5" class="form-label">Pilih Paket</label><br><br> 

  <input name="paket" type="radio" class="btn-check" id="btn1" autocomplete="off">
  <label for="btn1" class="btn btn-outline-dark">Rp 15.000,00  (50 Diamond) </label>

  <input name="paket" type="radio" class="btn-check" id="btn2" autocomplete="off">
  <label for="btn2" class="btn btn-outline-dark">Rp 20.000,00  (80 Diamond) </label><br>

  <input name="paket" type="radio" class="btn-check" id="btn3" autocomplete="off">
  <label for="btn3" class="btn btn-outline-dark">Rp 30.000,00 (100 Diamond)</label>

  <input name="paket" type="radio" class="btn-check" id="btn4" autocomplete="off">
  <label for="btn4" class="btn btn-outline-dark">Rp 40.000,00 (120 Diamond)</label><br>

  <input name="paket" type="radio" class="btn-check" id="btn5" autocomplete="off">
  <label for="btn5" class="btn btn-outline-dark">Rp 45.000,00 (150 Diamond)</label>
  
  <input name="paket" type="radio" class="btn-check" id="btn6" autocomplete="off">
  <label for="btn6" class="btn btn-outline-dark">Rp 55.000,00 (170 Diamond)</label><br>

  <input name="paket" type="radio" class="btn-check" id="btn7" autocomplete="off">
  <label for="btn7" class="btn btn-outline-dark">Rp 70.000,00 (200 Diamond)</label>
  
  <input name="paket" type="radio" class="btn-check" id="btn8" autocomplete="off">
  <label for="btn8" class="btn btn-outline-dark">Rp 75.000,00 (230 Diamond)</label>
  
 
  
</div>
  </div>
</div><br>

<div class="card">
  <div class="card-body">

  <label for="inputPassword5" class="form-label">Pilih Pembayaran</label><br><br> 


  <input name="uang" type="radio" class="btn-check" id="btn9" autocomplete="off">
  <label for="btn9" class="btn btn-outline-dark">Dana</label>

  <input name="uang" type="radio" class="btn-check" id="btn10" autocomplete="off">
  <label for="btn10" class="btn btn-outline-dark">OVO</label>

  <input name="uang" type="radio" class="btn-check" id="btn11" autocomplete="off">
  <label for="btn11" class="btn btn-outline-dark">PULSA</label>

  <input name="uang" type="radio" class="btn-check" id="btn12" autocomplete="off">
  <label for="btn12" class="btn btn-outline-dark">NGANJUK</label>

  
  
  <div id="passwordHelpBlock" class="form-text">
  Masukan Id Akun Mobile Legends Anda
  
</div>
  </div>
</div>

<br> 
<div class="card">
  <div class="card-body">
  <label for="inputPassword5" class="form-label">Konfirmasi</label>
<input type="teks" class="form-control" aria-describedby="passwordHelpBlock">
<div id="passwordHelpBlock" class="form-text">
 Masukan Email anda untuk konfirmasi <br>
 <button href="login.php" class="btn btn-outline-dark">Konfirmasi</button>
  
</div>
</div>
</div>

</section>                       
</body>
</html>