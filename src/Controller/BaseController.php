<?php
/**
 * Created by PhpStorm.
 * User: MADATALY
 * Date: 25/02/2018
 * Time: 07:21
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class BaseController
{
    public function index() {
        return new Response('test');
    }
}