<!-- 
Navbar Section -->

<?php
include 'partials/header.php';
?>


    <!-- login Form -->


    <div class="bg-black bg-opacity-50 absolute inset-0 hidden justify-center items-center" id="overlay">
    <div class="bg-gray-100 rounded-2xl shadow-lg max-w-sm p-10 container">
      <div class="flex justify-between items-center ">
        <h2 class="font-bold text-2xl text-[#002D74]">Login</h2>
        <button type="button" id="close-modal"
          class="  text-black bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
          data-modal-hide="authentication-modal">
          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>

        </button>
      </div>
      <div>
        <p class="text-xs mt-4 text-[#002D74]">If you are already a member, easily log in</p>
        <form action="" class="flex flex-col gap-4 ">
          <input class="p-2 mt-8 rounded-xl border" type="email" name="email" placeholder="Email">
          <div class="relative">
            <input id="pass1" class="p-2 rounded-xl border w-full" type="password" name="password"
              placeholder="Password">
            <span class="absolute top-1/2 right-3 -translate-y-1/2" onclick=" hidepassword()">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray" id="hide1"
                class="hidden bi bi-eye " viewBox="0 0 16 16">
                <path
                  d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" id="hide2"
                class=" bi bi-eye-slash " viewBox="0 0 16 16">
                <path
                  d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z" />
                <path
                  d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z" />
                <path
                  d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z" />
              </svg>
            </span>

          </div>
          <button class="bg-[#002D74] rounded-xl text-white py-2 hover:scale-105 duration-300">Login</button>
        </form>
       
        <div class="mt-3 text-xs flex justify-between items-center text-[#002D74]">
          <p>Don't have an account?</p>
          <a href="signup.php">
            <button class="py-2 px-5 bg-white border rounded-xl hover:scale-110 duration-300">Register</button>
          </a>

        </div>

      </div>
    </div>

  </div>

    <!-- Hero Section -->



    <section class="bg-gray-100 dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Shop without spending money</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    Everyday,thousands of people meet on SwapEase to trade for everything from clothing and furniture to
                    houseplants and art</p>
                <a href="#"
                    class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Get started
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="signup.php"
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Swap It
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="images/b1-removebg.png" alt="mockup">
            </div>
        </div>
    </section>





  










    <!-- Steps with SwapEase -->

    <section class="p-6 dark:bg-gray-100 dark:text-gray-100">
        <div class="container mx-auto">
            <span class="block mb-2 text-xs font-medium tracking-widest text-center uppercase dark:text-[#002D74]">How
                it
                works</span>
            <h2 class="text-5xl font-bold text-center dark:text-black">Working with SwapEase is simple</h2>
            <div class="grid gap-6 my-16 lg:grid-cols-3">
                <div class="flex flex-col p-8 space-y-4 rounded-md dark:bg-gray-900">
                    <div
                        class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-xl font-bold rounded-full dark:bg-violet-400 dark:text-gray-900">
                        1</div>
                    <p class="text-2xl font-semibold">
                        <b>SignUp.</b>Create your free account and start exploring items!
                    </p>
                </div>
                <div class="flex flex-col p-8 space-y-4 rounded-md dark:bg-gray-900">
                    <div
                        class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-xl font-bold rounded-full dark:bg-violet-400 dark:text-gray-900">
                        2</div>
                    <p class="text-2xl font-semibold">
                        <b>Upload items.</b>Click a picture of your item and upload it.
                    </p>
                </div>
                <div class="flex flex-col p-8 space-y-4 rounded-md dark:bg-gray-900">
                    <div
                        class="flex items-center justify-center flex-shrink-0 w-12 h-12 text-xl font-bold rounded-full dark:bg-violet-400 dark:text-gray-900">
                        3</div>
                    <p class="text-2xl font-semibold">
                        <b>Trade it.</b>Connect with other people and start trading your items!
                    </p>
                </div>
            </div>
        </div>
    </section>




    <!-- Categories -->


    <h2 class="text-4xl font-bold text-center dark:text-black my-4">Popular Categories</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-6 gap-6 w-full">

<div class="relative p-4 w-full bg-white rounded-lg overflow-hidden hover:shadow flex flex-col justify-center items-center"
    style="min-height: 160px">
    <div class="w-16 h-16 bg-gray-100 rounded-lg"><img src="images/electronics.png" alt=""></div>
    
    <h2 class="mt-2 text-gray-800 text-sm font-semibold line-clamp-1">
        Electronics
    </h2>
</div>

<div class="relative p-4 w-full bg-white rounded-lg overflow-hidden hover:shadow flex flex-col justify-center items-center"
    style="min-height: 160px">
    <div class="w-16 h-16 bg-gray-100 rounded-lg"><img src="images/books.png" alt=""></div>

    <h2 class="mt-2 text-gray-800 text-sm font-semibold line-clamp-1">
        Books
    </h2>
</div>

<div class="relative p-4 w-full bg-white rounded-lg overflow-hidden hover:shadow flex flex-col justify-center items-center"
    style="min-height: 160px">
    <div class="w-16 h-16 bg-gray-100 rounded-lg"><img src="images/jacket.png" alt=""></div>

    <h2 class="mt-2 text-gray-800 text-sm font-semibold line-clamp-1">
        Clothing
    </h2>
</div>

<div class="relative p-4 w-full bg-white rounded-lg overflow-hidden hover:shadow flex flex-col justify-center items-center"
    style="min-height: 160px">
    <div class="w-16 h-16 bg-gray-100 rounded-lg"><img src="images/furnitures.png" alt=""></div>

    <h2 class="mt-2 text-gray-800 text-sm font-semibold line-clamp-1">
        Furniture
    </h2>
</div>

<div class="relative p-4 w-full bg-white rounded-lg overflow-hidden hover:shadow flex flex-col justify-center items-center"
    style="min-height: 160px">
    <div class="w-16 h-16 bg-gray-100 rounded-lg"><img src="images/sports.png" alt=""></div>

    <h2 class="mt-2 text-gray-800 text-sm font-semibold line-clamp-1">
        Sports
    </h2>
</div>

<div class="relative p-4 w-full bg-white rounded-lg overflow-hidden hover:shadow flex flex-col justify-center items-center"
    style="min-height: 160px">
    <div class="w-16 h-16 bg-gray-100 rounded-lg"><img src="images/car.png" alt=""></div>

    <h2 class="mt-2 text-gray-800 text-sm font-semibold line-clamp-1">
        Vehicles
    </h2>
</div>
</div>



<!-- Footer Section -->
<?php
include 'partials/footer.php';

?>



