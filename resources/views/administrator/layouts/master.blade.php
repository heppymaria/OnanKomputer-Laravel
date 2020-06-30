


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="{{asset('frontEnd/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/animate.css')}}" rel="stylesheet">
    <!-- <link href="{{asset('frontEnd/css/main.css')}}" rel="stylesheet"> -->
    <link href="{{asset('frontEnd/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/bootsrap.css')}}" rel="stylesheet">
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
    <script src="{{asset('frontEnd/js/html5shiv.js')}}"></script>
    <script src="{{asset('frontEnd/js/respond.min.js')}}"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{asset('easyzoom/css/easyzoom.css')}}" />
   
    
   
   
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
<!--Get your own code at fontawesome.com-->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
    

<style>
footer {
  background:  rgba(87, 85, 85, 0.918);
  color: rgb(255, 253, 253);
  padding-top: 10px;
}
footer a {
  color: rgb(14, 13, 13);
}

footer a:hover {
  color: #fff;
}

footer h3 {
 color: #0894d1;
  letter-spacing: 1px;
  margin: 30px 0 20px;
}

footer .three-column {
 overflow: hidden;
}

#footerp {
    color : rgb(14, 13, 13)
    }

    #demoFontLogo {
      font-family: "Times New Roman", Gadget, sans-serif;
      font-size: 25px;
      letter-spacing: 0px;
      word-spacing: 0.5px;
      color: #F4F4F4;
      font-weight: 700;
      text-decoration: none;
      font-style: italic;
      font-variant: normal;
      text-transform: none;
      }

      #demoFontFooter {
        font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
        font-size: 16px;
        letter-spacing: 2px;
        word-spacing: 2px;
        color: #000000;
        font-weight: normal;
        text-decoration: none;
        font-style: normal;
        font-variant: normal;
        text-transform: none;
        }

        

        
        #demoFontHome {
          font-family: "Comic Sans MS", cursive, sans-serif;
          font-size: 25px;
          letter-spacing: 2px;
          word-spacing: 2px;
          color: #000000;
          font-weight: normal;
          text-decoration: none;
          font-style: normal;
          font-variant: normal;
          text-transform: none;
          }
</style>


    
    

    

   
</head><!--/head-->

<body>
@include('administrator.layouts.header')
@show
@yield('content')
@include('frontEnd.layouts.footer')
<script src="{{asset('frontEnd/js/jquery.js')}}"></script>
<script src="{{asset('frontEnd/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontEnd/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('frontEnd/js/price-range.js')}}"></script>
<script src="{{asset('frontEnd/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('frontEnd/js/main.js')}}"></script>
<script src="{{asset('easyzoom/dist/easyzoom.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
      
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    // Instantiate EasyZoom instances
    var $easyzoom = $('.easyzoom').easyZoom();

    // Setup thumbnails example
    var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

    $('.thumbnails').on('click', 'a', function(e) {
        var $this = $(this);

        e.preventDefault();

        // Use EasyZoom's `swap` method
        api1.swap($this.data('standard'), $this.attr('href'));
    });

    // Setup toggles example
    var api2 = $easyzoom.filter('.easyzoom--with-toggle').data('easyZoom');

    $('.toggle').on('click', function() {
        var $this = $(this);

        if ($this.data("active") === true) {
            $this.text("Switch on").data("active", false);
            api2.teardown();
        } else {
            $this.text("Switch off").data("active", true);
            api2._init();
        }
    });
    

</script>
</body>
</html>