<?php

namespace App\Http\Repositories\Eloquent;
use App\Http\Repositories\Interfaces\OrderRepoInterface;
use App\Models\order;


class OrderRepo extends AbstractRepo implements OrderRepoInterface
{
    public function __construct()
    {
        parent::__construct(order::class);
    }

}
