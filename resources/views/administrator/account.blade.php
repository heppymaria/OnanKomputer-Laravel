@extends('administrator.layouts.master')
@section('title','My Account Page')
@section('content')

<div class="greyBg">
    <div class="container">
		<div class="wrapper">
    
        
            <div class="panel itemBox">
                <div class="panel-header"><h2 align="center">Welcome To OnanKompuer Admin</h2></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(isset($link))
                    <div class="myContent">

                      <ul class="nav nav-tabs">
                        
                        @if($link=="listorders")
                        <li class="active"><a href="#listorders" data-toggle="tab">List Orders</a></li>
                        <li><a href="#update-password" data-toggle="tab">List Customer</a></li>
                        
                        @elseif($link=="listuser")
                        <li><a href="#listorders" data-toggle="tab">List Orders</a></li>
                        <li><a href="#listuser" data-toggle="tab"> List Customer</a></li>
                       
                        @elseif($link=="manageproduct")
                        <li><a href="#listorders" data-toggle="tab">List Orders</a></li>
                        <li><a href="#listuser" data-toggle="tab"> List Customer</a></li>
                        
                        @else
                        something else
                        @endif
                      </ul>

                      <div class="tab-content col-md-6">
                        <div id="listorders" class="tab-pane fade" >
                        your {{$link}} data
                        </div>
                        <div id="listuser" class="tab-pane fade in">
                          listusers tab
                        </div>
                        
                      </div>

                    </div>
                    @else
                  <div class="myContent">

                    <ul class="nav nav-tabs">

                    <li class="active"><a href="#listorders" data-toggle="tab">List Orders</a></li>
                    <li><a href="#listusers" data-toggle="tab">List Customer</a></li>
                                    
                    </ul>

                    
                <div class="tab-content">
              <div id="listorders" class="tab-pane fade in active">
					     
                    <table class="table table-bordered data-table">
                    <thead>
                    <div class="col-sm-5">
                

                <ul class="thumbnails" style="margin-left: -10px;">
                </ul>

                <div class="table-responsive cart_info">
                        <table id="customer">
                     </tr>   
                        
                        <th>User ID</th>
                        <th>User Email</th>
                        <th>Product</th>
                        <th>Phone Number</th>
                        <th>Region</th>
                        <th>Payment Method</th>
                        <th>Total</th>
                        <th>Ordered Date</th>
                        <th>Order Status</th>
                        
                       
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($orders_user as $order_user)
                    <tr class="gradeC">
                            <td align="center">{{$order_user->users_id}}</td>
                            <td align="center">{{$order_user->users_email}}</td>
                            <td align="center">{{$order_user->products_name}}</td>
                            <td align="center">{{$order_user->phone_number}}</td>
                            <td align="center">{{$order_user->region}}</td>
                            <td align="center">{{$order_user->payment_method}}</td>
                            <td align="center">Rp {{number_format($order_user->grand_total, 0, ".", ".")}}</td>
                            <td align="center">{{$order_user->created_at}}</td>
                            <td align="center">{{$order_user->order_status}}</td>  
              
                    </tr>
                    @endforeach

                    </tbody>
                </table>

              </div>
              

                      <div id="listusers" class="tab-pane fade in">
                      <table class="table table-bordered data-table">
                    <thead>
                    <div class="col-sm-5">
                

                <ul class="thumbnails" style="margin-left: -10px;">
                </ul>

                <div class="table-responsive cart_info">
                        <table id="customer">
                     </tr>   
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>User Email</th>
                        <th>Date of Register</th>
                        
                       
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($list_users as $list_user)
                    <td align="center">{{$list_user->id}}</td>
                    <td align="center">{{$list_user->name}}</td>
                    <td align="center">{{$list_user->email}}</td>
                    <td align="center">{{$list_user->created_at}}</td>
                   
                    </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
						        
                      
					           </div>

                    </div>
                  </div>
                  @endif

                </div>
            </div>
        </div>
    </div>
  </div>
</div>
<div style="margin-bottom: 400px;"></div>
@endsection

@section('jsblock')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.custom.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.uniform.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/matrix.js')}}"></script>
    <script src="{{asset('js/matrix.tables.js')}}"></script>
    <script src="{{asset('js/matrix.popover.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script>
      $(".deleteRecord").click(function () {
            var id=$(this).attr('rel');
            var deleteFunction=$(this).attr('rel1');
            swal({
                title:'Are you sure?',
                text:"You won't be able to revert this!",
                type:'warning',
                showCancelButton:true,
                confirmButtonColor:'#3085d6',
                cancelButtonColor:'#d33',
                confirmButtonText:'Yes, delete it!',
                cancelButtonText:'No, cancel!',
                confirmButtonClass:'btn btn-success',
                cancelButtonClass:'btn btn-danger',
                buttonsStyling:false,
                reverseButtons:true
            },function () {
                window.location.href="/admin/"+deleteFunction+"/"+id;
            });
        });
    </script>

 
@endsection
