<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">
    .title_deg
    {
        text-align: center;
        font-size: 25px;
        font-weight: bold;
        /* keep space between table and All order */
        padding-bottom: 40px;
    }

    .table_deg
    {
       border: 2px solid white;
       width: 70%;
       margin: auto;
       padding-top: 50px;
       text-align: center;

    }

    .th_deg
    {
        background-color: rgb(4, 103, 35);
    }

    </style>


  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <h1 class="title_deg">All Order</h1>

                <table class="table_deg" style="border-collapse: collapse; width: 100%;">
                    <tr class="th_deg" style="background-color: #126843; border: 1px solid #999;">
                    <th style="padding: 5px; border: 1px solid #999;">Name</th>
                    <th style="padding: 5px; border: 1px solid #999;">Email</th>
                    <th style="padding: 5px; border: 1px solid #999;">Address</th>
                    <th style="padding: 5px; border: 1px solid #999;">Phone</th>
                    <th style="padding: 5px; border: 1px solid #999;">Product_title</th>
                    <th style="padding: 5px; border: 1px solid #999;">Quantity</th>
                    <th style="padding: 5px; border: 1px solid #999;">Price</th>
                    <th style="padding: 5px; border: 1px solid #999;">Payment Status</th>
                    <th style="padding: 5px; border: 1px solid #999;">Delivery Status</th>
                    <th style="padding: 5px; border: 1px solid #999;">Image</th>
                    <th style="padding: 5px; border: 1px solid #999;">Delivered</th>
                    </tr>

                    @foreach ($order as $order)
                        <tr style="border: 1px solid #999;">
                            <td style="padding: 5px; border: 1px solid #999;">{{ $order->name }}</td>
                            <td style="padding: 5px; border: 1px solid #999;">{{ $order->email }}</td>
                            <td style="padding: 5px; border: 1px solid #999;">{{ $order->address }}</td>
                            <td style="padding: 5px; border: 1px solid #999;">{{ $order->phone }}</td>
                            <td style="padding: 5px; border: 1px solid #999;">{{ $order->product_title }}</td>
                            <td style="padding: 5px; border: 1px solid #999;">{{ $order->quantity }}</td>
                            <td style="padding: 5px; border: 1px solid #999;">{{ $order->price }}</td>
                            <td style="padding: 5px; border: 1px solid #999;">{{ $order->payment_status }}</td>
                            <td style="padding: 5px; border: 1px solid #999;">{{ $order->delivery_status }}</td>
                            <td style="padding: 5px; border: 1px solid #999;"><img src="/product/{{ $order->image }}" width="50" height="50"></td>

                            <td>
                                @if ($order->delivery_status=='processing')
                                    {{-- <a href="{{url('delivered',$order->id)}}" onclick="return confirm('Are you sure this product is delivered !!!')" class="btn btn-primary">Delivered</a> --}}
                                    <a href="{{url('delivered',$order->id)}}" class="btn btn-primary">Delivered</a>
                                    @else
                                <p style="color: green;">Delivered</p>
                                @endif
                            </td>

                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>