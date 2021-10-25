<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Produk;
use App\Models\Kecamatan;

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
            'name'=>'admin',
            'username'=>'admin',
            'email'=>'admin@gmail.com',
            'usertype'=>1,
            'jk'=>'Perempuan',
            'phone'=>'081987654321',
            'kecamatan_id'=>1,
            'address'=>'Bandung',
            'password'=>bcrypt('password')
        ]);

        User::create([
           'name'=>'Sheila Azhar',
           'username'=>'sheilaazhar',
           'email'=>'sheila.azhar98@gmail.com',
           'usertype'=>0,
           'jk'=>'Perempuan',
           'phone'=>'081234567890',
           'kecamatan_id'=>9,
           'address'=>'Kuningan',
           'password'=>bcrypt('password')
        ]);

        User::create([
           'name'=>'Meira',
           'username'=>'meiradwiana',
           'email'=>'meira@gmail.com',
           'usertype'=>0,
           'jk'=>'Perempuan',
           'phone'=>'081234567100',
           'kecamatan_id'=>10,
           'address'=>'Cimahi',
           'password'=>bcrypt('password')
        ]);

        User::create([
           'name'=>'Anne',
           'username'=>'anneaudistya',
           'email'=>'anne@gmail.com',
           'usertype'=>0,
           'jk'=>'Perempuan',
           'phone'=>'081234569100',
           'kecamatan_id'=>5,
           'address'=>'Bogor',
           'password'=>bcrypt('password')
        ]);

        //User::factory(3)->create();

        Post::factory(20)->create();

        Post::create([
             'title'=>'Puntung Rokok, Masker Bekas, dan Ampas Kopi Jadi Kacamata Sampai Jam Tangan',
             'slug'=>'puntung-rokok-masker-bekas-dan-ampas-kopi-jadi-kacamata-sampai-jam-tangan',
             'excerpt'=>'Tahukah kamu kalau masker bekas, ampas kopi, bahkan puntung rokok bisa diolah menjadi produk yang bermanfaat. Limbah tadi harus melewati berbagai proses hingga menjadi bingkai kacamata, bodi jam tanga...',
             'body'=>'<div>Tahukah kamu kalau masker bekas, ampas kopi, bahkan <strong>puntung rokok</strong> bisa diolah menjadi produk yang bermanfaat. Limbah tadi harus melewati berbagai proses hingga menjadi bingkai kacamata, bodi jam tangan, sampai benda serba guna lainnya.</div><div><br>Direktur Utama PT Ide Dua Cipta, Rony Rahardian yang juga dikenal sebagai seniman Rebellionik mengambil bagian dalam daur ulang sampah itu. Dia menggagas KYB Project, sebuah gerakan kreatif berkelanjutan yang mengolah limbah konsumsi harian menjadi bahan baku multiguna yang dapat bermanfaat. Pria yang biasa disapa Onik ini mengatakan, butuh waktu dua tahun untuk riset guna menentukan prosedur pengolahan dan hasil dari produk daur ulang ini.</div><div><br>"Aku memulai riset KYB Project pada 2019 karena banyak bersinggungan dengan limbah konsumsi sehari-hari, seperti bahan produksi studio, puntung rokok, ampas kopi, gelas kopi bekas, hingga masker yang digunakan selama beraktivitas," kata Rony dalam peluncuran KYB Project secara virtual pada Kamis, 21 Oktober 2021. Dalam menjalankan proyek ini, dia menggandeng 15 kedai kopi di Jakarta, Bandung, dan Yogyakarta, untuk mendapatkan pasokan puntung rokok, ampas kopi, dan masker.<br><br>Di Jakarta, <strong>kedai kopi</strong> yang terlibat dalam KYB Project ini adalah Ruang Seketika, Brookland, KOLO, Dua Coffee Cipete, Tujuhari, Stuco, dan Berkah Jaya Bike (bengkel sepeda dengan fasilitas kedai kopi). Di Bandung, proyek ini mengikutsertakan Kedai Kopi Yumaju, Two Hands Full, Got Beef Burgerc, dan Kozi. Serta di Yogyakarta bersama Awor, Tekoff Coffee and Tea, SUA Coffee, dan Satu Lokasi.<br><br></div><div>Sampah masker, puntung rokok, dan ampas kopi dari semua kedai kopi tersebut terkumpul dan diolah di KYB Mini Lab di Bandung, Jawa Barat. Khusus di Kota Bandung dan Jakarta, pengambilan limbah dilakukan oleh jasa pengantaran dengan moda sepeda, Westbike Messenger.<br><br>Rony menjelaskan, riset yang cukup lama untuk menentukan formula dan proses produk daur ulang ini guna meminimalisir limbah baru. Saat itu, dia mempertimbangkan dua hal yang cukup pelik. Menggunakan metode kimiawi dengan risiko memunculkan limbah baru atau menerapkan metode mekanikal yang cukup banyak memakan energi listrik.<br><br></div><div>"Akhirnya kami memilih <em>bio chemical</em> yang prosesnya lebih mudah dan menekan residunya." ujarnya. Limbah hasil proses produksi, menurut dia, aman untuk dimanfaatkan lebih lanjut untuk keperluan industri lain atau kebutuhan produksi berikutnya alias <em>reuse</em>.<br><br></div><div>Setiap <strong>limbah</strong> yang sampai di KYB Mini Lab Bandung akan disortir. Untuk puntung rokok misalkan, harus memisahkan dulu antara busa, kertas, dan sisa tembakaunya. Bahan-bahan yang lain juga disortir kemudian diolah menjadi <em>flake </em>atau berbentuk kepingan kecil. Lalu mulai proses pembuatan produk yang diinginkan.<br><br></div><div>Rony berharap KYB Project dapat menginspirasi dan melibatkan banyak pihak untuk terlibat dalam pengumpulan limbah atau sampai pengembangan produksi. Ke depan, Rony menyasar Bali sebagai titik daur ulang selanjutnya.</div>',
             'image'=>'post-images/PzLjumci2B3d3x8TbDXQ3QK5Lbc81wh1ngzsw4I0.jpg',
             'user_id'=>1
         ]);

        Post::create([
             'title'=>'PPSU Palmerah Bikin 400 Kilogram Pupuk Kompos dari 3 Ton Sampah',
             'slug'=>'ppsu-palmerah-bikin-400-kilogram-pupuk-kompos-dari-3-ton-sampah',
             'excerpt'=>'Jakarta - Petugas Penanganan Prasarana dan Sarana Umum (PPSU) Palmerah, Jakarta Barat, membuat 400 kilogram pupuk kompos dari tiga ton sampah. Petugas PPSU Kota Bambu Selatan, Palmerah, Rupansah menga...',
             'body'=>'<div>Jakarta - Petugas Penanganan Prasarana dan Sarana Umum (PPSU) Palmerah, Jakarta Barat, membuat 400 kilogram pupuk kompos dari tiga ton sampah. Petugas PPSU Kota Bambu Selatan, Palmerah, Rupansah mengatakan daur ulang sampah ini dilakukan dalam beberapa bulan terakhir.&nbsp;<br><br>"Kami mempergunakan sampah untuk diolah menjadi kompos," kata Rupansah di lokasi pengolahan sampah di kompleks Museum Tekstil, Jakarta Barat, Rabu 20 Oktober 2021.</div><div><br>PPSU mendaur ulang sampah Jakarta untuk mengurangi volume limbah yang dibawa ke tempat pengolahan sampah terpadu (TPST) Bantargebang. Setiap bulan, Rupansah menerima tiga ton sampah organik kering, berupa daun dan kayu kering, serta sampah organik basah seperti sampah dapur untuk diolah kembali.</div><div><br>Di tempat pengolahan sampah ini, semua daun dan sayuran tersebut akan dicacah, ditimbun dan dicampur cairan fermentasi. Setelah membusuk dan terurai, sampah itu siap digunakan menjadi pupuk kompos.</div><div><br>Rupansah mengatakan proses pencacahan hingga penimbunan itu memerlukan waktu 25 hari. "Setelah itu baru bisa jadi pupuk," ujarnya.<br><br>Pupuk kompos sebanyak 400 kilogram yang dihasilkan dari daur ulang sampah organik itu digunakan untuk taman kota di kelurahan setempat. Ada pula warga yang membeli pupuk kompos tersebut. "Biasanya dijual Rp10.000 per karung," kata petugas PPSU itu.</div>',
             'image'=>'post-images/JuMZJBug7aQvcKQFStB6vFKNzD9iMgBDesGixSm1.jpg',
             'user_id'=>1
         ]);

        Post::create([
             'title'=>'Debit Kali Ciliwung Naik, UPK Badan Air: Sampah Menumpuk di Pintu Air Manggarai',
             'slug'=>'debit-kali-ciliwung-naik-upk-badan-air-sampah-menumpuk-di-pintu-air-manggarai',
             'excerpt'=>'Jakarta - Kenaikan debit Kali Ciliwung pada Rabu pagi menyebabkan sampah menumpuk di pintu Air Manggarai. Kepala Satpel Wilayah Kerja Jakarta Pusat Unit Pelaksana Kebersihan (UPK) Badan Air Farry Andi...',
             'body'=>'<div><strong>Jakarta - </strong>Kenaikan debit Kali Ciliwung pada Rabu pagi menyebabkan sampah menumpuk di pintu Air Manggarai. Kepala Satpel Wilayah Kerja Jakarta Pusat Unit Pelaksana Kebersihan (UPK) Badan Air Farry Andiko mengatakan sampah itu adalah kiriman dari hulu Ciliwung.<br><br></div><div>Sampah kiriman hulu Ciliwung yang sampai di pintu air Manggarai pada hari ini meningkat hingga 250 meter kubik. Farry mengatakan sampah dari hulu itu terbawa arus air karena pintu air Depok sempat siaga tiga pada Selasa malam, dengan tinggi muka air (TMA) 203 sentimeter.&nbsp; &nbsp;&nbsp;<br><br></div><div>"Makanya sampah yang terbawa ke pintu air Manggarai volumenya besar," kata Farry di Jakarta, Rabu 20 Oktober 2021.<br><br></div><div>Menurut Farry, debit air di pintu air Manggarai juga naik menjadi 725 sentimeter pada Rabu dini hari akibat peningkatan debit Ciliwung. Namun status pintu air Manggarai masih siaga empat. Pada Rabu siang, TMA di Manggarai sudah turun ke 655 cm.<br><br>Sejak Rabu pagi, sampah yang tersangkut di pintu air Manggarai sudah mulai diangkat. Petugas UPK Badan Air Dinas Lingkungan Hidup DKI Jakarta mengerahkan tiga alat berat dan lima mobil pengangkut sampah. "Hampir kelar," ujar Farry.<br><br>Sampah yang terbawa Kali Ciliwung hingga pintu air Manggarai beragam, mulai dari sampah rumah tangga, kayu dan batang bambu, plastik, kasur hingga lemari pakaian.</div>',
             'image'=>'post-images/zBJGzts7Zjsxeeor1qYpF7l6V2lPRF9hLKXJmtoW.jpg',
             'user_id'=>1
         ]);

        Post::create([
             'title'=>'Tertarik Usaha Daur Ulang Sampah Plastik? Begini Cara Memulainya',
             'slug'=>'tertarik-usaha-daur-ulang-sampah-plastik-begini-cara-memulainya',
             'excerpt'=>'Sampah plastik adalah musuh lingkungan. Tidak seperti zat yang bisa terurai, plastik tidak dapat terurai dengan cara alami. Miliaran produk plastik telah memenuhi bumi, sebagian besar barang yang digu...',
             'body'=>'<div><strong>Sampah plastik</strong> adalah musuh lingkungan. Tidak seperti zat yang bisa terurai, plastik tidak dapat terurai dengan cara alami. Miliaran produk plastik telah memenuhi bumi, sebagian besar barang yang digunakan dan temukan sehari-hari, seperti botol, sikat gigi, mug, ember, bak mandi, wadah, kantung, dan banyak lagi.</div><div>Pemanfaatan bahan plastik dirasa sangat penting. Selain membantu mengurangi bahan yang tidak dapat terurai dengan cara alami masuk kedalam bumi, banyaknya bahan plastik juga memberi peluang usaha yang sangat besar. Salah satunya bisnis <strong>daur ulang sampah</strong> plastik yang diketahui bisa sangat menguntungkan jika dilakukan dengan perencanaan yang tepat. Berikut cara mendaur ulang plastik di pabrik daur ulang plastik skala kecil.</div><div><strong>Daur ulang, gunakan lagi, kurangi</strong><br>Cara terbaik untuk mengurangi sampah plastik adalah dengan mendaur ulang dan menggunakan kembali. Saat ini banyak orang yang mendirikan pabrik daur ulang, di mana sampah plastik seperti botol, kantung, wadah, kotak, bungkus, sprei, dan sejenisnya didaur ulang menjadi produk yang bermanfaat.</div><div><strong>Rencana bisnis daur ulang</strong><br>Berikut beberapa tujuan yang perlu diperhatikan sebelum memulai bisnis daur ulang plastik:<br>-Apa saja persyaratannya?<br>-Total investasi yang dibutuhkan untuk mendirikan pabrik daur ulang<br>-Kebutuhan tanah atau pabrik<br>-Kebutuhan utilitas dan mesin<br>-Pengumpulan sampah plastik<br>-Jenis sampah plastik apa yang akan didaur ulang<br>-Pasar setelah daur ulang<br>-Margin keuntungan<br>-Pengembalian investasi<strong><br>Syarat pembukaan pabrik daur ulang sampah plastik</strong><br>-Hal dasar pertama yang dibutuhkan untuk membuka pabrik daur ulang adalah tempat yang layak. Setidaknya harus ada ruang yang layak untuk menyimpan semua limbah dan produk limbah selain dari peralatan dan utilitas.</div><div>-Hal kedua yang dibutuhkan adalah ruang tertutup yang mirip dengan pabrik tetapi berukuran kecil, n setidaknya 100 meter persegi.</div><div>-Persyaratan penting berikutnya adalah mesin yang akan digunakan untuk mendaur ulang sampah plastik.</div><div>-Berikutnya adalah sampah plastik yang perlu didaur ulang. Untuk ini Anda dapat membuat jaringan pemasok yang dapat memasok jumlah sampah plastik yang dibutuhkan.</div><div><strong>Kebutuhan lahan dan pabrik</strong><br>Untuk daur ulang skala kecil maka ruangan seluas 20 m persegi juga dapat digunakan. Tetapi jika ingin daur ulang skala besar maka setidaknya diperlukan lahan seluas 60-150 m persegi untuk proses daur ulang. Anda harus memiliki ruang yang bersih dan tertutup untuk menyimpan mesin. Semua ruangan tertutup tersebut harus berventilasi untuk menghindari mati lemas. Sebuah ruang besar harus didedikasikan untuk membuang sampah plastik sementara ruang yang bersih diperlukan untuk menyimpan produk daur ulang.</div><div><strong>Persyaratan utilitas</strong><br>-Hal terpenting yang dibutuhkan adalah koneksi listrik yang tepat. Anda harus mengambil koneksi yang diperlukan berdasarkan kebutuhan daya.</div><div>-Hal penting lain adalah pasokan air yang tepat.</div><div>-Untuk kasus darurat, Anda harus menyimpan generator yang tepat.</div><div>-Peralatan lain termasuk suku cadang yang terkait dengan daur ulang, peralatan kecil, mesin, kompresor, perabot.</div><div><strong>Mesin daur ulang</strong><br>Anda perlu membeli mesin yang diperlukan untuk mendaur ulang sampah plastik. Plastik dipres terlebih dulu dan dilebur menggunakan mesin, kemudian diberi bentuk kecil-kecil, didinginkan menggunakan air dingin. Mesin ini ada berbagai jenis. Beberapa mesin memiliki semua dalam satu fitur sementara beberapa hanya sebagian.</div><div>Mesin juga bergantung pada jenis plastik yang didaur ulang dan pada skala apa Anda mendaur ulang. Berdasarkan ini tingkat mesin tergantung. Akan lebih baik jika memilih mesin skala besar yang memiliki berbagai fitur.</div><div><strong>Proses yang terlibat dalam daur ulang sampah plastik</strong><br>-Pengumpulan sampah plastik dan pembuangannya<br>-Pemilahan dan pemisahan sampah plastik seperti PVC, ABS, LD,<br>-Menggiling<br>-Anda sekarang dapat memasok bahan baku plastik ke unit daur ulang<br>-Proses daur ulang dimulai<br>-Kompresi dan peleburan bahan baku yang diperoleh setelah proses penggilingan<br>-Pembentukan pelet<br>-Pembuatan produk baru seperti kursi, meja, botol.</div><div>Langkah utama dalam daur ulang adalah mengompresi dan melelehkan plastik menjadi cairan. Langkah selanjutnya melibatkan penyaringan, di mana residu limbah dihilangkan dan kualitas cairan yang lebih tinggi dilewatkan. Langkah selanjutnya membutuhkan pembentukan plastik cair. Sebagian besar berbentuk batu bata kecil atau berbentuk pelet. Mereka didinginkan dalam air dingin dan kemudian dimasukkan ke dalam wadah kering.</div><div><strong>Teknisi dan tenaga kerja</strong><br>Untuk melakukan semua proses daur ulang Anda pasti membutuhkan pikiran teknis plus tenaga manusia. Pekerjakan teknisi yang tahu cara bekerja dengan mesin dan mendaur ulang plastik.</div><div><strong>Terlibat langsung</strong><br>-Bergabunglah dengan pemulung dan rumah pengumpul sampah plastik.<br>-Buatlah jaringan sehingga mereka dapat menyediakan jumlah sampah plastik yang dibutuhkan.</div><div>Jenis plastik apa yang akan didaur ulang? Cobalah mulai dengan pabrik kecil yang mendaur ulang botol plastik, lembaran plastik, kantung, wadah kecil, dan sejenisnya.</div><div><strong>Persyaratan dan penggunaan</strong><br>Berdasarkan penggunaan, pasar plastik daur ulang ini dijual di pasar. Untuk membuatnya lebih sukses secara ekonomi, seseorang dapat mulai membuat produk plastik dasar. Membuat kantung adalah salah satu cara yang paling sukses untuk menggunakan plastik daur ulang. Untuk ini Anda hanya membutuhkan mesin yang memproduksi kantung ini.</div><div><strong>Pasar</strong><br>Pasar akan bergantung pada jenis plastik dan berapa kali didaur ulang. Buat pasar yang kuat, yang dapat menawarkan harga berbeda untuk plastik <strong>daur ulang</strong>. Anda dapat menjualnya ke perusahaan manufaktur produk plastik, pembuat kantung, otoritas transportasi jalan, dan sebagainya.</div><div><strong>Pengembalian investasi</strong><br>Anda dapat mengambil pinjaman selama investasi, membiayai usaha atau dapat berbagi biaya dengan mitra. Jika berhasil mengurangi investasi dalam pengaturan pabrik maka Anda mungkin mendapatkan pengembalian awal. Setelah beberapa bulan memulai, Anda bisa balik modal dan mulai mengumpulkan keuntungan.</div>',
             'image'=>'post-images/HJTkFCfz45uW1TqAVQiIl6SQ15Kaj8tDZ8cCWB4a.jpg',
             'user_id'=>1
         ]);

        Post::create([
             'title'=>'Satu Orang Indonesia Hasilkan 0,68 Kilogram Sampah Per Hari, Juga Sampah Plastik',
             'slug'=>'satu-orang-indonesia-hasilkan-0-68-kilogram-sampah-per-hari-juga-sampah-plastik',
             'excerpt'=>'Film Dokumenter Pulau Plastik produksi Visinema Pictures, Kopernik, Akarumput, dan Watchdoc. Disutradarai Dandhy Dwi Laksono, Rahung Nasution dan telah dirilis pada 22 April 2021 lalu. Film berdurasi...',
             'body'=>'<div>Film Dokumenter Pulau Plastik produksi Visinema Pictures, <em>Kopernik</em>, Akarumput, dan Watchdoc. Disutradarai Dandhy Dwi Laksono, Rahung Nasution dan telah dirilis pada 22 April 2021 lalu. Film berdurasi 1 jam 42 menit itu mengangkat isu tentang tiga sosok yang berjuang melawan sampah plastik sekali pakai, adalah Gede Robi, Tiza Mafira dan Pigi Arisandi. Ketiga tokoh utama dalam film ini melakukan penelusuran sejauh mana jejak sampah plastik menyusup ke dalam rantai makanan manusia, dampak bagi kesehatan, dan apa yang harus dilakukan untuk mengatasi krisis polusi plastik.<br><br>Pada hakikatnya sampah tetaplah masalah, bahkan bagi si pembuat sampah. Bank Dunia melaporkan pada pertengahan September 2019, yang melansir dari data mengenai produksi sampah global, menyebutkan bahwa setidaknya terdapat 2.01 miliar ton sampah yang menumpuk di dunia ini pada 2016.<br><br>Jumlah tersebut terus meningkat dan pada 2050 mendatang jumlah sampah akan mencapai 3.4 miliar ton, jumlah tersebut menimbang dari laju pertumbuhan penduduk dunia yang mencapai angka 70 persen.<br><br>Sistem daur ulang bisa saja diterapkan, namun sayangnya hal tersebut baru bisa berlaku di negara-negara maju. Sementara di negara berkembang kebanyakan masih mengalami kesulitan dalam menangani masalah sampah ini, sebab mengelola sampah berarti harus menggelontorkan dana 20 hingga 50 persen dari total keseluruhan biaya yang dikeluarkan untuk pembangunan sebuah negara.Dilansir dari laman indonesia.go.id, Lembaga berwenang atas “penghasilan sampah” Kementerian Lingkungan Hidup dan Kehutanan atau KLHK dengan lapang dada mengakui pada 2020 total sampah nasional mencapai angka 67.8 juta ton. Itu berarti 270 juta penduduk Indonesia per harinya menghasilkan sekitar 185.753 ton sampah, atau 0.68 kilogram per individunya.<br><br>Dibandingkan dengan tahun-tahun sebelumnya, angka tersebut mengalami peningkatan. Pada 2018, produksi sampah nasional mencapai 64 juta ton dari 167 juta penduduknya dan menjadi bagian dari sampah-sampah yang menggunung di timbunan tempat-tempat pembuangan akhir.<br><br>Kepala Sub Direktorat Barang dan Kemasan, Direktorat Pengelolaan Sampah KLHK Ujang Solihin Sidik mengaku bahwa pengelolaan sampah di Indonesia belum optimal. Menurutnya, dari 514 kabupaten atau kota yang ada di Indonesia, kapasitas pengelolaan sampahnya rata-rata masih di bawah 50 persen. Sementara di kota-kota besar, pengelolaan sampahnya sudah mencapai 70 hingga 80 persen.<br><br>“Namun, polanya belum juga berubah, masih terpaku pada pola lama,” kata Ujang Solihin, dalam jumpa pers virtual terkait Peringatan HPSN 2021, pada Kamis, 18 Februari 2021 lalu, dikutip dari indonesia.go.id.<br><br>Pola lama tersebut yakni menggunakan pola linier kumpul-angkut-buang, padahal pola tersebut sudah ketinggalan zaman, padahal di negara-negara maju lainnya sudah mengadopsi pola ekonomi sirkular, daur ulang sampah dengan memanfaatkan nilai ekonomi sampah termasuk sampah plastik secara maksimal dari menerapkan reduce, reuse, recycle atau 3R.</div>',
             'image'=>'post-images/DHyrmiPkCTmagL4l11JqnRMOebIjcfFqsDnzcAd5.jpg',
             'user_id'=>1
         ]);

        Produk::create([
            'image'=>'produk-images/XQuBkT8GaX9Fef71L6jJOvji7eQDndRENL6Qw3jg.png',
            'nama_produk'=>'Fancy Bag Plastic',
            'bahan'=>'Plastik',
            'harga'=>85000,
            'stok'=>10
         ]);

        Produk::create([
            'image'=>'produk-images/iVoQkIfABJQOqwnAIl8NVdYB80Fyt1e4KnWuUmfX.png',
            'nama_produk'=>'Gaun Fashion Paper',
            'bahan'=>'kertas',
            'harga'=>145000,
            'stok'=>5
         ]);

        Produk::create([
            'image'=>'produk-images/oQVqGHhDDJSoha2oSCTYZTJQYNBSRUZULT2gW2gh.webp',
            'nama_produk'=>'Pot',
            'bahan'=>'Majalah',
            'harga'=>20000,
            'stok'=>15
         ]);

        Produk::create([
            'image'=>'produk-images/GJ3vHH22Ld0WFcDdx0YLCuH9bEJAEEF82jia4PSw.webp',
            'nama_produk'=>'Tempat Pensil',
            'bahan'=>'Botol Plastik',
            'harga'=>15000,
            'stok'=>25
         ]);

         Kecamatan::create([
            'nama_kecamatan'=>'Bandung Kulon'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Babakan Ciparay'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Bojongloa Kaler'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Bojongloa Kidul'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Astanaanyar'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Regol'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Lengkong'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Bandung Kidul'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Buah batu'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Rancasari'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Gedebage'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Cibiru'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Panyileukan'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Ujung Berung'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Cinambo'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Arcamanik'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Antapani'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Mandalajati'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Kiaracondong'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Batununggal'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Sumur Bandung'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Andir'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Cicendo'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Bandung Wetan'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Cibeunying Kidul'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Cibeunying Kaler'
         ]);
    }
}
