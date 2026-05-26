<?php

namespace source\Controller\Faqs;

use Source\Controller\Api;
use Source\Models\Faq\Faq;

class Faqs extends Api
{
    public function FaqsListById(array $data)
    {
         if(!filter_var($data["faqId"], FILTER_VALIDATE_INT)) {
            $this->call(
                400,
                "bad_request",
                "ID do FAQ é obrigatório e deve ser um número inteiro",
                "error"
            )
                ->back(null);
            return;
        }

        $faq = new Faq();
        /*$this->call("200","success","Produto encontrado","success")
            ->back();*/
        $faq = $faq->listById($data["faqId"]);
        if(!$faq) {
            $this->call(
                404,
                "not_found",
                "FAQ não encontrado",
                "error"
            )->back(null);
            return;
        }

        $this->call("200","success","FAQ encontrado","success")
            ->back($faq);
    }

    
}