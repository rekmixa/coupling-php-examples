<?php

declare(strict_types=1);

/**
 * @property string $status
 */
final class Order extends ActiveRecord
{
}

final class OrderProcessor
{
    public function processOrder(Order $order)
    {
        $order->status = 'processed';
    }
}

$order = new Order();
$processor = new OrderProcessor();
$processor->processOrder($order);
