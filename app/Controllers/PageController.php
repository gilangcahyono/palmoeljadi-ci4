<?php

namespace App\Controllers;

use App\Models\PostModel;

class PageController extends BaseController
{
    public function index(): string
    {
        // $faker = \Faker\Factory::create("id_ID");
        // dd($faker->dateTime());

        // $pager = \Config\Services::pager();

        // $json = '{
        //     "0":"' . $faker->imageUrl() . '",
        //     "1":"' . $faker->imageUrl() . '",
        //     "2":"' . $faker->imageUrl() . '",
        //     "3":"' . $faker->imageUrl() . '",
        //     "4":"' . $faker->imageUrl() . '",
        //     "5":"' . $faker->imageUrl() . '"
        // }';


        // dd(json_decode($json, true));

        $postModel = new PostModel();

        $data = [
            'title' => 'Beranda',
            'current_page' => 'home',
            'posts' => $postModel->orderBy('created_at', 'DESC')->paginate(3),
        ];

        return view('pages/index', $data);
    }

    public function history(): string
    {
        $data = ['title' => 'Sejarah', 'current_page' => 'history'];
        return view('pages/history', $data);
    }

    public function orgStructure(): string
    {
        $data = ['title' => 'Struktur Organisasi', 'current_page' => 'org-stucture'];
        return view('pages/org-structure', $data);
    }

    public function visionAndMission(): string
    {
        $data = ['title' => 'Visi dan Misi', 'current_page' => 'visi-misi'];
        return view('pages/vision-and-mision', $data);
    }

    public function headOfOrphanage(): string
    {
        $data = ['title' => 'Pejabat Kepala Panti', 'current_page' => 'head-orphanage'];
        return view('pages/the-head-of-the-orphanage', $data);
    }

    public function jobAndFunction(): string
    {
        $data = ['title' => 'Tugas dan Fungsi', 'current_page' => 'job-function'];
        return view('pages/job-and-function', $data);
    }

    public function facility(): string
    {
        $data = ['title' => 'Fasilitas', 'current_page' => 'facility'];
        return view('pages/facility', $data);
    }

    public function contact(): string
    {
        $data = ['title' => 'Kontak', 'current_page' => 'contact'];
        return view('pages/contact', $data);
    }

    public function donation(): string
    {
        $data = ['title' => 'Donasi', 'current_page' => 'donation'];
        return view('pages/donation', $data);
    }
}
