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
  color: blue;
  
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
<!-- <img  src="payment.JPG" id="showgambar" style="max-width:1200px;max-height:300px;"/>   -->
<h1 style="font-size:40px" >PAYMENT</h1>

<h2 style="font-size:30px" >Store Purchase</h2>


<h4 style="font-size:25px">CASH</h4>
<img src="https://upload.wikimedia.org/wikipedia/commons/6/6a/Indonesia_2004_100000r_o.jpg" id="showgambar" style="max-width:170px;max-height:120px;" />

<h4 class="mt-4">TRANSFER BANK</h4>
<img src="iconfinder_BCA_2425807.svg" id="showgambar" style="max-width:100px;max-height:100px;"/>  
<img src="iconfinder_BRI_2425806.svg" id="showgambar" style="max-width:100px;max-height:100px;"/> 
<img src="iconfinder_Mandiri_2425804.svg" id="showgambar" style="max-width:100px;max-height:100px;"/>

<h4 class="mt-4">VIA ONLINE</h4>
<h6> For online purchases, payment can be made via bank transfer to a virtual account and then confirm your payment to the WA number or email below: </h6>
<p> <img src="logo-whatsapp-png-46044.png" id="showgambar" style="max-width:30px;max-height:30px;"> 0813-2943-1519</p>
<p> <img src="logo-whatsapp-png-46044.png" id="showgambar" style="max-width:30px;max-height:30px;"> 0895-6124-3455</p>
<p> <img src="email-logo-png-1114.png" id="showgambar" style="max-width:30px;max-height:30px;"> onankomputer@gmail.com</p>
</div>

<div class="sidebar">
<form class="form-inline">
  <div class="col-10">
<div  class="dropdown">
<div  class="dropdown-menu nav-link nav-dark ml-auto">
  <h3>FAQ</h3>
    <a class="dropdown-item" type="button" href="/infoFAQ">Payment</a>
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