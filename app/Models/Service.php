<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'name', 'description'];

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function instructors(): BelongsToMany {
        return $this->belongsToMany(Instructor::class, 'instructor_service');
    }
}
