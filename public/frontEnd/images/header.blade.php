<div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-row">
                        <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{ asset('public/frontend/images/phone.png')}}" alt=""></div>+38 068 005 3570</div>
                        <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{ asset('public/frontend/images/mail.png')}}" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
                        <div class="top_bar_content ml-auto">
                            
                            <div class="top_bar_user">
                                <div class="user_icon"><img src="{{ asset('public/frontend/images/user.svg')}}" alt=""></div>
                                <div><a href="#">Register</a></div>
                                <div><a href="#">Sign in</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
        </div>

<header id="header"><!--header-->

    <nav class="navbar navbar- navbar-light bg-light justify-content-start">
    <div id="demoFont">
    <a href="{{url('/')}}"> OnanKomputer</a>
    </div>
    <ul class="navbar-nav mr-auto mt-y mt-lg-0">
</ul>
          
                    <form class="form-inline my-6 my-lg-0">
                    <div id="FontMenu">
                            <a href="{{url('/FAQ')}}"><i class="fa fa-question-circle" style="font-size:22px"></i> FAQ</a>
                            <a href="{{url('/viewcart')}}"><i class="fa fa-cart-plus" style="font-size:22px"></i> Cart</a>
                            @if(Auth::check())
                            <a href="{{url('/myaccount')}}"><i class="fa fa-user"></i> My Account</a>
                            <a href="{{ url('/logout') }}"><i class="fa fa-lock"></i> Logout </a>
                                
                            @else
                                <a href="{{url('/login_page')}}"><i class="fa fa-lock"style="font-size:22px"></i> Login</a>
                                <a href="{{url('/register_page')}}"><i class="fa fa-registered"style="font-size:20px"></i> Register</a>
                            @endif
                    </div>
                    </form>


</nav>




<nav class="navbar navbar-expand-md bg-primary navbar-dark justify-content-start">

<a href="{{url('/')}}" class='fas fa-home' style='font-size:34px'></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar6">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbar6">
        <form class="mx-2 my-auto d-inline w-100">
            <input type="text" class="form-control border border-right-0" placeholder="Search...">
        </form>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-filter" style="font-size:24px"></i>  
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Best Seller</a>
                    <a class="dropdown-item" href="#">Ascending</a>
                    <a class="dropdown-item" href="#">Descending</a>
                </div>
            </li>
        </ul>
    </div>
  
</nav>

</header>


    
