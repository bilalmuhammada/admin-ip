<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admins.list')->with(['menu' => 'admins']);
    }

    public function all()
    {
        $users = User::where('role_id','1')->latest()->get();
        if ($users->isNotEmpty()) {
            return response()->json([
                'status' => true,
                'message' => '',
                'data' => $users
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'No Record Found'
        ]);
    }

    public function changeStatus(Request $request)
    {
        if (!empty($request->status)) {
            $user = User::find($request->admin_id);
            $user->status = '0';
            if ($request->status == 'on') {
                $user->status = '1';
            }
            $user->save();
            return response()->json([
                'status' => true,
                'message' => 'Status updated successfully!',
                're' => $request->all()
            ]);
        }
        return response()->json([
            'status' => false,
            'message' => 'Invalid request'
        ]);
    }
}