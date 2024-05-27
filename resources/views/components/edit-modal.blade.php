
<div class="@if(!session('update')) hidden @endif absolute w-full h-screen z-10 inset-0 overflow-y-auto  bg-gray-500 bg-opacity-75 transition-opacity "
    id="editUserModal" aria-labelledby="modal-title" role="dialog" aria-modal="true">

    <div class="w-full h-full flex justify-center items-center">

        <div
            class="w-[60%] min-h-fit inline-block align-bottom bg-white rounded-lg text-left overflow-y-auto shadow-xl transform transition-all ">

            <div class=" text-center ">
                <h3 class="text-lg leading-6 text-left font-medium text-gray-900 pl-4 mt-4 ml-3" id="modal-title">Modéfier du Contact</h3>
                <div class="">
                    @if (session('updateOrganitastion'))
                    
                    <form method="POST" action="/update/{{session('updateOrganitastion')->contacts[0]['id']}}">
                        @csrf
                        @method('PUT')
                        <div class="m-3 p-4 ">

                        
                        <div class="flex justify-around items-center">
                            
                            <div class="mb-4  w-full">
                                <label for="prenom" class="block text-gray-400 text-sm font-bold mb-2 text-left">Prénom</label>
                                <input type="text" id="prenom" name="prenom"  
                                value="{{session('updateOrganitastion')->contacts[0]['prenom']}}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <input type="text" id="organisation_id" name="organisation_id"  
                                value="{{session('updateOrganitastion')->id}}"
                                    class="hidden">
                               
                            </div>
                            <div class="mb-4 ml-2 w-full">
                                <label for="nom" class="block text-gray-400 text-sm font-bold mb-2 text-left">Nom</label>
                                <input type="text" id="nom" name="nom"  
                                value="{{session('updateOrganitastion')->contacts[0]['nom']}}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                
                                </div>
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-gray-400 text-sm font-bold mb-2 text-left">Email</label>
                            <input type="email" id="email" name="e_mail"
                            value="{{session('updateOrganitastion')->contacts[0]['e_mail']}}"  
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                          
                            </div>
                        <div class="mb-4">
                            <label for="entreprise" class="block text-gray-400 text-sm font-bold mb-2 text-left">Entreprise</label>
                            <input type="text" id="entreprise" name="entreprise"  
                            value="{{session('updateOrganitastion')->nom}}"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                          
                            </div>
                        <div class="mb-4">
                            <label for="adresse"
                                class="block text-gray-400 text-sm font-bold mb-2 text-left">Adresse</label>
                                <textarea 
                            class="shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight w-full" name="adresse" id="adresse" cols="20" rows="3">
                            {{session('updateOrganitastion')->adresse}}
                        </textarea>

                        </div>
                        <div class="flex justify-center items-center">

                            <div class="mb-4 w-[80%]">
                                <label for="password_confirmation"
                                    class="block text-gray-400 text-sm font-bold mb-2 text-left">Code Postal</label>
                                <input type="text" id="code_postal" name="code_postal"  
                                value="{{session('updateOrganitastion')->code_postal}}"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                
                                </div>
                            <div class="mb-4 w-[80%] ml-2">
                                <label for="password_confirmation"
                                class="block text-gray-400 text-sm font-bold mb-2 text-left">Ville</label>
                                <input type="text" id="ville" name="ville"  
                                value="{{session('updateOrganitastion')->ville}}"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                        </div>
                        <div class="mb-4 flex justify-start flex-col">
                            <label for="password_confirmation"
                                class="block text-gray-400 text-sm font-bold mb-2 text-left">Statut</label>
                            <select 
                            
                            value="{{session('updateOrganitastion')->statut}}"
                            name="statut" id="statut" class="shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight w-[60%]">
                                <option default value="{{session('updateOrganitastion')->statut}}" selected >{{session('updateOrganitastion')->statut}}</option>
                            <option value="LEAD">LEAD</option>
                                <option value="CLIENT">CLIENT</option>
                                <option value="PROSPECT">PROSPECT</option>
                            </select>
                        </div>
                    </div>
                        <div class="flex items-center justify-end -bg--background-color p-4">
                            <button type="button"
                                class="mr-2 bg-gray-300 text-gray-800 font-light  text-sm  py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                onclick="toggleModal('editUserModal')">Annuler</button>
                            <button type="submit"
                            class="bg-button-color text-white  py-2 px-4 rounded focus:outline-none focus:shadow-outline text-sm font-light">Valider</button>
                        </div>
                    </form>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
