<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <base href="/public">
        @include('admin.css')

        <style>
            .img {
                width: 200px;
                height: 100px;
            }
        </style>
    </head>

    <body>
        <div class="container-scroller">

            <!-- partial:partials/_sidebar.html -->
            @include('admin.slider')
            <!-- partial -->
            @include('admin.header')
            <!-- partial -->



            <div class="main-panel">
                <div class="content-wrapper">

                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="text-center  pt-5">
                        <h1>Update Product</h1>

                        <form action="{{ url('/updatedestinations_confirm', $packages->id) }}" method="POST"
                            enctype="multipart/form-data">

                            @csrf

                            <div class="py-3">

                                <label for="">Destination </label>
                                <input type="text" class="w-50 rounded p-2" name="destination" placeholder="Enter Destination"
                                    value="{{ $packages->destination }}">
                            </div>

                            <div class="py-2 ">

                                <label for="">Description</label>
                                <input type="text" class="w-50 rounded p-2" name="description" placeholder="Enter  description"
                                    value="{{ $packages->description }}">
                            </div>

                            <div class="py-2 ">

                                <label for="">Amount </label>
                                <input type="text" class="w-50 rounded p-2" name="amount" placeholder="Enter amount"
                                    value="{{ $packages->amount }}">
                            </div>

                            <div class="py-2 ">

                                <label for="">Discount Amount</label>
                                <input type="text" class="w-50 rounded p-2" name="discount_amount" placeholder="Enter D.A"
                                    value="{{ $packages->discount_amount }}">
                            </div>

                            <div class="py-2 ">

                                <label for=""> Current Destination</label>
                                <img src="/product1/{{ $packages->image }}" class="img">

                            </div>

                            <div class="py-2 ">

                                <label for=""> Change destination Image</label>
                                <input type="file" name="image" alt="">

                            </div>
                            <div class="pt-4">
                                <input type="submit" value="update" class="btn btn-primary">
                            </div>


                    </div>

                    </form>
                </div>

            </div>
        </div>



        <!-- container-scroller -->
        <!-- plugins:js -->

        @include('admin.script')


    </body>

    </html>
</body>

</html>
