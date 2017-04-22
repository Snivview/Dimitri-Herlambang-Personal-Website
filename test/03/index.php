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
		/* $path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/test/02/common/header.php";
		include_once($path); */
	?>
        <!-- <div id="headerArea" class="clearfix">
            <div class="wrap01">
                <ul class="dispInline" id="hNav">
                    <li><a href="http://www.kompas.id" target="_blank"><img src="img/logo-kompas.png"></a></li>
                    <li><a href="http://karier.kompas.id" target="_blank">Kompas Karier</a></li>
                    <li><a href="http://klasika.kompas.id" target="_blank">Klasika</a></li>
                    <li><a href="http://klasika.kompas.id" target="_blank">Advertorial</a></li>
                </ul>
            </div>
        </div> -->
        <div id="mainArea" class="clearfix">
            <div class="topHeading">
                <h1>The Spotlight</h1>
                <h2>Ragam Produk Unggulan Solusi Kebutuhan Anda</h2>
            </div> <!-- /.topHeading -->
            
            <div class="wrap01">
                <div class="container">
                    <div class="block01">
                        <div><img src="img/spot01.png"></div>
                        <h3>Suzuki Ignis</h3>
                        <div class="flipLeft"><p class="type01">Sponsored by Suzuki Indonesia &#9654;</p></div>
                        <div class="flipTop">
                            <p>Lebih dari sekedar LCGC, City Car lansiran Suzuki ini mencoba mengusik pasar LCGC yang sebelumnya dikuasai pabrikan Jepang lainnya.</p>
                        </div>
                    </div> <!-- /.block01 -->
                    <div class="block01">
                        <div><img src="img/spot02.jpg"></div>
                        <h3>Tax Amnesty</h3>
                        <div class="flipLeft"><p class="type01">Sponsored by Direktorat Jenderal Pajak &#9654;</p></div>
                        <div class="flipTop">
                            <p>Usaha Jokowi dalam menarik triliunan dana masyarakat yang disimpan di luar negeri ini menjadi sorotan. Bagi anda yang tertarik mengikuti pengampunan pajak, simak tutorial interaktif berikut.</p>
                        </div>
                    </div> <!-- /.block01 -->
                    <div class="block01">
                        <div><img src="img/spot03.jpg"></div>
                        <h3>Perumahan Citra Maja Raya</h3>
                        <div class="flipLeft"><p class="type01">Sponsored by Ciputra Group &#9654;</p></div>
                        <div class="flipTop">
                            <p>Proyek rumah murah baru dari Ciputra yang berlokasi di kawasan Maja, Banten. Seperti apa penawaran dan prospek kedepannya ?</p>
                        </div>
                    </div> <!-- /.block01 -->
                    <div class="block01">
                        <div><img src="img/spot04.jpeg"></div>
                        <h3>Hello Moto Z</h3>
                        <div class="flipLeft"><p class="type01">Sponsored by Lenovo Motorola &#9654;</p></div>
                        <div class="flipTop">
                            <p>Transformasi smartphone Moto Z dan Moto Z Play anda menjadi perangkat yang benar-benar berbeda. Proyektor movie, kamera, baterai pamungkas, speaker stereo dan lainnya.</p>
                        </div>
                    </div> <!-- /.block01 -->
                    <div class="block01">
                        <div><img src="img/spot05.jpg"></div>
                        <h3>Samsung New Galaxy A</h3>
                        <div class="flipLeft"><p class="type02">Advertorial &#9654;</p></div>
                        <div class="flipTop">
                            <p>Samsung kembali melakukan penyegaran terhadap Smartphone kelas menengah seri A, apa saja fitur yang ditambahkan ?</p>
                        </div>
                    </div> <!-- /.block01 -->
                </div> <!-- /.container -->
            </div> <!-- /.wrap01 -->
		</div> <!-- /#mainArea -->
	<?php 
        /*
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/test/02/common/footer.php";
		include_once($path);
        */
	?>
    </div> <!-- /#wrap -->
    
    <script src="common/js/jQuery.js" type="text/javascript"></script>
    <script> /* hover effect */
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
        if ($(window).width() < 569) {
            $('.flipLeft').addClass('showFlipLeft');
            $('.flipTop').addClass('showFlipTop');
            $('.block01').addClass('block01Colored');
        } else {
            $('.flipLeft').removeClass('showFlipLeft');
            $('.flipTop').removeClass('showFlipTop');
            $('.block01').removeClass('block01Colored');
        }
    </script>
    <script>/* navigate using arrow keys */</script>
    <script>
        function detectmob() { 
            if(navigator.userAgent.match(/Android/i)
            || navigator.userAgent.match(/webOS/i)
            || navigator.userAgent.match(/iPhone/i)
            || navigator.userAgent.match(/iPad/i)
            || navigator.userAgent.match(/iPod/i)
            || navigator.userAgent.match(/BlackBerry/i)
            || navigator.userAgent.match(/Windows Phone/i)
            ){
                $('.flipLeft').addClass('showFlipLeft');
                $('.flipTop').addClass('showFlipTop');
                $('.block01').addClass('block01Colored');
            }
            else {
                $('.flipLeft').removeClass('showFlipLeft');
                $('.flipTop').removeClass('showFlipTop');
                $('.block01').removeClass('block01Colored');;
            }
        }
    </script>
</body>
</html>