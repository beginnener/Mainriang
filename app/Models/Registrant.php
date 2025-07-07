<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Registrant extends Model
{
    protected $fillable = ['unique_id', 'phone_number', 'email', 'status', 'student_id', 'rombel_id', 'user_id', 'bukti_pembayaran'];
    protected $hidden = ['student_id'];
    use HasFactory;
    public function Child(): BelongsTo{
        return $this->belongsTo(Child::class, 'student_id', 'id');
    }
    public function Rombel(): BelongsTo{
        return $this->belongsTo(Rombel::class);
    }
    public function getStatusLabelAttribute(){
        return match ($this->status) {
            1 => 'Mengisi Data Orang Tua',
            2 => 'Pembayaran Pendaftaran',
            20 => 'Ditolak Saat Pembayaran',
            3 => 'Memilih Program',
            4 => 'Form Lanjutan',
            5 => 'Wawancara dan Seleksi',
            50 => 'Ditolak Saat Wawancara',
            6 => 'Konfirmasi',
            7 => 'Pembayaran Pendidikan',
            8 => 'Konfirmasi Pembayaran', // pendaftaran diterima
            80 => 'Ditolak Saat Pembayaran', // pendaftaran ditolak
            9 => 'Diterima', // pendaftaran ditolak
            default => 'Status Tidak Diketahui',
        };
    }
}


