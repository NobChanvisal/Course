<?php

namespace App\Http\Controllers;

use App\Models\Authors;
use Illuminate\Http\Request;

use function Pest\Laravel\json;

class AuthorsController extends Controller
{
    //
    public function index(){
        $authors = Authors::all();
        // dd($authors);

        return response()->json($authors);
    }
}
