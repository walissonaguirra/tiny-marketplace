<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Página: formulario para editar dados do usuário logado.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        return view('components.user-edit', [
            'user' => Auth::user()
        ]);
    }

    /**
     * Atualiza dados do usuário logado.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
          /** @var User $user */
          $user = Auth::user();
          $user->update([
              'name' => $request->name,
              'email' => $request->email,
              'desc' => $request->desc,
              'cellphone' => $request->cellphone,
          ]);

          return redirect('dashboard');
    }

    /**
     * Apagar conta do usuário atual.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy()
    {
         /** @var User $user */
         $user = Auth::user();
         $user->delete();

         return redirect('dashboard');
    }
}
