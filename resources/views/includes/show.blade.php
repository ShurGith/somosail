@php
    $permitido = false;
    if(auth()->id() == $datos->user_id or auth()->user()){
        $permitido = true;
    }
    if(auth()->guest() and $datos->publico){
    $permitido = true;
    }

@endphp

<section class="w-full bg-white rounded-lg shadow-lg p-4 h-full grid content-between gap-y-20">
    <article class="w-full md:w-2/3 mx-auto gap-y-2 items-center flex flex-col "">
        @if($datos->is_published or auth()->id())

            <div class="bg-cover bg-center w-full md:w-2/3 mx-auto h-64 overflow-hidden" style="background-image: url({{ asset('storage/images/posts/'.$datos->image )}})">
            </div>
            <div class="flex items-center gap-12 justify-center mb-12 mt-4">
                @foreach ($datos->categories as $cat)
                    <div class="text-white max-w-fit rounded ease-linear duration-300 hover:shadow-lg shadow shadow-black" style="background-color: {{ $cat->primary_color }}">
                        <a href="{{ route('pagina.category', $cat->id) }}" class="flex gap-2 px-2 py-1">
                            <img src="{{ asset('storage/images/logos/'.$cat->logo) }}" class="max-w-6">
                            <p class="text-sm leading-7 ">{{ $cat->name }}</p>
                        </a>
                    </div>
                @endforeach
                    <p class=" text-xs text-gray-500 text-left">
                        {{ ucfirst($datos->created_at->translatedFormat('l ')). $datos->created_at->translatedFormat(' d-') .ucfirst($datos->created_at->translatedFormat('F-Y'))}}
                    </p>
                    <div class="flex place-items-center">
                        <img class="rounded-full w-10" src="{{ asset('storage/images/users/'. $datos->user->profile_photo_path )}}" >
                        <p class="text-xs text-gray-500">{{ $datos->user->name }} </p>
                    </div>
            </div>
            <h2 class="text-2xl font-bold">{{ $datos->title }}</h2>
            @if($permitido)
            <div class="mx-auto w-full ">
                {!! $datos->content !!}
            @endif
        @else
            <div class="flex justify-center items-center h-64 border-2 border-gray-300 gap-14">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" id="Layer-Lock--Streamline-Nova"><desc>Layer Lock Streamline Icon: https://streamlinehq.com</desc><defs></defs><path d="M14.858 15A3.926 3.926 0 0 1 15 16a4.065 4.065 0 1 1 -3 -3.859V9.067A8.668 8.668 0 0 0 11 9C4.648 9 0 16 0 16s4.648 7 11 7 11 -7 11 -7 -0.269 -0.4 -0.752 -1z" fill="#ff0c03" stroke-width="1"></path><path d="M23 4a4 4 0 0 0 -8 0 1 1 0 0 0 -1 1v7a1 1 0 0 0 1 1h8a1 1 0 0 0 1 -1V5a1 1 0 0 0 -1 -1zm-4 -2a2 2 0 0 1 2 2h-4a2 2 0 0 1 2 -2zm3 9h-6V6h6z" fill="#ff0c03" stroke-width="1"></path><path d="M18 8a1 1 0 1 0 2 0 1 1 0 1 0 -2 0" fill="#ff0c03" stroke-width="1"></path><path d="M9 16a2 2 0 1 0 4 0 2 2 0 1 0 -4 0" fill="#ff0c03" stroke-width="1"></path></svg>
                <h1 class="text-4xl font-bold text-[#ff0c03] text-center mb-6">{{  __('No permitido') }}</h1>
        @endif
         </div>
    </article>


<div class="flex flex-col gap-4 items-center border-2 border-gray-300 rounded-lg p-4 mt-20">
    <h1 class="text-2xl font-bold mb-4">{{ __('Recomendaciones') }}</h1>
    <div class="md:max-w-4/5 grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8 ">
        @foreach ($randoms as $rand )
        <div class="w-full bg-red-100 min-w-96">
        <a href="{{ route('pagina.show', $rand->id)}}">
        <div class="w-full h-48 bg-white rounded-lg shadow-md p-4 bg-conver bg-center" style="background-image: url({{ asset('storage/images/posts/'.$rand->image) }})"></div>
        </a>
        <div class="flex items-center gap-4 pl-4 pt-2">
            @foreach ($rand->categories as $cat)
            <div class="text-white max-w-fit rounded ease-linear duration-300 hover:shadow-lg shadow shadow-black" style="background-color: {{ $cat->primary_color }}">
                <a href="{{ route('pagina.category', $cat->id) }}" class="flex gap-2 px-2 py-1">
                    <img src="{{ asset('storage/images/logos/'.$cat->logo) }}" class="max-w-6">
                    <p class="text-sm leading-7 ">{{ $cat->name }}</p>
                </a>
            </div>
            @endforeach
            <h4 class="text-slate-500 font-bold text-lg"> {{ $rand->title}}</h4>
        </div>
        </div>
        @endforeach
    </div>
</div>
</section>
