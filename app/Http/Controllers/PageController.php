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
                $tickets = DB::table('tickets')
                            ->select('*')
                            ->where('page_id','=',$pages[0]->pageid)
                            ->orderby('date_added','desc')
                            ->get();

                return view('page',['page' => $pages ,'tickets' => $tickets]);
            }else{
                //insert new page
                $ins = DB::insert('insert into pages (name) values ("'.$page.'")');
                if($ins)
                    return view('page',['page' => 'page']);
            }
    }
}
