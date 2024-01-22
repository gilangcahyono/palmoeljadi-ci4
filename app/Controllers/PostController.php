<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PostModel;


class PostController extends BaseController
{
    protected $postModel;

    public function __construct()
    {
        $this->postModel = new PostModel();
    }

    public function index(): string
    {

        $posts = $this->postModel->orderBy('created_at', 'DESC')->paginate(5, 'posts');

        $data = [
            'title' => 'Berita',
            'current_page' => 'news',
            'posts' => $posts,
            'pager' => $this->postModel->pager,
        ];

        return view('posts/posts', $data);
    }

    public function view(string $excerpt): string
    {
        $post = $this->postModel->where('title', ucwords(join(' ', explode('-', $excerpt))))->find();

        $prevPost = $this->postModel->getPrevRow($post[0]);
        $nextPost = $this->postModel->getNextRow($post[0]);

        $data = [
            'title' => 'Berita',
            'current_page' => $excerpt,
            'post' => $post[0],
            'next_post' => $nextPost,
            'prev_post' => $prevPost,
        ];

        return view('posts/post', $data);
    }
}
