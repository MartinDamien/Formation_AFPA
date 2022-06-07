<?php

namespace AlloCine\Models\Services;

use AlloCine\Models\Daos\GenreDao;

class GenreService {

    private $genreDao;

    public function __construct() {
        $this->genreDao = new GenreDao();
    }

    public function getAllGenre() {
        $result = $this->genreDao->findAll();
        return $result;
    }
}
