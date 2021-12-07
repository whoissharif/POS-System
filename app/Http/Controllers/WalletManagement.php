<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Wallet;

class WalletManagement extends Controller
{
    public function newWallet(Request $request){
        $walletNumber = $request->walletNumber;
        $walletType = $request->walletType;
        $walletOwner = $request->walletOwner;

        $newWallet = new Wallet;

        $newWallet->wallet_number = $walletNumber;
        $newWallet->wallet_type = $walletType;
        $newWallet->wallet_owner = $walletOwner;

        $newWallet->save();

        return $newWallet;
    }

    public function allWallet(){
        $allRecords = Wallet::get();
        return $allRecords;
    }
}
