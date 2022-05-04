<?php
namespace App\Http\Repositories\Eloquent;
use App\Http\Repositories\Interfaces\ClientInterface;
use App\Models\Client;

class ClientRepo extends AbstractRepo implements ClientInterface
{
    public function __construct()
    {
        parent::__construct(Client::class);
    }

}
