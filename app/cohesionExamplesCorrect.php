<?php

final class CreateOrderCase
{
    public function create(OrderForm $form): void
    {
        // ...
    }
}

final class AddToCardCase
{
    public function add(ProductId $productId, CartId $cartId): void
    {
        // ...
    }
}

final class CancelOrderCase
{
    public function cancel(OrderId $orderId): void
    {
        // ...
    }
}
