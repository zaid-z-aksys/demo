<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        return 'hey';
    }

    public function indexUsers()
    {
        return view('admin/user');
    }
}
