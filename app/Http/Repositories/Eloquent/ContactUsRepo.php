<?php

namespace App\Http\Repositories\Eloquent;
use App\Http\Repositories\Interfaces\ContactUsRepoInterface;
use App\Models\AdviceOrder;
use App\Models\ContactUs;


class ContactUsRepo extends AbstractRepo implements ContactUsRepoInterface
{
    public function __construct()
    {
        parent::__construct(ContactUs::class);
    }

}
