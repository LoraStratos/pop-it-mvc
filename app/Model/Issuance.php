<?php
namespace Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issuance extends Model {

    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'librarian',
        'reader',
        'book',
        'date_of_issue',
        'return_date',
        'actual_date',
    ];
}