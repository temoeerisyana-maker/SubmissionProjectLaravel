<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    private function dataMahasiswa()
    {
        return [
            [
                'nama' => 'Isyana Mukti Timur',
                'nim' => '242520140',
                'ipk' => 3.80,
                'prodi' => 'Teknik Informatika'
            ],
            [
                'nama' => 'Sayun Masykur Syarif',
                'nim' => '242520111',
                'ipk' => 3.70,
                'prodi' => 'Teknik Informatika'
            ],
            [
                'nama' => 'Airmas Joko Winardi',
                'nim' => '242520000',
                'ipk' => 3.60,
                'prodi' => 'Teknik Informatika'
            ],
        ];
    }

    // Latihan a: Profil mahasiswa
    public function profil()
    {
        $nama = 'Isyana Mukti Timur';
        $nim = '242520140';
        $prodi = 'Teknik Informatika';

        return view('mahasiswa.profil', compact(
            'nama',
            'nim',
            'prodi'
        ));
    }

    // Latihan b: Daftar mahasiswa
    public function daftar()
    {
        $mahasiswa = $this->dataMahasiswa();

        return view('mahasiswa.daftar', compact('mahasiswa'));
    }

    // Latihan c: Detail mahasiswa
    public function detail($nim)
    {
        $mahasiswa = collect($this->dataMahasiswa())
            ->firstWhere('nim', $nim);

        abort_unless($mahasiswa, 404);

        return view('mahasiswa.detail', compact('mahasiswa'));
    }
}
