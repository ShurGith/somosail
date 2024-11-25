<section class="w-full bg-white rounded-lg shadow-lg p-4">
    <article class="w-2/3 mx-auto">
    @foreach ($datos->categories as $cat)
    <div class="flex items-center gap-12">
        <div class="text-white max-w-fit rounded ease-linear duration-300 hover:shadow-lg shadow shadow-black" style="background-color: {{ $cat->primary_color }}">
            <a href="{{ route('pagina.category', $cat->id) }}" class="flex gap-2 px-4 py-1">
                <img src="{{ asset('storage/images/logos/'.$cat->logo) }}" class="max-w-6">
                <p class="text-base leading-7 ">{{ $cat->name }}</p>
            </a>
        </div>
    @endforeach
        <div class="flex flex-col place-items-center">
            <img class="rounded-full w-14" src="{{ asset('storage/images/users/'. $datos->user->profile_photo_path )}}" >
            <p class="text-sm text-gray-500">{{ $datos->user->name }} </p>
        </div>
    </div>
    <div class="flex flex-col gap-4 w-full items-center h-64">
        <div class="bg-cover bg-center h-64 overflow-hidden sm:h-80 lg:h-full w-1/3 border-2 border-gray-300  " style="background-image: url({{ asset('storage/images/posts/'.$datos->image )}})">
        </div>
        <h2 class="text-3xl font-bold sm:text-4xl">{{ $datos->title }}</h2>
        <p class=" text-xs text-gray-500 text-left">
            {{ ucfirst($datos->created_at->translatedFormat('l ')). $datos->created_at->translatedFormat(' d-') .ucfirst($datos->created_at->translatedFormat('F-Y'))}}
        </p>
    </div>
    <div class="max-w-4xl mx-auto px-4 py-4 lg:px-8">
        {!! $datos->content !!}
    </div>
    </article>
</section>
