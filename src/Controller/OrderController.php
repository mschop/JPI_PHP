<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class OrderController
{
    protected $orderRepository;

    /**
     * @param int $tenantId
     * @param int $orderId
     * @return Response
     */
    public function getOne(int $tenantId, int $orderId): Response
    {

    }
}