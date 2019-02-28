<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{

    use Notifiable;

    protected $table = 'admins';

    protected $fillable = [
        'username', 'password','role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'password', 'remember_token',
    ];

    // Specify Slack Webhook URL to route notifications to
    public function routeNotificationForSlack() {
        return 'https://hooks.slack.com/services/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';
    }
}
