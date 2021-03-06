<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dimitri Herlambang - About Me</title>
    <link rel="icon" href="/_common/img/tab_logo.png">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
    <meta name="description" content="Dimitri Herlambang Personal Website">
    <meta name="keywords" content="Dimitri,Herlambang,Personal,Website">
    <meta name="author" content="Dimitri">
    <link href="/_common/css/base.css" rel="stylesheet">
    <style>
		html:before {
			width: 100%;
			height: 100%;
			left: 0;
			top: 0;
			z-index: -10;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
		html {
			background: url(/_img/main_bg_001.jpg) no-repeat top center;
			-webkit-animation: fadein .5s;
			-moz-animation: fadein .5s;  
			-ms-animation: fadein .5s; 
			-o-animation: fadein .5s; 
			animation: fadein .5s;
		}
		.tabTitle li {
			display: inline-block;
			padding: 15px 0 15px 0;
			margin-right: 15px;
			margin-bottom: 10px;
		}
		.tabTitle li a {padding: 15px;color:#fff;}
		.tabTitleBord {border-bottom: 3px solid rgba(236, 236, 236, 0);}
		.ui-tabs-active.ui-state-active{
			transition: .3s;
		}
		#tabTitle_1.ui-tabs-active.ui-state-active{border-bottom-color:#01579B;}
		#tabTitle_2.ui-tabs-active.ui-state-active{border-bottom-color:#1B5E20;}
		#tabTitle_3.ui-tabs-active.ui-state-active{border-bottom-color:#FF9800;}
		#tabTitle_4.ui-tabs-active.ui-state-active{border-bottom-color: #AEEA00;}
		.list01 li img{width: 70%;}
		.tabbing {
			padding: 30px 10px 10px 10px;
			background-color: #fff;	
			box-shadow: 0px 2px 5px 0px rgba(186,186,186,1);
            animation: fadein .3s;
		}
		/* ------ TAB 1 ------- */
		#portrait {
			width: 190px;
			height: 190px;
			margin: 5px auto;
			border-radius: 110px;
			border: 8px solid #FFE0B2;
			background:url(/_img/main_portrait.jpg) no-repeat center;
		}
        .blockHover {
            padding-top: 10px;
            width: 100%;
            height: 100%;
            opacity: 0;
            background-color: #fff;
            transition: .3s;
        }
        .blockHover:hover {
            opacity: .9;
            transition: .3s;
        }
        .blockHover button {
            width: 205px;
            height: 105px;
            border-radius: 8px;
            color: #fff;
            background-color: inherit;
            transition: .3s;
            font-size: 18px;
        }
        .blockHover button:focus {
            transition: .3s;
        }
        .blockHover p:nth-of-type(1) button {
            border: 1px solid #FF6F00;
            color: #FF6F00;
        }
        .blockHover p:nth-of-type(1) button:hover {
            background-color: #FF6F00;
            color: #fff;
        }
        .blockHover p:nth-of-type(2) button {
            border: 1px solid #004D40;
            color: #004D40;
        }
        .blockHover p:nth-of-type(2) button:hover {
            background-color: #004D40;
            color: #fff;
        }
        .block:nth-of-type(1) {background-image: url(portofolio/img/thumb_port01.jpg);}
        .block:nth-of-type(2) {background-image: url(portofolio/img/thumb_port02.jpg);}
        .block:nth-of-type(3) {background-image: url(portofolio/img/thumb_port03.jpg);}
        .block:nth-of-type(4) {background-image: url(portofolio/img/thumb_port04.jpg);}
        .block:nth-of-type(5) {background-image: url(portofolio/img/thumb_port05.jpg);}
		/* ------ TAB 2 ------- */
		.skills dt{
			font-weight: 600;
			font-size: 22px;
			margin-bottom: 10px;
		}
		.skills dd{
			font-weight: 200;
			font-size: 16px;
			margin-bottom: 20px;
		}
		.skillLvl {
			position: relative;
			width: 280px;
			height: 10px;
			background-color: #fff;
		}
		.skillLvlBar {
			position: absolute;
			height: 10px;
		}
		.progressBarS {
			float: right;
			width: 280px;
			height: 10px;
		}
		.progressBarS div {
			height: 100%;
			color: #fff;
			text-align: right;
			line-height: 22px;
			width: 0;
		}
        #progressBar div{background-color: #E44D26;}
		#progressBar2 div{background-color: #1572B6;}
		#progressBar3 div{background-color: #108040;}
		#progressBar4 div{background-color: #EB3C00;}
		#progressBar5 div{background-color: #3853A0;}
		/* ------ TAB 3 ------- */
		.achievement li {
			padding-left: 10px;
			margin-bottom: 10px;
			border-left: 5px solid #3B58C5;
		}
		/* ------ TAB 4 ------- */
        #tabs-4 .t14 {
            font-weight: 300;
        }
		.contact li {
			display: inline;
			margin-right: 10px;
		}
		.contact li img{
			width: 50px;
			height: 50px;
			opacity: .5;
			transition: .3s;
		}
		.contact li img:hover{
			opacity: 1;
			transition: .3s;
		}
		@media screen and (max-width:568px) {
			.tabTitle li {
				padding: 5px 0 5px 0;
				margin-right: 15px;
			}
			.tabTitle li a {
				padding: 5px 0 5px 0;
			}
		}
        @media screen and (max-width:768px) {
            html {background: none;}
            .tabTitle li a {color:#000;}
        }
	</style>
</head>

<body>
    <div id="wrap">
	<?php 
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/_common/header.html";
		include_once($path);
	?>
    <div id="mainArea" class="clearfix">
		<section id="2_" style="padding-bottom:0;">
        	<div class="container960 clearfix">
                <div id="tabs" class="clearfix">
                    <ul class="tabTitle">
                        <li id="tabTitle_1" class="tabTitleBord"><a href="#tabs-1">Intro</a></li><!--
                        --><li id="tabTitle_2" class="tabTitleBord"><a href="#tabs-2">Skills</a></li><!--
                        --><li id="tabTitle_3" class="tabTitleBord"><a href="#tabs-3">Experience</a></li><!--
                        --><li id="tabTitle_4" class="tabTitleBord"><a href="#tabs-4">Bio</a></li>
                    </ul>
                    <div id="tabs-1" class="tabbing clearfix">
                        <h1>Introduction</h1>
                        <div class="h1border" style="background-color:#01579B"></div>
                    	<div id="portrait"></div>
						<div class="clearfix">
							<div class="container960">
								<h2>My name is Dimitri Herlambang.</h2>
								<p class="t14">
									I am a <span class="t18">Junior Front-end Programmer, Junior UI/UX Designer,</span> and while not limited to web development, also an <span class="t18">english-indonesian translator.</span>
								</p>
								<p class="t14">
									I am graduated from Bina Nusantara University at 2014, harboring in Information system study.</p>
								<p class="t14">
									My preference in designing a User Interface are simple, usable, and practical, the user does not even need to think on how to use it.
								</p>
								<h2>My Works</h2>
								<p class="t14">
									My design inspiration came from Google Material, with a slight seasoning of Microsoft's flat and its Segoe UI font.
								</p>
                                <p class="t14 mB30">During my free time, I re-designed currently existing websites, but there are also some original designs. Click the links below for a full page-view of the mockup.</p>
                                <div class="container">
                                    <div class="block">
                                        <h3 class="tC">www.rakitan.com</h3>
                                        <div class="blockHover">
                                            <p class="tC"><a href="portofolio/port01.html" target="_blank"><button>Desktop</button></a></p>
                                            <p class="tC"><a href="portofolio/port01_sp.html" target="_blank"><button>Smartphone</button></a></p>
                                        </div>
                                    </div>
                                     <div class="block">
                                        <h3 class="tC">www.siloam-hospitals.com</h3>
                                        <div class="blockHover">
                                            <p class="tC"><a href="portofolio/port02.html" target="_blank"><button>Desktop</button></a></p>
                                            <p class="tC"><a href="portofolio/port02_sp.html" target="_blank"><button>Smartphone</button></a></p>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <h3 class="tC">(Original) Courier Website</h3>
                                        <div class="blockHover">
                                            <p class="tC"><a href="portofolio/port03.html" target="_blank"><button>Desktop</button></a></p>
                                            <p class="tC"><a href="portofolio/port03_sp.html" target="_blank"><button>Smartphone</button></a></p>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <h3 class="tC">www.waskita.co.id</h3>
                                        <div class="blockHover">
                                            <p class="tC"><a href="portofolio/port04.html" target="_blank"><button>Desktop</button></a></p>
                                            <p class="tC"><a href="portofolio/port04_sp.html" target="_blank"><button>Smartphone</button></a></p>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <h3 class="tC">(Original) News Website</h3>
                                        <div class="blockHover">
                                            <p class="tC"><a href="portofolio/port05.html" target="_blank"><button>Desktop</button></a></p>
                                            <p class="tC"><a href="portofolio/port05_sp.html" target="_blank"><button>Smartphone</button></a></p>
                                        </div>
                                    </div>
                                </div> <!-- /.container -->
							</div> <!-- /.container960 -->
                            <p class="tR" style="margin-top:15px;color:#448aff"><a href="#2_"><i>back to top</i></a></p>
						</div> <!-- /.clearfix -->
						
                    </div> <!-- /#tabs-1 -->
                    
                    <div id="tabs-2" class="tabbing clearfix">
						<h1>Skills &amp; Abilities</h1>
                        <div class="h1border" style="background-color:#1B5E20;"></div>
						<div class="clearfix">
							<div class="container480 fL">
								<h2>Front-End Programming</h2>
								<p class="t16">
									I have been using HTML, CSS, jS, jQ for 2 years to maintain client websites.
								</p>
								<ul class="list01" style="margin-top:20px;">
									<li><img src="/_img/logo_ps.png" alt="Photoshop++" title="Photoshop"></li><!--
									--><li><img src="/_img/logo_dw.png" alt="Dreamweaver" title="Dreamweaver"></li><!--
									--><li><img src="/_img/logo_nt.png" alt="Notepad++" title="Notepad++"></li><!--
									--><li><img src="/_img/logo_cp.png" alt="Codepen" title="Codepen"></li><!--
									--><li><img src="/_img/logo_so.png" alt="Stackoverflow" title="Stackoverflow"></li><!--
									--><li><img src="/_img/logo_jf.png" alt="JSFiddle" title="JsFiddle"></li>
								</ul>
							</div><!-- /.container480 -->
							<div class="container480 fR tR" style="">
								<dl class="skills">
									<dt>HTML</dt>
									<dd>
										<div class="clearfix">
                                			<div id="progressBar" class="progressBarS"><div></div></div>
										</div>
										Able to utilize most html tags.
									</dd>
                                        
									<dt>CSS</dt>
									<dd>
										<div class="clearfix">
                                			<div id="progressBar2" class="progressBarS"><div></div></div>
										</div>
										CSS3 style decoration, advanced selectors.
									</dd>
                                        
									<dt>jS &amp; jQ</dt>
									<dd>
										<div class="clearfix">
                                			<div id="progressBar3" class="progressBarS"><div></div></div>
										</div>
										Basic DOM manipulation, simple event handling.
									</dd>
                                    </dl><!-- /.skills -->
                                </div><!-- /.container480 -->
                            </div><!-- /.clearfix -->
							<div class="clearfix">
								<div class="container480 fL">
									<h2>Microsoft Office</h2>
									<p class="t16">Been using microsoft office product for years, for article writing, personal financial report, to list client's content list.</p>
									<p class="t16">Microsoft Visio to draw diagrams and create database schemes.									</p>
									<ul class="list01" style="margin-top:20px;">
										<li><img src="/_img/logo_word.png" alt="Microsoft Word" title="Microsoft Word"></li><!--
										--><li><img src="/_img/logo_excel.png" alt="Microsoft Excel" title="Microsoft Excel"></li><!--
										--><li><img src="/_img/logo_power.png" alt="Microsoft PowerPoint" title="Microsoft PowerPoint"></li><!--
										--><li><img src="/_img/logo_visio.png" alt="Microsoft Visio" title="Microsoft Visio"></li>
									</ul>
								</div><!-- /.container480 -->
								<div class="container480 fR tR" style="">
									<dl class="skills">
										<dt>Microsoft Office</dt>
										<dd>
											<div class="clearfix">
												<div id="progressBar4" class="progressBarS"><div></div></div>
											</div>
											Basic macros, financial calculations, concat, pivot table. 
										</dd>
										
										<dt>Microsoft Visio</dt>
										<dd>
											<div class="clearfix">
												<div id="progressBar5" class="progressBarS"><div></div></div>
											</div>
											Relational, Use case, Activity, Communication, Class diagram.
										</dd>
									</dl> <!-- /.skills -->
								</div><!-- /.container480 -->
							</div><!-- /.clearfix -->
                            <div class="clearfix">
                                <div class="container480 fL">
									<h2>Website Hosting and Repositories</h2>
									<p class="t16">Experienced in website hosting, Tortoise Github for web repository.</p>
									<ul class="list01" style="margin-top:20px;">
										<li><img src="/_img/logo_gh.png" alt="Tortoise Github" title="Tortoise Github"></li>
									</ul>
								</div><!-- /.container480 -->
                            </div><!-- /.clearfix -->
							<div class="clearfix">
								<div class="container480">
									<h2>Languages</h2>
									<p class="t16">Indonesian<br>
										Born with Indonesian Nationality, I learned Indonesian mostly from parents and text books.
									</p>
									<p class="t16">English<br>
										I learnt english language mostly from video games I played. Sentences, some grammars, and metaphors.
									</p>
								</div><!-- /.container480 -->
                            </div><!-- /.clearfix -->
                        <p class="tR" style="margin-top:15px;color:#448aff"><a href="#2_"><i>back to top</i></a></p>
                    </div> <!-- /#tabs_2 -->
                    
                    <div id="tabs-3" class="tabbing clearfix">
						<h1>Education &amp; Experiences</h1>
						<div class="h1border" style="background-color:#FF9800;"></div>
                        <div class="clearfix">
                            <div class="container480">
                                <h2>Bina Nusantara University <br> (2010 - 2014)</h2>
							</div><!-- /.container480 -->
						</div><!-- /.clearfix -->
                        <div class="clearfix">
                            <div class="container480 fL">
                                <p class="t14">
									4 Years of studying Information System, studied theoritical information system development to high-level programming language such as Java, C#, HTML, and SQL Server.
                                </p>
                            </div><!-- /.container480 -->
                            <div class="container480 fR">
                                <ul class="achievement">
                            		<li>Took <i>Busines Intelligence</i> field</li>
                            		<li>Developed "<i>Analisa dan Perancangan Sistem Penyewaan Kapal pada PT. XYZ</i>" using C#</li>
                                	<li>Developed "<i>Perancangan Basis Data Untuk Divisi General Affair dengan Lingkup Pembelian dan Manajemen Aset pada PT Skyworx Indonesia</i>"using PHP.</li>
                                </ul>
                            </div> <!-- /.container480 -->
                        </div><!-- /.clearfix -->
                        <div class="clearfix">
                            <div class="container480">
                                <h2>Transcosmos Indonesia <br> (December 2014 - February 2017)</h2>
							</div> <!-- /.container480 -->
						</div> <!-- /.clearfix -->
                        <div class="clearfix">
                            <div class="container480 fL">
                                <p class="t14">
                                    Japanese origin company, renowned for providing Call Center
                                    operators in their homeland for over <a class="link01" target="_blank" href="http://www.trans-cosmos.co.jp/english/company/history.html"> 50 years</a>, and also recently here in <a class="link01" target="_blank" href="http://www.trans-cosmos.co.id/">Indonesia</a>.
								</p>
                                <p class="t14">Recruited as a junior web programmer, after trained half a year, got involved in clients content management projects.</p>
                            </div><!-- /.container480 -->
                            <div class="container480 fL">
                                <ul class="achievement">
                            		<li>Joined coding team</li>
                            		<li>Worked on client's web content creation projects.</li>
                                	<li>Worked on product image modification projects using Photoshop.</li>
                                	<li>Worked on client's product management using CMS</li>
                                    <li>Worked on English-Indonesia Translation project</li>
                                	<li>Supervised company's knowledge management system</li>
                                </ul>
                            </div> <!-- /.container480 -->
                        </div><!-- /.clearfix -->
                        <div class="clearfix">
                            <div class="container480">
                                <h2>Kompas Harian <br> (April 2017 - Current)</h2>
							</div> <!-- /.container480 -->
						</div> <!-- /.clearfix -->
                        <div class="clearfix">
                            <div class="container480 fL">
                                <p class="t14">
                                    One of renowned Indonesia media since 1965. Currently underwent a transition into a digital environment. Its notable products are klasika, advertorial, kompas karier, and many more. <br>For online daily newspaper, you can visit <a class="link01" href="http://kompas.id" target="_blank">kompas id</a>.
								</p>
                                <p class="t14">
                                    Recruited as a new front-end designer. I was tasked to be the "enabler" for advertisement team to pour printed advertisement into a web-based. 
                                </p>
                            </div><!-- /.container480 -->
                            <div class="container480 fL">
                                <ul class="achievement">
                            		<li>Joined web advertisement team</li>
                                </ul>
                            </div> <!-- /.container480 -->
                        </div><!-- /.clearfix -->
						<p class="tR" style="margin-top:15px;color:#448aff"><a href="#2_"><i>back to top</i></a></p>
                    </div> <!-- /#tabs_3 -->
                    
                    <div id="tabs-4" class="tabbing clearfix">
						<h1>Bio</h1>
						<div class="h1border" style="background-color:#AEEA00;"></div>
                        <div class="clearfix">
                            <div class="container480 fL">
                                <p class="t24">Dimitri Herlambang S.Kom</p>
                                <p>Born in rural town of Bekasi at 1992, I am the first and the last son of my family.<br>Being the only son, I have the most luxurious, pampered treatment from my parents most of the time.
                                </p>
                                <p>I am rarely go outside as a result of their "overly-protective" policy, so they bought me Playstation console for entertainment, it became my primary source of fun.</p>
                                <p>The first time I made contact with a computer was at primary school (<span class="tI">yes they had windows 95 OS PCs as part of school curriculum</span>), they taught basic computer operations, design application named "Instant Artist", basic html programming, Paint, and finally CorelDraw.
                                </p>
                                <p>At the age of 10, my parents bought me a PC. Since that, it grew to become my interest for studying computer. Not-so-often I broke my PC as a result of me tampering with the system, just because my curiosity did so.</p>
                                <p>When it came to choosing a university, I immediately took an interest in Information System, I chose Binus because of its notability in computer studies, and its proximity to my house, saving a lot of transport and living costs compared to studying in another province.</p>
                                <p>And then I graduated at 2014, on the last month of that year, I got recruited into Transcosmos Indonesia as a web administrator. Learned html, js, jq, everything that is needed to build a website.</p>
                                <p>After two years of my first workplace, I decided to not continue the contract and ended my service for the company at January 2017.</p>
                                <p>One month after that, I got hired at Kompas media, one of famous media in Nusantara, serving people of Indonesia since 1965. My position here is crucial as I am one of the "enabler" of digital transformation of Kompas daily print newspaper. Of course, my career will unfold, my skills will be expanded, and my patience will be tested.</p>
                            </div> <!-- /.container480 -->
                            <div class="container480 fL">
								<h2 class="t24">About Me</h2>
                                <p>
                                    • Friendly<br>
                                    • Open-minded<br>
                                    • Optimist<br>
                                    • Ever-ready<br>
                                    • Organized
                                </p>
                                <p>Hobbies :<br>
                                    • Coding<br>
                                    • Gaming<br>
                                    • Writing
                                </p>
                                <p>Side Activities :<br>
                                    • Cycling<br>
                                    • Badminton<br>
                                    • Tennis<br>
                                </p>
                            </div> <!-- /.container480 -->
                        </div> <!-- /.clearfix -->
					</div> <!-- /#tabs_4 -->
                </div><!-- /#tabs -->
			</div><!-- /.container960 -->
		</section><!-- /#section_2 -->
    </div><!-- /#mainArea -->
        <?php 
			$path = $_SERVER['DOCUMENT_ROOT'];
			$path .= "/_common/footer.html";
			include_once($path);
		?>
    </div> <!-- /#wrap -->
	<script type="text/javascript" src="/_common/js/jQuery.js"></script>
	<script type="text/javascript" src="/_common/js/jQuery-ui.js"></script>
	<script type="text/javascript">
		/*--------------------------------------------------------------------------*
		 *  
		 *  SmoothScroll JavaScript Library V2
		 *  
		 *  MIT-style license. 
		 *  
		 *  2007-2011 Kazuma Nishihata 
		 *  http://www.to-r.net
		 *  
		 *--------------------------------------------------------------------------*/
		new function(){
	var attr ="data-tor-smoothScroll";//for html5 , if you can't use html5 , this value change "class"
	var attrPatt = /noSmooth/;
	var d = document;//document short cut
	/* add Event -------------------------------------------------*/
	function addEvent(elm,listener,fn){
		try{ // IE
			elm.addEventListener(listener,fn,false);
		}catch(e){
			elm.attachEvent(
				"on"+listener
				,function(){
					fn.apply(elm,arguments)
				}
			);
		}
	}
	/* Start SmoothScroll  -------------------------------------------------*/
	function SmoothScroll(a){
		if(d.getElementById(a.rel.replace(/.*\#/,""))){
			var e = d.getElementById(a.rel.replace(/.*\#/,""));
		}else{
			return;
		}
		
		//Move point
		var end=e.offsetTop
		var docHeight = d.documentElement.scrollHeight;
		var winHeight = window.innerHeight || d.documentElement.clientHeight
		if(docHeight-winHeight<end){
			var end = docHeight-winHeight;
		}
		//Current Point
		var start=window.pageYOffset || d.documentElement.scrollTop || d.body.scrollTop || 0;
		var flag=(end<start)?"up":"down";
		function scrollMe(start,end,flag) {
			setTimeout(
				function(){
					if(flag=="up" && start >= end){
						start=start-(start-end)/20-1;
						window.scrollTo(0,start)
						scrollMe(start,end,flag);
					}else if(flag=="down" && start <= end){
						start=start+(end-start)/20+1;
						window.scrollTo(0,start)
						scrollMe(start,end,flag);
					}else{
						scrollTo(0,end);
					}
					return ;
				}
				,10
			);
			
		}
		scrollMe(start,end,flag);
	}
	/* Add SmoothScroll -------------------------------------------------*/
	addEvent(window,"load",function(){
		var anchors = d.getElementsByTagName("a");
		for(var i = 0 ,len=anchors.length; i<len ; i++){
			if(!attrPatt.test(anchors[i].getAttribute(attr)) && 
				anchors[i].href.replace(/\#[a-zA-Z0-9_]+/,"") == location.href.replace(/\#[a-zA-Z0-9_]+/,"")){
				anchors[i].rel = anchors[i].href;
				anchors[i].href = "javascript:void(0)";
				anchors[i].onclick=function(){SmoothScroll(this)}
			}
		}
	});
}
	</script>
    <script>
		$( "#tabs" ).tabs({
			activate: function (event, ui) {
				var active = $('#tabs').tabs('option', 'active');
				if (active == 1) {
					progress(80, $('#progressBar'));
					progress(75, $('#progressBar2'));
					progress(40, $('#progressBar3'));
					progress(60, $('#progressBar4'));
					progress(50, $('#progressBar5'));
				} else {
					progress(0, $('#progressBar'));
					progress(0, $('#progressBar2'));
					progress(0, $('#progressBar3'));
					progress(0, $('#progressBar4'));
					progress(0, $('#progressBar5'));
				}
			}
		});
		function progress(percent, $element) {
    		var progressBarWidth = percent * $element.width() / 100;
    		$element.find('div').animate({ width: progressBarWidth }, 200).html();
		}
		$(document).ready(function(){
			var top_header = $('html');
			top_header.css({'background-position':'top center'});
			$(window).scroll(function () {
				var st = $(this).scrollTop();
				top_header.css({'background-position':'center calc(0% + '+(st*.94)+'px)'});
			});
		});
	</script>
</body>
</html>