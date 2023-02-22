<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use App\Models\Cliente;

class ProviderController extends Controller
{
    public function redirectToProvider($provider)
    {
        // return $provider;
        return Socialite::driver($provider)->redirect();
    }

    public function registro(Request $request, $provider)
    {
        return $request->all();

        $user = User::create([
            'name' => $request->nombre,
            'email' => $request->correo,
            'password' =>crypt($request->pass,'aptoclick') //$request->pass //Hash::make($request->pass)
        ]);

        $cliente = Cliente::create([
            'id_usuario'  => $user->id,
            'nombres' =>  $request->nombre,
            'primerApellido' => $request->apellidos
        ]);

        return $this->authAndRedirect1($user);        
    }

    public function entrar(Request $request, $provider){
        $hashed = crypt($request->Inpassword,'aptoclick');

        $var =  Hash::make($request->pass);
        //return (Hash::check($request->pass, $var));
        
        
        if ($user = User::where('email', $request->Inemail)->first()) { 
            if ($user = User::where('password', $hashed)->first()) { //Hash::check($pw, $hashed); //
                return $this->authAndRedirect2($user);
            }else{
                session()->flash('Error','Credenciales invalidas');
                return redirect()->route('inicio');
            }
        }else{
            session()->flash('Error','Credenciales invalidas');
            return redirect()->route('inicio');
        }
    }


    public function handleProviderCallback($provider)
    {
        // Obtenemos los datos del usuario
        $social_user = Socialite::driver($provider)->user(); 
        // dd($social_user);

        // Comprobamos si el usuario ya existe
       if ($user = User::where('email', $social_user->email)->first()) { 
    		
        // dd($social_user);
        if ($user->avatar != $social_user->getAvatar()) {
            $avatar = User::where('email', $social_user->email)->update(['avatar' => $social_user->getAvatar()]);
        }

        // return $social_user['given_name'];
        return $this->authAndRedirect1($user); // Login y redirección

  		} else {

            // dd($social_user);
            // add user to database
            if ($social_user->getName()==null) {
                $social_user->name = $social_user->nickname;
            } 
                // En caso de que no exista creamos un nuevo usuario con sus datos.
            $user = User::create([
                'name' => $social_user->getName(),
                'email' => $social_user->getEmail(),
                'password' => Hash::make(Str::random(40)),
                'provider' => $provider,
                'id_provider' => $social_user->getId(),
                'avatar' => $social_user->getAvatar()
            ]);
            
            $cliente = Cliente::create([
                'id_usuario'  => $user->id,
                'nombres' => $social_user['given_name'],
                'primerApellido' => $social_user['family_name']
            ]);

            return $this->authAndRedirect2($user); // Login y redirección
        }
    }
    
    // Login y redirección
    public function authAndRedirect1($user)
    {
        Auth::login($user);
        // return $user;
        return redirect()->route('profile.user', Auth::user()->id);
        
    }
    
    public function authAndRedirect2($user)
    {
        Auth::login($user);
        // return $user;
        return redirect()->route('precalificate.paso1', 0);
    }
}
