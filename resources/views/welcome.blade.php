<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Laravel</title>
    <style>
        .container {
  background: #000 url(http://www.publicdomainpictures.net/pictures/30000/velka/autumn-forest-1351265582Bf1.jpg);
  color: #fff;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
}
.color-overlay {
  width: 100%;
  height: 100%;
  background: blue;
  opacity: .6;
  position: absolute;
}
h1 {
  font-family: 'Pacifico', cursive;
  font-size: 60px;
  z-index: 1;
}
   </style>
</head>

<body>
    <div class="container">
        <h1>Image Overlay</h1>
        <div class="color-overlay"></div>
    </div>
</body>

</html>