<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;

class CocktailsController extends AppController
{
    public $paginate = [
        'page' => 1,
        'limit' => 5,
        'maxLimit' => 15,
        'sortWhitelist' => [
            'produto_id', 'produto_descricao', 'produto_quantidade_estoque'
        ]
    ];
}