<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function users(Request $request)
    {
        $title = $request->query('title', 'User'); // Mengambil title dari query string, jika tidak ada gunakan default
        $user = User::all();
        return view('admin.Users', [
            'user' => $user,
            'title' => $title
        ], compact('user'));
    }

    public function store(Request $request)
    {
        // Validasi data
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8',
            'name' => 'required|string|max:255',
            'gender' => 'required|string|in:L,P',
            'nim' => 'required|size:10|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.User')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Data gagal ditambahkan.');
        }

        // Menyimpan data ke database
        User::create([
            'username' => $request->username,
            'password' => ($request->password),
            'name' => $request->name,
            'gender' => $request->gender,
            'nim' => $request->nim,
            'email' => $request->email,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.Users')->with('success', 'User berhasil ditambahkan');
    }

    public function edit(user $user, Request $request)
    {
        $title = $request->query('title', 'Edit User');
        return view('admin.edit-user', [
            'user' => $user,
            'title' => $title
        ]);
    }

    // public function update(Request $request, User $user)
    // {
    //     // dump($request->all());
    //     // dump($user);


    //     $validateData = $request->validate([
    //         // 'id' => 'unique:users'.$user->id,
    //         'username' => 'required|string|max:255|unique:users'.$user->id,
    //         'password' => 'required|string|min:8',
    //         'name' => 'required|string|max:255',
    //         'gender' => 'required|string|in:L,P',
    //         'nim' => 'required|size:10|unique:users'.$user->id,
    //         'email' => 'required|string|email|max:255|unique:users'.$user->id,
    //     ]);

    //     // Mahasiswa::where('id',$user->id)->update($validateData);

    //     $user->update($validateData);


    //     // return redirect()->route('mahasiswas.show',['mahasiswa' => $user->id])
    //     // ->with('pesan',"Update data {$validateData['nama']} berhasil");
    //     return redirect()->route('admin.Users' ,['user' => $user->id])->with('success', "User {$validateData['name']} berhasil diedit");
    // }

    public function update(Request $request, User $user)
    {
        $validateData = $request->validate([
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'password' => 'required|string|min:8',
            'name' => 'required|string|max:255',
            'gender' => 'required|string|in:L,P',
            'nim' => 'required|size:10|unique:users,nim,' . $user->id,
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        ]);

        $user->update($validateData);

        return redirect()->route('admin.Users')->with('success', "User {$validateData['name']} berhasil diedit");
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.Users')
        ->with('success',"Hapus data $user->name berhasil");
    }

}
