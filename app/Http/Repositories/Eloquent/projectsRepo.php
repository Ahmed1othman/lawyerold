<?php

namespace App\Http\Repositories\Eloquent;

use App\Http\Repositories\Interfaces\EmployeeRepoInterface;
use App\Models\project;


class projectsRepo extends AbstractRepo implements EmployeeRepoInterface
{
    public function __construct()
    {
        parent::__construct(project::class);
    }

}
