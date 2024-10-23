<section>
    @foreach ($datos->categories as $cat)
    <div class="flex items-center gap-12">
        <div class="text-white max-w-fit rounded ease-linear duration-300 hover:shadow-lg shadow shadow-black" style="background-color: {{ $cat->primary_color }}">
            <a href="{{ route('pagina.category', $cat->id) }}" class="flex gap-2 px-4 py-1">
                <img src="{{ asset('storage/images/logos/'.$cat->logo) }}" class="max-w-6">
                <p class="text-base leading-7 ">{{ $cat->name }}</p>
            </a>
        </div>
        <div class="flex flex-col place-items-center">
            <img class="rounded-full w-14" src="{{ asset('storage/images/users/'. $datos->user->profile_photo_path )}}" >
            <p class="text-sm text-gray-500">{{ $datos->user->name }} </p>
        </div>
    </div>
    @endforeach

    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
        <div class="max-w-3xl">
        <h2 class="text-3xl font-bold sm:text-4xl">{{ $datos->title }}</h2>
    </div>

    <div class="mt-8">
        <div class="relative h-64 overflow-hidden sm:h-80 lg:h-full">
            <img alt="{{ $datos->title }}" src="{{ asset('storage/images/posts/'.$datos->image )}}" class="object-cover" />
        </div>

        <div class="lg:py-16 border">
            <article>
                {!! $datos->content !!}
            </article>
        </div>
    </div>
</section>
