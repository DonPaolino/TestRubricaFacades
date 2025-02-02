<?php

namespace App\Repositories;

interface ContactRepositoryInterface
{
    public function getAllContacts();
    public function getContactById($id);
}
