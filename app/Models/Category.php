<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function services(): HasMany {
        return $this->hasMany(Service::class, 'category_id');
    }

    protected function serializeDate(\DateTimeInterface $date) {
        return Carbon::parse($date)->timezone('Asia/Jakarta')->toDateTimeString();
    }
}
