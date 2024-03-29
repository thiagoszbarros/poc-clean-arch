<?php

declare(strict_types=1);

namespace App\Domain\Repositories;

use App\Domain\Entities\Registration;
use App\Domain\ValueObjects\Cpf;

interface LoadRegistration
{
    public function loadByRegistrationNumber(Cpf $registrationNumber): Registration;
}
