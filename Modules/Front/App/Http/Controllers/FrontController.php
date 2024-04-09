<?php

namespace Modules\Front\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use Modules\Front\App\Models\Banner;
use Modules\Front\App\Models\Card;
use Modules\Front\App\Models\ImageSlider;
use Modules\Front\App\Models\Menu;
use Modules\Front\App\Models\Product;
use Modules\Front\App\Models\ProductPrice;
use Modules\Front\App\Models\SubMenu;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::all();
        $menus_slid = Menu::whereMode(2)->get();
        $products = Product::latest('id')->take(10)->get();
        $images_slider = ImageSlider::all();
        $banner = Banner::query();
        return view('front::index', ['menus' => $menus, 'menus_slid' => $menus_slid, 'products'=>$products, 'images'=>$images_slider, 'banner' => $banner]);
    }

    public function viewProduct(Product $product)
    {
        $menus = Menu::all();
        $menus_slid = Menu::whereMode(2)->get();
        return view('front::show_product', ['menus' => $menus, 'menus_slid' => $menus_slid, 'product' => $product]);
    }

    public function saveVote($product_id, Request $request, Product $product)
    {
        if (!$product->hasVote()) {

            $product->saveVote($request->number);

            $product->find($product_id)->increment('popularity', $request->number);

        }
    }

    public function sendCardProduct(Request $request, Card $card)
    {

        try {

            $card->addCard(auth()->user()->id, $request->product_id);

        } catch(\Exception $e) {

            return false;

        }

    }

    public function getDataMenu(Request $request)
    {
        $menus = SubMenu::whereMenu_id($request->id)->get();

        return $menus;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('front::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('front::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('front::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
