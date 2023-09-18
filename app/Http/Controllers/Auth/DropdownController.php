<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Http\Request;
use App\Models\Judete;
use Illuminate\View\View;
  
class DropdownController extends Controller
{
    /**
     * Write code on Method
     *
     */
    public function index(): View
    {
        $data['judete'] = Judete::get(["name", "id"]);
        return view('dropdown')->with($data);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
}