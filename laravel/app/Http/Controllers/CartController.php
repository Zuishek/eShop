<?php

namespace App\Http\Controllers;
use App\Cart;
use App\Cartitem;
use App\Product;
use App\Purchase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth');
    }
    public function addItem($productId) {
        $cart = Cart::where('user_id', Auth::user()->id)->first();

        if(!$cart) {
            $cart = new Cart();
            $cart->user_id=Auth::user()->id;
            $cart->save();
        }

        $cartItem = new Cartitem();
        $cartItem->product_id=$productId;
        $cartItem->cart_id= $cart->id;
        $cartItem->save();

        return redirect('/cart');
    }

    public function showCart() {
        $cart = Cart::where('user_id', Auth::user()->id)->first();

        if(!$cart) {
            $cart = new Cart();
            $cart->user_id=Auth::user()->id;
            $cart->save();
        }

          $items = $cart->cartItems;
        $total=0;
        foreach($items as $item){
          $total+=$item['product']['price'];
        }
 
        return view('cart.view',['items'=>$items, 'total'=>$total]);
    }
    
    public function removeItem($id) {
        CartItem::destroy($id);
        return redirect('/cart');
    }

    public function checkout() {
        $cart = Cart::where('user_id', Auth::user()->id)->first();
        $items = $cart->cartItems;

        foreach($items as $item) {
           CartItem::destroy($item->id);
           $productID = $item['product_id'];
           $product = Product::where('id',$productID)->first();
           $newStock = $product->stock;
           $newStock -=1;
           Product::where('id',$productID)->update(['stock'=>$newStock]);

           $purchase = new Purchase();
           $purchase->user_id = Auth::user()->id;
           $purchase->product_id = $productID;
           $purchase->save();
           
        }
        
        $products = Product::all();
        return view('main.index',['products'=>$products]);
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
