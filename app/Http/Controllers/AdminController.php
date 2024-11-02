<?php

namespace App\Http\Controllers;

use App\Models\Tactic;
use App\Models\Formation;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function seeUsers()
    {
        if(Auth::user()->role !== 'admin') {
            return redirect(route('tactics.index'));
        }

        $users = User::all();
        return view('admin-window', compact('users'));
    }

    public function toggleUser(User $user)
    {
        if(Auth::user()->role !== 'admin') {
            return redirect(route('tactics.index'));
        }

        $user->active = !$user->active;

        $user->save();

        $tactics = Tactic::all();

        foreach ($tactics as $tactic) {
            if ($tactic->user_id === $user->id) {
                $tactic-> active = !$tactic->active;
                $tactic->save();
            }
        }

        return redirect()->back();
    }
}
