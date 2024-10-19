@props([
    'metaTitle' => " - Listando Posts",
])
<x-app-layout :metaTitle="$metaTitle">


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
                    <a class='py-2 px-4 text-sm rounded-lg bg-blue-500 text-white cursor-pointer font-semibold text-center shadow-xs transition-all duration-500 hover:bg-blue-700' href="{{ route('pagina.show', $post->id) }}">{{ __('See') }}</a>
                    <button id="btn-borrar" class='py-2 px-4 text-sm rounded-lg bg-red-500 text-white cursor-pointer font-semibold text-center shadow-xs transition-all duration-500 hover:bg-red-700' >{{ __('Delete') }}</button>
                </div>
            </div>
        @endforeach
    </div>
    {{ $posts->links() }}
</div>
<!--  MODAL DE BORRADO -->
{{--<div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div id="modal-confirm" class="fixed bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
    <div class="fixed z-10 w-screen overflow-y-auto">
    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
    <div id="modal-confirm-inner" class="hide-delete-modal relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
        <div class="sm:flex sm:items-start">
        <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
            <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
            </svg>
        </div>
        <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
            <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Eliminado de Post</h3>
            <div class="mt-2">
            <p class="text-sm text-gray-500">Ultima verificación antes de eliminar el post, este proceso no es reversible.</p>
            </div>
        </div>
        </div>
        <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
            <form method="POST" action="{{ route('post.destroy', $post->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto" >{{ __('Delete') }}</button>
            </form>
            <button id="btn-modal-cancel" type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">{{ __('Cancel') }}</button>
        </div>
    </div>
    </div>
</div>--}}
<x-pagina._partials.modal_destroy :post:'$post'/>
</x-app-layout>
<script>
const btnBorrar = document.getElementById('btn-borrar'),
    btnCancel = document.getElementById('btn-modal-cancel'),
    modalBorrar = document.getElementById('modal-confirm'),
    modalBorrarInner = document.getElementById('modal-confirm-inner')


btnBorrar.addEventListener('click', ()=>{
    modalBorrarInner.classList.toggle('show-delete-modal')
    modalBorrarInner.classList.toggle('hide-delete-modal')
    modalBorrar.classList.toggle('inset-0')

})
btnCancel.addEventListener('click', ()=>{
    modalBorrarInner.classList.toggle('show-delete-modal')
    modalBorrarInner.classList.toggle('hide-delete-modal')
    modalBorrar.classList.toggle('inset-0')
})
</script>
