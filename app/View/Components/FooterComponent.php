<?php

namespace App\View\Components;
use App\Product;

use Illuminate\View\Component;

class FooterComponent extends Component
{
    public $products;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->categories = Category::has('products')->get();
        $this->products = Product::inRandomOrder()->take(9)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.footer-component');
    }
}
