<?php

namespace App\Controller;

use OpenApi\Annotations as OA;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @OA\Info(
 *     title="JPI",
 *     version="1.0",
 *     @OA\Contact(
 *       email="mschopdev@gmail.com"
 *     )
 * )
 */

/**
 * Class IndexController
 * @package App\Controller
 */
class IndexController
{
    /**
     * @Route("/", name="index")
     * @OA\Get(
     *     path="/",
     *     @OA\Response(response="200", description="Get status information")
     * )
     */
    public function index()
    {

    }
}