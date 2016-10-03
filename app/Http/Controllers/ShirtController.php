<?php
  
namespace App\Http\Controllers;
  
use App\Shirt;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
  
  
class ShirtController extends Controller{
  
public function index(){
  
        $Shirts  = Shirt::latest()->paginate(5);;
        return response()->json($Shirts);
  
    }
public function getShirt($id){
  
        $Shirt  = Shirt::find($id);
        return response()->json($Shirt);

    }

 public function createShirt(Request $request){
  
        $Shirt = Shirt::create($request->all());
        return response()->json($Shirt);
  
    }

 public function deleteShirt($id){
        $Shirt  = Shirt::find($id);
        $Shirt->delete();
        return response()->json('deleted');
    }

 public function updateShirt(Request $request,$id){
        $Shirt  = Shirt::find($id);
        $Shirt->label = $request->input('label');
        $Shirt->distribution = $request->input('distribution');
        $Shirt->date = $request->input('date');
        $Shirt->save();
        return response()->json($Shirt);
    }
 
}
?>