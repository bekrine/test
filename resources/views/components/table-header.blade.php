<thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
    <tr>
        <th scope="col" class="px-6 py-3 uppercase  ">
            <a href="{{ route('home', ['sort_by' => 'contacts.nom', 'sort_direction' => $sortColumn === 'contacts.nom' && $sortDirection === 'asc' ? 'desc' : 'asc']) }}">

                nom du contact
            </a>
            </th>
        <th scope="col" class="px-6 py-3 uppercase ">
             <a href="{{ route('home', ['sort_by' => 'organisations.nom', 'sort_direction' => $sortColumn === 'organisations.nom' && $sortDirection === 'asc' ? 'desc' : 'asc']) }}">
                société

            </a>
        </th>
        <th scope="col" class="px-6 py-3 uppercase text-center">
            <a href="{{ route('home', ['sort_by' => 'organisations.statut', 'sort_direction' => $sortColumn === 'organisations.statut' && $sortDirection === 'asc' ? 'desc' : 'asc']) }}">
                statu
            </a>
        </th>
        <th scope="col" class="px-6 py-3">
         
        </th>
   
    </tr>
</thead