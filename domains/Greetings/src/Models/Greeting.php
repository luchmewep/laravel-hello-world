<?php

namespace Luchavez\HelloWorld\Domains\Greetings\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Luchavez\StarterKit\Traits\UsesUUIDTrait;

/**
 * Class Greeting
 *
 * @author James Carlo Luchavez <jamescarloluchavez@gmail.com>
 */
class Greeting extends Model
{
    use UsesUUIDTrait, SoftDeletes;

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'uuid';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // write here...
        'deleted_at',
    ];

    /***** RELATIONSHIPS *****/

    //

    /***** SCOPES *****/

    //

    /***** ACCESSORS & MUTATORS *****/

    //

    /***** OTHER METHODS *****/

    //
}
