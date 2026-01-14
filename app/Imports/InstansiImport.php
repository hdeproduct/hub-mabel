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
            'code_dinas' => $row['code_dinas'],
            'pic_name' => $row['pic_name'],
            'pic_phone' => $row['pic_phone'],
            'pic_position' => $row['pic_position'],
            'pic_role' => $row['pic_role'],
            'status_market' => $map[$row['status_market']] ?? 'Cold',
            'status_ring' => $row['status_ring'],
        ]);
    }
}
