<?php namespace App\Beety;

/**
 * Class OrderStatus
 * @package App\Beety
 */
class OrderStatus
{
    /**
     * Order status constants
     */
    const ORDER_OPEN = 1;
    const ORDER_COOKING = 2;
    const ORDER_DELIVERED = 3;
    const ORDER_PAYMENT_AND_DELIVERED = 4;
    const ORDER_CANCELED = 5;

    /**
     * Order status array
     *
     * @var array
     */
    public static $orderStatus = [
        self::ORDER_OPEN => 'open',
        self::ORDER_COOKING => 'cooking',
        self::ORDER_DELIVERED => 'delivered',
        self::ORDER_PAYMENT_AND_DELIVERED => 'payment&delivered',
        self::ORDER_CANCELED => 'canceled'
    ];

    /**
     * @var array
     */
    public static $human = [
        self::ORDER_OPEN => 'Open',
        self::ORDER_COOKING => 'Cooking',
        self::ORDER_DELIVERED => 'Delivered',
        self::ORDER_PAYMENT_AND_DELIVERED => 'Dayment&delivered',
        self::ORDER_CANCELED => 'Canceled'
    ];

    /**
     * @var array
     */
    public static $orderStatusDescription = [
        self::ORDER_OPEN => 'after user filled request',
        self::ORDER_COOKING => 'when cook is cooking',
        self::ORDER_DELIVERED => 'arrived to office (no payment)',
        self::ORDER_PAYMENT_AND_DELIVERED => 'arrived and paid',
        self::ORDER_CANCELED => 'Can not be cook'
    ];
}