<?php

namespace App\Http\Controllers\Api\v1;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Redirect;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Log;


class CommonController extends Controller
{
  public function get_bank_types()
  {
    return response()->json([        
      0 => '工商银行',
      1 => '建设银行',
      2 => '农业银行',
      3 => '邮政储蓄',
      4 => '招商银行',
      5 => '北京银行',
      6 => '交通银行'
    ]);
  }
}
