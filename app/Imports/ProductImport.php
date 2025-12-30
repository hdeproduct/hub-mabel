<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Product([
            'nama_produk' => $row['nama_produk'],
            'spesifikasi' => $row['spesifikasi'],
            'link_ekatalog' => $row['link_ekatalog'],
            'category' => $row['category'],
            'merek' => $row['merek'],
        ]);
    }
}
