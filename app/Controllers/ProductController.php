<?php

namespace Controllers;

use Core\Controller;

class ProductController extends Controller
{
    private $gateway;
    
    public function __construct()
    {
        $this->gateway = $this->model("ProductsGateway");
    }

    public function processRequest(string $method): void
    {
        if(method_exists($this, strtolower($method))){

            $res = $this->$method();
            http_response_code(200);
            echo $res;
        
        }else{
        
            http_response_code(405);
            echo "Sorry this method not allowed";
        
        }
    }

    private function get(): string
    {
        return json_encode($this->gateway->getProducts());
    }

    private function post(): string
    {
        $data = (array) json_decode(file_get_contents("php://input"), true);
        
        if ($data["status"] === "delete"){
            return $this->delete();
        }
        
        $status = $this->gateway->addProduct($data);
        return $status;
    }

    private function delete(): string
    {
        $data = (array) json_decode(file_get_contents("php://input"), true);
        $status = $this->gateway->massDelete($data["ids"]);
        return $status;
    }

}
