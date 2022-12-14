<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    {{-- Alpine JS --}}
    <title>Document</title>
</head>

<body style="background: url('https://i.ibb.co/5RcpBct/homenow-background-image.jpg') no-repeat; background-size: cover; background-attachment:fixed; background-position: center;" class="text-[#ffffff] w-[100%] desktop:h-[150vh] mobile:h-[140vh] tablet:h-[125vh] relative" x-data="{ 'showModal': false }" @keydown.escape="showModal = false" x-cloak>
    <div class="flex flex-col items-center justify-center h-[40vh] absolute z-[1] p-[45px] w-[100%]">
        <div class="font-[Roboto, sans-serif]">
            <a class="mobile:pt-[120%] table:pt-[50%] w-[150px] mr-auto" href="https://ibb.co/9YND1Gj"><img class="mobile:mt-[175%] w-[130px] tablet:mt-[100%] pt[150px] desktop:mt-[80%]" src="https://i.ibb.co/F7Krynt/homenow-logo.png" alt="homenow-logo" border="0"></a>
            <p class="pt-[100px] pl-[5px] text-[16px] w-[100%]">BE THE FIRST TO KNOW</p>
            <h1 class="tablet:font-[700] pt-[15px] pb-[5px] text-[40px] mobile:font-[900] mr-[auto]">Searching for a new home in the Hampton neighborhood?</h1>
            <p class="pt-[30px] pb-[60px] text-[20px] w-[90%] mr-[auto]">Get updates BEFORE a new home is even listed!</p>
            <a class="mr-[auto] bg-[#E70F2B] py-[25px] px-[50px] text-[20px] text-[#ffffff]" href="/">Send me updates first &#8702;</a>
        </div>
        <footer class="leading-[4em] m-[0 auto] pt-[20%] w-[100%] flex desktop:flex-row mobile:flex-col desktop:justify-around mobile:items-center text-[12px]">
            <div>
                <a class="underline" href="/">Contact Us</a>
            </div >
            <div>
                <span>© 2020 HomeNow, All Rights Reserved. Created with</span>
                <a href="/">Leadpages</a>
            </div>
            <div>
                <span>We Respect Your <a href="/">Privacy</a></span>
            </div>
        </footer>
    </div>
    <div class="w-[100%] h-[100%] bg-[#000942b3] opacity-[.7] absolute"></div>
</body>

</html>