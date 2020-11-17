<?php
namespace App\Http\Controllers;
use App\BankJago;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function index()
   {
      $bankjago = BankJago::all();

      if ($bankjago) {
         $data['code'] = 200;
         $data['data_found'] = count($bankjago);
         $data['result'] = $bankjago;
      } else {
         $data['code'] = 500;
         $data['status_msg'] = 'Error';
      }
      return response()->json($data);
   }
}