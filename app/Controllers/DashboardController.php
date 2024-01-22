<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PostModel;

class DashboardController extends BaseController
{
    public function index(): string
    {
        return view('dashboard/dashboard-index');
    }

    public function posts(): string
    {
        $postModel = new PostModel();

        return view('dashboard/dashboard-posts', [
            'posts' => $postModel->orderBy('created_at', 'DESC')->paginate(5, 'posts'),
        ]);
    }
}
