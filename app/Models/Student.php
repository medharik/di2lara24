<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;
    protected $fillable=["nom","prenom","classe_id"];
    /**
     * Get the classe that owns the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * $e->classe->nom
     */
    public function classe(): BelongsTo
    {
        return $this->belongsTo(Classe::class);
    }
}
