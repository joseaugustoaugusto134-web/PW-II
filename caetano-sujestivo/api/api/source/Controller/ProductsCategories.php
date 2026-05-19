<?php

namespace source\Controller;

use Source\Controller\Api;
use Source\Models\ProductCategory;

class ProductsCategories extends Api
{

    public function productsCategoriesList ()
    {
        $productCategory = new ProductCategory();
        $response = $productCategory->listAll();

        $this->call("200","success","Lista de Categoria dos Produtos","success"
        )->back($response);
    }

    public function productsCategoriesListById (array $data) : void
    {
        if(!filter_var($data["categoryId"], FILTER_VALIDATE_INT)) 
        {
            $this->call(
                400,
                "bad_request",
                "ID do produto é obrigatório e deve ser um número inteiro",
                "error"
            )
                ->back(null);
            return;
        }

        $productCategory = new ProductCategory();

        $productCategory = $productCategory->listById($data["categoryId"]);
        if(!$productCategory) {
            $this->call(
                404,
                "not_found",
                "Produto não encontrado",
                "error"
            )->back(null);
            return;
        }

        $this->call("200", "success", "Produto encontrado", "success")
            ->back($productCategory);
    }
   
    public function insert (array $data): void
    {
        
        if( !isset($data["name"])  || empty($data["name"]) ){
           $this->call(
                400,
                "bad_request",
                "O campo nome é obrigatório",
                "error"
            )->back();
            return;
        }

        $productCategory = new Product(null,$data["name"]);
        $productCategory->insert();
        $productCategory = [
            "id" => $productCategory->getId(),
            "name" => $productCategory->getName(),           
        ];
        $this->call("201","created","Produto inserido com sucesso","success")
           ->back($product);
    }

}