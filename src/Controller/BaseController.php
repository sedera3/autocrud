<?php
/**
 * Created by PhpStorm.
 * User: Sedera
 * Date: 25/02/2018
 * Time: 07:21
 */

namespace App\Controller;


use App\Service\BaseService;
use Symfony\Component\HttpFoundation\Response;

class BaseController
{
    public function index(BaseService $baseService) {
        return new Response($baseService->test());
    }
}