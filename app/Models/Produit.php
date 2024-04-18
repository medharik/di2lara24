<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    static    function calculer_ttc($tht)
    {
        $ttc = $tht * 1.20;
        return $ttc;
    }
}
