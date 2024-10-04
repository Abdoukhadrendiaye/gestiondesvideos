<?php
session_start();
include_once "header.php";
include_once "navbar.php";
include_once "conn.php";
//include_once "connvideo.php";
if(!isset($_SESSION['logged_in'])|| $_SESSION['logged_in']!==true){
    header('location:login.php');
    exit();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>La page d'Accueil</title>
</head>
<body class="bg-image container-fluid col-md-6 col-lg-3" style="width: 100%;
      height: 500px;
       background-image: url(bg-imag.jpg);
        background-size: 100% 100%;
         background-attachment: fixed;
        background-position: cover;
        ">


<div class="container text-center container-fluid">
  <div class="card-body">
    <p class="card-text">Choisissez une video</p>
    <a href="#" class="btn btn-primary">Lrie</a>
    <a href="addvideo.php" class="btn btn-success m-2">Ajouter une video</a>

  </div>
  <div class="container-fluid">
<video controls width="600" height="240" autoplay="true">
    <source src="bdvideo/videoplayback (1).mp4" type="video/mp4">
     
</video>

</div>
</div>

<section class="container-fluid" style="margin-top: 20px;">
<div class="container-fluid d-flex">
      <div class="row" style="margin: left 10px;">
      <div class="col">
        
        <div class="video">
        <iframe width="370" height="240" src="https://www.youtube.com/embed/tw8iLI1BZUQ?si=GdvLmc9ZSTUekfZN" title="YouTube video player" 
          frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
           referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
      <h5 class="card-title text-light">Card title</h5>
      <p class="card-text text-light">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="col">
       
        <div class="video">
        <iframe width="370" height="240" src="https://www.youtube.com/embed/hOuYwmm0N7o?si=UPU7bXhTY4MSAodW" title="YouTube video player" 
          frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
          referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
       
      </div>
      <h5 class="card-title text-light">Card title</h5>
      <p class="card-text text-light">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="col">
        <div class="video">
        <iframe width="370" height="240" src="https://www.youtube.com/embed/LntC-dWvGB8?si=7seq0yhUvERwkGwY" title="YouTube video player" 
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
      <h5 class="card-title text-light">Card title</h5>
      <p class="card-text text-light">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>

    </div>
  </div>
</section>

<section class="container-fluid">
<div class="container-fluid d-flex">
      <div class="row" style="margin: left 10px;">
      <div class="col">
        
        <div class="video">
        <iframe width="370" height="240" src="https://www.youtube.com/embed/MnY3Kuv87sk?si=ofy_yntPqfUw8_RK" title="YouTube video player" 
          frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
          referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
      <h5 class="card-title text-light">Card title</h5>
      <p class="card-text text-light">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="col">
       
        <div class="video">
        <iframe width="370" height="240" src="https://www.youtube.com/embed/TntRj1iZmko?si=qGCwp-6k1G4zOnX0" title="YouTube video player" 
          frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
          referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
       
      </div>
      <h5 class="card-title text-light">Card title</h5>
      <p class="card-text text-light">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="col">
        <div class="video">
        <iframe width="370" height="240" src="https://www.youtube.com/embed/wYTiF0b1rLw?si=y0FGQ3FqEwf86ZQ0" title="YouTube video player" 
          frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
          referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
      <h5 class="card-title text-light">Card title</h5>
      <p class="card-text text-light">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>

    </div>
  </div>
</section>
<section class="container-fluid">
<div class="container-fluid d-flex">
      <div class="row" style="margin: left 10px;">
      <div class="col">
        
        <div class="video">
        <iframe width="370" height="240" src="https://www.youtube.com/embed/L62ZbKFp4m0?si=YEC5CNNFhJlK5YNd" title="YouTube video player" 
          frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
           referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

      </div>
      <h5 class="card-title text-light">Card title</h5>
      <p class="card-text text-light">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="col">
       
        <div class="video">
        <iframe width="370" height="240" src="https://www.youtube.com/embed/_4zP60gNdDc?si=8X3lVthqM3pbq93f" title="YouTube video player"
           frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
           referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
       
      </div>
      <h5 class="card-title text-light">Card title</h5>
      <p class="card-text text-light">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="col">
        <div class="video">
        <iframe width="370" height="240" src="https://www.youtube.com/embed/XQ67m5CdpGY?si=9nlWsc2fESoDGnne" title="YouTube video player" 
          frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
          referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
      <h5 class="card-title text-light">Card title</h5>
      <p class="card-text text-light">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>

    </div>
  </div>
</section>



<?php
include_once "footer.php";
?>
</body>
</html>

