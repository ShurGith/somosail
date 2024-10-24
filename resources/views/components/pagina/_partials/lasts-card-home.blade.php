<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">From the blog</h2>
        <p class="mt-2 text-lg leading-8 text-gray-600">Learn how to grow your business with our expert advice.</p>
    </div>
    <div class="mx-auto mt-16 grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
        @foreach ($datos as $post)

        {{-- {{ dd($datos) }} --}}
        <article class="article-last relative isolate flex flex-col justify-end items-center overflow-hidden rounded-2xl bg-gray-900 px-8 bg-cover min-h-64 bg-center" style="background-image:url({{ asset('storage/images/posts/'.$post->image) }})">
            <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/80"></div>
            <div class="absolute inset-0 -z-10 rounded-2xl t ring-gray-900/40"></div>

            @foreach ($post->categories as $info)
                @php
                    $categoria = App\Models\Category::find($info->pivot->category_id);
                @endphp
            @endforeach

            <div class="relative mb-12 text-center">
                <h3 class="text-lg font-semibold leading-6 text-white">
                    <a href="{{ route('pagina.show', $post) }}">
                        {{-- <span class="absolute inset-0"></span> --}}
                        {{ $post->title }}
                    </a>
                </h3>
                <div class="trasladada text-white flex flex-col gap-y-6 place-items-center translate-y-44 transition-transform duration-500 ">
                    <div class="flex justify-center items-center gap-x-2 mt-2 overflow-hidden text-sm  text-white">
                        <time datetime="2020-03-16" class="">{{  $post->created_at->format('d - M - Y') }}</time>

                        <div class="w-4 h-px bg-white"></div>
                        <img src="{{ asset('storage/images/users/'.$post->user->profile_photo_path) }}" alt="{{ $post->title.' creator photo profile' }}" class="h-6 w-6 flex-none rounded-full">
                        {{ $post->user->name }}
                    </div>
                    <div class="px-2 py-1 flex gap-2 w-fit rounded" style="background-color:{{ $categoria->primary_color }}">
                        <img class="h-6 w-6" src="{{asset('storage/images/logos/'.$categoria->logo) }}">
                        <p class="text-white">{{ $categoria->name }}</p>
                    </div>
                <div>
            </div>
        </article>
        @endforeach
    </div>
    </div>
</div>
<script>
    const art = document.querySelectorAll('.article-last')
    art.forEach((article) => {
        const texto = article.querySelector('.trasladada')
        article.addEventListener('mouseover', () => {
            texto.classList.remove('translate-y-44')
        })
        article.addEventListener('mouseleave', () => {
            texto.classList.add('translate-y-44')
        })
    })

</script>
