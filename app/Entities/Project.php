<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * Class Project.
 *
 * @package namespace App\Entities;
 */
class Project extends Model 
{
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    use  HasFactory;
    protected $fillable = [
        'owner_id',
        'client_id',
        'nome',
        'description',
        'progress',
        'status',
        'due_date'
    ];
    
}
