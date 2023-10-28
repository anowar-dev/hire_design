<?php

namespace App\Http\Controllers\customAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\CustomAuthModel;

class CustomAuthController extends Controller
{
    //
    public function customRegistrationView()
    {
        return view('pages.backend.customAuth.registration');
    }

    public function customUserCredentialInfo()
    {
        $userCredential = CustomAuthModel::all();
        $userId = Session::get('userid');

        if($userId == 1)
        {
            return view('pages.backend.customAuth.index', compact('userCredential', 'userId'));
        }
    }

    public function customRegistrationCreate(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:custom_auth_users',
            'pass' => 'required|min:6',
        ]);

        $data = new CustomAuthModel();
        $data->name = $req->name;
        $data->email = $req->email;
        $data->password = Crypt::encrypt($req->pass);

        $data->save();

        Session::put('useremail', $req->email);
        Session::put('userpass', $req->pass);
        Session::put('userid', $data->id);

        return redirect('/custom-auth-user/view')->withSuccess('You have signed-in');
    }

    public function customLoginView()
    {
        return view('pages.backend.customAuth.login');
    }


    public function customLoginCreate(Request $req)
    {
        $user = CustomAuthModel::where('email', $req->email)->first();
        //dd($user);
        if ($user && $req->pass == Crypt::decrypt($user->password)) {

            Session::put('useremail', $req->email);
            Session::put('userpass', $req->pass);
            Session::put('userid', $user->id);

            return redirect('/student-admit/view');
        } else {

            return redirect('/innovativeskills/login');
        }
    }

    public function customLogout(Request $req)
    {
        if (Session::has('useremail') && Session::has('userpass')) {
            Session::flush();
            return redirect('/');
        }
    }


    public function customLoginRegistEditView($id)
    {
        $userCredential = CustomAuthModel::findOrFail($id);

        return view('pages.backend.customAuth.edit', compact('userCredential'));
    }

    public function customLoginRegistEditUpdate($id, Request $req)
    {
        $userCredential = CustomAuthModel::findOrFail($id);

        $userCredential->name = $req->userName;
        $userCredential->email = $req->userEmail;
        $userCredential->password = Crypt::encrypt($req->userPassword);

        $userCredential->save();

        return redirect('innovativeskills/login');
    }


    public function customLoginRegistDelete($id)
    {
        $userCredential = CustomAuthModel::findOrFail($id);

        $userCredential->delete();

        return redirect('/custom-auth-user/view');
    }
}