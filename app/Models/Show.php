<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'description',
        'poster_id',
        'location_id',
        'bookable',
        'price',
    ];

    /**
     * The table associated with the model
     * 
     * @var string
     */
    protected $table = 'shows';

    /**
     * Indicates if the model should be timestamped
     * 
     * @var bool
     */
    public $timestamps = true;

    /**
     * Get the main location of the show
     */
    public function location(){
        return $this->belongsTo('App\Location');
    }

    


}