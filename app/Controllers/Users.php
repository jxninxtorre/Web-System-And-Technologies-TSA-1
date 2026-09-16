<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            ['username' => 'jtorre', 'full_name' => 'Janina Charisse Torre', 'role' => 'Administrator'],
            ['username' => 'jmunoz', 'full_name' => 'Julieta Christie A. Munoz', 'role' => 'Manager'],
            ['username' => 'kambulo', 'full_name' => 'King Rugero P. Ambulo', 'role' => 'Cashier'],
            ['username' => 'hpomida', 'full_name' => 'Hans Matthew Pomida', 'role' => 'Inventory Clerk'],
            ['username' => 'jnepomuceno', 'full_name' => 'Justin David Nepomuceno', 'role' => 'Cashier'],
        ];

        return view('users', ['title' => 'User Accounts', 'users' => $users]);
    }
}