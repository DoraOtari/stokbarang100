<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;

class KodeBarang extends Component
{

    public function bikin_kode()
    {
        $kode = Str::random(7);
        return $kode;
    }
    public function render()
    {
        return view('livewire.kode-barang', ['kode' => $this->bikin_kode() ]);
    }
}
