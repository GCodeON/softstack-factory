<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Resource
 *
 * @property int $id
 * @property string $title
 * @property string $type
 * @property string $url
 * @property string $category
 * @property string $thumbnail
 * @property string $resource
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Resource whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Resource whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Resource whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Resource whereResource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Resource whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Resource whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Resource whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Resource whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Resource whereUrl($value)
 * @mixin \Eloquent
 */
class Resource extends Model
{
    //
}
