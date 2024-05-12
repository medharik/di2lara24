<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    use HasFactory;
    protected $fillable=['nom','prenom','salaire','departement_id'];
    /**
     * Get the departement that owns the Employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * $ali->departement->nom
     */
    public function departement(): BelongsTo
    {
        return $this->belongsTo(Departement::class);
    }

}
