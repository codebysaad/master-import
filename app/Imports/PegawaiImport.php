<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Pegawai;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class PegawaiImport implements ToModel, WithStartRow, WithCustomCsvSettings
{
    public function startRow(): int
    {
        return 2;
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';'
        ];
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pegawai([
            'nmpeg' => $row[1],
            'npwp' => $row[2],
            'nmrek' => $row[3],
            'nm_bank' => $row[4],
            'rekening' => $row[5],
            'bersih' => $row[6],
            'sandi' => $row[7],
            'kdbankspan' => $row[8],
            'kdswift' => $row[9],
            'kdpos' => $row[10],
            'kdnegara' => $row[11],
            'kdkppn' => $row[12],
            'tipe_supplier' => $row[13],
            'kota' => $row[14],
            'provinsi' => $row[15],
            'email' => $row[16],
            'telepon' => $row[17],
            'kdiban' => $row[18],
            'alamat2' => $row[19],
            'kdnab' => $row[20],
            'kdlokasi2' => $row[21],
            'kdkabkota2' => $row[22],
            'nrs' => $row[23],
            'nip' => $row[24],
            'nama_supplier' => $row[25],
        ]);
    }
}
