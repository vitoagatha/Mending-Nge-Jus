<!DOCTYPE html>
<html>

<head>
    @include('home.css')

    <style style="text/css">
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }

        table {
            border: 2px solid black;
            text-align: center;
            width: 800px;
        }

        th {
            border: 2px solid black;
            text-align: center;
            color: black;
            font: 20px;
            font-weight: bold;
            background-color: gray;
        }

        td {
            border: 1px solid black;
        }

        .cart_value {
            text-align: center;
            margin-bottom: 70px;
            padding: 18px;
        }

        .order_deg
        {
            padding-right: 150px;
            margin-top: -50px;
        }

        label
        {
            display: inline-block;
            width: 150px;
        }

        .div_gap
        {
            padding: 20px;

        }
    </style>
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->


    </div>

    <div class="div_deg">

        <div class="order_deg">
            <form action="{{url('confirm_order')}}" method="Post">
                @csrf
                <div class="div_gap">
                    <label for="">Receiver Name</label>

                    <input type="text" name="name" value="{{Auth::user()->name}}">
                </div>

                <div class="div_gap">
                    <label for="">Receiver Address</label>

                    <textarea name="address" id="" cols="23" rows="2">{{Auth::user()->address}}</textarea>
                </div>

                <div class="div_gap">
                    <label for="">Receiver Phone</label>

                    <input type="text" name="phone" value="{{Auth::user()->phone}}">
                </div>

                <div class="div_gap">
                    

                    <input class="btn btn-primary" type="submit" value="Place Order"">
                </div>

            </form>
        </div>


        <table>
            <tr>
                <th>Product Title</th>

                <th>Price</th>

                <th>Image</th>

                <th>Remove</th>

            </tr>

            <?php
            
            $value = 0;
            
            ?>


            @foreach ($cart as $cart)
                <tr>
                    <td>{{ $cart->product->title }}</td>
                    <td>{{ $cart->product->price }}</td>
                    <td>
                        <img width="150" src="/products/{{ $cart->product->image }}">
                    </td>

                    <td>
                        <a href="{{ url('delete_cart' . $cart->id) }}" class="btn btn-danger">Remove</a>
                    </td>
                </tr>

                <?php
                
                $value = $value + $cart->product->price;
                
                ?>
            @endforeach
        </table>
    </div>

    <div class="cart_value">
        <h3>Total Value of Cart is: Rp {{ $value }}</h3>
    </div>

    <br><br><br>


    <!-- info section -->

    @include('home.footer')

    <!-- end info section -->

    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
