<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

interface ContactRepositoryInterface
{
    public function getAllContacts();
    public function getContactById($id);
}

class ContactRepository implements ContactRepositoryInterface
{
    public function getAllContacts()
    {
        return DB::table('contacts')->get();
    }

    public function getContactById($id)
    {
        return DB::table('contacts')->where('id', $id)->first();
    }
}
