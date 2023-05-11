<?php

namespace App\Http\Controllers\Contributor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Contributor\ProfileUpdateRequest;
use Symfony\Component\HttpKernel\Profiler\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        return view('contributor.auth.profile');
    }

    public function update(Request $request)
    {
        $user = auth()->guard('contributor')->user();


        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:255',
            'age' => 'nullable|numeric',
            'address' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->age = $request->input('age');
        $user->address = $request->input('address');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $user->image = $imageName;
        }

        if ($request->filled('password')) {
            $request->validate([
                'password' => 'required|string|min:8|confirmed',
            ]);
            $user->password = bcrypt($request->input('password'));
        }

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}
