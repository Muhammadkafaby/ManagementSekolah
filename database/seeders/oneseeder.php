<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class oneseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //ADMIN SEEDER
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'tipeuser' => 'admin',
            'nomerinduk' => '1',
            'username' => 'admin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);


        //KEPSEK SEEDER
        DB::table('users')->insert([
            'name' => 'Kepsek',
            'email' => 'kepsek@gmail.com',
            'password' => Hash::make('kepsek'),
            'tipeuser' => 'kepsek',
            'username' => 'kepsek',
            'nomerinduk' => '2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);


        //Siswa SEEDER
        DB::table('users')->insert([
            'id' => '2001',
            'name' => 'Paijo',
            'email' => 'siswa@gmail.com',
            'password' => Hash::make('siswa123'),
            'tipeuser' => 'siswa',
            'username' => 'siswa',
            'nomerinduk' => '123',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);

         DB::table('siswa')->insert([
            'nama' => 'Paijo',
            'nomerinduk' => '123',
            'kelas_id' => '1',
            'users_id' => '2001',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);
        //Siswa SEEDER
        DB::table('users')->insert([
            'id' => '2000',
            'name' => 'Sri',
            'email' => 'guru@gmail.com',
            'password' => Hash::make('guru'),
            'tipeuser' => 'guru',
            'username' => 'guru',
            'nomerinduk' => '3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);

         DB::table('guru')->insert([
            'nama' => 'Sri',
            'nomerinduk' => '3',
            'users_id' => '2000',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);


          //settings SEEDER
        DB::table('settings')->insert([
            'app_nama' => 'SMA NU KAPLONGAN',
            'app_namapendek' => 'SMANUK',
            'paginationjml' => '10',
            'lembaga_nama' => 'SMA NU KAPLONGAN',
            'lembaga_jalan' => 'Jalan Raya Kaplongan No. 28, Kaplongan, Karangampel, Kaplongan Lor, Indramayu Kabupaten Indramayu Jawa Barat',
            'lembaga_telp' => '0234 486800',
            'lembaga_kota' => 'Indramayu',
            'lembaga_logo' => 'assets/upload/logo.png',
            'tapelaktif' => '2021/2022',
            'nominaltagihandefault' => '1000000',
            'passdefaultsiswa' => 'siswa123',
            'passdefaultpegawai' => '12345678',
            'passdefaultortu' => 'ortu123',
            'sekolahlogo' => '',
            'sekolahttd' => 'Amir Amrullah, S.Pd',
            'sekolahttd2' => 'Amir Amrullah, S.Pd', //masih konsep
            'minimalpembayaranujian' => 70, //untuk melihat pass dan user moodle
            'semesteraktif' => 1, //semesteraktif
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);




        //KATEGORI SEEDER
        //pegawai
        DB::table('kategori')->insert([
            'nama' => 'Kepala Sekolah',
            'prefix' => 'pegawai',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);


        DB::table('kategori')->insert([
            'nama' => 'Administrator/Bendahara',
            'prefix' => 'pegawai',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);

         //pemasukan
        DB::table('kategori')->insert([
            'nama' => 'Dana Bos',
            'prefix' => 'pemasukan',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);


        DB::table('kategori')->insert([
            'nama' => 'Lain-lain',
            'prefix' => 'pemasukan',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);


         //pengeluaran
        DB::table('kategori')->insert([
            'nama' => 'Dana Bulanan',
            'prefix' => 'pengeluaran',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);

         //pengeluaran
        DB::table('kategori')->insert([
            'nama' => 'Lain-lain',
            'prefix' => 'pengeluaran',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);

         //TAPEL SEEDER
        DB::table('tapel')->insert([
            'nama' => '2021/2022',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);


         //KELAS SEEDER
        DB::table('kelas')->insert([
            'tingkatan' => 'X',
            'jurusan' => 'IPS',
            'suffix' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);


         //KELAS SEEDER
        DB::table('kelas')->insert([
            'tingkatan' => 'X',
            'jurusan' => 'IPA',
            'suffix' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);

         //KELAS SEEDER
        DB::table('kelas')->insert([
            'tingkatan' => 'XI',
            'jurusan' => 'IPS',
            'suffix' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);

         //KELAS SEEDER
        DB::table('kelas')->insert([
            'tingkatan' => 'XI',
            'jurusan' => 'IPA',
            'suffix' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);

              //KELAS SEEDER
        DB::table('kelas')->insert([
            'tingkatan' => 'XII',
            'jurusan' => 'IPS',
            'suffix' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);

              //KELAS SEEDER
        DB::table('kelas')->insert([
            'tingkatan' => 'XII',
            'jurusan' => 'IPA',
            'suffix' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);

           //tapel SEEDER
        DB::table('tapel')->insert([
            'nama' => '2023/2024',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);
      

        //  //KELAS SEEDER
        // DB::table('pegawai')->insert([
        //     'nig' => '123',
        //     'nama' => 'Admin',
        //     'kategori_nama' => 'Administrator/Bendahara',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        //  ]);


        //  //KELAS SEEDER
        // DB::table('pegawai')->insert([
        //     'nig' => '111',
        //     'nama' => 'Kepala Sekolah',
        //     'kategori_nama' => 'Kepala Sekolah',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        //  ]);






         //kategori jurusan
        DB::table('kategori')->insert([
         'nama' => 'Ilmu Pengetahuan Alam',
         'kode' => 'IPA',
         'prefix' => 'jurusan',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
      ]);

         //kategori semester
         DB::table('kategori')->insert([
            'nama' => '1',
            'kode' => 'SATU',
            'prefix' => 'semester',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);

         //kategori semester
         DB::table('kategori')->insert([
            'nama' => '2',
            'kode' => 'DUA',
            'prefix' => 'semester',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);

      DB::table('kategori')->insert([
         'nama' => 'Ilmu Pengetahuan Sosial',
         'kode' => 'IPS',
         'prefix' => 'jurusan',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
      ]);

         //kategori tipepelajaran
         DB::table('kategori')->insert([
            'nama' => 'Umum',
            'prefix' => 'tipepelajaran',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);

         //kategori tipepelajaran
         DB::table('kategori')->insert([
            'nama' => 'Khusus',
            'prefix' => 'tipepelajaran',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);

         //kategori tipepelajaran
         DB::table('kategori')->insert([
            'nama' => 'Peminatan',
            'prefix' => 'tipepelajaran',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);

         //kategori tipepelajaran
         DB::table('kategori')->insert([
            'nama' => 'Muatan Lokal',
            'prefix' => 'tipepelajaran',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);

         

         //tipetagihan
         DB::table('kategori')->insert([
            'nama' => 'Per Bulan',
            'prefix' => 'tipetagihan',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);
         DB::table('kategori')->insert([
            'nama' => 'Per Semester',
            'prefix' => 'tipetagihan',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);
         DB::table('kategori')->insert([
            'nama' => 'Sekali',
            'prefix' => 'tipetagihan',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
         ]);

        //kko
       
         DB::table('kko')->insert([
               'nama' => 'menghafal',
               'tipe' => 'C1',
               'tipe' => 'mudah',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now()
          ]);

         DB::table('kko')->insert([
               'nama' => 'mengulang',
               'tipe' => 'C1',
               'tipe' => 'mudah',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now()
          ]);

         DB::table('kko')->insert([
               'nama' => 'mengingat',
               'tipe' => 'C1',
               'tipe' => 'mudah',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now()
          ]);

         DB::table('kko')->insert([
               'nama' => 'mengenal',
               'tipe' => 'C1',
               'tipe' => 'mudah',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now()
          ]);

         DB::table('kko')->insert([
               'nama' => 'menyebutkan',
               'tipe' => 'C1',
               'tipe' => 'mudah',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now()
          ]);


        //kko
         DB::table('kko')->insert([
               'nama' => 'menghitung',
               'tipe' => 'C2',
               'tipe' => 'sedang',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now()
          ]);

         DB::table('kko')->insert([
               'nama' => 'mengidentifikasi',
               'tipe' => 'C2',
               'tipe' => 'sedang',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now()
          ]);

         DB::table('kko')->insert([
               'nama' => 'mengklasifikasikan',
               'tipe' => 'C2',
               'tipe' => 'sedang',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now()
          ]);

         DB::table('kko')->insert([
               'nama' => 'mengurutkan',
               'tipe' => 'C2',
               'tipe' => 'sedang',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now()
          ]);

         DB::table('kko')->insert([
               'nama' => 'menggambarkan',
               'tipe' => 'C2',
               'tipe' => 'sedang',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now()
          ]);

          



        //kko
         DB::table('kko')->insert([
               'nama' => 'mengkaji',
               'tipe' => 'C4',
               'tipe' => 'sulit',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now()
          ]);

         DB::table('kko')->insert([
               'nama' => 'mengkritisi',
               'tipe' => 'C4',
               'tipe' => 'sulit',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now()
          ]);

         DB::table('kko')->insert([
               'nama' => 'menghubungkan',
               'tipe' => 'C4',
               'tipe' => 'sulit',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now()
          ]);

         DB::table('kko')->insert([
               'nama' => 'mengidentifikasi',
               'tipe' => 'C4',
               'tipe' => 'sulit',
               'created_at' => Carbon::now(),
               'updated_at' => Carbon::now()
          ]);

          
    }
}
