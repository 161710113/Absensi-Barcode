<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Jabatan;
use App\Pegawai;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'	=> 'Admin PTIPD',
            'email'	=> 'admin@uinsgd.ac.id',
            'password'	=> bcrypt('rahasia')
        ]);

        $jabatan = Jabatan::create(['nama_jabatan'	=> 'Kepala PTIPD']);
        $jabatan2 = Jabatan::create(['nama_jabatan'	=> 'Layanan Informasi Akademik']);
        $jabatan3 = Jabatan::create(['nama_jabatan'	=> 'Kepala Divisi Infrastruktur']);
        $jabatan4 = Jabatan::create(['nama_jabatan'	=> 'Divisi Infrastruktur']);
        $jabatan5 = Jabatan::create(['nama_jabatan'	=> 'Kepala Divisi Aplikasi']);
        $jabatan6 = Jabatan::create(['nama_jabatan'	=> 'Divisi Aplikasi']);
        $jabatan7 = Jabatan::create(['nama_jabatan'	=> 'Kepala Divisi PDDIKTI']);
        $jabatan8 = Jabatan::create(['nama_jabatan'	=> 'Divisi PDDIKTI']);
        $jabatan9 = Jabatan::create(['nama_jabatan'	=> 'Kepala Divisi Pelatihan']);
        $jabatan10 = Jabatan::create(['nama_jabatan'	=> 'Divisi Pelatihan']);
        $jabatan11 = Jabatan::create(['nama_jabatan'	=> 'Monitoring']);

        $pegawai = Pegawai::create([
            'nip' => '0201800001',
            'nama' => 'Undang Syaripudin, M.Kom',
            'jabatan_id' => '1'
        ]);
        $pegawai1 = Pegawai::create([
            'nip' => '0201800101',
            'nama' => 'Diana Nurmalasari',
            'jabatan_id' => '2'
        ]);
        $pegawai2 = Pegawai::create([
            'nip' => '0201800102',
            'nama' => 'Siti Nur Latifatul Qolbiyah',
            'jabatan_id' => '2'
        ]);
        $pegawai3 = Pegawai::create([
            'nip' => '0201800103',
            'nama' => 'Rizki Faudzan Adzim',
            'jabatan_id' => '2'
        ]);
        $pegawai4 = Pegawai::create([
            'nip' => '0201800104',
            'nama' => 'Wine Widiawaty',
            'jabatan_id' => '2'
        ]);
        $pegawai5 = Pegawai::create([
            'nip' => '0201800105',
            'nama' => 'Wulan Ismaya',
            'jabatan_id' => '2'
        ]);
        $pegawai6 = Pegawai::create([
            'nip' => '0201800106',
            'nama' => 'Sophia Putri Nurmalasari',
            'jabatan_id' => '2'
        ]);
        $pegawai7 = Pegawai::create([
            'nip' => '0201800107',
            'nama' => 'Novi Amalia Ardha',
            'jabatan_id' => '2'
        ]);
        $pegawai8 = Pegawai::create([
            'nip' => '0201800108',
            'nama' => 'Sri Nur Shinta',
            'jabatan_id' => '2'
        ]);
        $pegawai9 = Pegawai::create([
            'nip' => '0201800109',
            'nama' => 'Tari Miftahul Jannah',
            'jabatan_id' => '2'
        ]);
        $pegawai10 = Pegawai::create([
            'nip' => '0201800110',
            'nama' => 'Erik Nugraha',
            'jabatan_id' => '2'
        ]);
        $pegawai11 = Pegawai::create([
            'nip' => '0201800111',
            'nama' => 'Rahmalia Ahmadi',
            'jabatan_id' => '2'
        ]);
        $pegawai12 = Pegawai::create([
            'nip' => '0201800201',
            'nama' => 'Gitarja Sandi, MT',
            'jabatan_id' => '3'
        ]);
        $pegawai13 = Pegawai::create([
            'nip' => '0201800202',
            'nama' => 'Yogi Wijaya, ST',
            'jabatan_id' => '4'
        ]);
        $pegawai14 = Pegawai::create([
            'nip' => '0201800203',
            'nama' => 'Bagus Enggartiasto',
            'jabatan_id' => '4'
        ]);
        $pegawai15 = Pegawai::create([
            'nip' => '0201800204',
            'nama' => 'M Iqbal Qomarudin',
            'jabatan_id' => '4'
        ]);
        $pegawai16 = Pegawai::create([
            'nip' => '0201800205',
            'nama' => 'Sulaiman Syah Jamal',
            'jabatan_id' => '4'
        ]);
        $pegawai17 = Pegawai::create([
            'nip' => '0201800206',
            'nama' => 'Abraham Dwi Kurniawan',
            'jabatan_id' => '4'
        ]);
        $pegawai18 = Pegawai::create([
            'nip' => '0201800301',
            'nama' => 'Jumadi ST M.Cs',
            'jabatan_id' => '5'
        ]);
        $pegawai19 = Pegawai::create([
            'nip' => '0201800302',
            'nama' => 'Rahmat Zaenal Abidin, MT',
            'jabatan_id' => '6'
        ]);
        $pegawai20 = Pegawai::create([
            'nip' => '0201800303',
            'nama' => 'Furiansyah Dipraja, ST',
            'jabatan_id' => '6'
        ]);
        $pegawai21 = Pegawai::create([
            'nip' => '0201800304',
            'nama' => 'Alfi Gusman',
            'jabatan_id' => '6'
        ]);
        $pegawai22 = Pegawai::create([
            'nip' => '0201800305',
            'nama' => 'Piscal Pratama Putra',
            'jabatan_id' => '6'
        ]);
        $pegawai23 = Pegawai::create([
            'nip' => '0201800306',
            'nama' => 'Temy Ramdhan',
            'jabatan_id' => '6'
        ]);
        $pegawai24 = Pegawai::create([
            'nip' => '0201800307',
            'nama' => 'Hadaina Lesta',
            'jabatan_id' => '6'
        ]);
        $pegawai25 = Pegawai::create([
            'nip' => '0201800401',
            'nama' => 'Ichsan Taufik, MT',
            'jabatan_id' => '7'
        ]);
        $pegawai26 = Pegawai::create([
            'nip' => '0201800402',
            'nama' => 'Fitri Puspitasari Budiana, S.Si',
            'jabatan_id' => '8'
        ]);
        $pegawai27 = Pegawai::create([
            'nip' => '0201800403',
            'nama' => 'Danil Kardia',
            'jabatan_id' => '8'
        ]);
        $pegawai28 = Pegawai::create([
            'nip' => '0201800404',
            'nama' => 'Agus Mahari',
            'jabatan_id' => '8'
        ]);
        $pegawai29 = Pegawai::create([
            'nip' => '0201800405',
            'nama' => 'Zahra Tsaradina',
            'jabatan_id' => '8'
        ]);
        $pegawai30 = Pegawai::create([
            'nip' => '0201800406',
            'nama' => 'Rinka Pranita',
            'jabatan_id' => '8'
        ]);
        $pegawai31 = Pegawai::create([
            'nip' => '0201800407',
            'nama' => 'Adi Nurachman',
            'jabatan_id' => '8'
        ]);
        $pegawai32 = Pegawai::create([
            'nip' => '0201800501',
            'nama' => 'Yogi Saputra Assyahab, ST',
            'jabatan_id' => '9'
        ]);
        $pegawai33 = Pegawai::create([
            'nip' => '0201800502',
            'nama' => 'Fatimah Ulwiyatul Badriyah',
            'jabatan_id' => '10'
        ]);
        $pegawai34 = Pegawai::create([
            'nip' => '0201800503',
            'nama' => 'Adi Putra Andriyandi',
            'jabatan_id' => '10'
        ]);
        $pegawai35 = Pegawai::create([
            'nip' => '0201800504',
            'nama' => 'Wendi Siswanto',
            'jabatan_id' => '10'
        ]);
        $pegawai36 = Pegawai::create([
            'nip' => '0201800505',
            'nama' => 'Finki Anjani',
            'jabatan_id' => '10'
        ]);
        $pegawai37 = Pegawai::create([
            'nip' => '0201800601',
            'nama' => 'Raka Fajar Salinggih',
            'jabatan_id' => '11'
        ]);
        $pegawai38 = Pegawai::create([
            'nip' => '0201800602',
            'nama' => 'Rexsy Rustiana Suparman',
            'jabatan_id' => '11'
        ]);        
    }
}
