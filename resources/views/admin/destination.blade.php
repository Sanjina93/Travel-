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
        @include('admin.css')
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
                            {{ Session()->get('message') }}
                        </div>
                    @endif
                    <div class="text-center pt-5">

                        <h1>Add Places</h1>



                        <form action="{{ url('/add_destination') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="mt-5">

                                <label for="" >Destination </label>
                                <input type="text" class="w-50 rounded p-2 " name="destination" placeholder="Enter Destination">
                            </div>

                            <div class="mt-3">

                                <label for="">Description</label>
                                <input type="text" class="w-50 rounded p-2 " name="description"
                                    placeholder="Enter  description">
                            </div>

                            <div class="mt-3 ">

                                <label for="" >Amount </label>
                                <input type="text" class="w-50 rounded p-2" name="amount" placeholder="Enter amount">
                            </div>

                            <div class="mt-3 ">

                                <label for="">Discount Amount</label>
                                <input type="text" class="w-50 rounded p-2" name="discount_amount" placeholder="Enter D.A">
                            </div>

                            <div class="mt-3 ">

                                <label for="">Destination Image</label>
                                <input type="file" name="image">

                            </div>
                            <div class="pt-4">
                                <input type="submit" value="Add places">
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
