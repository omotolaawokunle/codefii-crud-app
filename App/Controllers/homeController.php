<?php
namespace App\Controllers;
use App\controllers\Controller;
use Codefii\Http\Request;
use App\Models\Products;
class homeController extends Controller{
    public function index()
    {
    	$products = new Products();
    	$data = $products->findAll();
        return $this->view(["Pages/home", "Pages/partials"], ['title'=>'CodeFii CRUD || Homepage', 'data' => $data]);
    }
    public function add(){
    	$msg = false;
    	if(Request::exists()){
    		$name = Request::get('name');
    		$price = Request::get('price');
    		$desc = Request::get('description');
    		$products = new Products();
    		$data = [$name,$price,$desc];
    		$products->save($data);
    		$msg = "Product Added Successfully!";
    	}
    	return $this->view(["Pages/add", "Pages/partials"], ['title' => "CodeFii CRUD || Create", 'msg' => $msg]);
    }
    public function edit()
    {
    	$msg = false;
    	$id = $this->route_params['id'];
    	$products = new Products();
    	$datas = $products->findOne(['id'=>$id]);
    	if(Request::exists()){
    		$name = Request::get('name');
    		$price = Request::get('price');
    		$desc = Request::get('description');
    		$products = new Products();
    		$data = ['id'=>$id, 'name'=>$name,'price'=>$price,'description'=>$desc];
    		$products->update($data);
    		$msg = "Product Edited Successfully!";
    		$datas = $products->findOne(['id'=>$id]);
    	}
    	return $this->view(["Pages/edit", "Pages/partials"], ['title' => "CodeFii CRUD || Edit", 'data' => $datas,'msg' => $msg]);
    }
    public function delete()
    {
    	$id = $this->route_params['id'];
    	$products = new Products();
    	$products->delete(['id'=>$id]);
    	return $this->view(["Pages/delete", "Pages/partials"], ['title' => "CodeFii CRUD || Delete"]);
    }
}