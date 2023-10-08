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

        <div class="m-auto  sm:p-12 xl:p-16 w-fit">


            <table class=" border-black text-center my-2">
                <tr>

                    <th class="border border-black sm:p-3 text-xs md:text-md xl:text-3xl">Destination</th>
                    <th class="border border-black sm:p-3 text-xs md:text-md xl:text-3xl">No.of people</th>
                    <th class="border border-black sm:p-3 text-xs md:text-md xl:text-3xl">Arrivals</th>
                    <th class="border border-black sm:p-3 text-xs md:text-md xl:text-3xl">Leaving</th>
                    <th class="border border-black sm:p-3 text-xs md:text-md xl:text-3xl">Total_cost</th>
                    <th class="border border-black sm:p-3 text-xs md:text-md xl:text-3xl">Delete</th>


                </tr>

                @foreach ($book as $book)
                    <tr>
                        <td class="border border-black  sm:p-3 lg:text-xl">{{ $book->destination }}</td>
                        <td class="border border-black  sm:p-3 lg:text-xl">{{ $book->guests }}</td>
                        <td class="border border-black  sm:p-3 lg:text-xl">{{ $book->arrivals }}</td>
                        <td class="border border-black  sm:p-3 lg:text-xl">{{ $book->leaving }}</td>
                        <td class="border border-black  sm:p-3 lg:text-xl">{{ $book->total_cost }}</td>
                        <td class="border border-black  sm:p-3 lg:text-xl">
                            <a href="{{ url('delete', $book->id) }}"
                                onclick="return confirm('Are you sure you want to delete')"><button
                                    class="bg-blue-400  hover:bg-blue-500 p-1 rounded-xl ">Delete</button></a>
                        </td>

                    </tr>
                @endforeach
            </table>
            <div class="flex items-center justify-center">
                <button class="bg-purple-400 p-1 sm:p-3 text-2xl item-center justify-center rounded-lg mt-10">Proceed to
                    Pay</button>

            </div>
            <div class="flex items-center justify-center mt-4">
                <a href="{{ url('cash_delivery') }}"><button
                        class="bg-yellow-400 hover:bg-yellow-600 my-2 p-1 sm:p-3 text-xl rounded-lg mr-5 w-32">Cash</button></a>
                <a href="{{ url('card') }}"><button
                        class="bg-yellow-400 hover:bg-yellow-600 my-2 p-1 sm:p-3 text-xl rounded-lg ml-5">pay with
                        card</button></a>
            </div>

        </div>

        @include('home.footer')
</body>


</html>
