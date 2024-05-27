<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   

    public function index(Request $request)
{
    
    $sortColumn = $request->get('sort_by', 'nom');
    $sortDirection = $request->get('sort_direction', 'asc');

    
    if (!in_array($sortDirection, ['asc', 'desc'])) {
        $sortDirection = 'asc';
    }
    
    $contacts = Contact::join('organisations', 'contacts.organisation_id','=', 'organisations.id')
    ->select('contacts.*', 'organisations.nom as entreprise_nom', 'organisations.statut as entreprise_statut')
    ->orderBy($sortColumn, $sortDirection)
    ->paginate(10); 
     return view('Home', compact('contacts', 'sortColumn', 'sortDirection'));
}


    public function search(Request $request){
        $sortColumn = $request->get('sort_by', 'nom');
        $sortDirection = $request->get('sort_direction', 'asc');
    
        
        if (!in_array($sortDirection, ['asc', 'desc'])) {
            $sortDirection = 'asc';
        }
        

        $searchItem = $request->get('search');
        $contacts = Contact::join('organisations', 'contacts.organisation_id','=', 'organisations.id')
    ->select('contacts.*', 'organisations.nom as entreprise_nom', 'organisations.statut as entreprise_statut')
    ->where('contacts.nom' ,'like','%'.$searchItem.'%')
    ->orWhere('contacts.prenom' ,'like','%'.$searchItem.'%')
    ->orWhere('organisations.nom' ,'like','%'.$searchItem.'%')
    ->orderBy($sortColumn, $sortDirection)
    ->paginate(10);

    return view('Home', compact('contacts', 'sortColumn', 'sortDirection'));
    }
   
}
