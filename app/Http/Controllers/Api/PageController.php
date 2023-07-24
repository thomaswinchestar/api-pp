<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProfileResource;

class PageController extends Controller
{
    public function profile()
    {
       $user = auth()->user();
       $data = new ProfileResource($user);
       return success('message', $data);
    }
}
