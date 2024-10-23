<!--  INICIO MODAL DE BORRADO -->
    <div
    id="modal-confirm-borrar"
    data-dialog-backdrop="animated-dialog"
    data-dialog-backdrop-close="true"
    class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300 "
    >
    <div
    data-dialog="animated-dialog"
    data-dialog-mount="opacity-100 translate-y-0 scale-100"
    data-dialog-unmount="opacity-0 -translate-y-28 scale-90 pointer-events-none"
    data-dialog-transition="transition-all duration-300"
    class="relative m-4 p-4 w-2/5 min-w-[40%] max-w-[40%] rounded-lg bg-white shadow-sm"
    >

    <div id="modal-borrar-inner" class="flex flex-col bg-white rounded-2xl py-4 px-5">
        <div class="flex justify-between items-center pb-4 border-b border-gray-200">
            <div class="flex w-full justify-center items-center gap-x-12">
                <svg class="h-12 w-12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="" stroke-width="1.408"></g><g> <style type="text/css"> .st0{fill:#C75C5C;} .st1{opacity:0.2;} .st2{fill:#231F20;} .st3{fill:#F5CF87;} .st4{fill:#4F5D73;} </style> <g id="Layer_1"> <g> <circle class="st0" cx="32" cy="32" r="32"></circle> </g> <g class="st1"> <path class="st2" d="M17,50c-4.4,0-6.2-3.1-4-6.9L28,17c2.2-3.8,5.8-3.8,8,0l15,26.1c2.2,3.8,0.4,6.9-4,6.9H17z"></path> </g> <g> <path class="st3" d="M17,48c-4.4,0-6.2-3.1-4-6.9L28,15c2.2-3.8,5.8-3.8,8,0l15,26.1c2.2,3.8,0.4,6.9-4,6.9H17z"></path> </g> <g> <path class="st4" d="M34,32c0,1.1-0.9,2-2,2l0,0c-1.1,0-2-0.9-2-2v-8c0-1.1,0.9-2,2-2l0,0c1.1,0,2,0.9,2,2V32z"></path> </g> <g> <path class="st4" d="M34,40c0,1.1-0.9,2-2,2l0,0c-1.1,0-2-0.9-2-2l0,0c0-1.1,0.9-2,2-2l0,0C33.1,38,34,38.9,34,40L34,40z"></path> </g> </g> <g id="Layer_2"> </g> </g>
                </svg>
                <h4 class="text-gray-900 font-medium text-xl">Atención - Ultimo Aviso</h4>
            </div>
            <button  data-dialog-close="true"  class="block cursor-pointer h-12 w-12 rotate-0 transition-transform duration-300  hover:rotate-[360deg]">
            <svg class="h-8 w-8 mt-auto mx-auto" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.75732 7.75739L16.2426 16.2427M16.2426 7.75739L7.75732 16.2427" stroke="black" stroke-width="1.6" stroke-linecap="round"></path>
            </svg>
            </button>
        </div>
        <div class="overflow-y-auto py-4 min-h-[100px]">
        <p class=" text-gray-600 text-center"> Se eliminará el post en cuestión. <br /> Esta acción no es reversible </p>
        </div>
    </div>
    <div class="flex items-center justify-end pt-4 border-t border-gray-200 space-x-4">
        <button type="button" id="btn-modal-closer" data-dialog-close="true" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-200 sm:mt-0 sm:w-auto">{{ __('Cancel') }}</button>
            <form method="POST" id="form-delete" action="">
                @csrf
                @method('DELETE')
                <button data-dialog-close="true" type="submit" class="inline-flex justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto" >{{ __('Delete') }}</button>
            </form>
        </div>
</div>
</div>
<!--  FIN MODAL DE BORRADO -->
