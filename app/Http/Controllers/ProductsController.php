<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProductRepository;

class ProductsController extends Controller
{
    protected $products;

    public function __construct()
    {
        parent::__construct();

        $this->products = app(ProductRepository::class);
    }
    public function index(Request $request)
    {
        $products = $this->products->all();

        foreach($products as $product)
        {
            dd($product);
        }
    }
}
