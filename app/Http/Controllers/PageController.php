<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function showPages($page){

            $pages = DB::select('select * from pages where name = ?', [$page]);
            if(sizeof($pages) > 0){
                $tickets = DB::select('select * from tickets where page_id = ?', [$pages[0]['pageid']]);             
                return view('page',['page' => json_encode($pages)]);
            }else{
                return view('page',['page' => $page]);
            }
    }
}
