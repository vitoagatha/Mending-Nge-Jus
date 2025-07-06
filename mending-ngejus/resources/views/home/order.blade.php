<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    @include('home.css')

    <style style="text/css">
        .div_center
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }

        table
        {
            border: 2px solid black;
            text-align: center;
            width: 800px;
        }

        th
        {
            border: 2px solid black;
            background-color: gray;
            color: white;
            font-size: 18px;
            text-align: center;
        }

        td
        {
            border: 2px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="hero_area">
        @include('home.header')

        <div class="div_center">
            <table>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Delivery Status</th>
                    <th>Image</th>
                </tr>

                @foreach ($order as $order)
                    
                
                <tr>
                    <td>{{$order->product->title}}</td>
                    <td>{{$order->product->price}}</td>
                    <td>{{$order->status}}</td>
                    <td>
                        <img width="120" src="products/{{$order->product->image}}" alt="">
                    </td>
                </tr>

                @endforeach
            </table>
        </div>
    </div>

    @include('home.footer')
</body>
</html>