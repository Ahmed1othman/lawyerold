<?php

namespace App\Http\Repositories\Eloquent;
use App\Http\Repositories\Interfaces\AdviceOrderRepoInterface;
use App\Http\Repositories\Interfaces\OrderRepoInterface;
use App\Models\AdviceOrder;
use App\Models\order;


class AdviceOrderRepo extends AbstractRepo implements AdviceOrderRepoInterface
{
    public function __construct()
    {
        parent::__construct(AdviceOrder::class);
    }

}
