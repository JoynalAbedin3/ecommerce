<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
         return view('backend.home');
    }

    function addCategory(){
        return view('backend.addCategory');
   }

   function storeCategory(Request $req){
     
     $category = new Category();
     $category->createCategory($req);
     return redirect('addCategory');
        
     }

     


}
