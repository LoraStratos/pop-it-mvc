<?php
namespace Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edition extends Model {

    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'type_edition',
    ];

    protected $primaryKey = 'id_type_edition';
}