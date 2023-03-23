<?php

namespace Luchavez\HelloWorld\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Luchavez\StarterKit\Traits\UsesUUIDTrait;

/**
 * Class Blog
 *
 * @author James Carlo Luchavez <jamescarloluchavez@gmail.com>
 */
class Blog extends Model
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
