@if (session('delete'))
 
<div id="popup-modal"  class="@if(!session('delete')) hidden @endif flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center  w-full md:inset-0 h-[calc(100%-1rem)] max-h-full  bg-gray-500 bg-opacity-75 transition-opacity ">
    <div class="relative top-2 p-4 w-full max-w-[50%] max-h-full">
        <div class="relative bg-white rounded-lg shadow ">
          
            <div class="p-4 md:p-5 text-center">
               
                <h3 class="mb-5 text-lg font-normal text-gray-500 ">
                    <div class="flex items-center mb-6 ">
                        <span class="p-2 rounded-full bg-red-100">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="red" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                              </svg>
                              
                        </span>
                        <h1 class="ml-4 text-xl  text-black">Supprimer le contact</h1>
                    </div>
                    <div>

                        <p class="text-left text-sm font-light text-gray-600 mb-1">Etes-vous sûr de vouloir supprimer le contact ?
                           </p>
                            <p class="text-left text-sm font-light text-gray-600 mb-2">
                                Cette opération est irreversible.
                            </p>
                        </div>
                </h3>
                <div class="flex items-center justify-end">
                    <form action="/resetError">
                        <button data-modal-hide="popup-modal" type="submit" class="mr-2 py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 ">Annuler</button>
                    </form>
                    <form method="POST" action="/destroy/{{session('id')}}">
                        @csrf
                        @method("DELETE")
                        
                        <button data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Confirmer
                        </button>
                        
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endif
