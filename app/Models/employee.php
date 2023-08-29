<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class employee extends Model
{
    use HasFactory;

    protected $fillable = ['name','matr','jobP','jobR','observ','equipe','image'];

    public function absences(): HasMany {

        return $this->hasMany(Absence::class);
    }
}
