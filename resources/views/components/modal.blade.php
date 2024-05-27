
<div class="absolute w-full h-screen z-10 inset-0 overflow-y-auto  bg-gray-500 bg-opacity-75 transition-opacit hidden"
    id="addUserModal" aria-labelledby="modal-title" role="dialog" aria-modal="true">

    <div class="w-full h-full flex justify-center items-center">

        <div
            class="w-[60%] min-h-fit inline-block align-bottom bg-white rounded-lg text-left overflow-y-auto shadow-xl transform transition-all">

            <div class="text-center ">
                <h3 class="text-lg leading-6 text-left font-medium text-gray-900 pl-4 mt-4 ml-3" id="modal-title">Détail du Contact</h3>
                <div class="">
                    <form method="POST" action="/store">
                        @csrf
                        <div class="m-3 p-4 ">

                        <div class="flex justify-around items-center">

                            <div class="mb-4  w-full">
                                <label for="prenom" class="block text-gray-400 text-sm font-bold mb-2 text-left">Prénom</label>
                                <input type="text" id="prenom" name="prenom"  
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    @error('prenom')
                                    <div class="px-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                        <span class="font-medium">{{$message}}</span> 
                                    </div>
                                    @enderror
                            </div>
                            <div class="mb-4 ml-2 w-full">
                                <label for="nom" class="block text-gray-400 text-sm font-bold mb-2 text-left">Nom</label>
                                <input type="text" id="nom" name="nom"  
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    @error('nom')
                                    <div class="px-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                        <span class="font-medium">{{$message}}</span> 
                                    </div>
                                    @enderror
                                </div>
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-gray-400 text-sm font-bold mb-2 text-left">Email</label>
                            <input type="email" id="email" name="e_mail"  
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                @error('e_mail')
                                <div class="px-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                    <span class="font-medium">{{$message}}</span> 
                                </div>
                                @enderror
                            </div>
                        <div class="mb-4">
                            <label for="entreprise" class="block text-gray-400 text-sm font-bold mb-2 text-left">Entreprise</label>
                            <input type="text" id="entreprise" name="entreprise"  
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                @error('entreprise')
                                <div class="px-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                    <span class="font-medium">{{$message}}</span> 
                                </div>
                                @enderror
                            </div>
                        <div class="mb-4">
                            <label for="adresse"
                                class="block text-gray-400 text-sm font-bold mb-2 text-left">Adresse</label>
                            <textarea class="shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight w-full" name="adresse" id="adresse" cols="20" rows="3"></textarea>
                            @error('adreese')
                            <div class="px-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                <span class="font-medium">{{$message}}</span> 
                            </div>
                            @enderror
                        </div>
                        <div class="flex justify-center items-center">

                            <div class="mb-4 w-[80%]">
                                <label for="password_confirmation"
                                    class="block text-gray-400 text-sm font-bold mb-2 text-left">Code Postal</label>
                                <input type="text" id="code_postal" name="code_postal"  
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    @error('code_postal')
                                    <div class="px-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                        <span class="font-medium">{{$message}}</span> 
                                    </div>
                                    @enderror
                                </div>
                            <div class="mb-4 w-[80%] ml-2">
                                <label for="password_confirmation"
                                    class="block text-gray-400 text-sm font-bold mb-2 text-left">Ville</label>
                                <input type="text" id="ville" name="ville"  
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                        </div>
                        <div class="mb-4 flex justify-start flex-col">
                            <label for="password_confirmation"
                                class="block text-gray-400 text-sm font-bold mb-2 text-left">Statut</label>
                            <select name="statut" id="statut" class="shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight w-[60%]">
                                <option value="LEAD">LEAD</option>
                                <option value="CLIENT">CLIENT</option>
                                <option value="PROSPECT">PROSPECT</option>
                            </select>
                        </div>
                            
                        </div>
                        <div class="flex items-center justify-end -bg--background-color p-4">
                            <button type="button"
                                class="mr-2 bg-gray-300 text-gray-800 font-light text-sm py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                onclick="toggleModal('addUserModal')">Annuler</button>
                            <button type="submit"
                                class="bg-button-color text-white  py-2 px-4 rounded focus:outline-none focus:shadow-outline text-sm font-light">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
