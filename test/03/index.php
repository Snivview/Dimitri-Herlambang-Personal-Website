<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Interaktif Klasika</title>
    <link rel="icon" href="/_common/_img/tab_logo.png">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <link href="_common/css/base.css" rel="stylesheet">
</head>

<body>
    <div id="wrap">
    <!-- include header -->
	 <?php  /* 
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/test/02/common/header.php";
		include_once($path); */
	?>
        <!-- <div id="headerArea" class="clearfix">
            <div class="wrap01">
                <ul class="dispInline" id="hNav">
                    <li><a href="http://karier.kompas.id" target="_blank">Kompas Karier</a></li>
                    <li><a href="http://klasika.kompas.id" target="_blank">Klasika</a></li>
                    <li><a href="http://klasika.kompas.id" target="_blank">Advertorial</a></li>
                </ul>
            </div>
        </div> -->
        
        <div id="mainArea" class="clearfix">
            <div class="topHeading">
                <h1>Interaktif Klasika</h1>
                <h2>Ragam Advertorial Kegiatan di Sekitar Anda</h2>
            </div> <!-- /.topHeading -->
            
            <div class="wrap01">
                <div class="multiple">
                    <div class="block01" onclick="window.open('ride/');">
                        <div><img src="_img/interaktif_01.png"></div>
                        <h3>Ride Jakarta</h3>
                        <div class="flipLeft"><p class="type01">Advertorial &#9654;</p></div>
                        <div class="flipTop">
                            <p>Bukan cuma waktu, kesehatan pun jadi aset berharga bagi masyarakat urban. Bisa dimaklumi kemudian jika pusat kebugaran kian menjamur di berbagai penjuru kota. Salah satu yang naik daun adalah <span class="tI">boutique fitness studio</span>. &#9654;</p>
                        </div>
                    </div> <!-- /.block01 -->
                    <div class="block01">
                        <div><img src="_img/interaktif_02.png"></div>
                        <h3>Keistimewaan Umrah di Bulan Ramadhan</h3>
                        <div class="flipLeft"><p class="type01">Eksplor &#9654;</p></div>
                        <div class="flipTop">
                            <p>Padatnya jemaah umrah pada bulan Ramadhan menjadi keistimewaan sendiri di bulan yang penuh berkah ini. &#9654;</p>
                        </div>
                    </div> <!-- /.block01 -->
                    <div class="block01">
                        <div><img src="_img/spot03.png"></div>
                        <h3>Perumahan Citra Maja Raya</h3>
                        <div class="flipLeft"><p class="type01">Sponsored by Ciputra Group &#9654;</p></div>
                        <div class="flipTop">
                            <p>Proyek rumah murah baru dari Ciputra yang berlokasi di kawasan Maja, Banten. Seperti apa penawaran dan prospek kedepannya ? &#9654;</p>
                        </div>
                    </div> <!-- /.block01 -->
                    <div class="block01">
                        <div><img src="_img/spot04.png"></div>
                        <h3>Hello Moto Z</h3>
                        <div class="flipLeft"><p class="type01">Sponsored by Lenovo Motorola &#9654;</p></div>
                        <div class="flipTop">
                            <p>Transformasi smartphone Moto Z dan Moto Z Play anda menjadi perangkat yang benar-benar berbeda. Proyektor movie, kamera, baterai pamungkas, speaker stereo dan lainnya. &#9654;</p>
                        </div>
                    </div> <!-- /.block01 -->
                    <div class="block01">
                        <div><img src="_img/spot05.png"></div>
                        <h3>Samsung New Galaxy A</h3>
                        <div class="flipLeft"><p class="type02">Advertorial &#9654;</p></div>
                        <div class="flipTop">
                            <p>Samsung kembali melakukan penyegaran terhadap Smartphone kelas menengah seri A, apa saja fitur yang ditambahkan ? &#9654;</p>
                        </div>
                    </div> <!-- /.block01 -->
                    <div class="block01">
                        <div><img src="_img/spot06.png"></div>
                        <h3>Tokopedia</h3>
                        <div class="flipLeft"><p class="type02">Klasika &#9654;</p></div>
                        <div class="flipTop">
                            <p>Disebut sebagai salah satu pelopor start-up e-commerce di Indonesia, kini Tokopedia kembali mendapatkan suntikan modal senilai 1,9 triliun rupiah. Bagaimana sepak terjangnya hingga sebesar sekarang? &#9654;</p>
                        </div>
                    </div> <!-- /.block01 -->
                    <div class="block01">
                        <div><img src="_img/spot07.png"></div>
                        <h3>Renault Kwid</h3>
                        <div class="flipLeft"><p class="type01">Sponsored by Renault &#9654;</p></div>
                        <div class="flipTop">
                            <p>Kehadiran pabrikan Eropa yang ingin menunjukkan eksistensinya di pasar melalui mobil LCGC yang dikembangkan di India ini menawarkan harga yang sangat terjangkau, seperti apa kualitasnya ? &#9654;</p>
                        </div>
                    </div> <!-- /.block01 -->
                    

               
               
               
                </div> <!-- /.container -->
            </div> <!-- /.wrap01 -->
		</div> <!-- /#mainArea -->
		
	<!-- include footer -->
	<?php 
        /*
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/test/02/common/footer.php";
		include_once($path);
        */
	?>
    </div> <!-- /#wrap -->
    
    <script src="_common/js/jQuery.js" type="text/javascript"></script>
  
    <script> /* animation when hovering a particular article*/
        $( document ).ready(function(){
            $('.block01').hover(
                function(){
                    $('.flipLeft',this).addClass('showFlipLeft')
                    $('.flipTop',this).addClass('showFlipTop') 
                    $(this).addClass('block01Colored') 
                },
                function(){ 
                    $('.flipLeft',this).removeClass('showFlipLeft')
                    $('.flipTop',this).removeClass('showFlipTop')
                    $(this).removeClass('block01Colored') 
                }
            )
        });
    </script>
    <script> /* mobile device hover effect */
        if ($(window).width() < 769) {
            $('.flipLeft').addClass('showFlipLeft');
            $('.flipTop').addClass('showFlipTop');
            $('.block01').addClass('block01Colored');
        } else {
            $('.flipLeft').removeClass('showFlipLeft');
            $('.flipTop').removeClass('showFlipTop');
            $('.block01').removeClass('block01Colored');
        }
    </script>
	<script>
		
	</script>
    <script>/* navigate using arrow keys */</script>
</body>
</html>