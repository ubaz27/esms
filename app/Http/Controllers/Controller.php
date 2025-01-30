<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function showIndex()
    {
        $visit = Visit::find(1);
        $visit->view = $visit->view + 1;
        $visit->save();
        return view('welcome');
    }
}
