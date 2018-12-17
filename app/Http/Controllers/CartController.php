<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SessionCart;

class CartController extends Controller
{
    public $cart;               // $this->cart

    public function __construct() {
        $this->cart = new SessionCart('cart_a');     // create new object (instantiate)
    }

    public function index() {
        echo 'CartController->index()';

        print_r($this->cart->Items());

        die();
    }

    // Route::get('/cart/setamount/{id}/{amount}', 'CartController@setamount');
    public function setamount($id, $amount) {
        $this->cart->SetAmount($id, $amount);

        //return redirect('/cart');
    }

    public function destroy() {
        $this->cart->Destroy();

        echo 'Cart destroyed';
    }

    public function prettyprint($object, $title = '') {
        echo '<pre>';
        echo '<b>' . $title . '</b><br>';
        print_r($object);
        echo '</pre>';
    }
}
