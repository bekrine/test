<?php

namespace App\Models;

use App\Models\Organisation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['e_mail', 'cle','updated_at','deleted_at',
                                'nom', 
                                'prenom', 
                                'telephone_fixe', 
                                'service', 
                                'fonction', 'organisation_id'];
    public function organisation()
    {
        return $this->belongsTo(Organisation::class,'organisation_id');
        
    }

    
    public function setPrenomAttribute($value)
    {
        $this->attributes['prenom'] = ucwords($value);
    }

    public function setNomAttribute($value)
    {
        $this->attributes['nom'] = ucwords($value);
    }

    public function setEmailAttribute($value)
                        {
                            $this->attributes['e_mail'] = strtolower($value);
                        }
}
