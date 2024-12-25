<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Hash;

class UsersImport implements ToModel, WIthHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // return new User([
        //     'name' => $row['name'], 
        //     'email' => $row['email'],
        //     'password' => Hash::make($row['password'])
        // ]);
        $count = User::where('email', '=', $row['email'])->count();
        if(empty($count)){
            $data_user = new User;
            $data_user->name = $row['name'];
            $data_user->email = $row['email'];
            $data_user->password = $row['password'];
            $data_user->save();
        }
    }
}
