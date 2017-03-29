<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dimitri Herlambang Personal Website</title>
    <link rel="icon" href="/_common/img/tab_logo.png">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
    <meta name="description" content="Dimitri Herlambang Personal Website">
    <meta name="keywords" content="Dimitri,Herlambang,Personal,Website">
    <meta name="author" content="Dimitri">
    <link href="/_common/css/base.css" rel="stylesheet">
</head>

<body>
    <div id="wrap">
		<?php 
			$path = $_SERVER['DOCUMENT_ROOT'];
			$path .= "/_common/header.html";
			include_once($path);
		?>
        <div id="mainArea" class="clearfix">
			<div class="container960">
                <p class="t12"><i>sebelumnya artikel ini sudah di publish di blog saya di <a href="http://snivview.wordpress.com">snivview.wordpress.com,</a></i></p>
				<h1>Pengalaman Bekerja di Transcosmos Indonesia – Part 2</h1>
                <div class="mTB30 articles">
                    <p>Part ke-2, Gw sudah tandatangan kontrak PKWT yang berlaku selama satu tahun. Tapi kontrak disini tidak mengikat, tidak ada tahan ijasah, kalau mau resign, cukup one-month notice.</p>
                    <h2>Februari 2016</h2>
                    <p>Awal-awal tahun, musim hujan, hampir setiap hari dibayang-bayangi awan mendung, yang entah dia mau mengucurkan air ke permukaan bumi atau hanya sekedar numpang lewat. Tapi gw selalu siap sedia jas hujan di tas.</p>
                    <p>Jas hujan ? ya, karena gw nebeng ke kantor sama temen yang searah, rumahnya juga di daerah srengseng, alias dekat. Rute pergi lewat kemanggisan, slipi jaya, petamburan, lalu tanah Abang. Rute yang cukup simpel.</p>
                    <p>Trancosmos pada waktu pertama gw masuk, sangat ramai, karyawannya ada sekitar 90 orang di satu lantai. Dari ujung sampai ujung ter-isi semua.</p>
                    <p>Dan di bulan-bulan pertama ini, kami masih menjalani training sampai dianggap siap mengerjakan proyek yang sebenarnya. Materi latihan yang disantap setiap hari kurang lebih, html css, praktek bangun 1 landing page seharian. Perlahan tapi pasti, gw mulai ngerti susunan html, belajar selector juga, tapi belom sampai javascript.</p>
                    <p>Yang jelas, gw bakal stuck kalau di mockup ada menyebutkan “slider” atau “slideshow”. Karena gw belum begitu paham manipulasi DOM pakai javascript atau jQuery, gantinya tutup saja bagian slider pakai gambar. Di akhir hari kami biasanya kumpul satu tim membahas kesulitan yang dialami saat coding, dan leader dan para senior yang sudah berpengalaman memberikan tips supaya codingnya bisa lebih cepat. Kalau gw pribadi, selalu stuck di bagian layout, bingung kenapa div tidak mau ketengah.</p>
                    <h2>Agustus 2016</h2>
                    <p>Pertengahan tahun pertama di Transcosmos tercinta, gw sudah paham kurang lebih, mengenai layouting dan selector-selector CSS. Mau memakai class, atau selector. Penggunaan selector ini mulai berkembang mulai dari CSS2 sampai CSS3.</p>
                    <p>Kemudian dari Transcosmos sendiri juga sudah punya standar penamaan class. Kita semua belajar untuk “menyamakan pikirian”. Setidaknya, bila mengerjakan proyek bersama-sama, kita bisa lebih mudah menentukan class-class yang akan dipakai.</p>
                    <p>Proyek yang pertama kali gw terlibat yakni proyek penggantian atribut konten website, kurang lebih seperti ini instruksinya :</p>
                    <p>instructions<br>
                    1-1 Unify URL（unify index.htm parts with /）<br>
                    1-2 Confirm Act in global navigation<br>
                    2 Change title<br>
                    3 Change breadcrumbs<br>
                    4 Change header text（h1）<br>
                    5 Change description<br>
                    6 Adjust h tag<br>
                    7 Revise OGP setting<br>
                    8 Change text<br>
                    9 Change into noindex tag</p>
                    <p>Kelihatannya sederhana, tapi halaman yang diganti ada RATUSAN. Dan keseluruhan direktori folder ini murni menggunakan HTML TOKK. Alias tidak ada kode PHP, alias tidak ada generate men-generate, sehingga pekerjaannya juga fully manual.</p>
                    <p>Berhubung ini proyek pertama gw, dan gw pada saat itu juga kurang tahu-menahu soal PHP, jadi ya tanpa ada ba-bi-bu langsung saja mengerjakan, sesuai instruksi. Kesulitan yang gw alami terutama pada teks konten yang seluruhnya bahasa Jepang (wajar kliennya dari Jepang, websitenya juga Jepang). Disini gw ditantang untuk SANGAT teliti.</p>
                    <p>Benar saja, ngerjain proyek ini bisa sampai semalaman. PIC alias Person-in-charge, alias atasan gw ngerjain proyek ini sampai jam 9 malam. Kami juga sempat dibantu oleh senior programmer Jepang yang kebetulan sedang berkunjung ke Transcosmos Indonesia. Mereka memperkenalkan teknik “find and replace”, termasuk juga regex, sehingga mengganti konten di ratusan halaman bisa lebih mudah. Nah teknik ini juga, perlu ketelitian, karena contoh saja, kita mau replace :</p>
                    <code>&lt;a href=&quot;/home/index.htm&quot;&gt;</code>
                    <p>menjadi :</p>
                    <code>&lt;a href=&quot;/home/&quot;&gt;</code>
                    <p>Kita bisa pakai find and replace, tapi tetap harus teliti, karena dikhawatirkan bagian halaman lain yang tidak ingin kita ganti malah ikut terganti.</p>
                    <h2>Desember 2016</h2>
                    <p>Kurang lebih, begitulah perjuangan gw di tahun pertama. Banyak pengalaman yang gw dapat, pelajaran yang gw petik, tanggung jawab yang gw pegang, sampai teman-teman yang pergi. Ya, pada penghujung tahun pertama ini, ada sebagian teman-teman di TCID yang memutuskan untuk cabut dan melanjutkan perjuangan ditempat lain. Sementara gw memutuskan untuk tetap tinggal, kebijakan gw adalah, paling tidak sampai pengalaman gw dapat dihitung tahunan, baru gw bisa cabut untuk mencari pengalaman baru.</p>
                    <p>Di penghujung tahun 2016 ini juga gw kebagian outing, alias piknik kantor, lokasinya ke waduk Cileunca, Jawa Barat.</p>
                    <p>Perjalanan kesana memakan waktu sekitar 5 jam. Lewat Cipularang, Bandung Selatan, melewati gunung, melewati lembah, hingga tiba di waduk Cileunca, yang pada saat itu kebetulan ketinggian airnya sedang surut, sehingga waduk tidak terlalu dalam.</p>
                    <p>Kegiatannya kurang lebih, arung jeram, paint-gun, flying fox, hingga kambing guling di malam hari.</p>
                    <p>Setibanya di penginapan, kami bersiap untuk arung jeram di sungai yang menjadi output dari waduk ini. Dan cuaca waktu itu hujan SANGAT DERAS, ditambah baju yang basah dan air di gunung yang cukup dingin, rasanya menggigil. Yang jelas, badan pun bekerja ekstra untuk membakar kalori agar suhu badan tetap pada titik optimal di 35-37 derajat celsius.</p>
                    <p>Kami piknik kantor selama 2 hari. Lumayan untuk refreshing, menikmati udara segar dan hawa yang dingin di dataran tinggi, dan pemandangan waduk yang menakjubkan. Terlepas dari kegiatan kantor harian yang hanya memandang monitor saja, tentu memandang yang hijau-hijau menjadi penyejuk mata, sekaligus "reset" memory otak agar kembali segar.</p>
                    <p>Dan itulah pengalaman tahun pertama gw di Transcosmos Indonesia, part 3 akan berlanjut di kemudian hari.</p>
				</div>
			</div>
		</div><!-- /#mainArea -->
		<?php 
			$path = $_SERVER['DOCUMENT_ROOT'];
			$path .= "/_common/footer.html";
			include_once($path);
		?>
    </div> <!-- /#wrap -->
</body>
</html>