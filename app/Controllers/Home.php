<?php

namespace App\Controllers;

use App\Models\ProductModel; 

class Home extends BaseController
{
    protected $productModel;

    function __construct(){
        helper(['number', 'form']);
        $this->productModel = new ProductModel();
    }

    public function index(): string
    {
        $products = $this->productModel->findAll();
        $data['products'] = $products;

        return view('v_home', $data);
    }

    function produk()
    {
        return view('v_produk');
    }

    function keranjang()
    {
        return view('v_keranjang');
    }
}
