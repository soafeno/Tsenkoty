<?php

namespace App\Http\Controllers;
use App\Models\CommandModel;
use DataTables;

use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function commande(Request $request)
    {
        if ($request->ajax()) {
            $data =CommandModel::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
     
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        
        return view('page.commande');
    }
}