<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConversationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Auth::user();
        return $user->conversations()->paginate();
    }

    public function create()
    {
        //
    }

    public function addParticipents(Request $request, Conversation $conversation)
    {
        $request->validate([
            "user_id" => "required|integer|exists:users,id",
        ]);
        $conversation->participants()->attach($request->post("user_id"),['joined_at'=>Carbon::now()]);
        return $conversation;
    }

    public function show(Conversation $conversation)
    {
        return $conversation->load("participants");
    }

    public function removeParticipents(Request $request,Conversation $conversation)
    {
        $request->validate([
            "user_id" => "required|integer|exists:users,id",
        ]);
        $conversation->participants()->detach($request->post("user_id"));
        return $conversation;
    }

    public function update(Request $request, Conversation $conversation)
    {
        //
    }

    public function destroy(Conversation $conversation)
    {
        //
    }
}
