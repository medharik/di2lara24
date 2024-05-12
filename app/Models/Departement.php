<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Departement extends Model
{

    use HasFactory;

protected $fillable=['nom','effectif'];
/**
 * Get all of the employees for the Departement
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
public function employees(): HasMany
{
    return $this->hasMany(Employee::class);
}

}
