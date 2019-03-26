<?php


/**
 * Description of Category
 *
 * @author prof
 */
class Category extends BaseModel{
    public function __construct() {
        parent::__construct('category', 'category_id');
    }
}
