<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang=[
        [
            'Id' => '1',
            'Kode' => 'PRD001',
            'Nama' => 'Indomie',
            'Kategori' => 'Makanan',
            'Harga' => '3000',
            'Qty' => '100'
        ],
        [
            'Id' => '2',
            'Kode' => 'PRD002',
            'Nama' => 'Pocari Sweat',
            'Kategori' => 'Minuman',
            'Harga' => '6000',
            'Qty' => '50'
        ],
        [
            'Id' => '3',
            'Kode' => 'PRD003',
            'Nama' => 'Silverqueen',
            'Kategori' => 'Snack',
            'Harga' => '12500',
            'Qty' => '45'
        ],
        [
            'Id' => '4',
            'Kode' => 'PRD004',
            'Nama' => 'Benazepril',
            'Kategori' => 'Obat',
            'Harga' => '20500',
            'Qty' => '30',
        ],
        [
            'Id' => '5',
            'Kode' => 'PRD005',
            'Nama' => 'Desoximetasone',
            'Kategori' => 'Obat',
            'Harga' => '65500',
            'Qty' => '30'
        ],
        [
            'Id' => '6',
            'Kode' => 'PRD006',
            'Nama' => 'Nabati',
            'Kategori' => 'Snack',
            'Harga' => '6500',
            'Qty' => '60'
        ],
        [
            'Id' => '7',
            'Kode' => 'PRD007',
            'Nama' => 'Popmie',
            'Kategori' => 'Makanan',
            'Harga' => '500',
            'Qty' => '25'
        ],
        [
            'Id' => '8',
            'Kode' => 'PRD008',
            'Nama' => 'Soto',
            'Kategori' => 'Makanan',
            'Harga' => '10000',
            'Qty' => '40',
        ],
        [
            'Id' => '9',
            'Kode' => 'PRD009',
            'Nama' => 'Cheetos',
            'Kategori' => 'Snack',
            'Harga' => '6500',
            'Qty' => '50'
        ],
        [
            'Id' => '10',
            'Kode' => 'PRD0010',
            'Nama' => 'Chitato',
            'Kategori' => 'Snack',
            'Harga' => '11500',
            'Qty' => '45'
        ],
        [
            'Id' => '11',
            'Kode' => 'PRD0011',
            'Nama' => 'Americano',
            'Kategori' => 'Minuman',
            'Harga' => '15500',
            'Qty' => '25'
        ],
        [
            'Id' => '12',
            'Kode' => 'PRD0012',
            'Nama' => 'Black Tea',
            'Kategori' => 'Minuman',
            'Harga' => '18500',
            'Qty' => '15'
        ],
        [
            'Id' => '13',
            'Kode' => 'PRD0013',
            'Nama' => 'Cappucino',
            'Kategori' => 'Minuman',
            'Harga' => '14500',
            'Qty' => '65',
        ],
        [
            'Id' => '14',
            'Kode' => 'PRD0014',
            'Nama' => 'Carrot Juice',
            'Kategori' => 'Minuman',
            'Harga' => '10500',
            'Qty' => '20',
        ],
        [
            'Id' => '15',
            'Kode' => 'PRD0015',
            'Nama' => 'Ikan Asam Pedas',
            'Kategori' => 'Makanan',
            'Harga' => '25500',
            'Qty' => '34'
        ],
        [
            'Id' => '16',
            'Kode' => 'PRD0016',
            'Nama' => 'Pempek',
            'Kategori' => 'Makanan',
            'Harga' => '10500',
            'Qty' => '22'
        ],
        [
            'Id' => '17',
            'Kode' => 'PRD0017',
            'Nama' => 'Dextrose',
            'Kategori' => 'Obat',
            'Harga' => '60500',
            'Qty' => '49'
        ],
        [
            'Id' => '18',
            'Kode' => 'PRD0018',
            'Nama' => 'Ambroxol',
            'Kategori' => 'Obat',
            'Harga' => '34600',
            'Qty' => '68'
        ],
        [
            'Id' => '19',
            'Kode' => 'PRD0019',
            'Nama' => 'Aminofillin',
            'Kategori' => 'Obat',
            'Harga' => '72500',
            'Qty' => '65'
        ],
        [
            'Id' => '20',
            'Kode' => 'PRD0020',
            'Nama' => 'Qtela',
            'Kategori' => 'Snack',
            'Harga' => '8500',
            'Qty' => '45'
        ],
        [
            'Id' => '21',
            'Kode' => 'PRD0021',
            'Nama' => 'Mie Aceh',
            'Kategori' => 'Makanan',
            'Harga' => '10500',
            'Qty' => '25'
        ]
        ];
        DB::table('barangs')->insert($barang);  
       
    }
}
