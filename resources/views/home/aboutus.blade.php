<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

    @include('home.navbar')

    <div class="w-full pt-8">
        <div class=" mx-2 xl:mx-10 xl:my-10 ">
            <img src="images/1.jpg" class="float-right h-80 sm:w-80 lg:w-96 sm:h-72">

            <b class="text-xl lg:text-2xl xl:text-4xl ml-2 lg:ml-24 xl:ml-48">Explore the World with Us</b>
            <div class="mt-5   xl:mx-20 xl:text-xl text-center ">
                <p>We believe that travels has the power to transform lives.We ignite the spirit of <br> wanderlust and
                    guide you through the realms of extraordinary travel experiences.</p><br>
                <p>Our passion for discovering new destinations, embracing diverse cultures, and creating unforgettable
                   memories drives us to be your ultimate travel.Whether <br> you're a seasoned globetrotter
                    or fresh explorer,we are <br>here to inspire, inform, and assist your every step of journey.</p>

            </div>
        </div>


        <div class="mt-32  pb-10 text-center bg-gray-200">
            <h1 class=" font-bold text-4xl pt-10">What do people say about us?</h1>
            <div class="grid sm:grid-cols-2 xl:grid-cols-3  gap-5 lg:px-32 pt-5 ">
                <div class="border-2 w-64 h-fit sm:w-80 sm:h-96 border-black m-8 p-8 text-center text-sm">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i> <br><br>
                    <p class="text-sm sm:text-lg">I couldn't have asked for a better travel experience than the one Voyagewise
                        provided. From start to finish, the journey was
                        seamless, and every detail was meticulously taken care of.Thank you for giving me an
                        unforgettable adventure!</p><br>
                    <h3 class="text-xl">-John</h3>
                </div>
                <div class="border-2 w-64 h-fit sm:w-80 sm:h-96 border-black m-8 p-8 text-center text-sm">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i> <br><br>
                    <p class="text-sm sm:text-lg">I'm still in awe of the remarkable journey I had with Voyage. They took me to
                        places I would never have discovered
                        on my own, and each destination was a revelation of its own unique charm. I must applaud their
                        commitment to responsible travel.
                        This trip exceeded all my expectations</p>
                    <h3 class="text-xl">-Micheal</h3>
                </div>
                <div class="border-2  w-64 h-fit sm:w-80 sm:h-96 border-black m-8 p-8 text-center text-sm">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i> <br><br>
                    <p class="text-sm sm:text-lg">As a solo female traveler, safety and guidance were my top concerns.Voyagewise not only ensured
                        my safety throughout
                        the journey but also provided me with a supportive and fun group of fellow travelers. The trip
                        was an ideal mix of organized activities
                        and free time to explore at my pace. </p>
                    <h3 class="text-xl">-Sanjina</h3>
                </div>

            </div>
        </div></span>

    </div>

    </div>


    @include('home.footer')


</body>

</html>
