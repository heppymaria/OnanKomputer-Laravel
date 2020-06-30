@extends('frontEnd.layouts.master')
@section('content')

<style>
.main{
  width:800px;
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
<h1 style="font-size:40px" >TERMS AND CONDITION</h1> 
<div class="space">
<img  src="FAQ/term.JPG" id="showgambar" style="max-width:500px;max-height:300px;"/>  
</div>
<h6 class="mt-4">Thank you for choosing OnanKomputer as your online shopping for yout IT needs</h6>
<h6>By using the information found on the www.onankomputer.com website, customers are required to read, understand and agree to the Terms and Conditions that apply at OnanKomputer before using the www.onankomputer.com website. The Terms and Conditions are subject to change without prior notice. So customers must re-read these terms and conditions page before using the website www.onankomputer.com</h6>
<br>
<h6>1. Goods that have been purchased through www.onankomputer.com and in accordance with the information stated </h6>
<h6> on the receipt cannot be exchanged or returned.</h6>
<h6>2. OnanKomputer don't provide service/ maintenance services that can be called and come to the customer's place</h6>
<h6>  so checking the problematic hardware can only be done at our store.</h6>
<h6>3. Some product images, packaging, and illustrations can change at any time without reducing the quality and </h6>
<h6> specifications offered as the stock changes from distributor.</h6>
<h6>4. OnanKomputer tries to provide the accuracy of all information on the website content. However, we cannot guarantee</h6> 
<h6> that at any time there will be changes in information data in it including product specifications.</h6>
<h6>5. Customer complaints for services from OnanKomputer and suggestions please send email to sales_onankomputer@gmail.com </h6>
<h6> or use the Customer Center fitur</h6>


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
