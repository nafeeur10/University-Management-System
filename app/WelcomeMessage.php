<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WelcomeMessage extends Model
{
    protected $fillable = ['welcome_message_title', 'welcome_message_title_arabic', 'welcome_description', 'welcome_description_arabic', 'welcome_signature'];
}
