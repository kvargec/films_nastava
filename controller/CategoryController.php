<?php
/**
 * Description of CategoryController
 *
 * @author prof
 */
class CategoryController extends BaseController{
    public function index(){
        $this->loadModel('Category');
        $kate=new Category();
        $data['kategorije']=$kate->all();
        $this->loadView('category/list', $data);
    }
}
