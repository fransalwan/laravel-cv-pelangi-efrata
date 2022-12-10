<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\User;
use App\Models\Category;
use App\Models\CategoryRecord;
use App\Models\Customer;
use App\Models\Item;
use App\Models\Offer;
use App\Models\Pelanggan;
use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Frans Alwan",
            'username' => "fransalwan",
            'email' => 'fransalwan55@gmail.com',
            'password' => bcrypt('123456'),
            'user_type' => 'admin'
        ]);

        Booking::create([
            'tanggal' => "2022-07-01",
            'pelanggan_id' => 1,
            'name' => "Besi Pipa Galvanis",
            'harga_satuan' => 25000,
            'jumlah' => 2,
            'sub_total' => 50000,
            'user_id'=> 1
        ]);

        Booking::create([
            'tanggal' => "2022-07-01",
            'pelanggan_id' => 1,
            'name' => "Besi Siku",
            'harga_satuan' => 18000,
            'jumlah' => 2,
            'sub_total' => 36000,
            'user_id'=> 1
        ]);

        Pelanggan::create([
            'user_id' => 1,
            'name' => "Jonathan",
            'alamat' => "Jl. Jend. Sudirman No. 182, Kuala Tungkal - Jambi",
            "NoHp" => "078912312321",
            "email" => "jonathan@gmail.com"
        ]);

        Pelanggan::create([
            'user_id' => 1,
            'name' => "April",
            'alamat' => "Jl. RM. Thaher No. 503 Muara Bungo, Kabupaten Bungo, Jambi.",
            "NoHp" => "078912312321",
            "email" => "april@gmail.com"
        ]);

        Pelanggan::create([
            'user_id' => 1,
            'name' => "Markus",
            'alamat' => "Jalan Jenderal Sudirman Nomor 01 Bangko",
            "NoHp" => "078912312321",
            "email" => "markus@gmail.com"
        ]);
        Pelanggan::create([
            'user_id' => 1,
            'name' => "Steven",
            'alamat' => "Komplek Perkantoran Gunung Kembang No. 01 Sarolangun Jambi 37481",
            "NoHp" => "078912312321",
            "email" => "steven@gmail.com"
        ]);

        
        Booking::create([
            'tanggal' => "2022-07-01",
            'pelanggan_id' => 3,
            'name' => "Besi Siku",
            'harga_satuan' => 12000,
            'jumlah' => 2,
            'sub_total' => 24000,
            'user_id'=> 1
        ]);
        
        Booking::create([
            'tanggal' => "2022-07-02",
            'pelanggan_id' => 3,
            'name' => "Besi Siku",
            'harga_satuan' => 12000,
            'jumlah' => 2,
            'sub_total' => 24000,
            'user_id'=> 1
        ]);

        Booking::create([
            'tanggal' => "2022-07-02",
            'pelanggan_id' => 3,
            'name' => "Besi UMP",
            'harga_satuan' => 55000,
            'jumlah' => 2,
            'sub_total' => 110000,
            'user_id'=> 1
        ]);

        Booking::create([
            'tanggal' => "2022-07-3",
            'pelanggan_id' => 4,
            'name' => "Besi UMP",
            'harga_satuan' => 55000,
            'jumlah' => 2,
            'sub_total' => 110000,
            'user_id'=> 1
        ]);

        Booking::create([
            'tanggal' => "2022-07-3",
            'pelanggan_id' => 4,
            'name' => "Besi UMP",
            'harga_satuan' => 135000,
            'jumlah' => 2,
            'sub_total' => 270000,
            'user_id'=> 1
        ]);

        Booking::create([
            'tanggal' => "2022-07-4",
            'pelanggan_id' => 4,
            'name' => "Besi UMP",
            'harga_satuan' => 135000,
            'jumlah' => 2,
            'sub_total' => 270000,
            'user_id'=> 1
        ]);
        
        Booking::create([
            'tanggal' => "2022-07-4",
            'pelanggan_id' => 4,
            'name' => "Besi UMP",
            'harga_satuan' => 22000,
            'jumlah' => 2,
            'sub_total' => 44000,
            'user_id'=> 1
        ]);

        Booking::create([
            'tanggal' => "2022-07-5",
            'pelanggan_id' => 4,
            'name' => "Besi UMP",
            'harga_satuan' => 22000,
            'jumlah' => 2,
            'sub_total' => 44000,
            'user_id'=> 1
        ]);

        Booking::create([
            'tanggal' => "2022-07-5",
            'pelanggan_id' => 4,
            'name' => "Besi Pipa Galvanis",
            'harga_satuan' => 50000,
            'jumlah' => 2,
            'sub_total' => 50000,
            'user_id'=> 1
        ]);

        Supplier::create([
            'user_id' => 1,
            'name' => "Pani",
            'alamat' => "Jl. Patimura, no 02, Simpang Rimbo, Jambi",
            "NoHp" => "078912312321",
            "email" => "pani@gmail.com"
        ]);

        Supplier::create([
            'user_id' => 1,
            'name' => "difka",
            'alamat' => "Lintas Timur No. 30, Sangeti, Kabupaten Muaro Jambi",
            "NoHp" => "078912312321",
            "email" => "difka@gmail.com"
        ]);

        Supplier::create([
            'user_id' => 1,
            'name' => "Jake",
            'alamat' => "Jalan Jenderal Sudirman No. 01 Muara Bulian",
            "NoHp" => "078912312321",
            "email" => "jake@gmail.com"
        ]);

        Supplier::create([
            'user_id' => 1,
            'name' => "Darwin",
            'alamat' => "Komplek Perkantoran Bukit Menderang, Muara Sabak, Tanjung Jabung Timur, Jambi",
            "NoHp" => "078912312321",
            "email" => "darwin@gmail.com"
        ]);

        Offer::create([
            'tanggal' => "2022-07-01",
            'supplier_id' => 1,
            'name' => "Besi",
            'harga_per_kilo' => 7000,
            'berat' => 20,
            'sub_total' => 140000,
            'user_id'=> 1
        ]);

        Offer::create([
            'tanggal' => "2022-07-02",
            'supplier_id' => 2,
            'name' => "Besi",
            'harga_per_kilo' => 7000,
            'berat' => 25,
            'sub_total' => 175000,
            'user_id'=> 1
        ]);

        Offer::create([
            'tanggal' => "2022-07-03",
            'supplier_id' => 1,
            'name' => "Besi",
            'harga_per_kilo' => 7000,
            'berat' => 10,
            'sub_total' => 70000,
            'user_id'=> 1
        ]);

        Offer::create([
            'tanggal' => "2022-07-04",
            'supplier_id' => 2,
            'name' => "Besi",
            'harga_per_kilo' => 7000,
            'berat' => 52,
            'sub_total' => 364000,
            'user_id'=> 1
        ]);

        Offer::create([
            'tanggal' => "2022-07-05",
            'supplier_id' => 3,
            'name' => "Besi",
            'harga_per_kilo' => 7000,
            'berat' => 12,
            'sub_total' => 84000,
            'user_id'=> 1
        ]);

        Offer::create([
            'tanggal' => "2022-07-10",
            'supplier_id' => 3,
            'name' => "Besi",
            'harga_per_kilo' => 7000,
            'berat' => 99,
            'sub_total' => 693000,
            'user_id'=> 1
        ]);

        Offer::create([
            'tanggal' => "2022-07-11",
            'supplier_id' => 3,
            'name' => "Besi",
            'harga_per_kilo' => 7000,
            'berat' => 70,
            'sub_total' => 490000,
            'user_id'=> 1
        ]);

        Offer::create([
            'tanggal' => "2022-07-12",
            'supplier_id' => 4,
            'name' => "Besi",
            'harga_per_kilo' => 7000,
            'berat' => 28,
            'sub_total' => 196000,
            'user_id'=> 1
        ]);

        Offer::create([
            'tanggal' => "2022-07-13",
            'supplier_id' => 4,
            'name' => "Besi",
            'harga_per_kilo' => 7000,
            'berat' => 100,
            'sub_total' => 700000,
            'user_id'=> 1
        ]);

        Offer::create([
            'tanggal' => "2022-07-14",
            'supplier_id' => 4,
            'name' => "Besi",
            'harga_per_kilo' => 7000,
            'berat' => 25,
            'sub_total' => 175000,
            'user_id'=> 1
        ]);

        Offer::create([
            'tanggal' => "2022-07-15",
            'supplier_id' => 4,
            'name' => "Besi",
            'harga_per_kilo' => 7000,
            'berat' => 2,
            'sub_total' => 14000,
            'user_id'=> 1
        ]);

        Category::create([
            'user_id' => "1",
            'name' => "Besi Pipa",
            'slug' => 'besi-pipa',
            'image' => 'item-images/besi-pipa-galvanis-130.jpeg'
        ]);

        Category::create([
            'user_id' => "1",
            'name' => "Besi Siku",
            'slug' => 'besi-siku',
            'image' => 'item-images/besi-siku-160.jpeg'
        ]);

        Category::create([
            'user_id' => "1",
            'name' => "Besi behel",
            'slug' => 'besi-behel',
            'image' => 'item-images/besi-behel-ulir-280.jpeg'
        ]);

        Category::create([
            'user_id' => "1",
            'name' => "Besi UMP",
            'slug' => 'besi-ump',
            'image' => 'item-images/besi-ump-184.jpeg'
        ]);

        Category::create([
            'user_id' => "1",
            'name' => "Besi CMP",
            'slug' => 'besi-cmp',
            'image' => 'item-images/besi-cmp-360.jpeg'
        ]);

        Category::create([
            'user_id' => "1",
            'name' => "Besi IWF",
            'slug' => 'besi-iwf',
            'image' => 'item-images/besi-iwf-95.jpeg'
        ]);

        Category::create([
            'user_id' => "1",
            'name' => "Besi Plat",
            'slug' => 'besi-plat',
            'image' => 'item-images/besi-plat-38.jpeg'
        ]);

        Category::create([
            'user_id' => "1",
            'name' => "Seling",
            'slug' => 'seling',
            'image' => 'item-images/seling-putih-5000.jpeg'
        ]);

        Category::create([
            'user_id' => "1",
            'name' => "Besi As",
            'slug' => 'besi-as',
            'image' => 'item-images/besi-as-82.jpeg'
        ]);

        Category::create([
            'user_id' => "1",
            'name' => "Per Mobil",
            'slug' => 'per-mobil',
            'image' => 'item-images/per-mobil-62.jpeg'
        ]);


        Item::create([
            'name' => "Besi Pipa Galvanis",
            'image' => "item-images/besi-pipa-galvanis-130.jpeg",
            'category_id' => 1,
            'slug' => "besi-pipa-galvanis",
            'desc'=> "Berat: 4.5 Kg<br>Panjang: 130 cm<br>Diameter: 5 cm<br>Tebal: 6 ml",
            'stock' => 200,
            'price' => 45000,
            'user_id' => 1
        ]);

        Item::create([
            'name' => "Besi Pipa Galvanis",
            'image' => "item-images/besi-pipa-galvanis-183.jpeg",
            'category_id' => 1,
            'slug' => "besi-pipa-galvanis-2",
            'desc'=> "Berat: 2.5 Kg<br>Panjang: 183 cm<br>Diameter: 5 cm<br>Tebal: 2 ml",
            'stock' => 5,
            'price' => 25000,
            'user_id' => 1
        ]);

        // Besi Siku
        Item::create([
            'name' => "Besi Siku",
            'image' => "item-images/besi-siku-75.jpeg",
            'category_id' => 2,
            'slug' => "besi-siku",
            'desc'=> "Berat: 1.8 Kg<br>Panjang: 160 cm<br>Lebar Sisi: 2 cm<br>Tebal: 4 ml",
            'stock' => 1,
            'price' => 18000,
            'user_id' => 1
        ]);

        Item::create([
            'name' => "Besi Siku",
            'image' => "item-images/besi-siku-160.jpeg",
            'category_id' => 2,
            'slug' => "besi-siku-2",
            'desc'=> "Berat: 1.2 Kg<br>Panjang: 160 cm<br>Lebar Sisi: 2 cm<br>Tebal: 4 cm",
            'stock' => 4,
            'price' => 12000,
            'user_id' => 1
        ]);
        
        Item::create([
            'name' => "Besi Siku Double",
            'image' => "item-images/besi-siku-double-200.jpeg",
            'category_id' => 2,
            'slug' => "besi-siku-double",
            'desc'=> "Berat: 4.5 Kg<br>Panjang: 200 cm<br>Lebar Sisi: 4 cm<br>Tebal: 4 ml",
            'stock' => 1,
            'price' => 45000,
            'user_id' => 1
        ]);

        // Besi Behel Ulir
        Item::create([
            'name' => "Besi Behel Ulir",
            'image' => "item-images/besi-behel-ulir-280.jpeg",
            'category_id' => 3,
            'slug' => "besi-behel-ulir",
            'desc'=> "Berat: 4.4 Kg<br>Panjang: 280 cm<br>Diameter: 16 cm<br>",
            'stock' => 1,
            'price' => 44000,
            'user_id' => 1
        ]);

        // Besi UMP
        Item::create([
            'name' => "Besi UMP",
            'image' => "item-images/besi-ump-184.jpeg",
            'category_id' => 4,
            'slug' => "besi-ump",
            'desc'=> "Berat: 8.8 Kg<br>Panjang: 184 cm<br>Tebal: 8 cm",
            'stock' => 1,
            'price' => 88000,
            'user_id' => 1
        ]);

        Item::create([
            'name' => "Besi UMP",
            'image' => "item-images/besi-ump-93.jpeg",
            'category_id' => 4,
            'slug' => "besi-ump-2",
            'desc'=> "Berat: 5.5 Kg<br>Panjang: 93 cm<br>Lebar Sisi Punggung: 10 cm<br>Tebal: 8 ml",
            'stock' => 1,
            'price' => 55000,
            'user_id' => 1
        ]);

        Item::create([
            'name' => "Besi UMP",
            'image' => "item-images/besi-ump-60.jpeg",
            'category_id' => 4,
            'slug' => "besi-ump-3",
            'desc'=> "Berat: 2.2 Kg<br>Panjang: 60 cm<br>Lebar Sisi Punggung: 6 cm<br>Tebal: 6 ml",
            'stock' => 1,
            'price' => 22000,
            'user_id' => 1
        ]);

        Item::create([
            'name' => "Besi UMP",
            'image' => "item-images/besi-ump-117.jpeg",
            'category_id' => 4,
            'slug' => "besi-ump-4",
            'desc'=> "Berat: 13.5 Kg<br>Panjang: 117 cm<br>Lebar Sisi Punggung: 15 cm<br>Tebal: 14 ml",
            'stock' => 1,
            'price' => 135000,
            'user_id' => 1
        ]);


        // Besi CMP
        Item::create([
            'name' => "Besi CMP",
            'image' => "item-images/besi-cmp-360.jpeg",
            'category_id' => 5,
            'slug' => "besi-cmp",
            'desc'=> "Berat: 13.6 Kg<br>Panjang: 360 cm<br>Lebar Sisi Punggung: 12 cm<br>Tebal: 6 ml",
            'stock' => 1,
            'price' => 136000,
            'user_id' => 1
        ]);
        
        // Besi IWF
        Item::create([
            'name' => "Besi IWF",
            'image' => "item-images/besi-iwf-95.jpeg",
            'category_id' => 6,
            'slug' => "besi-iwf",
            'desc'=> "Berat: 20.5 Kg<br>Panjang: 95 cm<br>Lebar Sisi Dalam: 16 cm<br>Tebal: 6 ml",
            'stock' => 1,
            'price' => 205000,
            'user_id' => 1
        ]);

        // Besi Plat
        Item::create([
            'name' => "Besi Plat",
            'image' => "item-images/besi-plat-38.jpeg",
            'category_id' => 7,
            'slug' => "besi-plat",
            'desc'=> "Berat: 2 Kg<br>Panjang: 38 x 37 cm<br>Tebal: 4 ml",
            'stock' => 1,
            'price' => 20000,
            'user_id' => 1
        ]);

        // Seling
        Item::create([
            'name' => "Seling Putih",
            'image' => "item-images/seling-putih-5000.jpeg",
            'category_id' => 8,
            'slug' => "seling-putih",
            'desc'=> "Berat: 12 Kg<br>Panjang: 50 Meter<br>Diameter: 2 ml",
            'stock' => 1,
            'price' => 200000,
            'user_id' => 1
        ]);

        // Besi As
        Item::create([
            'name' => "Besi As",
            'image' => "item-images/besi-as-82.jpeg",
            'category_id' => 9,
            'slug' => "besi-as",
            'desc'=> "Berat: 7.5 Kg<br>Panjang: 82 cm<br>Diameter: 3.5 cm",
            'stock' => 1,
            'price' => 75000,
            'user_id' => 1
        ]);

        // Besi Per
        Item::create([
            'name' => "Per Mobil",
            'image' => "item-images/per-mobil-62.jpeg",
            'category_id' => 10,
            'slug' => "per-mobil",
            'desc'=> "Berat: 4 Kg<br>Panjang: 62 cm<br>Lebar Sisi: 7 cm<br>Tebal: 15 ml",
            'stock' => 1,
            'price' => 40000,
            'user_id' => 1
        ]);

        Item::create([
            'name' => "Per Mobil",
            'image' => "item-images/per-mobil-90.jpeg",
            'category_id' => 10,
            'slug' => "per-mobil-2",
            'desc'=> "Berat: 12 Kg<br>Panjang: 90 cm<br>Lebar Sisi: 9 cm<br>Tebal: 2 ml",
            'stock' => 1,
            'price' => 120000,
            'user_id' => 1
        ]);

        Item::create([
            'name' => "Per Mobil",
            'image' => "item-images/per-mobil-87.jpeg",
            'category_id' => 10,
            'slug' => "per-mobil-3",
            'desc'=> "Berat: 4.5 Kg<br>Panjang: 87 cm<br>Lebar Sisi: 7 cm<br>Tebal: 12 ml",
            'stock' => 1,
            'price' => 45000,
            'user_id' => 1
        ]);

        Item::create([
            'name' => "Per Mobil",
            'image' => "item-images/per-mobil-65.jpeg",
            'category_id' => 10,
            'slug' => "per-mobil-4",
            'desc'=> "Berat 4.5 Kg<br>Panjang: 65 cm<br>Lebar Sisi: 7 cm<br>Tebal: 14 ml",
            'stock' => 1,
            'price' => 45000,
            'user_id' => 1
        ]);
        
    }
}
