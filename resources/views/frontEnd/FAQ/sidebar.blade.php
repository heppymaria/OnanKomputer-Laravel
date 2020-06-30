<!DOCTYPE html>
<html lang="en">
<head>
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
  color:Black;
}

.main h6{
  font-size:20px;
  color:Black;
}

.main p{
  font-size:20px;
  color:Black;
}

.sidebar{
  width : 300px;
  float:right;
  padding:20px;
  
}

.sidebar h3{
  font-size:25px;
  color:Black;
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
</head>

<body>

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

</body>