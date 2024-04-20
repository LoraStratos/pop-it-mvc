<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reader extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'surname',
        'name',
        'patronymic',
        'address',
        'number',
    ];

    public function issuances(): HasMany
    {
        return $this->hasMany(Issuance::class, 'reader');
    }
}