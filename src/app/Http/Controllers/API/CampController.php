<?php
namespace App\Http\Controllers\API;


use Auth;
use App\Http\Controllers\Controller;
use App\Models\Camp;
use App\Models\Category;

class CampController extends Controller {

  public function index()
  {
      $camps = Camp::all();

      $jsonCamps =  $camps->toJson();
      return $jsonCamps;  
     
  }

  // this could be used to get more information about a single camp
  public function single($id) 
  {
    $camp = Camp::find($id);
    $jsonCamp =  $camp->toJson();
      return $jsonCamp;
   
  }

}