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
<h1 style="font-size:40px" >DELIVERY</h1> 
<div  class="space">
<img  src="FAQ/shipping-icon.png" id="showgambar" style="max-width:300px;max-height:300px;"/>  
</div>
<h6 class="mt-4">Deliveries are made using courier services (third parties) such as:</h6>
<img src="FAQ/JNE.png" id="showgambar" style="max-width:100px;max-height:100px;"/>
<img src="FAQ/jnt.JPG" id="showgambar" style="max-width:100px;max-height:100px;"/>
<img src="FAQ/ninja.jpg" id="showgambar" style="max-width:100px;max-height:100px;"/>

<h6 class="mt-3">Conditions & Delivery Schedule</h6>
<p>1. <b>Package delivery is done / given</b> massively every day to JNE above 18:00 on Monday-Friday. Saturdays, Sundays and National Holidays there are no shipments.</p>
<p>2. <b>We send your shipping receipt on the next working day (H + 1).</b></p>
<p>3. <b>Actual shipping costs </b> refer to the receipt sfter sending the product.</p>
<p>4. Delays and problems when the shipping process is <b>fully responsible for third parties. </b></p>

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
