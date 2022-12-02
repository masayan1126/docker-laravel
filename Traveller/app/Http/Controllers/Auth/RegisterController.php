<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'image_at' => ['file','max:6144','mimes:jpeg,jpg,png,gif,webp']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // このcontrollerは通常vendor側で処理をされるので、Requestは使えない
        // Requestを処理する場合はすべて実装する必要が合える。
        // vendorファイルの場所--> vendor\laravel\ui\auth-backend\RegistersUsers.php

        // dd($data);

        if (array_key_exists('image_at', $data)) {
            // dd($data['image_at']->getClientOriginalName());
            //値がnullかつ空でない時にtrue

            //
            $filename = Str::random(20) . '.' . pathinfo($data['image_at']->getClientOriginalName(), PATHINFO_EXTENSION);
            // image_atがある時の保存
            request()->file('image_at')->storeAs('public/images/user_icon', $filename);

            // dd($filename);
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'image_at' => $filename,
                // 'image_at' => 'user_icon_sample_1.png' ,
            ]);
        } else {
            // image_atがカラの時は、name,email,passwordのみを保存する。
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
        }
    }
}
