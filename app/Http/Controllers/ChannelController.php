<?php

namespace App\Http\Controllers;

use App\Events\PublicEvent;
use Illuminate\Http\Request;

class ChannelController extends Controller
{
    public function index()
    {
        event(new PublicEvent('salam ail'));
        return "ok";
    }
}
