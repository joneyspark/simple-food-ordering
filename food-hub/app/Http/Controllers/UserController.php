<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function users()
    {
        $users = User::where('type', 'employee')->orderBy('name', 'asc')->get();
        return view('layouts.employee.employees', compact('users'));
    }
    public function add_employee()
    {
        return view('layouts.employee.add-employee');
    }
    public function new_employee(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['nullable', 'numeric', 'min:11',],
            'photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'position' => ['required', 'string', 'max:255'],
            'password' => ['required', 'min:6', 'max:25', 'confirmed', Rules\Password::defaults()],
        ]);

        $imageName = time() . '.' . $request->photo->extension();

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'photo' => $imageName,
            'position' => $request->position,
            'password' => Hash::make($request->password),
        ]);

        $request->photo->move(public_path('assets/images'), $imageName);

        return redirect('users')->with('message', 'Employee Added Successfully!');
    }

    public function edit_user($id)
    {
        $user = User::find($id);
        return view('layouts.employee.edit-employee', compact('user'));
    }

    public function update_employee(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $id],
            'phone' => ['nullable', 'numeric', 'min:11', 'unique:users,phone,' . $id],
            'photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'password' => ['nullable', 'max:25', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = new User();

        $user = User::find($id);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'position' => $request->position,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
        ];

        if (request()->hasFile('photo') && request('photo') != '') {
            $imagePath = public_path('assets/images/' . $user->photo);
            if ($user->photo && File::exists($imagePath)) {
                unlink($imagePath);
            }
            $imageName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('assets/images'), $imageName);
            $data['photo'] = $imageName;
            $user->update($data);
        } else {
            $user->update($data);
        }

        return redirect('users')->with('message', 'Employee Updated Successfully!');
    }

    public function delete_employee($id)
    {
        $user = User::find($id);

        $imagePath = public_path('assets/images/' . $user->photo);
        if (File::exists($imagePath) && $user->photo) {
            unlink($imagePath);
        }
        $user->delete();
        return redirect('users')->with('message', 'Employee Deleted Successfully!');
    }
}
