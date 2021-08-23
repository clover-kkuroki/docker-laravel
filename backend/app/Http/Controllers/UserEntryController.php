<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserEntry;

class UserEntryController extends Controller
{
    function index(){
		$all = UserEntry::all();
	}

	function detail($id){
		$item = UserEntry::find($id);
		return view("user_entry_detail", ["item" => $item]);
	}

}
