<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            ['full_name' => 'Janina Charisse Torre', 'email' => 'janina.torre@example.com', 'phone' => '0917-123-4567'],
            ['full_name' => 'Julieta Christie A. Munoz', 'email' => 'julieta.munoz@example.com', 'phone' => '0918-234-5678'],
            ['full_name' => 'King Rugero P. Ambulo', 'email' => 'king.ambulo@example.com', 'phone' => '0919-345-6789'],
            ['full_name' => 'Hans Matthew Pomida', 'email' => 'hans.pomida@example.com', 'phone' => '0920-456-7890'],
            ['full_name' => 'Justin David Nepomuceno', 'email' => 'justin.nepomuceno@example.com', 'phone' => '0921-567-8901'],
        ];

        return view('customers', ['title' => 'Customer Accounts', 'customers' => $customers]);
    }
}