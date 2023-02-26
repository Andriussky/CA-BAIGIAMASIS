<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

/**
 * @property int $id
 * @property string $name
 * @property string $path
 * @property string $extension
 * @property string $size
 * @property string $url
 * @property int $model_id
 * @property string $mode_type
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */


class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'path',
        'extension',
        'size',
        'url',
        'model_id',
        'model_type',

    ];
}
