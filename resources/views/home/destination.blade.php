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

        <div class="text-center py-10 bg-gray-100 w-full">
            <b class="text-4xl">Our Destination</b>


            <div class="grid  md:grid-cols-2 lg:grid-cols-3 ml-5 mr-20 lg:mr-12 xl:mx-10 md:gap-5 ">
                @foreach ($packages as $packages)
                    <div class="relative border-4 rounded-2xl w-72 md:w-72 h-96 md:h-84 xl:w-80 sm:mx-10 mt-10">
                        <div class="box">
                            <img src="/destination1/{{ $packages->image }}" alt="" class="w-72 h-52  md:w-80 ">
                            <h2 class="text-2xl p-2 font-bold">{{ $packages->destination }}</h2>
                            <div class="grid grid-cols-2  text-xl">

                                <h2 class=" line-through ">${{ $packages->amount }}</h2>
                                <h2>${{ $packages->discount_amount }}</h2>

                            </div>



                            <button class="text-white w-32 text-xl h-10 bg-yellow-400 rounded-2xl m-5"><a
                                    href="{{ url('book', $packages->id) }}">Book Now</a></button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        @include('home.footer')





</body>

</html>
