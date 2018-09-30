<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Category;
use App\Location;
use App\Post;
use App\Qualification;
use App\Experience;
use App\Myjob;
use App\notifications;

class notifications extends Model
{
       protected $fillable=[

       'user_id', 'location','name', 'category','post','qualification','email','mobile_no',

    ];
}
