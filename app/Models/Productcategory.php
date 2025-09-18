<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productcategory extends Model
{
    /** @use HasFactory<\Database\Factories\ProductcategogryFactory> */
    use HasFactory;
    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }
}
