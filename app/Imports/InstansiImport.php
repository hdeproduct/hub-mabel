<?php

namespace App\Imports;

use App\Models\Instansi;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class InstansiImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Instansi([
            'city' => $row['city'],
            'klpd' => $row['klpd'],
            'institusi_kerja' => $row['institusi_kerja'],
            'satuan_kerja' => $row['satuan_kerja'],
            'pic_name' => $row['pic_name'],
            'pic_phone' => $row['pic_phone'],
            'pic_position' => $row['pic_position'],
            'status_ring' => $row['status_ring'],
        ]);
    }
}
