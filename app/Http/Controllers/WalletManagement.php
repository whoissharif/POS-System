<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WalletManagement extends Controller
{
    public function newWallet(Request $request){
        $walletNumber = $request->walletNumber;
        $walletType = $request->walletType;
        $walletOwner = $request->walletOwner;

        return [
            "number" => $walletNumber,
            "type" => $walletType,
            "owner" => $walletOwner
        ];
    }
}
