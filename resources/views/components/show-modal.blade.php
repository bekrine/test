
<div class="@if(!session('info')) hidden @endif absolute w-full h-screen z-10 inset-0 overflow-y-auto  bg-gray-500 bg-opacity-75 transition-opacity "
    id="infoUserModal" aria-labelledby="modal-title" role="dialog" aria-modal="true">

    <div class="w-full h-full flex justify-center items-center">

        <div
            class="w-[60%] min-h-fit inline-block align-bottom bg-white rounded-lg text-left overflow-y-auto shadow-xl transform transition-all p-4">

            <div class="my-3 mx-6  ">
                <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4" id="modal-title">Info du Contact</h3>
                <div class="mt-2">
                    @if (session('organization'))
                        
                    <div class="mb-2 px-2 ">
                        <span class="text-gray-400 font-semibold text-base">Entreprise</span> : <span class="font-medium text-sm">{{ session('organization')->nom }}</span>
                    </div>
                    <div class="mb-2 px-2 ">
                        <span class="text-gray-400 font-semibold text-base">adresse</span> : <span class=" font-medium text-sm">{{ session('organization')->adresse }}</span>
                    </div>
                    <div class="mb-2 px-2 ">
                        <span class="text-gray-400 font-semibold text-base">code Postal</span> : <span class=" font-medium text-sm">{{ session('organization')->code_postal }}</span>
                    </div>
                    <div class="mb-2 px-2 ">
                        <span class="text-gray-400 font-semibold text-base">statut</span> : <span class=" font-medium text-sm">{{ session('organization')->statut }}</span>
                    </div>
                    @foreach (session('organization')->contacts as $contact)
                    <div>
                        <div class="mb-2 px-2 ">
                            <span class="text-gray-400 font-semibold text-base">Email</span> :  <span class=" font-medium text-sm">{{$contact["e_mail"]}}</span>
                        </div>
                        <div class="mb-2 px-2 ">
                            <span class="text-gray-400 font-semibold text-base">Nom et Prenom</span> : <span class=" font-medium text-sm"> {{$contact["nom"] }} {{$contact["prenom"]}} </span>
                        </div>
                        <div class="mb-2 px-2 ">
                            <span class="text-gray-400 font-semibold text-base">telephone fixe</span> : <span class=" font-medium text-sm"> {{$contact["telephone_fixe"]}}</span>
                        </div>
                        <div class="mb-2 px-2 ">
                            <span class="text-gray-400 font-semibold text-base">service</span> :  <span class=" font-medium text-sm">{{$contact["service"] }}</span>
                        </div>
                        <div class="mb-2 px-2 ">

                            <span class="text-gray-400 font-semibold text-base">fonction</span> : <span class=" font-medium text-sm"> {{$contact["fonction"] }}</span>
                        </div>
                    </div>
                        
                    @endforeach
                    @endif 

                </div>

            </div>
                    <div class="flex items-center justify-end ">
                        <button type="button" onclick="toggleModal('infoUserModal')"
                        class="bg-blue-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Annuler</button>

                    </div>
        </div>
    </div>
</div>
