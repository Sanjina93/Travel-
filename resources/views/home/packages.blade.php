<div class="w-full text-center py-10 bg-gray-100 pl-3 pr-10 md:px-5 ">
    <b class="text-xl sm:text-4xl">Top Destinations: Unveiling the World's Treasures</b>


    <div class="grid sm:grid-cols-2 xl:grid-cols-3 md:gap-5 ">
        @foreach ($destination as $destination)
            <div class="relative border-4 w-72 md:w-72 h-96 md:h-84 xl:w-80 sm:mx-10 mt-10">
                <div class="box">
                    <img src="/destination1/{{ $destination->image }}" alt="" class="w-72 h-52  sm:w-72 md:w-80">
                    <h2 class="text-2xl pt-2 font-bold">{{ $destination->destination }}</h2>
                    <h4 class="p-2">{{ $destination->description }}</h4>

                    <div
                        class="absolute h-full w-full  items-center justify-center
      -bottom-10 hover:bottom-0 opacity-0 hover:opacity-100 transition-all duration-300">
                        <button class="text-white w-40 text-xl h-10 bg-yellow-400 rounded-2xl m-5"><a
                                href="{{ url('detail', $destination->id) }}">Details</a></button>
                        <button class="text-white w-40 text-xl h-10 bg-yellow-400 rounded-2xl m-5"><a
                                href="{{ url('book', $destination->id) }}">Book Now</a></button>
                    </div>



                </div>
            </div>
        @endforeach


    </div>


</div>
