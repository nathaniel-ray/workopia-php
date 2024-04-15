<?php

namespace App\Controllers;

use Framework\database;

class HomeController
{

    /** */
    protected $db;

    public function __construct()
    {

        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

    /**
     * show the latest listing
     *
     * @return void
     */
    public function index()
    {
        $listings = $this->db->query('SELECT * FROM listings order by created_at desc  LIMIT 6')->fetchAll();

        loadView('home', [
            'listings' => $listings,
        ]);
    }
}
