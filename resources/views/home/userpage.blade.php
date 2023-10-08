<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="StyleSheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>
    @include('home.navbar')

    <div class="relative">
    <div class="max-h-fit max-w-full">
        <img src="images/2.jpg" class="w-full sm:h-screen h-72" alt="">
        <div class="sm:text-center absolute inset-y-20 xl:inset-y-64 md:inset-y-60 ml-14 md:ml-64 xl:ml-96 text-white">
            <span class="xl:text-3xl md:text-lg  ">Explore, Discover, Travel</span><br><br>
            <h1 class="xl:text-8xl md:text-5xl sm:text-lg">TRAVEL AROUND <br>THE WORLD</h1> <br><br>

            <button class="bg-yellow-400 w-32 h-10 rounded-lg"><a href="packages">Discover Tour</a></button>
        </div>
    </div>
</div>


    <div class="mt-8 md:px-10">
        <h1 class="font-bold text-center text-5xl">Why Choose Us?</h1>
        <div class="grid md:grid-rows lg:grid-cols-3 lg:px-20 xl:px-44 px-5 py-16 gap-3">

            <div class=" flex-wrap pb-24">
                <i
                    class="fa-solid fa-calendar-plus fa-2xl float-left pt-10 pl-6 mr-3 bg-blue-400 w-20 h-20 rounded-full"></i>
                <h1 class="font-semibold text-3xl">
                    Easy Booking</h1>
                <p class="text-lg pl-24">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>

            <div class="flex-wrap pb-24">
                <i
                    class="fa-solid fa-dollar-sign fa-2xl float-left pt-10 pl-7 mr-3 bg-blue-400 w-20 h-20 rounded-full"></i>
                <h1 class="font-semibold text-3xl">
                    Value for Money</h1>
                <p class="text-lg pl-24">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus?</p>
            </div>

            <div class="flex-wrap pb-24">
                <i class="fa-regular fa-heart fa-2xl float-left pt-10 pl-6 mr-3 bg-blue-400 w-20 h-20 rounded-full"></i>
                <h1 class="font-semibold text-3xl">
                    Passionate Travel</h1>
                <p class="text-lg pl-24">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, id!</p>
            </div>

            <div class="flex-wrap pb-24">
                <i
                    class="fa-sharp fa-solid fa-map-location fa-2xl float-left pt-10 pl-6 mr-3 bg-blue-400 w-20 h-20 rounded-full"></i>
                <h1 class="font-semibold text-3xl">
                    Awesome Places</h1>
                <p class="text-lg pl-24">Lorem ipsum dolor sit.</p>
            </div>

            <div class="flex-wrap pb-24">
                <i
                    class="fa-solid fa-car fa-lg float-left fa-2xl pt-10 pl-6 mr-3 bg-blue-400 w-20 h-20 rounded-full"></i>
                <h1 class="font-semibold text-3xl">
                    Diverse Destinations</h1>
                <p class="text-lg pl-24">Lorem ipsum dolor sit amet consectetur.</p>
            </div>

            <div class="flex-wrap pb-24">
                <i
                    class="fa-sharp fa-regular fa-comments fa-2xl float-left pt-10 pl-6 mr-3 bg-blue-400 w-20 h-20 rounded-full"></i>
                <h1 class="font-semibold text-3xl">
                    24*7 Support</h1>
                <p class="text-lg pl-24">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio?</p>
            </div>
        </div>


    </div>


    @include('home.packages')

    @include('home.footer')


</body>

</html>
