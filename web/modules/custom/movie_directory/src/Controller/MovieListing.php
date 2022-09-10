<?php

namespace Drupal\movie_directory\Controller;

use Drupal\Core\Controller\ControllerBase;

class MovieListing extends ControllerBase {   

    public function view() {

        $this->listMovies();
        $content = [];

        $content['name'] = 'My name is Mike';

        return [
            '#theme' => 'movie-listing',
            '#content' => $content,
        ];
    }
    public function listMovies(){
        /** @var \MovieAPIConnector $movie_api_connector_service */
        $movie_api_connector_service = \Drupal::service('movie_directory.api_connector');
        $movie_list = $movie_api_connector_service->discoverMovies();
        $d=0;
    }
}
