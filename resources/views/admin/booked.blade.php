
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

                    <div>
                        <h1 class="text-center mb-5">All Book</h1>

                        <div class="m-auto text-center">
                            <form action="{{ url('search') }}" method="get">
                                @csrf

                                <input type="text" name="search" placeholder="Search" class="p-2">

                                <input type="submit" value="submit">
                            </form>
                        </div>


                        <table class="border border-white-950 mt-5">
                            <tr>
                                <th class="border border-slate-500 p-3 text-lg text-center">Name</th>
                                <th class="border border-slate-500 p-3 text-lg text-center">E_mail</th>
                                <th class="border border-slate-500 p-3 text-lg text-center">Phone</th>
                                <th class="border border-slate-500 p-3 text-lg text-center">Address</th>
                                <th class="border border-slate-500 p-3 text-lg text-center">Destination</th>
                                <th class="border border-slate-500 p-3 text-lg text-center">NO.of.Guest</th>
                                <th class="border border-slate-500 p-3 text-lg text-center">Leaving</th>
                                <th class="border border-slate-500 p-3 text-lg text-center">Arrivals</th>
                                <th class="border border-slate-500 p-3 text-lg text-center">Total_cost</th>
                                <th class="border border-slate-500 p-3 text-lg text-center">payment_status</th>
                                <th class="border border-slate-500 p-3 text-lg text-center">Paid</th>
                            </tr>

                            @foreach ($booked as $booked)
                                <tr>
                                    <td class="border border-black p-3 text-lg text-center">{{ $booked->name }}
                                   </td>
                                    <td class="border border-black p-3 text-lg text-center">{{ $booked->e_mail }}
                                   </td>
                                    <td class="border border-black p-3 text-lg text-center">{{ $booked->phone_no }}
                                    </td>
                                    <td class="border border-black p-3 text-lg text-center">{{ $booked->address }}
                                   </td>
                                    <td class="border border-black p-3 text-lg text-center">{{ $booked->destination }}
                                    </td>
                                    <td class="border border-black p-3 text-lg text-center">{{ $booked->guests }}
                                    </td>
                                    <td class="border border-black p-3 text-lg text-center">{{ $booked->arrivals }}
                                    </td>
                                    <td class="border border-black p-3 text-lg text-center">{{ $booked->leaving }}
                                   </td>
                                    <td class="border border-black p-3 text-lg text-center">{{ $booked->total_cost }}
                                    </td>
                                    <td class="border border-black p-3 text-lg text-center">
                                        {{ $booked->payment_status }}</td>


                                    <td class="border border-black p-3 text-lg text-center">
                                        <a href="{{ url('paid_status', $booked->id) }}"><button
                                                class="btn btn-primary">Paid</button></a>
                                    </td>

                                </tr>
                            @endforeach






                            <!-- container-scroller -->
                            <!-- plugins:js -->

    </body>

    </html>
</body>

</html>
