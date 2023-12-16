<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogController extends Controller
{
    public function index()
    {
        Log::info('This is an informational message from the LogController.');
        return 'Log example. Check the logs for details.';
    }
}
