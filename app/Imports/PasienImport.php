<?php

namespace App\Imports;

use App\Models\Pasien;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class PasienImport implements ToModel
{
    public function model(array $row)
    {
        return new Pasien([
           'nama'     => $row[0],
           'alamat'    => $row[1],
        ]);
    }

    public function startRow(): int
    {
        return 2;
    }
}
