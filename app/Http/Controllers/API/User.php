<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class User extends Controller
{
    public function get()
    {
        $a = DB::table('users')
            ->get();
        return  $a;
    }

    public function store(Request $request)
    {
        DB::table('test')->insert([
            'name' => $request->name,
            'phone' => $request->phone,
        ]);
        return 'success';
    }

    public function delete($id)
    {
        return DB::table('users')->delete($id);
    }
}
