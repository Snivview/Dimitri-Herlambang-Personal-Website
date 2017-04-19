<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>The Spotlight</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <link href="common/css/base.css" rel="stylesheet">
</head>

<body>
    <div id="wrap">
	<?php 
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/test/02/common/header.php";
		include_once($path);
	?>
        <div id="mainArea" class="clearfix">
            <div class="topHeading">
                <h1>The Spotlight</h1>
                <h2>Rangkaian Peristiwa dalam Sebuah Sorotan</h2>
            </div> <!-- /.topHeading -->
            
            <div class="wrap01">
                <div class="container">
                    <div class="block">
                        <div><img src="img/spot01.png"></div>
                        <h3>Peluncuran Suzuki Ignis</h3>
                        <p>Lebih dari sekedar LCGC, City Car lansiran Suzuki ini mencoba mengusik pasar LCGC yang sebelumnya dikuasai pabrikan Jepang lainnya.</p>
                        <div class="readMore">
                            <ul><li>Advertorial</li></ul>
                        </div>
                    </div>
                    <div class="block">
                        <div><img src="img/spot02.jpg"></div>
                        <h3>Longsor Wilis</h3>
                        <p>Sebulan sudah warga lereng gunung Wilis dirundung rasa waswas akibat bergesernya tanah tempat mereka tinggal.</p>
                        <div class="readMore">
                            <ul><li>Dalam Negeri</li></ul>
                        </div>
                    </div>
                    <div class="block">
                        <div><img src="img/spot03.png"></div>
                        <h3>Pilkada Banten</h3>
                        <p>Pasca sepeninggalan Ratu Atut yang diciduk lembaga KPK beberapa tahun lalu, warga banten masih dihadapkan pada sebuah pilihan sulit.</p>
                        <div class="readMore">
                            <ul><li>Politik</li></ul>
                        </div>
                    </div>
                    <div class="block">
                        <div><img src="img/spot04.jpg"></div>
                        <h3>Suriah Berkecamuk</h3>
                        <p>Kondisi politik timur tengah yang selalu dalam kondisi labil, Suriah menjadi salah satu zona perang antara kelompok radikal dengan negara-negara adidaya.</p>
                        <div class="readMore">
                            <ul><li>Politik Internasional</li></ul>
                        </div>
                    </div>
                    <div class="block">
                        <div><img src="img/spot05.jpeg"></div>
                        <h3>Trump Effect</h3>
                        <p>Belum genap satu tahun, manuver Presiden negeri Paman Sam Donald John Trump dalam "mengembalikan kejayaan Amerika" sudah cukup menggemparkan elite politik dunia, lantas bagaimana dampaknya di Indonesia ?</p>
                        <div class="readMore">
                            <ul><li>Politik Internasional</li></ul>
                        </div>
                    </div>
                </div> <!-- /.container -->
            </div> <!-- /.wrap01 -->
		</div> <!-- /#mainArea -->
	<?php 
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/test/02/common/footer.php";
		include_once($path);
	?>
    </div> <!-- /#wrap -->
    
    <script>
    </script>
</body>
</html>