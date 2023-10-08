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
    <div class="grid sm:flex mt-8 pb-8 mx-5 sm:ml-32 xl:ml-64 ">
            <div class="box">
                <img src="/product1/{{ $product->image }}" alt="" class="w-80 h-72  sm:w-96 sm:h-80">
            </div>
            <div class="text-lg sm:text-2xl lg:text-3xl text-center pl-4 pt-14">
                <b>
                    <h2>{{ $product->destination }}</h3>
                </b>
                <h2>{{ $product->description }}</h2>
                <h2>Amount: {{ $product->amount }}</h2>
                <h2>Discount Amount: {{ $product->discount_amount }}</h2>

            </div>
        </div>

@include('home.footer')



</body>

</html>
