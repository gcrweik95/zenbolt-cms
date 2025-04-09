<?php

namespace Zenbolt\Cms\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Zenbolt\Cms\Models\CmsLog;

class CmsLogsController extends Controller
{
    public function index()
    {
        $rows = CmsLog::get();
        return view('cms::pages/logs/index', compact('rows'));
    }
}
