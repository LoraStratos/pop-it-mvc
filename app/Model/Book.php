<?php
namespace Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'title',
        'year_edition',
        'price',
        'annotation',
        'img',
    ];
}