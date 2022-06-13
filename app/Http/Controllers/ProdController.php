<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdModel; 
use DataTables;


class ProdController extends Controller
{
    public function tsena(Request $request)
    {
        if ($request->ajax()) {
            $data =ProdModel::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
     
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        
        return view('page.tsena');
    }
    public function nouveau($id=null){
        $data = array('data'=>null);  
        if($id){
            $data = ['data'=>ProdModel::where(['id'=>$id])->get()->first()];
        }
        return view('page.ajoutproduit')->with($data);
    }
public function ajoutArticle(Request $request){
        $ProdModel = new ProdModel();
         $ProdModel->titre=$request->titre;
         $ProdModel->designation=$request->designation;
         $ProdModel->description=$request->description;
         $ProdModel->prix=$request->prix;
         $ProdModel->save();
        return redirect()->back()->with('message',"insertion éffectué avec succé ");
    }
    public function supprimerArticle($id){
        ProdModel::where(['id'=>$id])->delete();
        return redirect()->back()->with('message',"Article supprimé avec succés!");
     }
     public function ModifierArticle($id,Request $request){
        ProdModel::where(['id'=>$id])->update($request->except('_token'));
         return redirect()->back()->with('message',"Article modifié avec succés!");
     }
}