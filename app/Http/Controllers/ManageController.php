<?php

namespace App\Http\Controllers;

use App\Models\Regiter_admin;
use App\Models\Manage;
use Illuminate\Http\Request;

class ManageController extends Controller
{


    public function index()
    {
        $data['Manage'] = Manage::orderBy('id', 'asc')->paginate(10);
        return view('Manage', $data);
    }





    public function user()
    {
        $data['Manage'] = Manage::orderBy('id', 'asc')->paginate(10);
        return view('User', $data);
    }






    public function createpost()
    {
        return view('Createpost');
    }


    public function post(Request $request)
    {

        $request->validate([
            'userfristname' => 'required',
            'userlastname' => 'required',
            'useremail' => 'required',
            'post' => 'required'
        ]);

        $datamanage = new Manage;
        $datamanage->userfristname = $request->userfristname;
        $datamanage->userlastname = $request->userlastname;
        $datamanage->useremail = $request->useremail;
        $datamanage->post = $request->post;
        $datamanage->save();

        return redirect()->route('Manager');
    }

    public function delete(Request $request)
    {
        $NewID = $request->id;
        Manage::find($NewID)->delete();

        return redirect()->route('Manager');
    }







    public function edit($id)
    {
        $Manage2 = Manage::find($id);

        return view('Edit', compact('Manage2'));
    }







    public function edit2(Request $request, $id)
    {

        $request->validate([
            'userfristname' => 'required',
            'userlastname' => 'required',
            'useremail' => 'required',
            'post' => 'required'
        ]);

        $datamanage = Manage::find($id);

        $datamanage->userfristname = $request->userfristname;
        $datamanage->userlastname = $request->userlastname;
        $datamanage->useremail = $request->useremail;
        $datamanage->post = $request->post;

        $datamanage->save();

        return redirect()->route('Manager');
    }

    public function register()
    {
        $data['Register'] = Manage::orderBy('id', 'asc')->paginate(10);
        return view('Register', $data);
    }

    public function action_register(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        $dataRegister_admin = new Regiter_admin;
        $dataRegister_admin->email = $request->email;
        $dataRegister_admin->username = $request->username;
        $dataRegister_admin->password = $request->password;
        $dataRegister_admin->save();

        return redirect()->route('Login');
    }




    public function login()
    {
        return view('Login');
    }



    public function actionlogin(Request $request)
    {
        $email = $request->email;

        $password = $request->password;

        $actionlogin = Regiter_admin::where('email', $email)->where('password', $password)->first();


        if ($actionlogin) {
            return redirect()->route('Manager');
        }

        return redirect()->route('Login');
    }



    public function user_admin()
    {
        $data['Manage'] = Manage::orderBy('id', 'asc')->paginate(10);
        return view('User_admin', $data);
    }
}
