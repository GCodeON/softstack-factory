<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Support
 *
 * @property int $id
 * @property string|null $fullname
 * @property string|null $zip
 * @property string|null $message
 * @property string|null $published_at
 * @property string|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Support whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Support whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Support whereFullname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Support whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Support whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Support wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Support whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Support whereZip($value)
 * @mixin \Eloquent
 */
class Support extends Model
{
}
