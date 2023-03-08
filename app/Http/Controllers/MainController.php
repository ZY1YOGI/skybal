<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(): View
    {
        return view('home');
    }


    public function categories(): View
    {
        return view('category.index');
    }

    public function category($slug): View
    {
        $category = [
            "slug" => $slug, "name" => $slug, "image" => 'resources/image/category/4.png', "description" => "Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim."
        ];

        return view('category.show', compact('category'));
    }

    public function product(Request $request, $slug): View
    {
        $product = [
            "slug" => $slug, "name" => "XPrinter", "model" => "850Mq", "image" => 'resources/image/products/1.jpeg', "description" => "Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim officiis neque suscipit non officia eaque itaque enim."
        ];

        return view('products.product', compact('product'));
    }
}
