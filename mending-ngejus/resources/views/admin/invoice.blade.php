<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <center>
        <h3>Cuatomer name: {{$data->name}}</h3>
        <h3>Cuatomer address: {{$data->rec_address}}</h3>
        <h3>Cuatomer phone: {{$data->phone}}</h3>
        <h2>Product title: {{$data->product->title}}</h2>
        <h2>Price: {{$data->product->price}}</h2>
        <img src="products/{{$data->product->image}}" alt="">
    </center>
    

</body>
</html>