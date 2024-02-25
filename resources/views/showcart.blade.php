<!DOCTYPE html>
<html lang="en">

  <head>
<base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Klassy Cafe - Restaurant HTML Template</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 
                            <li>


                            <li class="scroll-to-section">
                           
                                @auth
                                <a href="{{url('/showcart',Auth::user()->id)}}">
                                Cart[{{$count}}]  
                                </a>  
                                @endauth
                                @guest
                                    cart[0]
                                @endguest
                            </li> 
                            <li>




                                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <li>
                        <x-app-layout>
   
                        </x-app-layout>
                    </li>
                    
                    
                    @else
                        <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif

                            </li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span></span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
<div id="top">
    <table style="overflow:hidden" class="table">
        <tr>
            <th>Food Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
        <form action="{{url('orderconfirm')}}" method="post">
            @csrf
        
        @foreach ($data as $item)
            <tr class="align-items-center">
                <td>
                    <input type="text" name="foodname[]" value="{{$item->title}}" hidden="">
                    {{$item->title}}</td>
                <td>
                    <input type="text" name="price[]" value="{{$item->price}}" hidden="">
                    {{$item->price}}</td>
                <td>
                    <input type="text" name="quantity[]" value="{{$item->quantity}}" hidden="">
                    {{$item->quantity}}</td>
            </tr>
        @endforeach
        @foreach ($data2 as $item)
        <tr style="position:relative;top:-50px;right:-1190px;">
            <td><a href="{{url('/remove',$item->id)}}" class="btn btn-sm btn-warning">Remove</a></td>
        </tr>        
        @endforeach
        
    </table>
    <div align="center">
        <button id="order" type="button" class="btn bg-primary btn-primary">Order Now</button>
    </div>
    <div id="appear" style="display:none" align="center" class="p-5">
        <div>
            <label for="">Name</label>
            <input class="p-3 m-3" type="text" name="name">
        </div>
        <div>
            <label for="">Phone</label>
            <input class="p-3 m-3" type="text" name="phone">
        </div>
        <div>
            <label for="">Address</label>
            <input class="p-3 m-3" type="text" name="address">
        </div>
        <div>
            <input class="btn btn-success bg-success" type="submit" value="Order Confirm">
            
            <input class="btn btn-success bg-danger ml-4" id="close" type="button" value="Close">
        </div>
    </div>
</form>
</div>
    

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script type="text/javascript">
         $("#order").click(
        function(){
            $("#appear").show();
        }
    );
    $("#close").click(
        function(){
            $("#appear").hide();
        }
    );
    </script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

        
        // function order(){
        //     let appear = document.getElementById('appear')
        //     appear.style.display = "block";
        // }
        
        //     const close = document.getElementById('close')
        //     const appear = document.getElementById('appear')
        //     close.addEventListener('click',function(){
        //         appear.style.display = "none";
        //     })
    </script>
  </body>
</html>