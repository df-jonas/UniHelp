<?php

namespace App\Http\Controllers\Auth;

use App\Campus;
use App\Fos;
use App\Notifications\UserRegister;
use App\Preference;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Intervention\Image\Facades\Image;

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
    protected $redirectTo = '/p/sharing';

    public function showRegistrationForm()
    {
        $params = [
            'campuses' => Campus::query()->orderBy("name")->get(),
            'foses' => Fos::query()->orderBy("name")->get(),
        ];
        return view('auth.register', $params);
    }

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
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'avatar' => 'image|max:10240',
            'first_name' => 'required|string|max:191',
            'last_name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users',
            'password' => 'required|string|min:8|confirmed|max:191',
            'campus' => 'required|numeric',
            'fos' => 'required|numeric',
            'tnc' => 'required'
        ]);
    }

    protected function registered(Request $request, $user)
    {
        if ($request->wantsJson()) {
            return $user;
        }
        return redirect($this->redirectPath());
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $img_name = "empty.png";

        if (isset($data['avatar'])) {
            $img = $data['avatar'];
            $img_name = time() . '_' . $img->getClientOriginalName();
            $img_location = public_path('/img/avatars/' . $img_name);

            Image::make($img)->resize(256, 256, function ($image) {
                $image->aspectRatio();
                $image->upsize();
            })->save($img_location);
        }

        $pref = new Preference();
        $pref->theme = "default";
        $pref->lang = "nl";
        $pref->comment = true;
        $pref->likes = true;
        $pref->tutoring = true;
        $pref->account = true;
        $pref->save();

        $user = new User();
        $user->image= $img_name;
        $user->first_name= $data['first_name'];
        $user->last_name= $data['last_name'];
        $user->email= $data['email'];
        $user->api_token=SecurityFactory::generateApiToken();
        $user->password= bcrypt($data['password']);
        $user->campusid= $data['campus'];
        $user->fosid=  $data['fos'];
        $user->preference_id = $pref->id;
        $user->save();

        //user mail na register
        $user->notify(new UserRegister($user));
        return $user;
    }
}
