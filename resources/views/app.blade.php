<!doctype html>
<html lang="en">
<head>
<style>
body{

background-image: url("http://www.intrawallpaper.com/static/images/518164-backgrounds.jpg");
}
</style>
    <meta charset="UTF-8">
    <title>EAGLE FINANCES</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>
<body>
<div class="container">
	<a href="http://localhost/eaglefs/public/"> Home </a> |
    <a href="{{ action('CustomerController@index') }}">Customers</a> |
    <a href="{{ action('StockController@index') }}">Stocks</a> |
    <a href="{{ action('InvestmentController@index') }}">Investments</a>
</div>
<hr>
<div class="container">
    @yield('content')
</div>
</body>
</html>
