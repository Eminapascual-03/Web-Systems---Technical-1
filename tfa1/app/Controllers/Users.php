<?php

namespace App\Controllers;
class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username'  => 'admin01',
                'full_name' => 'Gian Tio',
                'role'      => 'Administrator',
            ],
            [
                'username'  => 'cashier01',
                'full_name' => 'Stephen Cortez', 
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'cashier02',
                'full_name' => 'Aj Punsalan',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'manager01',
                'full_name' => 'Laurence Papruz',
                'role'      => 'Manager',
            ],
            [
                'username'  => 'staff01',
                'full_name' => 'Patrick Cosep', 
                'role'      => 'Staff',
            ],
        ];

        return view('users', ['users' => $users]);
    }
}