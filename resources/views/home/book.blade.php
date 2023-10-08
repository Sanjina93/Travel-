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



        <div class="justify-center bg-gray-200 h-fit pb-8">

            <h1 class="sm:text-5xl text-center pt-5 sm:pt-10 text-xl">BOOK YOUR TRIP</h1>

            <div class="border-2 w-4/5 h-fit sm:w-2/4 sm:h-fit m-auto sm:p-9 p-5 mt-5 sm:mt-10  bg-white rounded-3xl">

                <form action="{{ url('add_book',$destination->id) }}" method="get">
                    @csrf


                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-rows-4 xl:grid-flow-col gap-2">
                        <div>
                            <label for="name">Full Name:</label><br>
                            <input type="text" class="border-2 w-48 h-10 rounded-md p-2 sm-w-16 md:w-32 lg:w-52 xl:w-72" name="name"
                                placeholder="Enter your name">
                        </div>

                        <div>
                            <label for="phone">Phone:</label><br>
                            <input type="text" class="border-2 w-48 h-10 rounded-md p-2 md:w-32 lg:w-52 xl:w-72" name="phone"
                                 placeholder="Enter your number">
                        </div>

                        <div>
                            <label for="destination">Where To:</label><br>
                            <input type="text" class="border-2 w-48 h-10 rounded-md p-2 md:w-32 lg:w-52 xl:w-72" name="destination"
                                value="{{ $destination->destination }}" placeholder="Place you want to visit">
                        </div>

                        <div>
                            <label for="arrival">Arrivals:</label><br>
                            <input type="" class="border-2 w-48 h-10 rounded-md p-2 md:w-32 lg:w-52 xl:w-72" value="2023-12-09" name="arrival">
                        </div>

                        <div>
                            <label for="email">Email:</label><br>
                            <input type="text" name="email" class="border-2 w-48 h-10 rounded-md p-2 md:w-32 lg:w-52 xl:w-72"
                                 placeholder="Enter your email">
                        </div>

                        <div>
                            <label for="address">Address:</label><br>
                            <input type="text" name="address" class="border-2 w-48 h-10 rounded-md p-2 md:w-32 lg:w-52 xl:w-72"
                             placeholder="Enter your address">
                        </div>

                        <div>
                            <label for="guests">How many:</label><br>
                            <input type="number" name="guests" min="1" class="border-2 w-48 h-10 rounded-md p-2 md:w-32 lg:w-52 xl:w-72"
                                placeholder="Number of guests">
                        </div>

                        <div>
                            <label for="leaving">Leaving:</label><br>
                            <input type=""  class="border-2 w-48 h-10 rounded-md p-2 md:w-32 lg:w-52 xl:w-72" value="2023-12-20" name="leaving">
                        </div>


                    </div>

                    <button class="text-white bg-blue-600 rounded-lg w-20 h-10 mt-5">submit</button>




                </form>


            </div>
        </div>









       @include('home.footer')



</body>

</html>
