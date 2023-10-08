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

                width: 180px;
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

                    <div class="text-center p-5">
                        <h1 class="font-bold text-lg">
                            Show Destination
                        </h1>

                        <table>
                            <tr>
                                <th class="border border-slate-950 p-3">Destination</th>
                                <th class="border border-slate-950 p-3">Description</th>
                                <th class="border border-slate-950 p-3">Amount</th>
                                <th class="border border-slate-950 p-3">Discount Amount</th>
                                <th class="border border-slate-950 p-3">Image</th>
                                <th class="border border-slate-950 p-3">Update</th>
                                <th class="border border-slate-950 p-3">Delete</th>
                            </tr>

                            @foreach ($packages as $packages)
                                <tr>

                                    <td class="border border-slate-950 ">{{ $packages->destination }}</td>
                                    <td class="border border-slate-950 ">{{ $packages->description }}</td>
                                    <td class="border border-slate-950 ">{{ $packages->amount }}</td>
                                    <td class="border border-slate-950 ">{{ $packages->discount_amount }}</td>
                                    <td class="border border-slate-950 ">
                                        <img src="destination1/{{ $packages->image }}" class="img">
                                    </td>

                                    <td class="border border-slate-950 p-3">
                                        <a href="{{ url('/update_destinations', $packages->id) }}"
                                            onclick="return confirm('Are you sure you want to update')"><button
                                                class="btn btn-success">Update</button></a>
                                    </td>

                                    <td class="border border-slate-950 p-3">
                                        <a href="{{ url('/delete_destinations', $packages->id) }}"
                                            onclick="return confirm('Are you sure you want to delete')"><button
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
