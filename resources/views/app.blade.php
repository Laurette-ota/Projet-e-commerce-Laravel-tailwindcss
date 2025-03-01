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
        <div class="my-20">
            <div class="flex flex-row justify-between my-5">
              <h2 class="text-3xl">Men's Collection</h2>
              <a href="#" class="flex flex-row text-lg hover:text-purple-700">
                View All
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
              </a>
            </div>
          <div class="grid grid-flow-row grid-cols-1 md:grid-cols-3 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10">
            <div class="shadow-lg rounded-lg">
              <a href="#">
                <img src="./images/products/men/product1.jpg" class="rounded-tl-lg rounded-tr-lg" />
              </a>
              <div class="p-5">
                <h3><a href="#">Mens T-Shirt</a></h3>
                <div class="flex flex-row my-3">
                  <div class="bg-black rounded-full h-5 w-5 shadow-md mr-2"></div>
                  <div class="bg-blue-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
                  <div class="bg-white rounded-full h-5 w-5 shadow-md mr-2"></div>
                  <div class="bg-red-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
                  <div class="bg-green-700 rounded-full h-5 w-5 shadow-md mr-2"></div>
                </div>
                <div class="flex flex-row my-3">
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">XL</a>
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">XXL</a>
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">L</a>
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">M</a>
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">S</a>
                </div>
                <div class="flex flex-col xl:flex-row justify-between">
                  <a class="bg-gradient-to-r from-red-600 to-pink-500 rounded-full py-2 px-4 my-2 text-sm text-white hover:bg-pink-600 hover:from-pink-600 hover:to-pink-600 flex flex-row justify-center" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    Add to cart
                  </a>
                  <a class="bg-purple-600 rounded-full py-2 px-4 my-2 text-sm text-white hover:bg-purple-700 flex flex-row justify-center" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    View Details
                  </a>
                </div>
              </div>
            </div>
      
            <div class="shadow-lg rounded-lg">
              <a href="#">
                <img src="./images/products/men/product2.jpg" class="rounded-tl-lg rounded-tr-lg" />
              </a>
              <div class="p-5">
                <h3><a href="#">Slim Khaki Tousers</a></h3>
                <div class="flex flex-row my-3">
                  <div class="bg-black rounded-full h-5 w-5 shadow-md mr-2"></div>
                  <div class="bg-blue-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
                  <div class="bg-white rounded-full h-5 w-5 shadow-md mr-2"></div>
                  <div class="bg-red-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
                  <div class="bg-green-700 rounded-full h-5 w-5 shadow-md mr-2"></div>
                </div>
                <div class="flex flex-row my-3">
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">XL</a>
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">XXL</a>
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">L</a>
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">M</a>
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">S</a>
                </div>
                <div class="flex flex-col xl:flex-row justify-between">
                  <a class="bg-gradient-to-r from-red-600 to-pink-500 rounded-full py-2 px-4 my-2 text-sm text-white hover:bg-pink-600 hover:from-pink-600 hover:to-pink-600 flex flex-row justify-center" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    Add to cart
                  </a>
                  <a class="bg-purple-600 rounded-full py-2 px-4 my-2 text-sm text-white hover:bg-purple-700 flex flex-row justify-center" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    View Details
                  </a>
                </div>
              </div>
            </div>
      
            <div class="shadow-lg rounded-lg">
              <a href="#">
                <img src="./images/products/men/product3.jpg" class="rounded-tl-lg rounded-tr-lg" />
              </a>
              <div class="p-5">
                <h3><a href="#">Nike Shoes</a></h3>
                <div class="flex flex-row my-3">
                  <div class="bg-black rounded-full h-5 w-5 shadow-md mr-2"></div>
                  <div class="bg-blue-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
                  <div class="bg-white rounded-full h-5 w-5 shadow-md mr-2"></div>
                  <div class="bg-red-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
                  <div class="bg-green-700 rounded-full h-5 w-5 shadow-md mr-2"></div>
                </div>
                <div class="flex flex-row my-3">
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">XL</a>
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">XXL</a>
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">L</a>
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">M</a>
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">S</a>
                </div>
                <div class="flex flex-col xl:flex-row justify-between">
                  <a class="bg-gradient-to-r from-red-600 to-pink-500 rounded-full py-2 px-4 my-2 text-sm text-white hover:bg-pink-600 hover:from-pink-600 hover:to-pink-600 flex flex-row justify-center" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    Add to cart
                  </a>
                  <a class="bg-purple-600 rounded-full py-2 px-4 my-2 text-sm text-white hover:bg-purple-700 flex flex-row justify-center" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    View Details
                  </a>
                </div>
              </div>
            </div>
      
            <div class="shadow-lg rounded-lg">
              <a href="#">
                <img src="./images/products/men/product4.jpg" class="rounded-tl-lg rounded-tr-lg" />
              </a>
              <div class="p-5">
                <h3><a href="#">Wirst Watch</a></h3>
                <div class="flex flex-row my-3">
                  <div class="bg-black rounded-full h-5 w-5 shadow-md mr-2"></div>
                  <div class="bg-blue-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
                  <div class="bg-white rounded-full h-5 w-5 shadow-md mr-2"></div>
                  <div class="bg-red-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
                  <div class="bg-green-700 rounded-full h-5 w-5 shadow-md mr-2"></div>
                </div>
                <div class="flex flex-row my-3">
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">XL</a>
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">XXL</a>
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">L</a>
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">M</a>
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">S</a>
                </div>
                <div class="flex flex-col xl:flex-row justify-between">
                  <a class="bg-gradient-to-r from-red-600 to-pink-500 rounded-full py-2 px-4 my-2 text-sm text-white hover:bg-pink-600 hover:from-pink-600 hover:to-pink-600 flex flex-row justify-center" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    Add to cart
                  </a>
                  <a class="bg-purple-600 rounded-full py-2 px-4 my-2 text-sm text-white hover:bg-purple-700 flex flex-row justify-center" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    View Details
                  </a>
                </div>
              </div>
            </div>
            </div>
          </div> <!-- Men's Collection Section -->
      
      
          <div class="my-20">
            <div class="flex flex-row justify-between my-5">
              <h2 class="text-3xl">Women's Collection</h2>
              <a href="#" class="flex flex-row text-lg hover:text-purple-700">
                View All
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
              </a>
            </div>
          <div class="grid grid-flow-row grid-cols-1 md:grid-cols-3 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10">
            <div class="shadow-lg rounded-lg">
              <a href="#">
                <img src="./images/products/women/product1.jpg" class="rounded-tl-lg rounded-tr-lg" />
              </a>
              <div class="p-5">
                <h3><a href="#">V Neck Tassel Cape</a></h3>
                <div class="flex flex-row my-3">
                  <div class="bg-black rounded-full h-5 w-5 shadow-md mr-2"></div>
                  <div class="bg-blue-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
                  <div class="bg-white rounded-full h-5 w-5 shadow-md mr-2"></div>
                  <div class="bg-red-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
                  <div class="bg-green-700 rounded-full h-5 w-5 shadow-md mr-2"></div>
                </div>
                <div class="flex flex-row my-3">
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">XL</a>
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">XXL</a>
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">L</a>
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">M</a>
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">S</a>
                </div>
                <div class="flex flex-col xl:flex-row justify-between">
                  <a class="bg-gradient-to-r from-red-600 to-pink-500 rounded-full py-2 px-4 my-2 text-sm text-white hover:bg-pink-600 hover:from-pink-600 hover:to-pink-600 flex flex-row justify-center" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    Add to cart
                  </a>
                  <a class="bg-purple-600 rounded-full py-2 px-4 my-2 text-sm text-white hover:bg-purple-700 flex flex-row justify-center" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    View Details
                  </a>
                </div>
              </div>
            </div>
      
            <div class="shadow-lg rounded-lg">
              <a href="#">
                <img src="./images/products/women/product2.jpg" class="rounded-tl-lg rounded-tr-lg" />
              </a>
              <div class="p-5">
                <h3><a href="#">Printed Wrap Dress</a></h3>
                <div class="flex flex-row my-3">
                  <div class="bg-black rounded-full h-5 w-5 shadow-md mr-2"></div>
                  <div class="bg-blue-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
                  <div class="bg-white rounded-full h-5 w-5 shadow-md mr-2"></div>
                  <div class="bg-red-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
                  <div class="bg-green-700 rounded-full h-5 w-5 shadow-md mr-2"></div>
                </div>
                <div class="flex flex-row my-3">
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">XL</a>
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">XXL</a>
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">L</a>
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">M</a>
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">S</a>
                </div>
                <div class="flex flex-col xl:flex-row justify-between">
                  <a class="bg-gradient-to-r from-red-600 to-pink-500 rounded-full py-2 px-4 my-2 text-sm text-white hover:bg-pink-600 hover:from-pink-600 hover:to-pink-600 flex flex-row justify-center" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    Add to cart
                  </a>
                  <a class="bg-purple-600 rounded-full py-2 px-4 my-2 text-sm text-white hover:bg-purple-700 flex flex-row justify-center" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    View Details
                  </a>
                </div>
              </div>
            </div>
      
            <div class="shadow-lg rounded-lg">
              <a href="#">
                <img src="./images/products/women/product3.jpg" class="rounded-tl-lg rounded-tr-lg" />
              </a>
              <div class="p-5">
                <h3><a href="#">Blue Denim Dress</a></h3>
                <div class="flex flex-row my-3">
                  <div class="bg-black rounded-full h-5 w-5 shadow-md mr-2"></div>
                  <div class="bg-blue-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
                  <div class="bg-white rounded-full h-5 w-5 shadow-md mr-2"></div>
                  <div class="bg-red-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
                  <div class="bg-green-700 rounded-full h-5 w-5 shadow-md mr-2"></div>
                </div>
                <div class="flex flex-row my-3">
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">XL</a>
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">XXL</a>
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">L</a>
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">M</a>
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">S</a>
                </div>
                <div class="flex flex-col xl:flex-row justify-between">
                  <a class="bg-gradient-to-r from-red-600 to-pink-500 rounded-full py-2 px-4 my-2 text-sm text-white hover:bg-pink-600 hover:from-pink-600 hover:to-pink-600 flex flex-row justify-center" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    Add to cart
                  </a>
                  <a class="bg-purple-600 rounded-full py-2 px-4 my-2 text-sm text-white hover:bg-purple-700 flex flex-row justify-center" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    View Details
                  </a>
                </div>
              </div>
            </div>
      
            <div class="shadow-lg rounded-lg">
              <a href="#">
                <img src="./images/products/women/product4.jpg" class="rounded-tl-lg rounded-tr-lg" />
              </a>
              <div class="p-5">
                <h3><a href="#">High Waist Denim Skirt</a></h3>
                <div class="flex flex-row my-3">
                  <div class="bg-black rounded-full h-5 w-5 shadow-md mr-2"></div>
                  <div class="bg-blue-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
                  <div class="bg-white rounded-full h-5 w-5 shadow-md mr-2"></div>
                  <div class="bg-red-800 rounded-full h-5 w-5 shadow-md mr-2"></div>
                  <div class="bg-green-700 rounded-full h-5 w-5 shadow-md mr-2"></div>
                </div>
                <div class="flex flex-row my-3">
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">XL</a>
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">XXL</a>
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">L</a>
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">M</a>
                  <a class="border-gray-300 border-2 text-gray-400 rounded-md px-2 py-1 mr-2 text-xs" href="#">S</a>
                </div>
                <div class="flex flex-col xl:flex-row justify-between">
                  <a class="bg-gradient-to-r from-red-600 to-pink-500 rounded-full py-2 px-4 my-2 text-sm text-white hover:bg-pink-600 hover:from-pink-600 hover:to-pink-600 flex flex-row justify-center" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    Add to cart
                  </a>
                  <a class="bg-purple-600 rounded-full py-2 px-4 my-2 text-sm text-white hover:bg-purple-700 flex flex-row justify-center" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    View Details
                  </a>
                </div>
              </div>
            </div>
            </div>
          </div> <!-- Women's Collection Section -->
      
          <div class="rounded-lg shadow-lg my-20 flex flex-row">
            <div class="lg:w-3/5 w-full bg-gradient-to-r from-black to-purple-900 lg:from-black lg:via-purple-900 lg:to-transparent rounded-lg text-gray-100 p-12">
              <div class="lg:w-1/2">
                <h3 class="text-2xl font-extrabold mb-4">Subscribe to get our offers first</h3>
                <p class="mb-4 leading-relaxed">Want to hear from us when we have new offers? Sign up for our newsletter and we'll email you every time we have new sale offers.</p>
                <div>
                  <input type="email" placeholder="Enter email address" class="bg-gray-600 text-gray-200 placeholder-gray-400 px-4 py-3 w-full rounded-lg focus:outline-none mb-4" />
                  <button type="submit" class="bg-red-600 py-3 rounded-lg w-full">Subscribe</button>
                </div>
              </div>
            </div>
            <div class="lg:w-2/5 w-full lg:flex lg:flex-row hidden">
              <img src="./images/subscribe-banner.png" class="h-96" />
            </div>
          </div><!-- Newsletter Section -->
      
          <div class="border-t-2 border-gray-300 flex flex-col md:flex-row md:justify-between text-center py-5 text-sm">
            <div class="mb-4">
              <a href="#" class="mx-2.5">About</a>
              <a href="#" class="mx-2.5">Privacy Policy</a>
              <a href="#" class="mx-2.5">Terms of Services</a>
            </div>
            <p>&copy; Copyright Reserved 2021</p>
          </div><!-- Footer Section -->
    </div>
</body>

</html>