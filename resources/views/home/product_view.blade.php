<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">


            <div>
                <form action="{{url('search_product')}}" method="GET">
                    <input style="width: 500px;" type="text" name="search" placeholder="search for Something">

                    <input type="submit" value="search">
                </form>
            </div>


        </div>
        <div class="row">
            @foreach ($product as $products)
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="{{ url('product_details', $products->id) }}" class="option1">
                                Product Detail
                            </a>
                            <form action="{{ url('add_cart', $products->id) }}" method="post">
                                @csrf

                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="number" name="quantity" value="1" min="1" style="width: 100px">
                                    </div>

                                    <div class="col-md-4">
                                        <input type="submit" value="Add to Cart">
                                    </div>
                                </div>
                            </form>

                            @if ($products->quantity === 0)
                                <p style="color: red">Available Quantity: 0 - Product is out of stock</p>
                            @endif

                        </div>
                    </div>

                    <div class="img-box">
                        <img src="{{ asset('product/' . $products->image) }}" alt="">
                    </div>

                    <div class="detail-box">
                        <h5>
                            {{ $products->title }}
                        </h5>

                        @if ($products->discount_price != null)
                        <h6 style="color: red">
                            Discount price
                            <br>
                            {{ $products->discount_price }} BTH
                        </h6>

                        <h6 style="text-decoration: line-through; color:blue">
                            Price
                            <br>
                            {{ $products->price }} BTH
                        </h6>

                        @else
                        <h6 style="color:blue">
                            Price
                            <br>
                            {{ $products->price }} BTH
                        </h6>
                        @endif

                    </div>
                </div>
            </div>
            @endforeach
            <span style="padding-top: 20px;">
                {{-- {!! $product->withQueryString()->links('pagination::bootstrap-5') !!} --}}
            </span>
        </div>
    </div>
</section>
