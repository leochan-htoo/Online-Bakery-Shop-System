<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">

    .center
    {
      margin:auto;
      width: 50%;
      border: 2px solid white;
      text-align: center;
      margin-top: 40px;
    }

    .font_size
    {
        text-align: center;
        font-size: 40px;
        padding-top: 20px;
    }

    .border-table {
        border-collapse: collapse;
        width: 100%;
        border: 1px solid #ddd;
    }

    .border-table th, .border-table td {
        border: 1px solid #ddd;
        padding: 8px;
    }

    .border-table th {
        background-color: green;
        color: white;
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

                <h2 class="font_size">All Products</h2>

                <table class="center border-table">
                    <tr>
                        <th>Product title</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Discount Price</th>
                        <th>Product Image</th>
                    </tr>

                    @foreach ($product as $product)

                        <tr>
                            <td>{{$product->title}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->category}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->discount_price}}</td>
                            <td>
                               <img src="/product/{{$product->image}}" width="200" height="200">
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
