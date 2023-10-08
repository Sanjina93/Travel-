<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    {{-- <link href="{{asset('css/app.css')}}" rel="stylesheet"> --}}

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
                        <h1>Update destination</h1>

                        <form action="{{ url('/update_destination_confirm', $destination->id) }}" method="POST"
                            enctype="multipart/form-data">

                            @csrf

                            <div class="py-3">

                                <label for="" class="">Destination </label>
                                <input type="text" class="w-50 rounded p-2" name="destination" placeholder="Enter Destination"
                                    value="{{ $destination->destination }}">
                            </div>

                            <div class="py-2 ">

                                <label for="" class="">Description</label>
                                <input type="text" class="w-50 rounded p-2" name="description" placeholder="Enter  description"
                                    value="{{ $destination->description }}">
                            </div>

                            <div class="py-2 ">

                                <label for="" class="">Amount </label>
                                <input type="text" class="w-50 rounded p-2" name="amount" placeholder="Enter amount"
                                    value="{{ $destination->amount }}">
                            </div>

                            <div class="py-2 ">

                                <label for="">Discount Amount</label>
                                <input type="text" class="w-50 rounded p-2" name="discount_amount" placeholder="Enter D.A"
                                    value="{{ $destination->discount_amount }}">
                            </div>

                            <div class="py-2 ">

                                <label for=""> Current Destination</label>
                                <img src="/destination1/{{ $destination->image }}" class="img">

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
