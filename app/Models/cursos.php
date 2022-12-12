<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cursos extends Model
{
    use HasFactory;
    public function professor()
    {
        return $this->belongsToMany(professors::class, 'curso_professors');
    }
}
