<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index(){
        $tickets = Ticket::all();
        return view('my_tickets',compact('tickets'));
    }

    public function store(Request $reguest){
        $data = new Ticket();
        $data->title = $reguest->title;
        $data->category = $reguest->category;
        $data->priority = $reguest->priority;
        $data->message = $reguest->message;
        $data->created_at = now();
        $data->updated_at = now();
        $data->save();
        return redirect()->to('/my-tickets');
    }
    public function show(Request $request){
        $ticket = Ticket::find($request->id);
        return view('show_ticket',compact('ticket'));
    }
}
