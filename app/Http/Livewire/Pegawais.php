<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Pegawai;

class Pegawais extends Component
{
    use WithPagination;
    public $pegawais, 
    $nmpeg, $npwp, $nmrek,
        $nm_bank,
        $rekening,
        $bersih,
        $sandi,
        $kdbankspan,
        $kdswift,
        $kdpos,
        $kdnegara,
        $kdkppn,
        $tipe_supplier,
        $kota,
        $provinsi,
        $email,
        $telepon,
        $kdiban,
        $alamat2,
        $kdnab,
        $kdlokasi2,
        $kdkabkota2,
        $nrs,
        $nip,
        $nama_supplier,
    $pegawai_id;
    public $isModal = 0;

    public function render()
    {
        $this->pegawais = Pegawai::all();
        return view('livewire.pegawais');
    }

    public function create()
    {
        $this->resetFields();
        $this->openModal();
    }

    public function closeModal()
    {
        $this->isModal = false;
    }

    public function openModal()
    {
        $this->isModal = true;
    }

    public function resetFields()
    {
        $this->nmpeg = '';
        $this->npwp = '';
        $this->nmrek = '';
        $this->nm_bank = '';
        $this->rekening = '';
        $this->bersih = '';
        $this->sandi = '';
        $this->kdbankspan = '';
        $this->kdswift = '';
        $this->kdpos = '';
        $this->kdnegara = '';
        $this->kdkppn = '';
        $this->tipe_supplier = '';
        $this->kota = '';
        $this->provinsi = '';
        $this->email = '';
        $this->telepon = '';
        $this->kdiban = '';
        $this->alamat2 = '';
        $this->kdnab = '';
        $this->kdlokasi2 = '';
        $this->kdkabkota2 = '';
        $this->nrs = '';
        $this->nip = '';
        $this->nama_supplier = '';
    }

    // public function store()
    // {
    //     $this->validate([
    //     'nmpeg',
    //     'npwp',
    //     'nmrek',
    //     'nm_bank',
    //     'rekening',
    //     'bersih',
    //     'sandi',
    //     'kdbankspan',
    //     'kdswift',
    //     'kdpos',
    //     'kdnegara',
    //     'kdkppn',
    //     'tipe_supplier',
    //     'kota',
    //     'provinsi',
    //     'email',
    //     'telepon',
    //     'kdiban',
    //     'alamat2',
    //     'kdnab',
    //     'kdlokasi2',
    //     'kdkabkota2',
    //     'nrs',
    //     'nip',
    //     'nama_supplier',
    //         'name' => 'required|string',
    //         'email' => 'required|email|unique:members,email,' . $this->member_id,
    //         'phone_number' => 'required|numeric',
    //         'status' => 'required'
    //     ]);

    //     Member::updateOrCreate(['id' => $this->member_id], [
    //         'nmpeg',
    //     'npwp',
    //     'nmrek',
    //     'nm_bank',
    //     'rekening',
    //     'bersih',
    //     'sandi',
    //     'kdbankspan',
    //     'kdswift',
    //     'kdpos',
    //     'kdnegara',
    //     'kdkppn',
    //     'tipe_supplier',
    //     'kota',
    //     'provinsi',
    //     'email',
    //     'telepon',
    //     'kdiban',
    //     'alamat2',
    //     'kdnab',
    //     'kdlokasi2',
    //     'kdkabkota2',
    //     'nrs',
    //     'nip',
    //     'nama_supplier',
    //         'name' => $this->name,
    //         'email' => $this->email,
    //         'phone_number' => $this->phone_number,
    //         'status' => $this->status,
    //     ]);

    //     session()->flash('message', $this->member_id ? $this->name . ' Diperbaharui': $this->name . ' Ditambahkan');
    //     $this->closeModal();
    //     $this->resetFields();
    // }

    // public function edit($id)
    // {
    //     $member = Member::find($id);
        
    //     $this->member_id = $id;
    //     $this->name = $member->name;
    //     $this->email = $member->email;
    //     $this->phone_number = $member->phone_number;
    //     $this->status = $member->status;

    //     $this->openModal();
    // }

    // public function delete($id)
    // {
    //     $member = Member::find($id);
    //     $member->delete();
    //     session()->flash('message', $member->name . ' Dihapus');
    // }
}
