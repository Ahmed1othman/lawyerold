<?php

namespace App\Http\Repositories\Eloquent;

use App\Http\Repositories\Interfaces\EmployeeRepoInterface;
use App\Models\Employee;
use App\Models\project;


class EmployeeRepo extends AbstractRepo implements EmployeeRepoInterface
{
    public function __construct()
    {
        parent::__construct(Employee::class);
    }

}
