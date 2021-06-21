<?php

namespace App\Http\Controllers;
use Gate;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    //
  public function show($id){
    $account = Account::find($id);
    return view('/show', array('account' => $account));
}

 public function list(){
   return view('/list', array('accounts'=>Account::all()));
}
 public function display()
 {
   $accountsQuery = Account::all();
   if (Gate::denies('displayall')) {
    $accountsQuery=$accountsQuery->where('id', auth()->user()->id);
     }
      return view('/display', array('accounts'=>$accountsQuery));
  }

}
