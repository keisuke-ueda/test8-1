<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;

class EntriesController extends Controller
{
    //
    public function index(){
        $table = Entry::all();
        var_dump($table);
    }
}