@extends('backEnd.layouts.master')
@section('title','Dashboard')
@section('content')
    <!--breadcrumbs-->
    <div id="content-header">
    <div id="breadcrumb"> 
    <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Orders</a></div>
    </div>

    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Well done!</strong> {{Session::get('message')}}
            </div>
        @endif
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                <h5>List Orders</h5>
            </div>
            <div class="widget-content nopadding">
                <table class="table table-bordered data-table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>User ID</th>
                        <th>User Email</th>
                        <th>Product</th>
                        <th>Phone Number</th>
                        <th>Region</th>
                        <th>Payment Method</th>
                        <th>Total</th>
                        <th>Created At</th>
                        <th>Order Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        
                    @foreach($orders as $order)
                        <?php $i++; ?>
                        <tr class="gradeC">
                            <td>{{$i}}</td>
                            <td style="vertical-align: middle;">{{$order->users_id}}</td>
                            <td style="vertical-align: middle;">{{$order->users_email}}</td>
                            <td style="vertical-align: middle;">{{$order->products_name}}</td>
                            <td style="vertical-align: middle;">{{$order->phone_number}}</td>
                            <td style="vertical-align: middle;">{{$order->region}}</td>
                            <td style="vertical-align: middle;">{{$order->payment_method}}</td>
                            <td style="vertical-align: middle;">Rp {{number_format($order->grand_total, 0, ".", ".")}}</td>
                            <td style="vertical-align: middle;">{{$order->created_at}}</td>
                            <td style="vertical-align: middle;">{{$order->order_status}}</td>
                            <td style="text-align: center; vertical-align: middle;">
                                <a href="#myModal{{$order->id}}" data-toggle="modal" class="btn btn-info btn-mini">View</a>
                                <a href="#" class="btn btn-primary btn-mini">Edit</a>
                                <a href="javascript:" rel="{{$order->id}}" rel1="cancel-order" class="btn btn-danger btn-mini deleteRecord">Cancel</a>
                            </td>
                        </tr>
                        
                    @endforeach
                    {{--<ul class="pagination">
                        <li class="active"><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">&raquo;</a></li>
                    </ul>--}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection
@section('jsblock')
    <script src="{{asset('js/excanvas.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.custom.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.flot.min.js')}}"></script>
    <script src="{{asset('js/jquery.flot.resize.min.js')}}"></script>
    <script src="{{asset('js/jquery.peity.min.js')}}"></script>
    <script src="{{asset('js/fullcalendar.min.js')}}"></script>
    <script src="{{asset('js/matrix.js')}}"></script>
    <script src="{{asset('js/matrix.dashboard.js')}}"></script>
    <script src="{{asset('js/jquery.gritter.min.js')}}"></script>
    <script src="{{asset('js/matrix.interface.js')}}"></script>
    <script src="{{asset('js/matrix.chat.js')}}"></script>
    <script src="{{asset('js/jquery.validate.js')}}"></script>
    <script src="{{asset('js/jquery.wizard.js')}}"></script>
    <script src="{{asset('js/jquery.uniform.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/matrix.popover.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/matrix.tables.js')}}"></script>
    <script src="{{asset('js/matrix.form_validation.js')}}"></script>
    <script type="text/javascript">
        // This function is called from the pop-up menus to transfer to
        // a different page. Ignore if the value returned is a null string:
        function goPage (newURL) {

            // if url is empty, skip the menu dividers and reset the menu selection to default
            if (newURL != "") {

                // if url is "-", it is this page -- reset the menu:
                if (newURL == "-" ) {
                    resetMenu();
                }
                // else, send page to designated URL
                else {
                    document.location.href = newURL;
                }
            }
        }

        // resets the menu selection upon entry to this page:
        function resetMenu() {
            document.gomenu.selector.selectedIndex = 2;
        }
    </script>
@endsection