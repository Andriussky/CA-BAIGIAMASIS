<?php

namespace App\Managers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AddressesManager
{
    public function createAddress(Request $request): Address
    {
        DB::beginTransaction();

        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make(Str::random(8)),   // random password
        ]);

        $addressArray = $request->all() + ['user_id' => $user->id];

        $address = Address::create($addressArray);

        DB::commit();

        return $address;
    }
}
