<?php
namespace Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'title',
        'year_edition',
        'price',
        'annotation',
        'id_author',
        'id_type_edition'
    ];

    public function getAuthor(): BelongsTo
    {
        return $this->belongsTo(Author::class, 'id_author');
    }

    public function getEdition(): BelongsTo
    {
        return $this->belongsTo(Edition::class, 'id_type_edition');
    }
    public function issuances(): HasMany
    {
        return $this->hasMany(Issuance::class, 'book');
    }
}