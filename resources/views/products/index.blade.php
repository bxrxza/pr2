<!DOCTYPE html>
<html>
<head>
    <title>Продукты</title>
</head>
<body>

<h1>Все Продукты</h1>
<ul>
    @foreach ($products as $product)
        <li>{{ $product->name }} - ${{ $product->price }}</li>
    @endforeach
</ul>

</body>
</html>
