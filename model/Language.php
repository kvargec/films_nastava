<?php

/**
 * Description of Language
 *
 * @author prof
 */
class Language extends BaseModel{
    public function __construct() {
        parent::__construct('language', 'language_id');
    }
}
