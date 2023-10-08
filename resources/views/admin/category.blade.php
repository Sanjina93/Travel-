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
        <style>
            .table {
                border: 2px solid white;
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

                            {{ Session()->get('message') }}

                        </div>
                    @endif
                    <div class="text-center pt-5 text-4xl">
                        <h2>Add destination</h2>
                        <form action="{{ url('/category') }}" method="POST">
                            @csrf

                            <label for="Title" class="label pt-5">Destination: </label>
                            <input type="text"name="category" class="p-2" placeholder=" Enter destination">
                            <input type="submit" name="submit" class="bg-blue-200">
                        </form>

                    </div>



                    <table class="mt-5 m-auto text-center">

                        <tr>

                            <th class="border p-2 ">Destination name</th>
                            <th class="border p-2 ">action display</th>

                        </tr>

                        @foreach ($data as $data)
                            @if (session()->has('messgae'))
                                <div class="alert alert-success">
                                    {{ Session()->get('messgae') }}
                                </div>
                            @endif
                            <tr>
                                <td class="border p-2 ">{{ $data->destination_name }}</td>

                                <td class="border p-2 ">
                                    <a class="btn btn-primary" onclick="return confirm ('are you sure you want delete')"
                                        href="{{ url('/delete_category', $data->id) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach




                    </table>

                </div>
            </div>


            <!-- container-scroller -->
            <!-- plugins:js -->


    </body>

    </html>
</body>

</html>
