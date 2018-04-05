<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Car
 *
 * @property int $id
 * @property string $Make
 * @property string $Model
 * @property int $Year
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereMake($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereYear($value)
 * @mixin \Eloquent
 */
class Car extends Model
{
    //
}
