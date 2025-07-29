<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Child extends Model
{
    protected $fillable = [
        'NIK',
        'nama',
        'nama_panggilan',
        'jk',
        'tempat_lahir',
        'tanggal_lahir',
        'nik',
        'agama',
        'alamat',
        'RT',
        'RW',
        'dusun',
        'kelurahan',
        'kecamatan',
        'kode_pos',
        'jenis_tinggal',
        'alat_transportasi',
        'lintang',
        'bujur',
        'berat_badan',
        'tinggi_badan',
        'lingkar_kepala',
        'jumlah_saudara',
        'anak_keberapa',
        'jarak_ke_sekolah',
        'akta_kelahiran',
        'kartu_keluarga',
        'mom_id',
        'dad_id',
        'guardian_id',
    ];
    protected $hidden = [
        'NIK',
        'alamat',
        'akta_kelahiran',
        'kartu_keluarga'
    ];
    
    use HasFactory;
    public function Mom(): BelongsTo{
        return $this->belongsTo(Mom::class);
    }
    public function Dad(): BelongsTo{
        return $this->belongsTo(Dad::class);
    }
    public function Guardian(): BelongsTo{
        return $this->belongsTo(Guardian::class);
    }
    public function Student(): HasOne{
        return $this->hasOne(Student::class);
    }
    public function Registrant(): HasOne{
        return $this->hasOne(Registrant::class);
    }
}
