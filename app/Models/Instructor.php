<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Storage;

class Instructor extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone', 'description', 'photo'];

    public function services(): BelongsToMany {
        return $this->belongsToMany(Service::class, 'instructor_service');
    }

    public function getPhotoAttribute($value) {
        return $value ? Storage::url($value) : null;
    }

    protected function serializeDate(\DateTimeInterface $date) {
        return Carbon::parse($date)->timezone('Asia/Jakarta')->toDateTimeString();
    }
}
