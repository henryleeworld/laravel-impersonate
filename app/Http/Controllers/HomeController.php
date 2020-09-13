<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        echo '目前登入者姓名：' . Auth::user()->name . PHP_EOL;
        $otherUserId = 2;
        Auth::user()->impersonate(User::findOrFail($otherUserId));
        echo '切換使用者為：' . Auth::user()->name . PHP_EOL;
        Auth::user()->leaveImpersonation();
        echo '停止切換使用者。' . PHP_EOL;
        echo '目前登入者姓名：' . Auth::user()->name . PHP_EOL;
    }
}
