<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    //name tabel
    protected $table = 'category';

    //filed/kolom yang berada pada tabel categories di databes
    protected $fillable = [
        'category',
        'is_active',
    ];

    public function products(): HasMany {
        return $this->hasMany(product::class);
    }
}
