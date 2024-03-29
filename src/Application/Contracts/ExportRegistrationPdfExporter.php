<?php

declare(strict_types=1);

namespace App\Application\Contracts;

use App\Domain\Entities\Registration;

interface ExportRegistrationPdfExporter
{
    public function export(Registration $registration): string;
}
