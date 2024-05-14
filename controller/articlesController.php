<?php
use Modules\Controller;
use Modal\Articles as ArticlesModel;
class Articles extends Controller{
    function GET(){
        $article = new ArticlesModel();
        $data = $article->getAll();
        return $this->JSON($data);
    }
    
}