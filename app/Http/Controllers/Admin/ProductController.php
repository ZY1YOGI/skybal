<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;


class ProductController extends Controller
{
    public function create(ProductRequest $request)
    {
        return $request;
    }

    public function update(ProductRequest $request)
    {
        return $request;
    }
}
