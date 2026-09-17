<?php

namespace App\Controllers;
class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Richard Vester Pangilinan',
                'email'     => 'RVPangilinan@gmail.com',
                'phone'     => '09171234567',
            ],
            [
                'full_name' => 'Arwhen Natalie Ocampo',
                'email'     => 'Arwhenlie@gmail.com',
                'phone'     => '09181234567',
            ],
            [
                'full_name' => 'Justin Marcus Torrejos',
                'email'     => 'Just.In_MTorrejos@gmail.com',
                'phone'     => '09191234567',
            ],
            [
                'full_name' => 'Fiona Gabrielle Castaneda',
                'email'     => 'Brie.fionaC@gmail.com',
                'phone'     => '09201234567',
            ],
            [
                'full_name' => 'Elliesha Emina SD Pascual',
                'email'     => 'eesdpascual@mail.com',
                'phone'     => '09672640211',
            ],
        ];

        return view('customers', ['customers' => $customers]);
    }
}