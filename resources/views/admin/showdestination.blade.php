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
            .img {
                padding: 10px;

                width: 100px;
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
                            {{ Session()->get('message') }}
                        </div>
                    @endif

                    <div class="text-center mt-5">
                        <h1>Show destination</h1>

                        <table class="border border-slate-500 m-5">
                            <tr>
                                <th class="border border-slate-300 p-3">Destination</th>
                                <th class="border border-slate-300 p-3">Description</th>
                                <th class="border border-slate-300 p-3">Amount</th>
                                <th class="border border-slate-300 p-10">Discount Amount</th>
                                <th class="border border-slate-300 p-3">Image</th>
                                <th class="border border-slate-300 p-3">Update</th>
                                <th class="border border-slate-300 p-3">Delete</th>
                            </tr>

                            @foreach ($destination as $destination)
                                <tr>
                                    <td class="border border-slate-300">{{ $destination->destination }}</td>
                                    <td class="border border-slate-300">{{ $destination->description }}</td>
                                    <td class="border border-slate-300">{{ $destination->amount }}</td>
                                    <td class="border border-slate-300">{{ $destination->discount_amount }}</td>
                                    <td class="border border-slate-300">
                                        <img src="destination1/{{ $destination->image }}" class="img">
                                    </td>


                                    <td class="border border-slate-300">
                                        <a href="{{ url('update_destination', $destination->id) }}"><button
                                                class="btn btn-success">Update</button></a>
                                    </td>

                                    <td class="border border-slate-300">
                                        <a onclick="return confirm('Are you sure you want to delete')"
                                            href="{{ url('/delete_destination', $destination->id) }}"> <button
                                                class="btn btn-primary">Delete</button></a>
                                    </td>

                                </tr>
                            @endforeach
                        </table>

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
