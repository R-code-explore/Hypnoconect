<?php

namespace Wappointment\Controllers;

use Wappointment\ClassConnect\Request;
use Wappointment\Services\Order as ServicesOrder;
class OrderController extends \Wappointment\Controllers\RestController
{
    public function confirm(\Wappointment\ClassConnect\Request $request)
    {
        $orderService = new \Wappointment\Services\Order($request->input('transaction_id'));
        $orderService->awaitPayment();
        $orderService->order->appointments[0]->refresh();
        $orderResult = $orderService->order->arrayResult();
        return ['order' => $orderResult, 'appointment' => $orderResult['appointments'][0]];
    }
}
