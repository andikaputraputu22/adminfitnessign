<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index() {
        $clients = User::where('is_admin', false)->get();
        return view('clients.index', [
            'title' => 'Clients',
            'clients' => $clients
        ]);
    }

    public function detail($id) {
        $client = User::findOrFail($id);
        return view('clients.detail', [
            'title' => 'Detail Client',
            'client' => $client
        ]);
    }

    public function delete($id) {
        User::find($id)->delete();
        return redirect()->back()->with('success', 'Client has been deleted!');
    }
}
