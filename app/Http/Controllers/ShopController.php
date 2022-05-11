<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Página: Listagem de produtos do usuário
     *
     * @param User $user
     * @return \Illuminate\View\View
     */
    public function index(User $user)
    {
        $products = $user
            ->product()
            ->orderByDesc('id')
            ->get();

        return view('shop', [
            'user' => $user,
            'products' => $products
        ]);
    }
}
