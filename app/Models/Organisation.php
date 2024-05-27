<?php

namespace App\Models;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Organisation extends Model
{
    use HasFactory;
    protected $fillable = ['nom',
                            'statut',
                            'ville' ,
                            'code_postal',
                            'adresse',
                            'nom',
                            'cle' ,
                            'deleted_at'
                        ];


                        public function setEntrepriseAttribute($value)
                        {
                            $this->attributes['entreprise'] = ucwords($value);
                        }
                    
                        public function setVilleAttribute($value)
                        {
                            $this->attributes['ville'] = ucwords($value);
                        }
                    
                      
                       

    public function contacts()
    {
        return $this->hasMany(Contact::class,'organisation_id');
    }
}
