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

}