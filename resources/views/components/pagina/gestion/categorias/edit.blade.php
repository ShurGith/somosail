<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
<x-app-layout>
    <section class="flex items-center justify-center">
        <form method="POST" action="{{ route('update-categ', $category->id) }}" enctype="multipart/form-data" class="sm:w-3/4 flex flex-col justify-center items-center mt-4 relative">
            @csrf
            @method('PUT')
            <div class="flex flex-col items-start justify-start gap-x-4 w-full px-4 md:w-2/4 mt-4">
                <label for="logo_color" class="font-bold text-gray-700">{{ __('Name')}}</label>
                <div class="flex items-center justify-start gap-4">
                <input type="text" name="name" id="name" class="w-full py-3 px-5 rounded-lg border border-gray-200 bg-transparent focus:outline-none shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] placeholder-gray-400 text-gray-900 text-base font-normal" placeholder="{{ __('Name') }}"
                value="{{old('name', $category->name)}}">
                <x-pagina._partials.svg-errorform for='name' />
                <div class="w-fit min-w-28 rounded ease-linear duration-300 hover:shadow-lg shadow shadow-black" style="background-color:{{ $category->primary_color}}" onmouseover="this.style.backgroundColor='{{ $category->primary_color.$category->secondary_color}}';" onmouseout="this.style.backgroundColor='{{ $category->primary_color}}';">
                        <div class="flex px-2 py-1 text-white justify-start items-center gap-2">
                            <img src="{{ asset('storage/images/logos/'.$category->logo) }}" class="max-w-8 max-h-8">
                            <h4 class="text-lg leading-8" style="color:{{ $category->logo_color }}">{{ $category->name }} </h4>
                        </div>
                </div>
            </div>
        </div>
            <div class="flex flex-col items-start justify-start gap-x-4 w-full px-4 md:w-2/4 mt-4">
                <label for="logo_color" class="font-bold text-gray-700">{{ __('Logo')}}</label>
                <div class="flex items-center justify-start gap-4">
                    <input type="file" name="logo" id="logo" class="w-full py-3 px-5 rounded-lg border border-gray-200 bg-transparent focus:outline-none shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] placeholder-gray-400 text-gray-900 text-base font-normal" placeholder="{{ __('Logo') }}"
                    value="{{old('logo', $category->logo)}}">
                    <x-pagina._partials.svg-errorform for='logo' />
                    <div class="p-2 rounded" style="background-color:{{ $category->primary_color }}">
                        <img class="h-12 w-12 " src="{{ asset('storage/images/logos/'.$category->logo) }}">
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-start justify-start gap-x-4 w-full px-4 md:w-2/4 mt-4">
                <label for="logo_color" class="font-bold text-gray-700">{{ __('Icono')}}</label>
                <div class="flex items-center justify-start gap-4">
                    <input type="text" name="ico" id="ico" class="w-full py-3 px-5 rounded-lg border border-gray-200 bg-transparent focus:outline-none shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] placeholder-gray-400 text-gray-900 text-base font-normal" placeholder="{{ __('Icon') }}"
                value="{{old('ico', $category->ico)}}">
                <div class="p-4 rounded-full" style="background-color:{{ $category->primary_color }} ">
                    <i class="ti {{ $category->ico }} text-4xl" style="color:{{ $category->logo_color }}"></i>
                </div>
            </div>
                <x-pagina._partials.svg-errorform for='ico' />
            </div>

            <!-- Color de Letras  -->
            <div class="flex flex-col items-start justify-start gap-x-4 w-full px-4 md:w-2/4 mt-4">
                <label for="logo_color" class="font-bold text-gray-700">{{ __('Color Texto')}}</label>
                <div class="flex items-center justify-start gap-4">
                    <input type="text" name="logo_color" id="logo_color" class="colorInput rounded-lg border border-gray-200 bg-transparent focus:outline-none shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] placeholder-gray-400 text-gray-900 text-base font-normal" placeholder="{{ __('Color de Logo e Icono') }}"
                    value="{{old('logo_color', $category->logo_color)}}">
                    <div class="flex flex-col items-center text-xs ">
                        <label for="colorPicker">{{ __('Selector') }}</label>
                        <input class="border-black border-2 rounded cursor-pointer" name="colorPicker" type="color" id="colorPicker_1" value="{{ $category->logo_color }}">
                    </div>
                    <div class="flex flex-col items-center text-xs ">
                        <label>{{ __('Color Actual') }}</label>
                        <div class="w-12 border-black border rounded h-6" style="background-color:{{ $category->logo_color }}"></div>
                    </div>
                </div>
                <x-pagina._partials.svg-errorform for='logo_color' />
            </div>
            <!-- Primary Color -->
            <div class="flex flex-col items-start justify-start gap-x-4 w-full px-4 md:w-2/4 mt-4">
                <label for="primary_color" class="font-bold text-gray-700">{{ __('Color Primario ')}}</label>
                <div class="flex items-center justify-start gap-4">
                    <input type="text" name="primary_color" id="primary_color" class="colorInput rounded-lg border border-gray-200 bg-transparent focus:outline-none shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] placeholder-gray-400 text-gray-900 text-base font-normal" placeholder="{{ __('Color Primario') }}"
                    value="{{old('primary_color', $category->primary_color)}}">
                    <div class="flex flex-col items-center text-xs ">
                        <label for="colorPicker">{{ __('Selector') }}</label>
                        <input class="border-black border-2 rounded cursor-pointer" name="colorPicker" type="color" id="colorPicker_2" value="{{ $category->primary_color }}">
                    </div>
                    <div class="flex flex-col items-center text-xs">
                        <label>{{ __('Color Actual') }}</label>
                        <div class="w-12 border-black border rounded h-6" style="background-color:{{ $category->primary_color }}"></div>
                    </div>
                </div>
                <x-pagina._partials.svg-errorform for='primary_color' />
            </div>
            <!-- Secondary Color -->
            <div class="flex flex-col items-start justify-start gap-x-4 w-full px-4 md:w-2/4 mt-4">
                <label for="secondary_color" class="font-bold text-gray-700">{{ __('Color Secundario ')}}</label>
                <div class="flex items-center justify-start gap-4">
                    <input type="text" name="secondary_color" id="secondary_color" class="colorInput rounded-lg border border-gray-200 bg-transparent focus:outline-none shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] placeholder-gray-400 text-gray-900 text-base font-normal" placeholder="{{ __('Color Primario') }}"
                    value="{{old('secondary_color', $category->secondary_color)}}">
                    <div class="flex flex-col items-center text-xs ">
                        <label for="colorPicker">{{ __('Selector') }}</label>
                        <input class="border-black border-2 rounded cursor-pointer" name="colorPicker" type="color" id="colorPicker_2" value="{{ $category->secondary_color }}">
                    </div>
                    <div class="flex flex-col items-center text-xs">
                        <label>{{ __('Color Actual') }}</label>
                        <div class="w-12 border-black border rounded h-6" style="background-color:{{ $category->secondary_color }}"></div>
                    </div>
                </div>
                <x-pagina._partials.svg-errorform for='secondary_color' />
            </div>
            <!-- Opaciddad -->
            <div class="flex flex-col items-start justify-start gap-x-4 w-full px-4 md:w-2/4 mt-4">
                <label for="opacidad" class="font-bold text-gray-700">{{ __('Opacidad ')}}</label>
                <div class="flex items-center justify-start gap-4">
                    <input type="text" name="opacidad" id="opacidad" class="colorInput rounded-lg border border-gray-200 bg-transparent focus:outline-none shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] placeholder-gray-400 text-gray-900 text-base font-normal" placeholder="{{ __('Opacidad-Ver Referencia') }}"
                    value="{{old('opacidad',$category->opacidad)}}">
                    <div class="flex flex-col items-center text-xs ">
                    <a class="text-blue-600 ml-4" href="https://davidwalsh.name/hex-opacity" target="_blank">(*)Referencia Códigos HEX</a>
                </div>
                <x-pagina._partials.svg-errorform for='opacidad' />
            </div>

            @if (session('success'))<!-- SUCCESS POST SUBIDO INICIO -->
                <div id="div-success" class="rounded-md w-3/4 bg-green-50 alerta-expandible">
                    <div class="p-10">
                        <div class="flex">
                            <svg class="h-6 w-6 text-green-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd" />
                            </svg>
                            <h3 class="text-lg font-medium text-green-800">Categoría Editada Correctamente</h3>
                        </div>
                        <p class="mt-2 -sm text-green-700">Se ha actualizado la categoría de manera correcta.</p>
                    </div>
                </div>
             @endif <!-- SUCCESS POST SUBIDO FIN -->
            <div class="w-fitcontent px-4 md:w-3/4 mt-4 justify-start items-start gap-1 flex">
                <div class="w-full justify-start items-start gap-1.5 flex flex-col">
                    <div class="justify-start items-center gap-1 inline-flex">
                        <span class="text-gray-600 font-bold leading-7">{{ __('Texto descriptivo de la categoría') }}</span>
                    </div>
                    <textarea id="contenidoPost" name="description" id="description" rows="4" class="w-full py-2.5 px-4 rounded-lg focus:outline-none border border-gray-200 shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] placeholder-gray-400 text-gray-900 font-normal leading-8 resize-none" placeholder="{{ __('Texto descriptivo de la categoría') }} . . ." >{{ old('description', $category->description) }}</textarea>
                </div>
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Guardar</button>
            </div>
            <!-- Place the following <script> and <textarea> tags your HTML's <body> -->

        </form>
    </section>
    </x-app-layout>

    <script>
        // Obtener los elementos
        const divSuccess = document.querySelector('#div-success'),
            pickers =document.querySelectorAll('[name=colorPicker]'),
            colrsInput = document.querySelectorAll('.colorInput')

        pickers.forEach((picker, index) => {
            picker.addEventListener('input', function() {
                colrsInput[index].value = picker.value
            });
        });


       // const btnSuccess = document.querySelector('#btn-success');
    if(divSuccess){
        hideSuccess = function(){
            divSuccess.classList.toggle('expandido');
        }

        document.addEventListener('DOMContentLoaded', ()=>{
            setTimeout(hideSuccess, 1000);
            setTimeout(hideSuccess, 5000);
        })
    }
    </script>
