<section class="relative mx-auto">
    <!-- navbar -->
    <nav class="flex justify-between text-white w-screen">
        <div class="flex w-full ">

            <!-- Nav Links -->
            <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
                @forelse ($categories as $itemCategory)
                    <li><a class="hover:text-red-600 text-gray-900" href="{{route('category',$itemCategory->id)}}">{{$itemCategory->name}}</a></li>
                @empty

                @endforelse


            </ul>

        </div>

    </nav>

</section>
