<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Learn Tailwind CSS</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="mx-auto p-5 h-8 container">
        <div class="md:flex md:flex-row justify-between text-center">
            <div class="flex flex-row justify-center">
                <div class="bg-gradient-to-r from-purple-600 to-red-400 rounded-lg w-10 h-10"></div>
                <h1 class="ml-2 text-gray-600 text-3xl">IbraShop</h1>
            </div>
            <div class="ml-2">
                <a href="#" class="p-4 text-gray-600 hover:text-purple-600">Home</a>
                <a href="#" class="p-4 text-gray-600 hover:text-purple-600">Shop</a>
                <a href="#" class="p-4 text-gray-600 hover:text-purple-600">Blog</a>
                <a href="#" class="p-4 text-gray-600 hover:text-purple-600">Contact</a>
                <a href="#" class="bg-purple-600 p-4 px-5 rounded-full text-gray-50 hover:text-purple-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                    Cart (0)
                </a>
            </div>
        </div>
        <!-- Principale Navigation -->
        <div class="md:flex md:flex-row mt-20">
            <div class="flex flex-col justify-center items-center md:w-2/5">
                <h2 class="md:self-start mb-4 font-serif text-gray-600 text-5xl md:text-left text-center">Some Catchy
                    Title Here</h2>
                <p class="md:self-start text-gray-600 md:text-left text-center uppercase tracking-wide">Our brand
                    tagline goes here.</p>
                <p class="md:self-start text-gray-600 md:text-left text-center uppercase tracking-wide">Our brand motto
                    goes here.</p>
                <a href="#"
                    class="md:self-start bg-gradient-to-r from-red-600 to-pink-500 my-5 px-8 py-4 rounded-full text-gray-50 text-xl uppercase">Shop
                    Now</a>
            </div>
            <div class="md:w-3/5">
                <img src="./images/hero-img.svg" class="w-full" />
            </div>
        </div>
        <!-- Hero sectioin -->

    </div>
</body>

</html>