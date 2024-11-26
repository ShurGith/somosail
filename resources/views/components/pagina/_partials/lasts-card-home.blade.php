<div class="bg-white py-4 rounded-xl s">
        <h3 class="text-3xl mt-4 mb-12 ml-4 w-fit pb-2 pr-8 border-b-4 border-stone-400 ">Ultimos Temas</h3>
    <div class="mx-auto grid max-w-2xl auto-rows-fr grid-cols-1 gap-8  lg:mx-0 lg:max-w-none lg:grid-cols-3">
        @foreach ($datos as $post)
        @foreach ($post->categories as $info)
            @php
                $categoria = App\Models\Category::find($info->pivot->category_id);
            @endphp
        @endforeach
        <article class="article-last relative isolate flex flex-col justify-start pt-6 items-center overflow-hidden rounded-2xl bg-gray-900 px-8 bg-cover min-h-64 bg-center" style="background-image:url({{ asset('storage/images/posts/'.$post->image) }})">
            <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-600/80"></div>

            <div class="relative mb-12 flex items-center flex-col">
                <div class="px-2 py-1 flex gap-2 w-fit rounded" style="background-color:{{ $categoria->primary_color }}">
                    <img class="h-6 w-6" src="{{asset('storage/images/logos/'.$categoria->logo) }}">
                    <p class="text-white">{{ $categoria->name }}</p>
                </div>

                <h3 class="text-lg font-semibold leading-6 text-white">
                    <a href="{{ route('pagina.show', $post) }}">{{ $post->title }}
                    </a>
                </h3>
                <div class="trasladada text-white flex flex-col gap-y-6 place-items-center translate-y-44 transition-transform duration-500 ">
                    <div class="flex justify-center items-center gap-x-2 mt-2 overflow-hidden text-sm  text-white">
                        <time datetime="2020-03-16" class="">    {{ $post->created_at->translatedFormat(' d-') .ucfirst($post->created_at->translatedFormat('F-Y'))}}
                        </time>
                        <div class="w-4 h-px bg-white"></div>
                        <img src="{{ asset('storage/images/users/'.$post->user->profile_photo_path) }}" alt="{{ $post->title.' creator photo profile' }}" class="h-6 w-6 flex-none rounded-full">
                        {{ $post->user->name }}
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
