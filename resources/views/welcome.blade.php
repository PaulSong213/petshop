<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Stone Base</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        
        <script type="module" src="https://unpkg.com/ionicons@5.5.1/dist/ionicons/ionicons.esm.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Styles -->
        <style>
            *{
                font-family: Roboto,Arial, Helvetica, sans-serif;
            }
            
            html {
                scroll-behavior: smooth;
            }

            .bg-theme {
                background-color: #FF7F04;
            }

        </style>
    </head>
    <body>
    <main class="max-w-screen-2xl mx-auto">

    <section class="bg-theme py-4 px-8">
			
        <nav class="mb-10 flex justify-between">

            <section>
                <img class="w-16 md:hidden" src="/images/logo.jpg" alt="Logo">
            </section>

			<section class="uppercase text-white text-sm flex justify-end space-x-2 tracking-wider" style="height: max-content">
                <h6 class="rounded-lg p-2 hover:bg-yellow-500 transition-all cursor-pointer table my-auto">Services</h6>
                <h6 class="rounded-lg p-2 hover:bg-yellow-500 transition-all cursor-pointer table my-auto">Story</h6>
                <h6 class="rounded-lg p-2 hover:bg-yellow-500 transition-all cursor-pointer table my-auto">Find us</h6>
                <h6 class="rounded-lg p-2 hover:bg-yellow-500 transition-all cursor-pointer table my-auto"><a href="/login">Log in</a></h6>
            </section>
		</nav>

		<div class="flex space-x-1 flex-col-reverse md:flex-row md:justify-between xl:pr-24">
			<div class="text-white  text-lg md:text-2xl flex space-x-2 md:space-x-0 md:flex-col md:space-y-2 md:justify-end">
				<ion-icon class="hover:text-yellow-200 transition-colors cursor-pointer" name="logo-facebook"></ion-icon>
				<ion-icon class="hover:text-yellow-200 transition-colors cursor-pointer" name="mail"></ion-icon>
				<ion-icon class="hover:text-yellow-200 transition-colors cursor-pointer" name="call"></ion-icon>
			</div>
			<div class="hidden md:flex justify-center md:justify-end flex-col space-y-4">
				<div>
					<h1 class="text-white text-6xl lg:text-7xl xl:text-8xl font-black text-center md:text-left">JOHAN'S</h1>
					<h6 class="text-white text-xl xl:text-2xl tracking-widest text-center md:text-left">Pet Hub</h6>
				</div>
				<img class="w-64 ml-auto mx-auto md:mx-0" src="/images/logo.jpg" alt="Logo">
			</div>
			
			<div class="flex justify-center">
                <div class="h-80 xl:h-96 w-80 xl:w-96 p-5 overflow-hidden rounded-3xl relative overflow-hidden bg-red-200 mb-5">
                    <img id="sliderImage" class="absolute min-w-full min-h-full transform top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10" src="/images/products/product1.jpg">
                    <section class="absolute z-20 bottom-0 left-0 flex justify-center space-x-1 py-5 w-full" id="sliderButtonContainer">
                       
                    </section>
                </div>
            </div>
		</div>

    </section> 
    
    <section>

        {{-- What we do? --}}
        <div class="my-24 px-10 md:px-24 lg:px-48">
            <h4 class="text-yellow-600 text-4xl uppercase font-bold text-center my-10">what we do?</h4>
            
            <section class="grid grid-cols-1 xl:grid-cols-3 gap-5">

                <div class="shadow-md p-10 border border-gray-200 rounded-md grid grid-cols-2 gap-4 xl:grid-cols-1">
                    <div class="flex flex-col space-y-5">
                        <img class="w-48 xl:w-36 mx-auto" src="/images/market.svg" alt="market">
                        <h5 class="text-yellow-600 text-3xl uppercase font-bold text-center ">Market</h5>
                    </div>
                    <p class="text-xs text-gray-400 text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse exercitationem totam in suscipit? Laboriosam, impedit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eaque hic eius molestias, similique velit labore nihil esse consectetur incidunt cum ad suscipit, at, quis numquam ut. Autem, recusandae veritatis.</p>
                </div>
                <div class="shadow-md p-10 border border-gray-200 rounded-md grid grid-cols-2 gap-4 xl:grid-cols-1">
                    <div class="flex flex-col space-y-5">
                        <img class="w-48 xl:w-36 mx-auto" src="/images/sell.svg" alt="market">
                        <h5 class="text-yellow-600 text-3xl uppercase font-bold text-center ">Sell</h5>
                    </div>
                    <p class="text-xs text-gray-400 text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse exercitationem totam in suscipit? Laboriosam, impedit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eaque hic eius molestias, similique velit labore nihil esse consectetur incidunt cum ad suscipit, at, quis numquam ut. Autem, recusandae veritatis.</p>
                </div>
                <div class="shadow-md p-10 border border-gray-200 rounded-md grid grid-cols-2 gap-4 xl:grid-cols-1">
                    <div class="flex flex-col space-y-5">
                        <img class="w-48 xl:w-36 mx-auto" src="/images/supply.svg" alt="market">
                        <h5 class="text-yellow-600 text-3xl uppercase font-bold text-center ">Supply</h5>
                    </div>
                    <p class="text-xs text-gray-400 text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse exercitationem totam in suscipit? Laboriosam, impedit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eaque hic eius molestias, similique velit labore nihil esse consectetur incidunt cum ad suscipit, at, quis numquam ut. Autem, recusandae veritatis.</p>
                </div>
            </section>

        </div>

    </section>

    </main>        
    

    <script>
        const heroSliderImages = ['product1.jpg','product2.jpg','product3.jpg'];
        const heroSliderPath = '/images/products/';
        var heroSliderCurrentCount = 1;
        const maxSliderCount = heroSliderImages.length;    

        function setSlider(){
            for(var i = 0; i < heroSliderImages.length; i++){
                const sliderButton = '<div class="w-3 h-3 bg-theme rounded-full opacity-70 cursor-pointer hover:opacity-100 sliderButton border-2 border-yellow-700 border-opacity-0" id="sliderButton'+ (i + 1) +'"></div>';
                $("#sliderButtonContainer").append(sliderButton);
            }
            $(".sliderButton").click(function() {
                var sliderCount = $(this).attr('id').slice(12,20);
                setSliderActive(sliderCount);
            });
            setSliderActive(heroSliderCurrentCount);
        }

        function setSliderActive(newSliderCount){
            if(newSliderCount <= 0)return;
            if(!newSliderCount)newSliderCount = heroSliderCurrentCount + 1;
            if(newSliderCount > maxSliderCount)newSliderCount = 1;
            heroSliderCurrentCount = newSliderCount;
            var newImage = heroSliderPath + heroSliderImages[heroSliderCurrentCount - 1];
            $("#sliderImage").attr('src', newImage);
            $(".sliderButton").removeClass("border-opacity-100 opacity-100");
            $("#sliderButton" + heroSliderCurrentCount).addClass("border-opacity-100 opacity-100");
        }

        $(document).ready(function() {
            setSlider();
            setInterval(setSliderActive, 5000);
        });
    </script>   
    </body>
</html>
