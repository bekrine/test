<tbody>
    @foreach ($contacts as $contact)
        <tr class="bg-white border-b  hover:bg-gray-50 ">

            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                {{ $contact->nom }} <span>{{ $contact->prenom }}</span>
            </th>
            <td class="px-6 py-4">
                {{ $contact->organisation->nom }}
            </td>
            <td class="px-6 py-4 ">
                <div class="flex justify-center items-center">

                    <span @class([
                        'bg-cyan-200 text-cyan-400 rounded-md px-2 lowercase ' =>
                            $contact->organisation->statut == 'LEAD',
                        'bg-green-200 bg-green-400 rounded-md px-2 lowercase ' =>
                            $contact->organisation->statut == 'CLIENT',
                        'bg-orange-200 text-orange-400 rounded-md px-2 lowercase ' =>
                            $contact->organisation->statut == 'PROSPECT',
                    ])>
                        {{ $contact->organisation->statut }}
                    </span>
                </div>
            </td>
            <td class="px-6 py-4 flex justify-evenly items-center">
                <div>
                    <a href="/show/{{$contact->organisation->id}}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </a>

                </div>
                <div>
                    <a href="/edit/{{$contact->organisation->id}}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                        </svg>
                    </a>
                </div>
                <div>
                    <form method="POST" action="/delete/{{$contact->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">

                            <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="red" class="size-6 hover:cursor-pointer">
                            <path stroke-linecap="round" stroke-linejoin="round"
                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>
                    </button>
                </form>

                </div>
            </td>

        </tr>
    @endforeach
</tbody>
