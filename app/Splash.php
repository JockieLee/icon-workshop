<?php

namespace App;
use Emadadly\LaravelUuid\Uuids;

/**
 * App\Splash
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $folder
 * @property mixed|null $config
 * @property string|null $user_agent
 * @property string|null $ip
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Splash whereConfig($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Splash whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Splash whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Splash whereFolder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Splash whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Splash whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Splash whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Splash whereUserAgent($value)
 */
class Splash extends BaseModel
{
    use Uuids;

    protected $table = 'splash';

    public $casts = [
        'config' => 'array',
    ];
}
