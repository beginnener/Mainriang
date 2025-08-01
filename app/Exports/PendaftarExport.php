<?php
namespace App\Exports;

use App\Models\Registrant;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PendaftarExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Registrant::all()->map(function ($item) {
            return [
                $item->created_at->format('Y-m-d'),
                $item->status_label,
                $item->Rombel->location->name ?? '',
                $item->Rombel->program->name ?? '',
                $item->child->nama,
                $item->child->nama_panggilan,
                "'" . $item->Child->NIK,
                $item->Child->jk,
                $item->Child->tempat_lahir,
                $item->Child->tanggal_lahir,
                $item->child->agama,
                $item->Child->RT .'/'. $item->Child->RW,
                $item->Child->dusun,
                $item->Child->kelurahan,
                $item->Child->kecamatan,
                $item->Child->kode_pos,
                $item->Child->jenis_tinggal,
                $item->Child->alat_transportasi,
                $item->Child->berat_badan. 'Kg',
                $item->Child->tinggi_badan. 'Cm',
                $item->Child->lingkar_kepala. 'Cm',
                $item->Child->jumlah_saudara,
                $item->Child->anak_keberapa,
                $item->Child->jarak_ke_sekolah. ' Km',
                $item->Child->lintang,
                $item->Child->bujur,
                $item->Child->mom->name ?? '',
                "'" . ($item->Child->mom->NIK ?? ''),
                $item->Child->mom->alamat ?? '',
                $item->Child->mom->tempat_lahir ?? '',
                $item->Child->mom->tanggal_lahir ?? '',
                $item->Child->mom->phone_number ?? '',
                $item->Child->mom->email ?? '',
                $item->Child->mom->jenjang_pendidikan ?? '',
                $item->Child->mom->pekerjaan ?? '',
                $item->Child->mom->penghasilan ?? '',
                $item->Child->dad->name ?? '',
                "'" . ($item->Child->dad->NIK ?? ''),
                $item->Child->dad->alamat ?? '',
                $item->Child->dad->tempat_lahir ?? '',
                $item->Child->dad->tanggal_lahir ?? '',
                $item->Child->dad->phone_number ?? '',
                $item->Child->dad->email ?? '',
                $item->Child->dad->jenjang_pendidikan ?? '',
                $item->Child->dad->pekerjaan ?? '',
                $item->Child->dad->penghasilan ?? '',
                $item->Child->guardian->name ?? '',
                "'" . ($item->Child->guardian->NIK ?? ''),
                $item->Child->guardian->alamat ?? '',
                $item->Child->guardian->tempat_lahir ?? '',
                $item->Child->guardian->tanggal_lahir ?? '',
                $item->Child->guardian->phone_number ?? '',
                $item->Child->guardian->email ?? '',
                $item->Child->guardian->jenjang_pendidikan ?? '',
                $item->Child->guardian->pekerjaan ?? '',
                $item->Child->guardian->penghasilan ?? '',
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
            'NIK Anak',
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
            'NIK Ibu',
            'Alamat Ibu',
            'Tempat Lahir Ibu',
            'Tanggal Lahir Ibu',
            'No Telp Ibu',
            'Email Ibu',
            'Pendidikan Ibu',
            'Pekerjaan Ibu',
            'Penghasilan Ibu',
            'Nama Ayah',
            'NIK Ayah',
            'Alamat Ayah',
            'Tempat Lahir Ayah',
            'Tanggal Lahir Ayah',
            'No Telp Ayah',
            'Email Ayah',
            'Pendidikan Ayah',
            'Pekerjaan Ayah',
            'Penghasilan Ayah',
            'Nama Wali',
            'NIK Wali',
            'Alamat Wali',
            'Tempat Lahir Wali',
            'Tanggal Lahir Wali',
            'No Telp Wali',
            'Email Wali',
            'Pendidikan Wali',
            'Pekerjaan Wali',
            'Penghasilan Wali',
            'File KK',
            'File Akta',
        ];
    }
}
