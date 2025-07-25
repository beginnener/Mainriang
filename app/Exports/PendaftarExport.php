<?php
namespace App\Exports;

use App\Models\Registrant;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PendaftarExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Registrant::with(['rombel', 'child'])->get()->map(function ($item) {
            return [
                $item->created_at->format('Y-m-d'),
                $item->status,
                $item->Rombel->location->nama ?? '',
                $item->Rombel->program->name ?? '',
                $item->child->Nama,
                $item->child->nama_panggilan,
                $item->Child->jk,
                $item->Child->tempat_lahir,
                $item->Child->tanggal_lahir,
                $item->child->agama,
                $item->child->RT .'/'. $item->child->RW,
                $item->dusun,
                $item->kelurahan,
                $item->kecamatan,
                $item->postal_code,
                $item->living_type,
                $item->transportation,
                $item->weight,
                $item->height,
                $item->head_circumference,
                $item->siblings_count,
                $item->child_order,
                $item->distance_to_school,
                $item->latitude,
                $item->longitude,
                $item->mom->name ?? '',
                $item->mom->address ?? '',
                $item->mom->birth_place ?? '',
                $item->mom->birth_date ?? '',
                $item->mom->phone ?? '',
                $item->mom->email ?? '',
                $item->mom->education ?? '',
                $item->mom->job ?? '',
                $item->mom->income ?? '',
                $item->dad->name ?? '',
                $item->dad->address ?? '',
                $item->dad->birth_place ?? '',
                $item->dad->birth_date ?? '',
                $item->dad->phone ?? '',
                $item->dad->email ?? '',
                $item->dad->education ?? '',
                $item->dad->job ?? '',
                $item->dad->income ?? '',
                $item->kk_file,
                $item->birth_certificate_file,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'Tanggal Daftar',
            'Status Pendaftaran',
            'Lokasi',
            'Program',
            'Nama Anak',
            'Nama Panggilan',
            'Jenis Kelamin',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Agama',
            'RT/RW',
            'Dusun',
            'Kelurahan',
            'Kecamatan',
            'Kode Pos',
            'Jenis Tinggal',
            'Alat Transportasi',
            'Berat Badan',
            'Tinggi Badan',
            'Lingkar Kepala',
            'Jumlah Saudara',
            'Anak Ke-',
            'Jarak ke Sekolah',
            'Lintang',
            'Bujur',
            'Nama Ibu',
            'Alamat Ibu',
            'Tempat Lahir Ibu',
            'Tanggal Lahir Ibu',
            'No Telp Ibu',
            'Email Ibu',
            'Pendidikan Ibu',
            'Pekerjaan Ibu',
            'Penghasilan Ibu',
            'Nama Ayah',
            'Alamat Ayah',
            'Tempat Lahir Ayah',
            'Tanggal Lahir Ayah',
            'No Telp Ayah',
            'Email Ayah',
            'Pendidikan Ayah',
            'Pekerjaan Ayah',
            'Penghasilan Ayah',
            'File KK',
            'File Akta',
        ];
    }
}
