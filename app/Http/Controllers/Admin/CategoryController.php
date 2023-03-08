<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function create(CategoryRequest $request)
    {
        return $request;
    }

    public function update(CategoryRequest $request)
    {
        return $request;
    }
}
