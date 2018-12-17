<?php

// for laravel to autoload this class, use correct namespace (if class is in folder /all, namespace = App)
namespace App;

class SessionCart
{
    public $name;

    public function  __construct($new_name)
    {
        $this->name = $new_name;

        // if the session doesn't have an array, then add it to the session
        if (session()->has($this->name) === false ) {
            session()->put($this->name, array());
        }
    }

    public function SetAmount($id, $amount) {
        // remove $id from session (doesn't matter if it exists or not, just remove it)
        $cart = session()->get($this->name);
        unset($cart[$id]);
        session()->put($this->name, $cart);

        // if amount > 0, then add $id=>$amount to session
        if($amount > 0) {
            $old = session()->get($this->name);
            session()->put($this->name, array_add($old, $id, $amount));
        }

        $this->prettyprint('SetAmount(' . $id . ', ' . $amount . ')' );
    }

    public function Items() {
        return session()->get($this->name);
    }

    public function Items_Json() {
        return json_encode(session()->get($this->name));
    }

    public function Destroy() {
        session()->forget($this->name);
    }

    public function prettyprint($title = '') {
        echo '<pre>';
        echo '<b>SessionCart(' . $this->name . '): ' . $title . '</b><br>';
        print_r(session($this->name));
        echo '</pre>';
    }

}