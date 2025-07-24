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
            2 => 'Memilih Program',
            3 => 'Pembayaran Pendaftaran',
            30 => 'Ditolak Saat Pembayaran',
            4 => 'Wawancara dan Seleksi',
            40 => 'Ditolak Saat Wawancara',
            5 => 'Konfirmasi Pembayaran Pendidikan',
            50 => 'Ditolak saat Pembayaran',
            6 => 'Diterima',
            7 => 'Data Sudah Lengkap',
            default => 'Status Tidak Diketahui',
        };
    }
}


