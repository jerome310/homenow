<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Laravel</title>
  <style>
    body {
      background: url('https://i.ibb.co/5RcpBct/homenow-background-image.jpg') no-repeat;
      background-attachment: fixed;
      color: #fff;
      width: 100%;
      height: 100vh;
      position: relative;
      background-size: cover;
      background-position: center;
    }

    .text-container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      height: 50vh;
      position: absolute;
      z-index: 1;
      padding-left: 45px;
    }

    .text-container .logo {
      padding-top: 30%;
      width: 150px;
      margin-right: auto;
    }

    .text-container img {
      width: 130px;
      margin-top: 100%;
      padding-top: 150px;
    }

    .text-container p {
      font-family: Roboto, sans-serif;
      padding: 100px 0 0 5px;
      font-size: 16px;
      width: 100%;
    }

    .text-container h1 {
      font-family: Roboto, sans-serif;
      padding: 15px 0 5px;
      font-size: 40px;
      font-weight: 900;
      width: 44%;
      margin-right: auto;
    }

    .text-container .text-description {
      padding: 30px 0 20px 0;
      font-size: 20px;
      font-weight: 700;
      width: 43%;
      margin-right: auto;
    }

    .text-container .button {
      margin-right: auto;
      background-color: #E70F2B;
      padding: 25px 50px;
      font-size: 20px;
      color: #ffffff !important;
    }

    footer {
      padding-top: 15%;
      width: 90%;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .color-overlay {
      width: 100%;
      height: 100%;
      background-color: #000942b3;
      opacity: .7;
      position: absolute;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="text-container">
      <a class="logo" href="https://ibb.co/9YND1Gj"><img src="https://i.ibb.co/F7Krynt/homenow-logo.png" alt="homenow-logo" border="0"></a>
      <p>BE THE FIRST TO KNOW</p>
      <h1>Searching for a new home in the Hampton neighborhood?</h1>
      <p class="text-description">Get updates BEFORE a new home is even listed!</p>
      <a class="button" href="/">Send me updates first &#8702;</a>
      <footer>
        <div>
          <a href="/">Contact Us</a>
        </div>
        <div>
          <span>© 2020 HomeNow, All Rights Reserved. Created with</span>
          <a href="/">Leadpages</a>
        </div>
        <div>
          <span>We Respect Your <a href="/">Privacy</a></span>
        </div>
      </footer>
    </div>
    <div class="color-overlay"></div>
  </div>
</body>

</html>