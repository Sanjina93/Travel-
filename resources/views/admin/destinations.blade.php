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

                        <h1 class="font-bold text-lg text-center py-4">Add Destination</h1>

                        <form action="{{ url('/add_destinations') }}" method="Post" enctype="multipart/form-data" class="text-center">

                            @csrf

                            <div class="mt-3">
                                <label for="">Destination</label>
                                <input type="text" class="w-50 rounded p-2 ml-5" name="destination"
                                    placeholder="enter your destination">
                            </div>

                            <div class="mt-3">
                                <label for="">Description</label>
                                <input type="text" class="w-50 rounded p-2 ml-5"
                                 name="description" placeholder="enter description">
                            </div>

                            <div class="mt-3">
                                <label for="">Amount</label>
                                <input type="text"
                                class="w-50 rounded p-2 ml-5"
                                    name="amount" placeholder="enter amount">
                            </div>

                            <div class="mt-3">
                                <label for="">Discount Amount</label>
                                <input type="text" class="w-50 rounded p-2 ml-5" name="discount_amount"
                                    placeholder="place discount_amount">
                            </div>

                            <div class="mt-3">
                                <label for="">Destination Image</label>
                                <input type="file" name="image">
                            </div>
                            <div class="mt-3">

                                <input type="submit" value="submit">
                            </div>
                        </form>


                </div>
            </div>


            <!-- container-scroller -->
            <!-- plugins:js -->

            @include('admin.script')


    </body>

    </html>
</body>

</html>
