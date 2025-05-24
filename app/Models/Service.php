<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description'];

    public function instructors(): BelongsToMany {
        return $this->belongsToMany(Instructor::class, 'instructor_service');
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }

    protected function serializeDate(\DateTimeInterface $date) {
        return Carbon::parse($date)->timezone('Asia/Jakarta')->toDateTimeString();
    }
}
