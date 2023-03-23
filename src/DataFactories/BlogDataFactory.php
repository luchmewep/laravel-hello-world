<?php

namespace Luchavez\HelloWorld\DataFactories;

use Illuminate\Database\Eloquent\Builder;
use Luchavez\StarterKit\Abstracts\BaseDataFactory;
// Model
use Luchavez\HelloWorld\Models\Blog;

/**
 * Class BlogDataFactory
 *
 * @author James Carlo Luchavez <jamescarloluchavez@gmail.com>
 */
class BlogDataFactory extends BaseDataFactory
{
//    /**
//     * @var string
//     */
//    public string $name;

    /**
     * @return Builder
     * @example User::query()
     */
    public function getBuilder(): Builder
    {
        return Blog::query();
    }

    /***** FROM BASEDATAFACTORY *****/

    /**
     * To avoid duplicate entries on database, checking if the model already exists by its unique keys is a must.
     *
     * @return array
     */
    public function getUniqueKeys(): array
    {
        return [
            //
        ];
    }

    /**
     * This is to avoid merging incorrect fields to Eloquent model. This is used on `mergeFieldsToModel()`.
     *
     * @return array
     */
    public function getExceptKeys(): array
    {
        return [
            //
        ];
    }

    /***** FROM BASEJSONSERIALIZABLE *****/

    /**
     * @return array
     */
    public function getFieldAliases(): array
    {
        return [];
    }
}
