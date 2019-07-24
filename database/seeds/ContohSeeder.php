<?php

use Illuminate\Database\Seeder;

class ContohSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contoh')->truncate();

        DB::table('contoh')->insert(array (
            0 =>
                array (
                    'name' => "Gunung Ciremai (Via Apuy)",
                    'address' => "Kuningan Jawa Barat, Indonesia",
                    'altitude' => "3078",
                    'rank' => "4",
                    'img' => "http://infopendaki.com/wp-content/uploads/2015/04/puncak-gunung-ciremai.jpg",
                    'type' => "hard",
                    'category' => 'rekomendasi',
                    'desc' => 'Gunung Ciremai adalah gunung berapi kerucut yang secara administratif termasuk dalam wilayah dua kabupaten, yakni Kabupaten Kuningan dan Kabupaten Majalengka.',
                    'price' => '50000',
                    'time' => '06.00 - 18.00',
                ),
            1 =>
                array (
                    'name' => "Gunung Ciremai (Via Palutungan)",
                    'address' => "Majalengka Jawa Barat, Indonesia",
                    'altitude' => "3078",
                    'rank' => "4.5",
                    'img' => "http://infopendaki.com/wp-content/uploads/2015/04/kawah-ciremai.jpg",
                    'type' => "medium",
                    'category' => 'all',
                    'desc' => 'Gunung Ciremai adalah gunung berapi kerucut yang secara administratif termasuk dalam wilayah dua kabupaten, yakni Kabupaten Kuningan dan Kabupaten Majalengka.',
                    'price' => '60000',
                    'time' => '06.00 - 18.00',
                ),
            2 =>
                array (
                    'name' => 'Gunung Manglayang (Via Batu Kuda)',
                    'address' => 'Kab. Bandung Jawa Barat, Indonesia',
                    'altitude' => '1818',
                    'rank' => '4.5',
                    'img' => 'https://i0.wp.com/liburmulu.com/wp-content/uploads/2015/04/Pemandangan-hutan-pinus-juga-salah-satu-daya-tarik-lain-Situs-Batu-Kuda-Manglayang-Bandung.jpg?resize=640%2C427',
                    'type' => 'medium',
                    'category' => 'all',
                    'desc' => 'Gunung Manglayang adalah sebuah gunung bertipe Stratovolcano yang terletak di antara Kota Bandung dan Kabupaten Sumedang, Jawa Barat, Indonesia dan memiliki ketinggian sekitar 1818 mdpl. Pemandangannya cukup indah, tetapi karena relatif tidak terlalu tinggi, sehingga kurang dikenal oleh pendaki-pendaki gunung pada umumnya. Dalam deretan gunung-gunung Burangrang – Tangkuban Perahu – Bukit Tunggul – Gunung Manglayang, Gunung Manglayang menjadi gunung yang terindah dari rangkaian keempat gunung tersebut. Mungkin itulah sebabnya di kalangan para penggiat alam bebas, gunung ini sempat terlupakan terkecuali para penggiat alam bebas dari Bandung dan sekitarnya. Walaupun begitu, Gunung Manglayang tetap menawarkan pesona alamnya tersendiri.',
                    'price' => '10000',
                    'time' => '06.00 - 18.00',
                ),
            3 =>
                array (
                    'name' => "Gunung Ciremai (Via LinggarJati)",
                    'address' => "Kuningan Jawa Barat, Indonesia",
                    'altitude' => "3078",
                    'rank' => "4",
                    'img' => "http://infopendaki.com/wp-content/uploads/2015/04/puncak-slamet-terlihhat-dari-puncak-ciremai.jpg",
                    'type' => "hard",
                    'category' => 'all',
                    'desc' => 'Gunung Manglayang adalah sebuah gunung bertipe Stratovolcano yang terletak di antara Kota Bandung dan Kabupaten Sumedang, Jawa Barat, Indonesia dan memiliki ketinggian sekitar 1818 mdpl. Pemandangannya cukup indah, tetapi karena relatif tidak terlalu tinggi, sehingga kurang dikenal oleh pendaki-pendaki gunung pada umumnya. Dalam deretan gunung-gunung Burangrang – Tangkuban Perahu – Bukit Tunggul – Gunung Manglayang, Gunung Manglayang menjadi gunung yang terindah dari rangkaian keempat gunung tersebut. Mungkin itulah sebabnya di kalangan para penggiat alam bebas, gunung ini sempat terlupakan terkecuali para penggiat alam bebas dari Bandung dan sekitarnya. Walaupun begitu, Gunung Manglayang tetap menawarkan pesona alamnya tersendiri.',
                    'price' => '40000',
                    'time' => '06.00 - 18.00',
                ),
            4 =>
                array (
                    'name' => "Gunung Cikuray (Via Bayongbong)",
                    'address' => "Garut Jawa Barat, Indonesia",
                    'altitude' => "2821",
                    'rank' => "4",
                    'img' => "http://infopendaki.com/wp-content/uploads/2015/08/pemandangan-dari-puncak-cikuray.jpg",
                    'type' => "hard",
                    'category' => 'all',
                    'desc' => 'Gunung Cikuray yang mempunyai ketinggian 2.821 meter di atas permukaan laut ini tidak mempunyai kawah aktif dan merupakan gunung tertinggi keempat di Jawa Barat setelah Gunung Ciremai, Gunung Pangrango dan Gunung Gede.',
                    'price' => '30000',
                    'time' => '06.00 - 18.00',
                ),
            5 =>
                array (
                    'name' => "Gunung Cikuray (Via Pemancar)",
                    'address' => "Garut Jawa Barat, Indonesia",
                    'altitude' => "2821",
                    'rank' => "4.5",
                    'img' => "https://1.bp.blogspot.com/-KhKoshMBXPg/WInN7srWTsI/AAAAAAAACIs/yumXJaUkyWAVNvdLWGLZ2zzQHP6sPm6NACLcB/s400/IMG_20170122_074448.jpg",
                    'type' => "hard",
                    'category' => 'rekomendasi',
                    'desc' => 'Gunung Cikuray yang mempunyai ketinggian 2.821 meter di atas permukaan laut ini tidak mempunyai kawah aktif dan merupakan gunung tertinggi keempat di Jawa Barat setelah Gunung Ciremai, Gunung Pangrango dan Gunung Gede.',
                    'price' => '50000',
                    'time' => '06.00 - 18.00',
                ),
            6 =>
                array (
                    'name' => "Gunung Cikuray (Via Cikajang)",
                    'address' => "Garut Jawa Barat, Indonesia",
                    'altitude' => "2821",
                    'rank' => "4",
                    'img' => "https://garutadventure.com/wp-content/uploads/2018/08/Jalur-pendakian-gunung-cikuray-via-Cikajang-5.jpg",
                    'type' => "hard",
                    'category' => 'all',
                    'desc' => 'Gunung Cikuray yang mempunyai ketinggian 2.821 meter di atas permukaan laut ini tidak mempunyai kawah aktif dan merupakan gunung tertinggi keempat di Jawa Barat setelah Gunung Ciremai, Gunung Pangrango dan Gunung Gede.',
                    'price' => '35000',
                    'time' => '06.00 - 18.00',
                ),
            7 =>
                array (
                    'name' => "Gunung Gede Pangrango (Via Cibodas)",
                    'address' => "Cianjur Jawa Barat, Indonesia",
                    'altitude' => "2958",
                    'rank' => "4.5",
                    'img' => "http://infopendaki.com/wp-content/uploads/2015/04/puncak-gunung-gede-pangrango.jpg",
                    'type' => "hard",
                    'category' => 'all',
                    'desc' => 'Gunung Gede merupakan sebuah gunung yang berada di Pulau Jawa, Indonesia. Gunung Gede berada dalam ruang lingkup Taman Nasional Gede Pangrango, yang merupakan salah satu dari lima taman nasional yang pertama kali diumumkan di Indonesia pada tahun 1980.',
                    'price' => '32000',
                    'time' => '06.00 - 18.00',
                ),
            8 =>
                array (
                    'name' => "Gunung Gede Pangrango (Via Selabintana)",
                    'address' => "Sukabumi Jawa Barat, Indonesia",
                    'altitude' => "2958",
                    'rank' => "4.5",
                    'img' => "http://www.merbabu.com/gunung/gede/kawah-gunung-gede.jpg",
                    'type' => "hard",
                    'category' => 'all',
                    'desc' => 'Gunung Gede merupakan sebuah gunung yang berada di Pulau Jawa, Indonesia. Gunung Gede berada dalam ruang lingkup Taman Nasional Gede Pangrango, yang merupakan salah satu dari lima taman nasional yang pertama kali diumumkan di Indonesia pada tahun 1980.',
                    'price' => '32000',
                    'time' => '06.00 - 18.00',
                ),
            9 =>
                array (
                    'name' => "Gunung Gede Pangrango (Via Gunung Putri)",
                    'address' => "Cianjur Jawa Barat, Indonesia",
                    'altitude' => "2958",
                    'rank' => "5",
                    'img' => "http://infopendaki.com/wp-content/uploads/2015/04/puncak-gede-dan-pangrango.jpg",
                    'type' => "hard",
                    'category' => 'rekomendasi',
                    'desc' => 'Gunung Gede merupakan sebuah gunung yang berada di Pulau Jawa, Indonesia. Gunung Gede berada dalam ruang lingkup Taman Nasional Gede Pangrango, yang merupakan salah satu dari lima taman nasional yang pertama kali diumumkan di Indonesia pada tahun 1980.',
                    'price' => '45000',
                    'time' => '06.00 - 18.00',
                ),
            10 =>
                array (
                    'name' => "Gunung Guntur (Via Citiis)",
                    'address' => "Garut Jawa Barat, Indonesia",
                    'altitude' => "2249",
                    'rank' => "4",
                    'img' => "https://catatanalam.files.wordpress.com/2019/07/ydxj1921.jpg",
                    'type' => "medium",
                    'category' => 'rekomendasi',
                    'desc' => 'Gunung Guntur adalah sebuah gunung berapi bertipe stratovolcano yang terdapat di Kelurahan Pananjung dan Desa Pasawahan, Tarogong Kaler, Kabupaten Garut, Jawa Barat, dan memiliki ketinggian 2.249 meter dpl. Gunung Guntur pernah menjadi gunung berapi paling aktif di pulau Jawa pada dekade 1800 an.',
                    'price' => '20000',
                    'time' => '06.00 - 18.00',
                ),
            11 =>
                array (
                    'name' => "Gunung Guntur (Via Cikahuripan)",
                    'address' => "Garut Jawa Barat, Indonesia",
                    'altitude' => "2249",
                    'rank' => "4",
                    'img' => "https://3.bp.blogspot.com/-dHeVljEybdM/WZpZJFPmDYI/AAAAAAAAKDM/UiJ_zrFwdXEqGm2uWtCJEOreTW356BV9wCLcBGAs/s320/P_20170730_095110.jpg",
                    'type' => "hard",
                    'category' => 'all',
                    'desc' => 'Gunung Guntur adalah sebuah gunung berapi bertipe stratovolcano yang terdapat di Kelurahan Pananjung dan Desa Pasawahan, Tarogong Kaler, Kabupaten Garut, Jawa Barat, dan memiliki ketinggian 2.249 meter dpl. Gunung Guntur pernah menjadi gunung berapi paling aktif di pulau Jawa pada dekade 1800 an.',
                    'price' => '20000',
                    'time' => '06.00 - 18.00',
                ),
             12 =>
                array (
                    'name' => "Gunung Putri",
                    'address' => "Lembang Jawa Barat, Indonesia",
                    'altitude' => "1450",
                    'rank' => "4",
                    'img' => "https://tempatwisatadibandung.info/wp-content/uploads/2015/11/Gunung-Putri-Lembang4.jpg",
                    'type' => "easy",
                    'category' => 'all',
                    'desc' => 'Gunung Putri Lembang ini dibangun oleh Belanda sekitar tahun 1913 – 1917, berada di masa perang dunia pertama. Bukan hanya dapat merefreshkan pikiran, tempat ini pun dapat membuat Anda terpukau dan merasa sangat nyaman melepas semua beban dengan pemandangan alamnya yang luar biasa sangat indah nan hijau.',
                    'price' => '17500',
                    'time' => '24 Jam'
                ),   


        ));
    }
}