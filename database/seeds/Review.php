<?php

use Illuminate\Database\Seeder;

class Review extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('review')->truncate();

        DB::table('review')->insert(array (
            0 =>
                array (
                    'name' => "Basecamp Apuy",
                    'coba_id' => "1",
                    'img' => "http://infopendaki.com/wp-content/uploads/2015/04/BASECAMP-JALUR-PENDAKIAN-APUY.jpg",
                ),
            1 =>
                array (
                    'name' => "Pos 1",
                    'coba_id' => "1",
                    'img' => "http://infopendaki.com/wp-content/uploads/2015/04/BASECAMP-JALUR-PENDAKIAN-APUY.jpg",
                ),
            2 =>
                array (
                    'name' => "Pos 2",
                    'coba_id' => "1",
                    'img' => "http://infopendaki.com/wp-content/uploads/2015/04/pos-2-arban.jpg",
                ),
            3 =>
                array (
                    'name' => "Pos 3",
                    'coba_id' => "1",
                    'img' => "http://infopendaki.com/wp-content/uploads/2015/04/pos-3-tegal-masawa.jpg",
                ),
            4 =>
                array (
                    'name' => "Puncak",
                    'coba_id' => "1",
                    'img' => "http://infopendaki.com/wp-content/uploads/2015/04/puncak-gunung-ciremai.jpg",
                ),
            5 =>
                array (
                    'name' => "Basecamp Palutungan",
                    'coba_id' => "2",
                    'img' => "http://infopendaki.com/wp-content/uploads/2015/04/papan-nama-jalur-palutungan-basecamp.jpg",
                ),
            6 =>
                array (
                    'name' => "Pos 1",
                    'coba_id' => "2",
                    'img' => "http://infopendaki.com/wp-content/uploads/2015/04/pos-kuta-gunung-ciremai.jpg",
                ),
            7 =>
                array (
                    'name' => "Pos 5",
                    'coba_id' => "2",
                    'img' => "http://infopendaki.com/wp-content/uploads/2015/04/pos-pasanggrahan-ciremai.jpg",
                ),
            8 =>
                array (
                    'name' => "Puncak",
                    'coba_id' => "2",
                    'img' => "http://infopendaki.com/wp-content/uploads/2015/04/kawah-ciremai.jpg",
                ),
            9 =>
                array (
                    'name' => "Batu Kuda",
                    'coba_id' => "3",
                    'img' => "https://www.ayobandung.com/images-bandung/post/articles/2018/01/06/27192/whatsapp_image_2018-01-06_at_20.05.17.jpeg",
                ),
            10 =>
                array (
                    'name' => "Hutan Pinus",
                    'coba_id' => "3",
                    'img' => "https://i0.wp.com/liburmulu.com/wp-content/uploads/2015/04/Pemandangan-hutan-pinus-juga-salah-satu-daya-tarik-lain-Situs-Batu-Kuda-Manglayang-Bandung.jpg?resize=640%2C427",
                ),
            11 =>
                array (
                    'name' => "Hutan Pinus",
                    'coba_id' => "3",
                    'img' => "https://i0.wp.com/liburmulu.com/wp-content/uploads/2015/04/Fasilitas-tempat-wisata-Situs-Batu-Kuda-sudah-cukup-lengkap.jpg?resize=640%2C427",
                ),
            12 =>
                array (
                    'name' => "Basecamp Linggarjati",
                    'coba_id' => "4",
                    'img' => "http://infopendaki.com/wp-content/uploads/2015/04/basecamp-linggarjati-linggasana.jpg",
                ),
            13 =>
                array (
                    'name' => "Simaksi",
                    'coba_id' => "4",
                    'img' => "http://infopendaki.com/wp-content/uploads/2015/04/pos-linggarjati-ciremai.jpg",
                ),
            14 =>
                array (
                    'name' => "Pos Leweung Datar",
                    'coba_id' => "4",
                    'img' => "http://infopendaki.com/wp-content/uploads/2015/04/Pos-Leuweung-Datar.jpg",
                ),
            15 =>
                array (
                    'name' => "Tanjakan Bapa Tere",
                    'coba_id' => "4",
                    'img' => "http://infopendaki.com/wp-content/uploads/2015/04/tanjakan-bapa-tere.jpg",
                ),
            16 =>
                array (
                    'name' => "Puncak",
                    'coba_id' => "4",
                    'img' => "http://infopendaki.com/wp-content/uploads/2015/04/puncak-slamet-terlihhat-dari-puncak-ciremai.jpg",
                ),
            17 =>
                array (
                    'name' => "Basecamp Bayongbong",
                    'coba_id' => "5",
                    'img' => "http://infopendaki.com/wp-content/uploads/2015/08/pos-pendaftaran-basecamp-bayongbong-cikuray.jpg",
                ),
            18 =>
                array (
                    'name' => "Pos 2",
                    'coba_id' => "5",
                    'img' => "http://infopendaki.com/wp-content/uploads/2015/08/pos-2-paparete.jpg",
                ),
            19 =>
                array (
                    'name' => "Puncak",
                    'coba_id' => "5",
                    'img' => "http://infopendaki.com/wp-content/uploads/2015/08/pemandangan-dari-puncak-cikuray.jpg",
                ),
            20 =>
                array (
                    'name' => "~",
                    'coba_id' => "6",
                    'img' => "https://3.bp.blogspot.com/-uCyyejb9A5s/WIhVyZu8icI/AAAAAAAACDM/RZPacSsxZkMNSEQgW4Rfc6aZp-AOJD-_wCLcB/s400/IMG20170121090021.jpg",
                ),
            21 =>
                array (
                    'name' => "~",
                    'coba_id' => "6",
                    'img' => "https://3.bp.blogspot.com/-B1oi9uGzpBI/WIlhD2sNlLI/AAAAAAAACEM/YQof6VVwTTQr5cPzlWe8aajQ41d5fJ8swCLcB/s400/IMG_20170121_102707.jpg",
                ),
            22 =>
                array (
                    'name' => "Pos 2",
                    'coba_id' => "6",
                    'img' => "https://4.bp.blogspot.com/-PsJzBcu5PTQ/WIl1Qh_mg6I/AAAAAAAACE0/m2BX9PZzHJsNUd7Mx-dW0IDMevR1XXvNwCLcB/s400/IMG_20170121_140942.jpg",
                ),
            23 =>
                array (
                    'name' => "Pos 3",
                    'coba_id' => "6",
                    'img' => "https://2.bp.blogspot.com/-L0UuzDAviBA/WIl-J-F7k-I/AAAAAAAACF4/Yr8epEUdgsEPKqHV-aBuF_mX7XCPG2UDwCLcB/s400/IMG_20170121_163447.jpg",
                ),
            24 =>
                array (
                    'name' => "Pos 6",
                    'coba_id' => "6",
                    'img' => "https://2.bp.blogspot.com/-KHq7eCpuDko/WIm_9_61krI/AAAAAAAACH4/2gZB2SPfvtgP-7F1e9nzzeWQb6mAFWrhgCLcB/s400/IMG_20170122_101118.jpg",
                ),
            25 =>
                array (
                    'name' => "Puncak",
                    'coba_id' => "6",
                    'img' => "https://1.bp.blogspot.com/-KhKoshMBXPg/WInN7srWTsI/AAAAAAAACIs/yumXJaUkyWAVNvdLWGLZ2zzQHP6sPm6NACLcB/s400/IMG_20170122_074448.jpg",
                ),
            26 =>
                array (
                    'name' => "~",
                    'coba_id' => "7",
                    'img' => "https://garutadventure.com/wp-content/uploads/2018/08/Jalur-pendakian-gunung-cikuray-via-Cikajang-3.jpg",
                ),
            27 =>
                array (
                    'name' => "~",
                    'coba_id' => "7",
                    'img' => "https://garutadventure.com/wp-content/uploads/2018/08/jalur-pendakian-gunung-cikuray-olan.jpg",
                ),
            28 =>
                array (
                    'name' => "~",
                    'coba_id' => "7",
                    'img' => "https://garutadventure.com/wp-content/uploads/2018/08/Jalur-pendakian-gunung-cikuray-via-Cikajang-5.jpg",
                ),
            29 =>
                array (
                    'name' => "~",
                    'coba_id' => "8",
                    'img' => "https://instagram.fcgk9-1.fna.fbcdn.net/vp/f54d922b8574a62a1a0698a2c6ecd00b/5DABAC68/t51.2885-15/sh0.08/e35/c178.0.723.723a/s640x640/56527935_877297839283178_8419437169430840835_n.jpg?_nc_ht=instagram.fcgk9-1.fna.fbcdn.net&_nc_cat=102",
                ),
            30 =>
                array (
                    'name' => "~",
                    'coba_id' => "8",
                    'img' => "http://infopendaki.com/wp-content/uploads/2015/04/percabangan-cibeureum-panyangcangan.jpg",
                ),
            31 =>
                array (
                    'name' => "~",
                    'coba_id' => "8",
                    'img' => "http://infopendaki.com/wp-content/uploads/2015/04/AIR-TERJUN-PANCA-WEULEUH.jpg",
                ),
            32 =>
                array (
                    'name' => "Basecamp",
                    'coba_id' => "10",
                    'img' => "http://infopendaki.com/wp-content/uploads/2015/04/BASECAMP-GUNUNG-PUTRI.jpg",
                ),
            33 =>
                array (
                    'name' => "~",
                    'coba_id' => "10",
                    'img' => "http://infopendaki.com/wp-content/uploads/2015/04/surya-kencana-gede.jpg",
                ),
            34 =>
                array (
                    'name' => "~",
                    'coba_id' => "10",
                    'img' => "http://infopendaki.com/wp-content/uploads/2015/04/puncak-gede-dan-pangrango.jpg",
                ),
            35 =>
                array (
                    'name' => "~",
                    'coba_id' => "9",
                    'img' => "http://www.merbabu.com/gunung/gede/pondok_halimun_selabintana.jpg",
                ),
            36 =>
                array (
                    'name' => "~",
                    'coba_id' => "9",
                    'img' => "http://www.merbabu.com/gunung/gede/parkiran_selabintana.jpg",
                ),
            37 =>
                array (
                    'name' => "~",
                    'coba_id' => "9",
                    'img' => "http://www.merbabu.com/gunung/gede/kawah-gunung-gede.jpg",
                ),
            38 =>
                array (
                    'name' => "~",
                    'coba_id' => "10",
                    'img' => "https://catatanalam.files.wordpress.com/2018/02/gun-5.jpg",
                ),
            39 =>
                array (
                    'name' => "~",
                    'coba_id' => "10",
                    'img' => "https://catatanalam.files.wordpress.com/2018/02/gun-6.jpg",
                ),
            40 =>
                array (
                    'name' => "~",
                    'coba_id' => "10",
                    'img' => "https://catatanalam.files.wordpress.com/2018/02/gun-7.jpg",
                ),
            41 =>
                array (
                    'name' => "~",
                    'coba_id' => "10",
                    'img' => "https://catatanalam.files.wordpress.com/2019/07/ydxj1921.jpg",
                ),
            42 =>
                array (
                    'name' => "~",
                    'coba_id' => "11",
                    'img' => "https://2.bp.blogspot.com/-tP30aGjTCR4/WZjs_fhZtiI/AAAAAAAAKBI/lMGhQ9pGlZkgUGkhvDe_3b3nX_z-SlU4QCLcBGAs/s320/P_20170729_132136.jpg",
                ),
            43 =>
                array (
                    'name' => "~",
                    'coba_id' => "11",
                    'img' => "https://4.bp.blogspot.com/-f2FMxn5E6pU/WZpPu0y0_VI/AAAAAAAAKB0/ErYLXeHs_W8aPq5Di0vhU9-T56fMhMOIACLcBGAs/s320/P_20170729_141801.jpg",
                ),
            44 =>
                array (
                    'name' => "~",
                    'coba_id' => "11",
                    'img' => "https://3.bp.blogspot.com/-dHeVljEybdM/WZpZJFPmDYI/AAAAAAAAKDM/UiJ_zrFwdXEqGm2uWtCJEOreTW356BV9wCLcBGAs/s320/P_20170730_095110.jpg",
                ),
            45 =>
                array (
                    'name' => "~",
                    'coba_id' => "12",
                    'img' => "https://3.bp.blogspot.com/-dHeVljEybdM/WZpZJFPmDYI/AAAAAAAAKDM/UiJ_zrFwdXEqGm2uWtCJEOreTW356BV9wCLcBGAs/s320/P_20170730_095110.jpg",
                ),
            46 =>
                array (
                    'name' => "~",
                    'coba_id' => "12",
                    'img' => "https://airebobichon.files.wordpress.com/2017/08/4-travelerjournal89-blogspot-com.jpg",
                ),
            47 =>
                array (
                    'name' => "~",
                    'coba_id' => "12",
                    'img' => "https://airebobichon.files.wordpress.com/2017/08/5-infobdg-com.jpg",
                ),
            48 =>
                array (
                    'name' => "~",
                    'coba_id' => "12",
                    'img' => "https://airebobichon.files.wordpress.com/2017/08/9-fokusjabar-com.jpg",
                ),

        ));
    }
}