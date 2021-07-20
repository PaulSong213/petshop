<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Johan's | Pet Hub</title>
        <link rel="shortcut icon" type="image/x-icon" href="/images/logo.jpg" />
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
                <h6 class="select-none rounded-lg p-2 hover:bg-yellow-500 transition-all cursor-pointer table my-auto"><a href="#services">Services</a></h6>
                <h6 class="select-none rounded-lg p-2 hover:bg-yellow-500 transition-all cursor-pointer table my-auto"><a href="#story">Story</a></h6>
                <h6 class="select-none rounded-lg p-2 hover:bg-yellow-500 transition-all cursor-pointer table my-auto"><a href="#find-us">Find us</a></h6>
                <h6 class="select-none -lg p-2 hover:bg-yellow-500 transition-all cursor-pointer table my-auto"><a href="/login">Log in</a></h6>
            </section>
		</nav>

		<div class="flex space-x-1 flex-col-reverse md:flex-row md:justify-between xl:pr-24">
			<div class="text-white  text-lg md:text-2xl flex space-x-2 md:space-x-0 md:flex-col md:space-y-2 md:justify-end">
                <a href="https://www.facebook.com/johanspethub"><ion-icon class="hover:text-yellow-200 transition-colors cursor-pointer" name="logo-facebook"></ion-icon></a>
				<a href="mailto:johanspethub@yahoo.com"><ion-icon class="hover:text-yellow-200 transition-colors cursor-pointer" name="mail"></ion-icon></a>
				<a href="tel:09164614767<ion-icon class="hover:text-yellow-200 transition-colors cursor-pointer" name="call"></ion-icon>a>
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
        <div id="services" class="my-12 px-3 md:px-10 md:px-24 lg:px-48">
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

        {{-- How we start --}}
        <div id="story" class="grid grid-cols-12 px-10 lg:px-24 my-12">
            <section class="col-span-5 lg:col-span-6 flex space-x-2 md:space-x-5 justify-end px-2">
                <div class="flex flex-col space-y-5 md:space-y-10">
                    <div class="h-80 overflow-hidden">
                        <img class="hidden md:block w-auto h-full" src="/images/pet.svg">
                    </div>
                    <div class="h-48 overflow-hidden">
                        <div class="flex space-x-1 md:space-x-5 justify-end text-yellow-600 font-black text-lg md:text-2xl">
                            <h5 class="table my-auto">June 2018</h5>
                            <h5 class="text-2xl md:text-5xl">•</h5>
                        </div>
                    </div>
                    <div class="h-48 overflow-hidden">
                        <div class="flex space-x-1 md:space-x-5 justify-end text-yellow-600 font-black text-lg md:text-2xl">
                            <h5 class="table my-auto">January 2020</h5>
                            <h5 class="text-2xl md:text-5xl">•</h5>
                        </div>
                    </div>
                    <div class="h-48 overflow-hidden">
                        <div class="flex space-x-1 md:space-x-5 justify-end text-yellow-600 font-black text-lg md:text-2xl">
                            <h5 class="table my-auto">March 2021</h5>
                            <h5 class="text-2xl md:text-5xl">•</h5>
                        </div>
                    </div>
                </div>
                <div class="h-full bg-theme w-0.5 md:w-1">
                </div>
            </section>
            <section class="col-span-7 lg:col-span-6">
                <div class="flex flex-col space-y-5 md:space-y-10">
                    <div class="h-80 overflow-hidden">
                        <h2 class="text-yellow-600 text-2xl md:text-4xl uppercase font-bold text-center mb-2">How we start?</h2>
                        <p class="text-xs md:text-sm text-gray-400 text-justify px-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, nihil similique quibusdam iure soluta illum necessitatibus ipsum praesentium dignissimos fuga possimus omnis in, iste libero qui fugit! Labore, sit nostrum. dignissimos fuga possimus omnis in, iste libero qui fugit! Labore, sit nostrum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati rerum quasi, quibusdam doloremque magni consequuntur qui, illum sint cumque similique nam! Consequuntur minus tenetur delectus. Corrupti assumenda dignissimos tempora? Voluptate! </p>
                    </div>
                    <div class="h-48 overflow-hidden">
                        <div class="h-full overflow-y-auto text-justify text-xs md:text-sm text-gray-400 px-2">
                            <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae excepturi veniam neque cumque a distinctio consequatur sunt sint asperiores nobis error, laboriosam nisi officiis debitis eius aliquid necessitatibus aliquam mollitia.Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae excepturi veniam neque cumque a distinctio consequatur sunt sint asperiores nobis error, laboriosam nisi officiis debitis eius aliquid necessitatibus aliquam mollitia.Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae excepturi veniam neque cumque a distinctio consequatur sunt sint asperiores nobis 
                            </p>
                        </div>
                    </div>
                    <div class="h-48 overflow-hidden">
                        <div class="h-full overflow-y-auto text-justify text-xs md:text-sm text-gray-400 px-2">
                            <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae excepturi veniam neque cumque a distinctio consequatur sunt sint asperiores nobis error, laboriosam nisi officiis debitis eius aliquid necessitatibus aliquam mollitia.Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae excepturi veniam neque cumque a distinctio consequatur sunt sint asperiores nobis error, laboriosam nisi officiis debitis eius aliquid necessitatibus aliquam mollitia.Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae excepturi veniam neque cumque a distinctio consequatur sunt sint asperiores nobis 
                            </p>
                        </div>
                    </div>
                    <div class="h-48 overflow-hidden">
                        <div class="h-full overflow-y-auto text-justify text-xs md:text-sm text-gray-400 px-2">
                            <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae excepturi veniam neque cumque a distinctio consequatur sunt sint asperiores nobis error, laboriosam nisi officiis debitis eius aliquid necessitatibus aliquam mollitia.Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae excepturi veniam neque cumque a distinctio consequatur sunt sint asperiores nobis error, laboriosam nisi officiis debitis eius aliquid necessitatibus aliquam mollitia.Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae excepturi veniam neque cumque a distinctio consequatur sunt sint asperiores nobis 
                            </p>
                        </div>
                    </div>
                </div>
            </section>

        </div>

        {{-- Our numbers --}}
        <div class="px-5 md:px-10 lg:px-24 xl:px-48 my-12">
            <div class="relative">
                <img class="z-10" src="/images/our_numbers.svg">
                <div class="absolute w-full md:w-3/4  top-48 xl:top-96 left-0  z-20 p-10">
                    <div class="rounded-lg shadow-lg bg-white h-full p-3 h-full">
                        <h4 class="text-yellow-600 text-2xl md:text-4xl uppercase font-bold text-center">our numbers</h4>
                        <div class="grid grid-cols-2 gap-2 md:gap-5 p-1 md:p-5">
                            <div class="text-yellow-600 grid grid-cols-10 w-full  mx-auto" style="max-width: 15rem">
                                <h4 class="text-md md:text-2xl lg:text-4xl font-bold col-span-4 text-right">6,700</h4>
                                <div class=" col-span-6 flex justify-end">
                                    <h5 class="text-xs md:text-base uppercase font-bold">costumers <br/> satisfactory</h5>
                                </div>
                            </div>
                            <div class="text-yellow-600 grid grid-cols-10 w-full  mx-auto" style="max-width: 15rem">
                                <h4 class="text-md md:text-2xl lg:text-4xl font-bold col-span-4 text-right">4</h4>
                                <div class=" col-span-6 flex justify-end">
                                    <h5 class="text-xs md:text-base uppercase font-bold">current <br/> branch</h5>
                                </div>
                            </div>
                            <div class="text-yellow-600 grid grid-cols-10 w-full  mx-auto" style="max-width: 15rem">
                                <h4 class="text-md md:text-2xl lg:text-4xl font-bold col-span-4 text-right">523</h4>
                                <div class=" col-span-6 flex justify-end">
                                    <h5 class="text-xs md:text-base uppercase font-bold">selling <br/> products</h5>
                                </div>
                            </div>
                            <div class="text-yellow-600 grid grid-cols-10 w-full  mx-auto" style="max-width: 15rem">
                                <h4 class="text-md md:text-2xl lg:text-4xl font-bold col-span-4 text-right">25</h4>
                                <div class=" col-span-6 flex justify-end">
                                    <h5 class="text-xs md:text-base uppercase font-bold">team <br/> size</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Find us --}}
        <div id="find-us" class="px-5 md:px-10 lg:px-24 xl:px-48 my-24">
            <div class="grid grid-cols-12">
                <div class="hidden md:block  md:col-span-4 xl:col-span-6">
                    <h4 class="text-yellow-600 text-2xl md:text-4xl uppercase font-bold text-center mb-5">Find us</h4>
                    <img src="/images/find_us.svg" alt="find">
                </div>
                <div class="col-span-12 md:col-span-8 xl:col-span-6 flex flex-col">
                    <h4 class="text-yellow-600 text-xl md:text-2xl uppercase font-bold mb-5 text-center">Molino - Paliparan Rd, Imus, Cavite </h4>
                    <div class="mapouter table mx-auto"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=The%20District%20Dasmari%C3%B1as%20Molino%20-%20Paliparan%20Rd,%204102%20Dasmari%C3%B1as,%20Philippines&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org"></a><br><style>.mapouter{position:relative;text-align:right;height:450px;width:450px;}</style><a href="https://www.embedgooglemap.net">google map for websites</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:450px;width:450px;}</style></div></div>
                </div>
            </div>
        </div>

    </section>

    <footer class="bg-theme">
        <div class="grid grid-cols-2">
            <section class="flex justify-end">
                <div>
                    <img class="w-48" src="/images/logo.jpg" alt="Logo">
                    <h1 class="uppercase text-white text-5xl font-bold text-center">Johan's</h1>
                    <h6 class="uppercase text-white  tracking-widest text-center">pet hub</h6>
                </div>
            </section>
            <section class="p-4">
                <h4 class="text-white text-2xl font-bold">Essential Links</h4>
                <div class="text-white text-sm font-light border-l-2 pl-2 h-48 border-white">
                    <h4><a class="hover:text-yellow-300" href="https://www.facebook.com/johanspethub">Facebook Page</a></h4>
                    <h4><a class="hover:text-yellow-300" href="mailto:johanspethub@yahoo.com">Email</a></h4>
                    <h4><a class="hover:text-yellow-300" href="tel:09164614767">Phone</a></h4>
                </div>
            </section>
        </div>

    </footer>

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
