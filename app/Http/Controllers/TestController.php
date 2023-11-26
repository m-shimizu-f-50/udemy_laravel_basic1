<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        dd('test');

        $values = Test::all();

        $count = Test::count();

        $first = Test::findOrFail(1);

        $whereBBB = Test::where('text','=','bbb')->get();

        //クエリビルダー
        $queryBuilder = DB::table('tests')->where('text','=','BBB')
        ->select('id','text')
        ->get();

        dd($queryBuilder );
        return view('tests.test', compact('values'));
    }
}
