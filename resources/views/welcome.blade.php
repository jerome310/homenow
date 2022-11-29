<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css', 'resources/js/app.js')
  <title>Laravel</title>
  <style>
    /* Desktop Version */
    @media only screen and (min-width: 1024px) {
      body {
      background: url('https://i.ibb.co/5RcpBct/homenow-background-image.jpg') no-repeat;
      background-attachment: fixed;
      color: #fff;
      width: 100%;
      height: 125vh;
      position: relative;
      background-size: cover;
      background-position: center;
    }

    .text-container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      height: 40vh;
      position: absolute;
      z-index: 1;
      padding-left: 45px;
      width: 100%;
    }

    .main-text .logo {
      padding-top: 50%;
      width: 150px;
      margin-right: auto;
    }

    .main-text img {
      width: 130px;
      margin-top: 50%;
      padding-top: 150px;
    }

    .main-text p {
      font-family: Roboto, sans-serif;
      padding: 100px 0 0 5px;
      font-size: 16px;
      width: 100%;
    }

    .main-text h1 {
      font-family: Roboto, sans-serif;
      padding: 15px 0 5px;
      font-size: 40px;
      font-weight: 900;
      margin-right: auto;
    }

    .main-text .text-description {
      padding: 30px 0 50px 0;
      font-size: 20px;
      width: 43%;
      margin-right: auto;
    }

    .main-text .button {
      margin-right: auto;
      background-color: #E70F2B;
      padding: 25px 50px;
      font-size: 20px;
      color: #ffffff !important;
    }

    footer {
      padding-top: 20%;
      width: 80%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 14px;
    }
    
    footer a {
      text-decoration: underline;
    }

    .color-overlay {
      width: 100%;
      height: 100%;
      background-color: #000942b3;
      opacity: .7;
      position: absolute;
    }
    }

    @media only screen and (min-width: 768px) and (max-width: 1023px) {
      body {
      background: url('https://i.ibb.co/5RcpBct/homenow-background-image.jpg') no-repeat;
      background-attachment: fixed;
      color: #fff;
      width: 100%;
      height: 115vh;
      position: relative;
      background-size: cover;
      background-position: center;
    }

    .text-container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      height: 5vh;
      position: absolute;
      z-index: 1;
      width: 100%;
    }

    .main-text {
      padding-left: 45px;
    }

    .main-text .logo {
      padding-top: 20%;
      width: 150px;
      margin-right: auto;
    }

    .main-text img {
      width: 130px;
      margin-top: 100%;
      padding-top: 150px;
    }

    .main-text p {
      font-family: Roboto, sans-serif;
      padding: 100px 0 0 5px;
      font-size: 16px;
      width: 100%;
    }

    .main-text h1 {
        font-family: Roboto, sans-serif;
        padding: 15px 0 5px;
        font-size: 40px;
        font-weight: 900;
        margin-right: auto;
    }

    .main-text .text-description {
      padding: 30px 0 60px 0;
      font-size: 20px;
      width: 90%;
      margin-right: auto;
    }

    .main-text .button {
      margin-right: auto;
      background-color: #E70F2B;
      padding: 20px 30px;
      font-size: 20px;
      color: #ffffff !important;
    }

    footer {
      padding-top: 20%;
      width: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      font-size: 12px;
      margin: 0 auto;
      line-height: 4em;
    }
    
    footer a {
      text-decoration: underline;
    }

    .color-overlay {
      width: 100%;
      height: 100%;
      background-color: #000942b3;
      opacity: .7;
      position: absolute;
    }
    }
    
    /* Mobile Version */
    @media only screen and (min-width: 500px) and (max-width: 767px) {
      body {
      background: url('https://i.ibb.co/5RcpBct/homenow-background-image.jpg') no-repeat;
      background-attachment: fixed;
      color: #fff;
      width: 100%;
      height: 115vh;
      position: relative;
      background-size: cover;
      background-position: center;
    }

    .text-container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      height: 40vh;
      position: absolute;
      z-index: 1;
      width: 100%;
    }

    .main-text {
      padding-left: 45px;
    }

    .main-text .logo {
      padding-top: 120%;
      width: 150px;
      margin-right: auto;
    }

    .main-text img {
      width: 130px;
      margin-top: 100%;
      padding-top: 150px;
    }

    .main-text p {
      font-family: Roboto, sans-serif;
      padding: 100px 0 0 5px;
      font-size: 16px;
      width: 100%;
    }

    .main-text h1 {
        font-family: Roboto, sans-serif;
        padding: 15px 0 5px;
        font-size: 40px;
        font-weight: 900;
        margin-right: auto;
    }

    .main-text .text-description {
      padding: 30px 0 60px 0;
      font-size: 20px;
      width: 90%;
      margin-right: auto;
    }

    .main-text .button {
      margin-right: auto;
      background-color: #E70F2B;
      padding: 20px 30px;
      font-size: 20px;
      color: #ffffff !important;
    }

    footer {
      padding-top: 20%;
      width: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      font-size: 12px;
      margin: 0 auto;
      line-height: 4em;
    }
    
    footer a {
      text-decoration: underline;
    }

    .color-overlay {
      width: 100%;
      height: 100%;
      background-color: #000942b3;
      opacity: .7;
      position: absolute;
    }
    }
   
  </style>
</head>

<body>
  <div class="container">
    <div class="text-container">
      <div class="main-text">
        <a class="logo" href="https://ibb.co/9YND1Gj"><img src="https://i.ibb.co/F7Krynt/homenow-logo.png" alt="homenow-logo" border="0"></a>
      <p>BE THE FIRST TO KNOW</p>
      <h1>Searching for a new home in the Hampton neighborhood?</h1>
      <p class="text-description">Get updates BEFORE a new home is even listed!</p>
      <a class="button" href="/">Send me updates first &#8702;</a>
      </div>
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