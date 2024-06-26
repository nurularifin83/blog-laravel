<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }

    public function Profile() 
    {
        $id         = Auth::user()->id;
        $adminData  = User::find($id);
        return view('admin.admin_profile_view', compact('adminData'));
    }

    public function EditProfile() 
    {
        $id         = Auth::user()->id;
        $editData   = User::find($id);
        return view('admin.admin_profile_edit', compact('editData'));
    }

    public function StoreProfile(Request $request) 
    {
        $id     = Auth::user()->id;
        $data   = User::find($id);
        $data->name         = $request->name;
        $data->email        = $request->email;

        if ($request->file('profile_image')) {
            $file = $request->file('profile_image');

            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data['profile_image'] = $filename;

        }
        $data->save();

        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.profile')->with($notification);

    }

    public function ChangePassword() 
    {
        return view('admin.admin_change_password');
    }

    public function UpdatePassword(Request $request)
    {
        $validateData = $request->validate([
            'current_password' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required|same:password'
        ]);

        $hashedPassword = Auth::user()->password;
        if(Hash::check($request->current_password, $hashedPassword))
        {
            $users = User::find(Auth::id());
            $users->password = bcrypt($request->password);
            $users->save();

            session()->flash('message','Password updated successfully');
            return redirect()->back();
        }
        else
        {
            session()->flash('message','Old password do not match our records.');
            return redirect()->back();
        }
    }

}
