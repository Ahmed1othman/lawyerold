<?php
namespace App\Http\Repositories\Eloquent;
use App\Http\Repositories\Interfaces\ClientInterface;
use App\Models\feature;
use App\Models\Service;

class FeaturesRepo extends AbstractRepo implements ClientInterface
{
    public function __construct()
    {
        parent::__construct(feature::class);
    }

}
