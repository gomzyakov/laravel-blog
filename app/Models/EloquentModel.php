<?php

declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * @method static Model|Builder create($attributes = [])
 * @method static Builder       insert(array $values)
 * @method static Builder       find($id, $columns = ['*'])
 * @method static Builder       firstOrCreate(array $attributes, array $values = [])
 * @method static Builder       firstOrNew(array $attributes, array $values = [])
 * @method static Builder       findOrFail($id, $columns = ['*'])
 * @method static Builder       inRandomOrder($seed = '')
 * @method static Builder       where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static Builder       orderBy($column, $direction = 'asc')
 * @method static Builder       forPage($page, $perPage = 15)
 * @method static Builder       truncate()
 * @method static Builder       whereIn($column, $values)
 * @method static Builder       with(...$relations)
 */
class EloquentModel extends Model
{
    //
}
