<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('user.create');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        /* $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'maternal' => ['required', 'string', 'max:255'],
            'paternal' => ['required', 'string', 'max:255'],
            'ci' => ['required', 'int', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'number', 'max:255'],
            'date' => ['required', 'date', 'max:255'],
            //'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
 
        $user = User::create([
            'name' => $request->name,
            'email' => $request->name,
            'maternal' => $request->maternal,
            'paternal' => $request->paternal,
            'ci' => $request->ci,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'date' => $request->date,
            'password' => $request->ci,
        ]);
*/
       // event(new Registered($user));

        /* Auth::login($user); */

      
        
    }
}
