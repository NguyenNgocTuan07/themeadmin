<?php

namespace Tuannguyen\Demo\Http\Controllers;

use App\Http\Controllers\Controller;
use Tuannguyen\Demo\Models\Demo;

class DemoController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {
        Demo::create(['name' => 'Demo ' . time()]);
        return view('tuannguyen-demo::index');
    }
}
