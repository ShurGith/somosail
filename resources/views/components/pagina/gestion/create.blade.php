
<x-app-layout>

<section class="flex items-center justify-center">
    <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data" class="md:w-3/4 flex flex-col justify-center items-center mt-4 relative">
        @csrf
        @if (session('success'))<!-- SUCCESS POST SUBIDO INICIO -->
        <div id="div-success" class="text-center rounded-md w-full  border border-green-600 bg-green-50 alerta-expandible">
            <div class="p-10">
                <div class="flex justify-center gap-6">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 48 48" class="h-8 w-8 stroke-green-400"><path stroke="#2B6141" stroke-linecap="round" stroke-linejoin="round" d="M34.5 25.5c6.6274 0 12 -5.3726 12 -12 0 -6.62742 -5.3726 -12 -12 -12s-12 5.37258 -12 12c0 6.6274 5.3726 12 12 12Z" stroke-width="2"></path><path stroke="#2B6141" d="M34.5 19.5c-0.4142 0 -0.75 -0.33578 -0.75 -0.75S34.0858 18 34.5 18" stroke-width="2"></path><path stroke="#2B6141" d="M34.5 19.5c0.4142 0 0.75 -0.33578 0.75 -0.75S34.9142 18 34.5 18" stroke-width="2"></path><path stroke="#2B6141" stroke-linecap="round" stroke-linejoin="round" d="M34.5 13.5v-6" stroke-width="2"></path><path stroke="#2B6141" stroke-linecap="round" stroke-linejoin="round" d="M35.01 31.724c0.4044 2.0822 1.2538 4.0524 2.49 5.776h-36s3 -4.658 3 -16.5c0 -3.97824 1.58036 -7.79356 4.3934 -10.6066S15.52176 6 19.5 6V1.5" stroke-width="2"></path><path stroke="#2B6141" stroke-linecap="round" stroke-linejoin="round" d="M15.49598 43.5c0.25402 0.8654 0.78152 1.6252 1.5035 2.1656 0.72198 0.5406 1.5996 0.8328 2.5015 0.8328 0.90182 0 1.77942 -0.2922 2.50142 -0.8328 0.722 -0.5404 1.2496 -1.3002 1.5036 -2.1656" stroke-width="2"></path></svg>
                    <h3 class="text-lg font-medium text-green-800">Post Añadido correctamente</h3>
                </div>
                <p class="mt-2 -sm text-green-700">El post ha sido añadido de manera correcta en el sistema y está disponible para la visualización.</p>
            </div>
        </div>
        @endif <!-- SUCCESS POST SUBIDO FIN -->
       <input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
        <div class="flex flex-col w-full px-4 md:w-3/4 ">
            <label for="titulo" class="font-medium text-gray-700">{{ __('Titulo')}}</label>
            <input type="text" name="titulo" id="titulo" class="w-full py-3 px-5 rounded-lg border border-gray-200 bg-transparent focus:outline-none shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] placeholder-gray-400 text-gray-900 text-base font-normal" placeholder="{{ __('Titulo') }}"  value="{{ old('titulo') }}">
            @error('titulo')
            <div class="text-red-500 flex gap-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" height="32" width="32"><g fill="none" fill-rule="nonzero"><path d="M32 0v32H0V0h32ZM16.790666666666667 31.010666666666665l-0.014666666666666665 0.0026666666666666666 -0.09466666666666665 0.04666666666666667 -0.026666666666666665 0.005333333333333333 -0.018666666666666665 -0.005333333333333333 -0.09466666666666665 -0.04666666666666667c-0.013333333333333332 -0.005333333333333333 -0.025333333333333333 -0.0013333333333333333 -0.032 0.006666666666666666l-0.005333333333333333 0.013333333333333332 -0.02266666666666667 0.5706666666666667 0.006666666666666666 0.026666666666666665 0.013333333333333332 0.017333333333333333 0.13866666666666666 0.09866666666666665 0.019999999999999997 0.005333333333333333 0.016 -0.005333333333333333 0.13866666666666666 -0.09866666666666665 0.016 -0.021333333333333333 0.005333333333333333 -0.02266666666666667 -0.02266666666666667 -0.5693333333333332c-0.0026666666666666666 -0.013333333333333332 -0.011999999999999999 -0.02266666666666667 -0.02266666666666667 -0.023999999999999997Zm0.35333333333333333 -0.15066666666666667 -0.017333333333333333 0.0026666666666666666 -0.24666666666666665 0.124 -0.013333333333333332 0.013333333333333332 -0.004 0.014666666666666665 0.023999999999999997 0.5733333333333333 0.006666666666666666 0.016 0.010666666666666666 0.009333333333333332 0.268 0.124c0.016 0.005333333333333333 0.030666666666666665 0 0.03866666666666667 -0.010666666666666666l0.005333333333333333 -0.018666666666666665 -0.04533333333333334 -0.8186666666666667c-0.004 -0.016 -0.013333333333333332 -0.026666666666666665 -0.026666666666666665 -0.02933333333333333Zm-0.9533333333333333 0.0026666666666666666a0.030666666666666665 0.030666666666666665 0 0 0 -0.036 0.008l-0.008 0.018666666666666665 -0.04533333333333334 0.8186666666666667c0 0.016 0.009333333333333332 0.026666666666666665 0.02266666666666667 0.032l0.019999999999999997 -0.0026666666666666666 0.268 -0.124 0.013333333333333332 -0.010666666666666666 0.005333333333333333 -0.014666666666666665 0.02266666666666667 -0.5733333333333333 -0.004 -0.016 -0.013333333333333332 -0.013333333333333332 -0.24533333333333332 -0.12266666666666666Z" stroke-width="1"></path><path fill="#f00" d="m17.732 4.197333333333333 11.512 19.938666666666666a2 2 0 0 1 -1.7319999999999998 3H4.4879999999999995a2 2 0 0 1 -1.7319999999999998 -3l11.512 -19.938666666666666c0.7693333333333332 -1.3333333333333333 2.6933333333333334 -1.3333333333333333 3.4639999999999995 0ZM16 6.530666666666666 5.642666666666667 24.46933333333333h20.714666666666666L16 6.530666666666666ZM16 20a1.3333333333333333 1.3333333333333333 0 1 1 0 2.6666666666666665 1.3333333333333333 1.3333333333333333 0 0 1 0 -2.6666666666666665Zm0 -9.333333333333332a1.3333333333333333 1.3333333333333333 0 0 1 1.3333333333333333 1.3333333333333333v5.333333333333333a1.3333333333333333 1.3333333333333333 0 1 1 -2.6666666666666665 0V12a1.3333333333333333 1.3333333333333333 0 0 1 1.3333333333333333 -1.3333333333333333Z" stroke-width="1"></path></g></svg>
               {{ $message }}</div>
            @enderror
        </div>
        <div class="flex flex-col w-full px-4 md:w-3/4 mt-4">
            <label for="excerpt" class="font-medium text-gray-700">{{ __('Extracto')}}</label>
            <input type="text" name="excerpt" id="excerpt" class="w-full py-3 px-5 rounded-lg border border-gray-200 bg-transparent focus:outline-none shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] placeholder-gray-400 text-gray-900 text-base font-normal" placeholder="{{ __('Extracto') }}" value="{{ old('excerpt') }}">
            @error('excerpt')
            <div class="text-red-500 flex gap-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="Alert-Line--Streamline-Mingcute" height="32" width="32"><g fill="none" fill-rule="nonzero"><path d="M32 0v32H0V0h32ZM16.790666666666667 31.010666666666665l-0.014666666666666665 0.0026666666666666666 -0.09466666666666665 0.04666666666666667 -0.026666666666666665 0.005333333333333333 -0.018666666666666665 -0.005333333333333333 -0.09466666666666665 -0.04666666666666667c-0.013333333333333332 -0.005333333333333333 -0.025333333333333333 -0.0013333333333333333 -0.032 0.006666666666666666l-0.005333333333333333 0.013333333333333332 -0.02266666666666667 0.5706666666666667 0.006666666666666666 0.026666666666666665 0.013333333333333332 0.017333333333333333 0.13866666666666666 0.09866666666666665 0.019999999999999997 0.005333333333333333 0.016 -0.005333333333333333 0.13866666666666666 -0.09866666666666665 0.016 -0.021333333333333333 0.005333333333333333 -0.02266666666666667 -0.02266666666666667 -0.5693333333333332c-0.0026666666666666666 -0.013333333333333332 -0.011999999999999999 -0.02266666666666667 -0.02266666666666667 -0.023999999999999997Zm0.35333333333333333 -0.15066666666666667 -0.017333333333333333 0.0026666666666666666 -0.24666666666666665 0.124 -0.013333333333333332 0.013333333333333332 -0.004 0.014666666666666665 0.023999999999999997 0.5733333333333333 0.006666666666666666 0.016 0.010666666666666666 0.009333333333333332 0.268 0.124c0.016 0.005333333333333333 0.030666666666666665 0 0.03866666666666667 -0.010666666666666666l0.005333333333333333 -0.018666666666666665 -0.04533333333333334 -0.8186666666666667c-0.004 -0.016 -0.013333333333333332 -0.026666666666666665 -0.026666666666666665 -0.02933333333333333Zm-0.9533333333333333 0.0026666666666666666a0.030666666666666665 0.030666666666666665 0 0 0 -0.036 0.008l-0.008 0.018666666666666665 -0.04533333333333334 0.8186666666666667c0 0.016 0.009333333333333332 0.026666666666666665 0.02266666666666667 0.032l0.019999999999999997 -0.0026666666666666666 0.268 -0.124 0.013333333333333332 -0.010666666666666666 0.005333333333333333 -0.014666666666666665 0.02266666666666667 -0.5733333333333333 -0.004 -0.016 -0.013333333333333332 -0.013333333333333332 -0.24533333333333332 -0.12266666666666666Z" stroke-width="1"></path><path fill="#f00" d="m17.732 4.197333333333333 11.512 19.938666666666666a2 2 0 0 1 -1.7319999999999998 3H4.4879999999999995a2 2 0 0 1 -1.7319999999999998 -3l11.512 -19.938666666666666c0.7693333333333332 -1.3333333333333333 2.6933333333333334 -1.3333333333333333 3.4639999999999995 0ZM16 6.530666666666666 5.642666666666667 24.46933333333333h20.714666666666666L16 6.530666666666666ZM16 20a1.3333333333333333 1.3333333333333333 0 1 1 0 2.6666666666666665 1.3333333333333333 1.3333333333333333 0 0 1 0 -2.6666666666666665Zm0 -9.333333333333332a1.3333333333333333 1.3333333333333333 0 0 1 1.3333333333333333 1.3333333333333333v5.333333333333333a1.3333333333333333 1.3333333333333333 0 1 1 -2.6666666666666665 0V12a1.3333333333333333 1.3333333333333333 0 0 1 1.3333333333333333 -1.3333333333333333Z" stroke-width="1"></path></g></svg>
               {{ $message }}</div>
            @enderror
        </div>
        <div class="flex flex-col px-4 md:w-3/4 mt-4">
            <label for="image-file" class="font-medium text-gray-700">{{ __('Imagen Predeterminada')}}</label>
            <div class="flex justify-between rounded-lg border border-gray-200 bg-transparent">
                <input type="file" name="file_image" id="file_image" class="w-2/4 py-3 px-5 focus:outline-none shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)]">
                <div class="text-center mr-3 opacity-0">
                    <p class="text-sm">Nueva Imagen</p>
                    <img id="imgSelected" class="max-w-32" src="">
                </div>
            </div>
            @error('file_image')
            <div class="text-red-500 flex gap-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" height="32" width="32"><g fill="none" fill-rule="nonzero"><path d="M32 0v32H0V0h32ZM16.790666666666667 31.010666666666665l-0.014666666666666665 0.0026666666666666666 -0.09466666666666665 0.04666666666666667 -0.026666666666666665 0.005333333333333333 -0.018666666666666665 -0.005333333333333333 -0.09466666666666665 -0.04666666666666667c-0.013333333333333332 -0.005333333333333333 -0.025333333333333333 -0.0013333333333333333 -0.032 0.006666666666666666l-0.005333333333333333 0.013333333333333332 -0.02266666666666667 0.5706666666666667 0.006666666666666666 0.026666666666666665 0.013333333333333332 0.017333333333333333 0.13866666666666666 0.09866666666666665 0.019999999999999997 0.005333333333333333 0.016 -0.005333333333333333 0.13866666666666666 -0.09866666666666665 0.016 -0.021333333333333333 0.005333333333333333 -0.02266666666666667 -0.02266666666666667 -0.5693333333333332c-0.0026666666666666666 -0.013333333333333332 -0.011999999999999999 -0.02266666666666667 -0.02266666666666667 -0.023999999999999997Zm0.35333333333333333 -0.15066666666666667 -0.017333333333333333 0.0026666666666666666 -0.24666666666666665 0.124 -0.013333333333333332 0.013333333333333332 -0.004 0.014666666666666665 0.023999999999999997 0.5733333333333333 0.006666666666666666 0.016 0.010666666666666666 0.009333333333333332 0.268 0.124c0.016 0.005333333333333333 0.030666666666666665 0 0.03866666666666667 -0.010666666666666666l0.005333333333333333 -0.018666666666666665 -0.04533333333333334 -0.8186666666666667c-0.004 -0.016 -0.013333333333333332 -0.026666666666666665 -0.026666666666666665 -0.02933333333333333Zm-0.9533333333333333 0.0026666666666666666a0.030666666666666665 0.030666666666666665 0 0 0 -0.036 0.008l-0.008 0.018666666666666665 -0.04533333333333334 0.8186666666666667c0 0.016 0.009333333333333332 0.026666666666666665 0.02266666666666667 0.032l0.019999999999999997 -0.0026666666666666666 0.268 -0.124 0.013333333333333332 -0.010666666666666666 0.005333333333333333 -0.014666666666666665 0.02266666666666667 -0.5733333333333333 -0.004 -0.016 -0.013333333333333332 -0.013333333333333332 -0.24533333333333332 -0.12266666666666666Z" stroke-width="1"></path><path fill="#f00" d="m17.732 4.197333333333333 11.512 19.938666666666666a2 2 0 0 1 -1.7319999999999998 3H4.4879999999999995a2 2 0 0 1 -1.7319999999999998 -3l11.512 -19.938666666666666c0.7693333333333332 -1.3333333333333333 2.6933333333333334 -1.3333333333333333 3.4639999999999995 0ZM16 6.530666666666666 5.642666666666667 24.46933333333333h20.714666666666666L16 6.530666666666666ZM16 20a1.3333333333333333 1.3333333333333333 0 1 1 0 2.6666666666666665 1.3333333333333333 1.3333333333333333 0 0 1 0 -2.6666666666666665Zm0 -9.333333333333332a1.3333333333333333 1.3333333333333333 0 0 1 1.3333333333333333 1.3333333333333333v5.333333333333333a1.3333333333333333 1.3333333333333333 0 1 1 -2.6666666666666665 0V12a1.3333333333333333 1.3333333333333333 0 0 1 1.3333333333333333 -1.3333333333333333Z" stroke-width="1"></path></g></svg>
               {{ $message }}
            </div>
            @enderror
        </div>
        <div class="w-full px-8 md:w-3/4 mt-4">
            <label for="publicado" class="font-bold text-gray-700">{{ __('Publicado')}}</label>
            <div class="flex gap-x-4 mt-2">
                <input type="checkbox" name="publicado" checked>
                <p class="font-normal text-sm text-gray-600">Por defecto los posts son publicados. Desmarca esta casilla si quieres ponerlo en borrador.</p>
            </div>
        </div>
        <div class="w-full px-4 md:w-3/4 mt-4">
            <fieldset>
                <legend class="mb-2 font-semibold leading-6 text-gray-900">{{ __('Categ')}}</legend>
                <div class="grid grid-cols-3 gap-2 md:grid-cols-4 p-4 rounded-lg border border-gray-200" >
                @foreach ($categs as $cat)
                <div class="flex items-center gap-2">
                    <input id="cat_{{ $cat->id }}" name="category_id" value="{{ $cat->id }}"  type="radio" class="h-4 w-4 cursor-pointer border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    <label for="cat_{{ $cat->id }}" class="block cursor-pointer text-sm font-medium leading-6 text-gray-900">{{ strtoupper($cat->name) }}</label>
                </div>
                @endforeach
                </div>
                @error('category_id')
                <div class="text-red-500 flex gap-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" height="32" width="32"><g fill="none" fill-rule="nonzero"><path d="M32 0v32H0V0h32ZM16.790666666666667 31.010666666666665l-0.014666666666666665 0.0026666666666666666 -0.09466666666666665 0.04666666666666667 -0.026666666666666665 0.005333333333333333 -0.018666666666666665 -0.005333333333333333 -0.09466666666666665 -0.04666666666666667c-0.013333333333333332 -0.005333333333333333 -0.025333333333333333 -0.0013333333333333333 -0.032 0.006666666666666666l-0.005333333333333333 0.013333333333333332 -0.02266666666666667 0.5706666666666667 0.006666666666666666 0.026666666666666665 0.013333333333333332 0.017333333333333333 0.13866666666666666 0.09866666666666665 0.019999999999999997 0.005333333333333333 0.016 -0.005333333333333333 0.13866666666666666 -0.09866666666666665 0.016 -0.021333333333333333 0.005333333333333333 -0.02266666666666667 -0.02266666666666667 -0.5693333333333332c-0.0026666666666666666 -0.013333333333333332 -0.011999999999999999 -0.02266666666666667 -0.02266666666666667 -0.023999999999999997Zm0.35333333333333333 -0.15066666666666667 -0.017333333333333333 0.0026666666666666666 -0.24666666666666665 0.124 -0.013333333333333332 0.013333333333333332 -0.004 0.014666666666666665 0.023999999999999997 0.5733333333333333 0.006666666666666666 0.016 0.010666666666666666 0.009333333333333332 0.268 0.124c0.016 0.005333333333333333 0.030666666666666665 0 0.03866666666666667 -0.010666666666666666l0.005333333333333333 -0.018666666666666665 -0.04533333333333334 -0.8186666666666667c-0.004 -0.016 -0.013333333333333332 -0.026666666666666665 -0.026666666666666665 -0.02933333333333333Zm-0.9533333333333333 0.0026666666666666666a0.030666666666666665 0.030666666666666665 0 0 0 -0.036 0.008l-0.008 0.018666666666666665 -0.04533333333333334 0.8186666666666667c0 0.016 0.009333333333333332 0.026666666666666665 0.02266666666666667 0.032l0.019999999999999997 -0.0026666666666666666 0.268 -0.124 0.013333333333333332 -0.010666666666666666 0.005333333333333333 -0.014666666666666665 0.02266666666666667 -0.5733333333333333 -0.004 -0.016 -0.013333333333333332 -0.013333333333333332 -0.24533333333333332 -0.12266666666666666Z" stroke-width="1"></path><path fill="#f00" d="m17.732 4.197333333333333 11.512 19.938666666666666a2 2 0 0 1 -1.7319999999999998 3H4.4879999999999995a2 2 0 0 1 -1.7319999999999998 -3l11.512 -19.938666666666666c0.7693333333333332 -1.3333333333333333 2.6933333333333334 -1.3333333333333333 3.4639999999999995 0ZM16 6.530666666666666 5.642666666666667 24.46933333333333h20.714666666666666L16 6.530666666666666ZM16 20a1.3333333333333333 1.3333333333333333 0 1 1 0 2.6666666666666665 1.3333333333333333 1.3333333333333333 0 0 1 0 -2.6666666666666665Zm0 -9.333333333333332a1.3333333333333333 1.3333333333333333 0 0 1 1.3333333333333333 1.3333333333333333v5.333333333333333a1.3333333333333333 1.3333333333333333 0 1 1 -2.6666666666666665 0V12a1.3333333333333333 1.3333333333333333 0 0 1 1.3333333333333333 -1.3333333333333333Z" stroke-width="1"></path></g></svg>
                    {{ $message }}</div>
                @enderror
            </fieldset>
        </div>
        <div class="w-fitcontent px-4 md:w-3/4 mt-4 justify-start items-start gap-1 flex">
            <div class="w-full justify-start items-start gap-1.5 flex flex-col">
                <div class="justify-start items-center gap-1 inline-flex">
                    <span class="text-gray-600 font-medium leading-7">{{ __('Contenido del Post') }}</span>
                </div>
                <textarea id="contenidoPost" name="content" id="content" rows="4" class="w-full py-2.5 px-4 rounded-lg focus:outline-none border border-gray-200 shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] placeholder-gray-400 text-gray-900 font-normal leading-8 resize-none" placeholder="{{ __('Contenido del Post') }} . . ." >{{ old('content') }}</textarea>
            </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="submit" class="cursor-pointer rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Guardar</button>
        </div>
        <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
    tinymce.init({
    selector: '#contenidoPost',
    plugins: [
        // Core editing features
        'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
        // Your account includes a free trial of TinyMCE premium features
        // Try the most popular premium features until Oct 30, 2024:
        'checklist', 'mediaembed', 'casechange', 'export', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown',
    ],
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
    });
</script>
    </form>

</section>
</x-app-layout>


<script>
    const divSuccess = document.querySelector('#div-success')
   // const btnSuccess = document.querySelector('#btn-success');
 if(divSuccess){
    hideSuccess = function(){
        divSuccess.classList.toggle('expandido');
    }
    document.addEventListener('DOMContentLoaded', ()=>{
        setTimeout(hideSuccess, 200);
        setTimeout(hideSuccess, 5000);
    })
}
const $seleccionArchivos = document.querySelector("#file_image"),
  $imagenPrevisualizacion = document.querySelector("#imgSelected");

$seleccionArchivos.addEventListener("change", () => {
  const archivos = $seleccionArchivos.files;
  if (!archivos || !archivos.length) {
    $imagenPrevisualizacion.src = "";
    return;
  }
  const primerArchivo = archivos[0],
        objectURL = URL.createObjectURL(primerArchivo);
  $imagenPrevisualizacion.src = objectURL;
  $imagenPrevisualizacion.closest('div').classList.remove('opacity-0');
});

</script>
