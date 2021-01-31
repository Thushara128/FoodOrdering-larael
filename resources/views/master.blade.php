<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Resto App</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
        <!-- Lightbox-->
        <link rel="stylesheet" href="vendor/lightbox2/css/lightbox.min.css">
        <!-- Range slider-->
        <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
        <!-- Bootstrap select-->
        <link rel="stylesheet" href="vendor/bootstrap-select/css/bootstrap-select.min.css">
        <!-- Owl Carousel-->
        <link rel="stylesheet" href="vendor/owl.carousel2/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="vendor/owl.carousel2/assets/owl.theme.default.css">
        <!-- Google fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="css/custom.css">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/favicon.png">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
          </head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{-- {{View::make('footer')}} --}}

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/lightbox2/js/lightbox.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="vendor/owl.carousel2/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="js/front.js"></script>
    <script>
          function injectSvgSprite(path) {
        
        var ajax = new XMLHttpRequest();
        ajax.open("GET", path, true);
        ajax.send();
        ajax.onload = function(e) {
        var div = document.createElement("div");
        div.className = 'd-none';
        div.innerHTML = ajax.responseText;
        document.body.insertBefore(div, document.body.childNodes[0]);
        }
    }
    // this is set to BootstrapTemple website as you cannot 
    // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
    // while using file:// protocol
    // pls don't forget to change to your domain :)
    injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
    
  </script>
  <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"></link>


</div>
</body>
<style>
  
  img.img-slider{
    height:700px !important;
    width: 100%;

  }
  .custom-product{
    height:px;

  }
  .carousel-caption{
    background-color: aliceblue;
    color: black;
  }
  .trending-img{
    height: 150px;
  
  }
  .trending-item{
    float: left;

    text-align: center;
  }
  .trending-wrapper{
    margin-left: 30px;
  }
  .text-center{
    padding:10px;
  }
 .detail-img{
    height:200px;
  }
.detail{

 padding: 20px;
    font-style: italic;
    font-family: emoji;
}
.search-box
{
  width:200px !important;
}
.cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px
    }
    h1{
      text-align: center;
    padding: 20px;
    font-style: italic;
    font-family: auto;
    }
</style>
</html>