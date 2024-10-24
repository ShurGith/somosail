@props([
    'metaTitle' => " - Listando Posts",
])
<x-app-layout :metaTitle="$metaTitle">
<x-pagina._partials.modal_destroy />
<div class="sm:px-1 lg:px-8">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="mt-2 text-3xl font-medium text-gray-900">Listado de post.</h1>
            {{ $posts->links() }}
        </div>
    </div>
    <div class="grid grid-cols-12 w-full ">
        <div class="col-span-3 post-list-header"> {{ __('Title') }}</div>
        <div class="col-span-3 post-list-header"> {{ __('Author') }}</div>
        <div class="col-span-2 post-list-header mx-auto"> {{ __('Status') }}</div>
        <div class="col-span-1 post-list-header mx-auto hidden lg:flex"> {{ __('Categ') }}</div>
        <div class="col-span-3 post-list-header mx-auto"> {{ __('Action') }}</div>
    </div>

    <div class="w-full border px-2 bg-white/80">
        @foreach ($posts as $post )
            @php
            $categ = $post->categories[0];
            @endphp
            <div class="grid grid-cols-12 w-full border-b py-4 items-center">
                <div class="col-span-3"><a class="font-medium" href="{{ route('pagina.show', $post->id) }}" target="_blank">{{ $post->title }}</a> <p class="text-xs text-gray-500">{{ $post->created_at->format('d - M - Y') }}</p></div>
                <div class="col-span-3 flex gap-x-4 ">
                    <img class="hidden rounded-full w-12 lg:flex" src="{{ asset('storage/images/users/'.$post->user->profile_photo_path) }}">
                    <div class="flex flex-col gap-x-2 ">
                        {{ $post->user->name }}
                        <a class="text-xs text-gray-500" href="mailto:{{ $post->user->email }}">
                            <div class="flex gap-x-2 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-forward" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentcolor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M12 18h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v7.5" />
                                    <path d="M3 6l9 6l9 -6" />
                                    <path d="M15 18h6" />
                                    <path d="M18 15l3 3l-3 3" />
                                </svg>
                                {{ $post->user->email }}
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-span-2 mx-auto"><span class="{{ ($post->is_published) ?  'text-green-500 bg-green-100  border-green-400' :  'text-gray-500 bg-gray-100 border-gray-400 ' }} border inline-flex items-center text-xs font-medium ml-1 px-2 py-0.5 rounded-full">
                    <span class="{{ ($post->is_published) ?  'bg-green-400 ' :  'bg-gray-400' }} w-1.5 h-1.5 mr-1 rounded-full"></span>
                    <span class="hidden md:flex"> {{ ($post->is_published) ? "Publicado" : "Sin Publicar" }} </span>
                </div>
                <div class="col-span-1 mx-auto hidden md:flex">
                    <div class="w-fit min-w-24 rounded ease-linear duration-300 hover:shadow-lg shadow shadow-black" style="background-color:{{ $categ->primary_color }}">
                        <a href="{{ route('pagina.category', $categ->id) }}" target="_blank" class="hidden lg:flex px-2 py-1 text-white justify-start items-center gap-2">
                            <img src="{{ asset('storage/images/logos/'.$categ->logo) }}" class="max-w-6 max-h-6">
                            {{ $categ->name }}
                        </a>
                    </div>
                </div>
                <div class="col-span-3 justify-center flex flex-col md:flex-row gap-y-1 gap-x-1">
                    <a class='py-2 px-4 text-sm rounded-lg bg-green-500 text-white cursor-pointer font-semibold text-center shadow-xs transition-all duration-500 hover:bg-green-700' href="{{ route('post.edit', $post->id) }}">{{ __('Edit') }}</a>
                    <a class='py-2 px-4 text-sm rounded-lg bg-blue-500 text-white cursor-pointer font-semibold text-center shadow-xs transition-all duration-500 hover:bg-blue-700' href="{{ route('pagina.show', $post->id) }}" target="_blank">{{ __('See') }}</a>
                    <button onclick = "fnManiobra(this)"  data-dialog-target="animated-dialog" data-post-route="{{ route('post.destroy', $post->id) }}"  class='modal-button btn-borrar py-2 px-4 text-sm rounded-lg bg-red-500 text-white cursor-pointer font-semibold text-center shadow-xs transition-all duration-500 hover:bg-red-700' >{{ __('Delete') }}</button>
                </div>
            </div>
        @endforeach
    </div>
    {{ $posts->links() }}
    // https://lorisleiva.com/laravel-pagination-with-tailwindcss
</div>
</x-app-layout>

<script>
const btnCerrar = document.getElementById('btn-modal-closer'),
    form = document.getElementById('form-delete'),
    modalConfirm = document.getElementById('modal-confirm-borrar'),
    divInner = document.getElementById('modal-borrar-inner')

function  fnManiobra(e){
    form.action = `${e.dataset.postRoute}`
}
 modalConfirm.addEventListener('click',(e)=>{
    if(e.target !== divInner)
        console.dir(e.target)
   // btnCerrar.click()
 })
</script>
<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js"></script>
