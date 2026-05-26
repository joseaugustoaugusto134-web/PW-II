<?php

namespace source\Controller\Faqs;

use Source\Controller\Api;
use Source\Models\Faq\FaqCategory;

class FaqsCategories extends Api
{
    public function faqsCategoriesList(array $data)
    {
        $faqCategory = new FaqCategory();
        $response = $faqCategory->listAll();

        $this->call("200", "success", "Lista de categoria de FAQs", "success"
        )->back($response);
    }

    public function faqsCategoriesListById(array $data)
    {
        if(!filter_var($data["categoryId"], FILTER_VALIDATE_INT)) 
        {
            $this->call(
                400,
                "bad_request",
                "ID da categoria é obrigatório e deve ser um número inteiro",
                "error"
            )
                ->back(null);
            return;
        }

        $faqCategory = new FaqCategory();

        $faqCategory = $faqCategory->listById($data["categoryId"]);
        if(!$faqCategory) {
            $this->call(
                404,
                "not_found",
                "Categoria não encontrada",
                "error"
            )->back(null);
            return;
        }

        $this->call("200", "success", "Categoria encontrada", "success")
            ->back($faqCategory);
    }

    public function insert(array $data): void
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

        $faqCategory = new FaqCategory(null, $data["name"]);
        $faqCategory->insert();
        $faqCategory = [
            "name" => $faqCategory->getName(),           
        ];
        $this->call("201","created","Categoria de FAQ inserido com sucesso","success")
           ->back($faqCategory);
    }
    
}