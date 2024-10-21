<x-app-layout metaTitle="Viendo las categorias" metaDescription="" >
<div class="w-full flex items-center bg-red-100 flex-col py-6">
    <div class="w-full place-items-center gap-6 grid md:w-3/4 lg:grid-cols-6 md:grid-cols-2 grid-cols-2 border text-sm font-medium">
        <h2>Vista</h2><h2>Logo</h2><h2>Icono</h2><h2>Logo/Icono Color</h2><h2>Color Primario</h2><h2>Color Secundario</h2>
    </div>
    @foreach ($categs as $categ)
    <div class="w-full mt-4 place-items-center gap-6 grid lg:grid-cols-6 md:grid-cols-2 md:w-3/4 grid-cols-2">
        <div class="w-fit min-w-28 rounded ease-linear duration-300 hover:shadow-lg shadow shadow-black" style="background-color:{{ $categ->primary_color }}">
            <a href="{{ route('edit-categ', $categ->id) }}" class="flex px-2 py-1 text-white justify-start items-center gap-2">
                <img src="{{ asset('storage/images/logos/'.$categ->logo) }}" class="max-w-8 max-h-8">
                <h4 class="text-lg leading-8">{{ $categ->name }}</h4>
            </a>
        </div>
        <div>
            <h4 class="text-sm leading-8">{{ $categ->logo }}</h4>
        </div>
        <div>
            <h4 class="text-sm leading-8">{{ $categ->ico }}</h4>
        </div>
        <div>
            <h4 class="text-sm leading-8">{{ $categ->logo_color }}</h4>
        </div>
        <div>
            <h4 class="text-sm leading-8">{{ $categ->primary_color }}</h4>
        </div>
        <div>
            <h4 class="text-sm leading-8">{{ $categ->secondary_color }}</h4>
        </div>
    </div>
     @endforeach
</div>
</x-app-layout>
