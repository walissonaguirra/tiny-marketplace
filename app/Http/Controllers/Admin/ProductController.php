<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Página: Painel de controle de produtos.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        /** @var User $user */
        $user = Auth::user();
        $products = $user
            ->product()
            ->orderByDesc('id')
            ->get();

        return view('dashboard', [
            'products' => $products
        ]);
    }

    /**
     * Página: Cadastro de produto
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('components.product-create');
    }

    /**
     * Cadastro do produto
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();
        $user->product()->create([
            'title' => $request->title,
            'price' => $request->price,
            'image' => $request->image
        ]);

        return redirect('dashboard');
    }

    /**
     * Página: Editar informações do produto.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\View\View
     */
    public function edit(Product $product)
    {
        return view('components.product-edit', [
            'product' => $product
        ]);
    }

    /**
     * Atualizar informações do produto.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\View\View
     */
    public function update(Request $request, Product $product)
    {
        $product->update([
            'title' => $request->title,
            'price' => $request->price,
            'image' => $request->image
        ]);

        return redirect('dashboard');
    }

    /**
     * Apagar produto.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back();
    }
}
