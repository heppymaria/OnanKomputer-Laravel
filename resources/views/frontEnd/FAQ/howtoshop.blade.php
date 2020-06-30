@extends('frontEnd.layouts.master')

@section('content')
<style>
.main{
  width:750px;
  padding:20px;
  box-sizing: border-box;
  float:left;
  
}

.main h1{
  font-weight:bold;
  text-align:center;
}

.main h4{
  font-size:25px;
}

.main h6{
  font-size:20px;
}

.main p{
  font-size:20px;
}

.sidebar{
  width : 300px;
  float:right;
  padding:20px;
  
}

.sidebar h3{
  font-size:25px;
}

.sidebar a{
  font-size:20px;
}

/** clearfix */
.cf:before,
.cf:after {
    content: " "; /* 1 */
    display: table; /* 2 */
}

.cf:after {
    clear: both;
}
.cf {
    *zoom: 1;
}
</style>
<div class="container cf">
<div class="main">
<h1 style="font-size:40px" >HOW TO SHOP</h1> 
<img  src="FAQ/Capture.JPG" id="showgambar" style="max-width:670px;max-height:720px;"/>  
<h6 class="mt-5"><b>Follow these step as listed to order Onan Komputer's Product:</b></h6>
<h6>1. Visit Our Website OnanKomputer.com then browse product by brand or category.</h6>
<h6>2. Choose your product and look the details.</h6>
<h6>3. Add to compare the product to make sure that's what you need.</h6>
<h6>4. Add your desired product to the cart. </h6>
<h6>5. Checkout and login to select your address. </h6>
<h6>6. Select your shipping method.</h6>
<h6>7. Select your payment method.</h6>
<h6>8. That's it, You're all set and wait for the product delivery.</h6>
</div>

<div class="sidebar">
<form class="form-inline">
  <div class="col-10">
<div  class="dropdown">
<div  class="dropdown-menu nav-link nav-dark ml-auto">
  <h3>FAQ</h3>
    <a  class="dropdown-item" type="button" href="/infoFAQ">Payment</a>
    <a class="dropdown-item" type="button" href="/howtoshop">How to Shop</button>
    <a class="dropdown-item" type="button" href="/delivery">Delivery</button>
    <a class="dropdown-item" type="button" href="/terms">Terms and Condition</button>
  </div>
</div>
</div>
  </form>
</div>
</div>


@endsection
