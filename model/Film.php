<?php

/**
 * Description of Film
 *
 * @author prof
 */
class Film extends BaseModel{
    public function __construct() {
        parent::__construct('film', 'film_id');
    }
}
