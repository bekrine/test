<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Organisation;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OrganisationController extends Controller
{
    public function store(Request $request){
    
        $validated = $request->validate([
            'nom' => 'required|regex:/^[a-zA-Z]+$/u',
            'prenom' => 'required|regex:/^[a-zA-Z]+$/u',
            'e_mail' => 'required|email',
            'entreprise' => 'required|regex:/^[a-zA-Z0-9]+$/u',
            'code_postal' => 'required|digits_between:1,10',
        ], [
            'nom.required' => 'Le  nom est obligatoire.',
            'nom.regex' => 'Le nom ne peut contenir que des lettres.',
            'prenom.required' => 'Le prénom  est obligatoire.',
            'prenom.regex' => 'Le prénom  ne peut contenir que des lettres.',
            'e_mail.required' => 'L\'e-mail est obligatoire.',
            'e_mail.email' => 'Le format de l\'e-mail est invalide.',
            'entreprise.required' => 'L\'entreprise est obligatoire.',
            'entreprise.regex' => 'L\'entreprise ne peut contenir que des lettres ou des chiffres.',
            'code_postal.required' => 'Le code postal est obligatoire.',
            'code_postal.digits_between' => 'Le code postal ne peut contenir que des chiffres.',
        ]);


        
        
        $existingContact = Contact::where('nom', $request->input('nom'))
        ->where('prenom', $request->input('prenom'))
        ->exists();
        $existingOrganization = Organisation::where('nom', $request->input('entreprise'))
        ->exists();
        if ($existingContact) {
            return Redirect::back()->with('error', '
            Un contact existe déjà avec le même prénom et le même nom.
            Etes-vous sûr de vouloir ajouter ce contact ?')->withInput();
        }
        if ($existingOrganization) {
            return Redirect::back()->with('error', '
            Un Entreprise existe déjà avec le même nom.
            Etes-vous sûr de vouloir ajouter cet Entreprise ?')->withInput();
        }
        if(!$existingContact && !$existingOrganization){

        $oraganitaion = Organisation::create([
            "nom"=>$request->input('entreprise'),
            "adresse"=>$request->input('adresse'),
            "ville"=>$request->input('ville'),
            "code_postal"=>$request->input('code_postal'),
            "statut"=>$request->input('statut'),
            'cle'=>'ts'
        ]);
        $oraganitaion->contacts()->create([
            "nom"=>$request->input('nom'),
            "prenom"=>$request->input('prenom'),
            "e_mail"=>$request->input('e_mail'),
            'cle'=>'ts',
            'telephone_fixe'=>07777777,
            'service'=>'',
            'fonction'=>'test'
        ]);

     return Redirect::route('home')->with('success', 'Organization and contact added successfully.');
    }

    }
    public function conformStore(Request $request){
       
        $oraganitaion = Organisation::create([
            "nom"=>$request->input('entreprise'),
            "adresse"=>$request->input('adresse'),
            "ville"=>$request->input('ville'),
            "code_postal"=>$request->input('code_postal'),
            "statut"=>$request->input('statut'),
            'cle'=>'ts'
        ]);
        $oraganitaion->contacts()->create([
            "nom"=>$request->input('nom'),
            "prenom"=>$request->input('prenom'),
            "e_mail"=>$request->input('e_mail'),
            'cle'=>'ts',
            'telephone_fixe'=>07777777,
            'service'=>'',
            'fonction'=>'test'
        ]);
        return Redirect::route('home')->with('success', 'Organization and contact added successfully.');
    }


    public function resetError(Request $request){
        $request->session()->put('error', false);

        return Redirect::back();
    }
 
    public function show($id){
        $organization = Organisation::with('contacts')->findOrFail($id);
       
        return Redirect::back()->with('info','information')->with('organization',$organization);
    }

    public function edit($id){
        $organization = Organisation::with('contacts')->findOrFail($id);
        return Redirect::back()->with('update','information')->with('updateOrganitastion',$organization);

    }
    public function update(Request $request ,$id){
      
        
        $validated = $request->validate([
            'nom' => 'required|regex:/^[\p{L}]+$/u|max:255',
            'prenom' => 'required|regex:/^[\p{L}]+$/u|max:255',
            'e_mail' => 'required|email',
            'entreprise' => "regex:/^[\p{L}0-9\s.\'-]+$/u|max:255",
            'code_postal' => 'required|digits_between:1,10',
        ], [
            'nom.required' => 'Le  nom est obligatoire.',
            'nom.regex' => 'Le nom ne peut contenir que des lettres.',
            'prenom.required' => 'Le prénom  est obligatoire.',
            'prenom.regex' => 'Le prénom  ne peut contenir que des lettres.',
            'e_mail.required' => 'L\'e-mail est obligatoire.',
            'e_mail.email' => 'Le format de l\'e-mail est invalide.',
            'entreprise.required' => 'L\'entreprise est obligatoire.',
            'entreprise.regex' => 'L\'entreprise ne peut contenir que des lettres ou des chiffres.',
            'code_postal.required' => 'Le code postal est obligatoire.',
            'code_postal.digits_between' => 'Le code postal ne peut contenir que des chiffres.',
        ]);

        $contact = Contact::findOrFail($id);
        $organization = Organisation::findOrFail($request->input('organisation_id'));
    
        
        $contact->prenom = $request->input('prenom');
        $contact->nom = $request->input('nom');
        $contact->email = $request->input('e_mail');
        $contact->organisation_id = $request->input('organisation_id');
        $contact->save();
    

        
        $organization->nom = $request->input('entreprise');
        $organization->adresse = $request->input('adresse');
        $organization->ville = $request->input('ville');
        $organization->statut = $request->input('statut');
        $organization->code_postal = $request->input('code_postal');
        $organization->save();
        return Redirect::route('home')->with('success', 'les champs ont modifié avec succès.');

    }

    public function delete($id){
        return Redirect::back()->with('delete','information')->with('id',$id);
    }
    public function destroy($id){
        $cantact= Contact::findOrFail($id);
        $cantact->delete();
        return Redirect::route('home')->with('success','le contact supprimé avec succés');
    }

}
