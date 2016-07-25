<div id="menu" class="overlay">
	<a href="javascript:void(0)" class="closebtn" onclick="closeMenu()">×</a>
	<div class="overlay-content">
		<a href="http://arlora.co.nf/#sec1"onclick="closeMenu()">home</a>
		<a href="http://arlora.co.nf/#sec2"onclick="closeMenu()">about</a>
		<a href="http://arlora.co.nf/#sec3"onclick="closeMenu()">work</a>
		<a href="http://arlora.co.nf/#sec4"onclick="closeMenu()">contact</a>
	</div>
</div>
<br/><br/><br/>
<img onclick="openMenu()"src="http://arlora.co.nf/res/img/menuWhite.png"id="menubtn"></img>
<style>
	#menubtn {
	width: 50px;
	height: 50px;
	right: 1vw;
	top: 1vh;
	position: fixed;
	cursor: pointer;
	}
	.overlay {
	height: 0%;
	width: 100%;
	position: fixed;
	z-index: 1;
	top: 0;
	left: 0;
	background-color: rgba(0,0,0, 0.9);
	overflow-y: hidden;
	transition: 0.5s;
	}
	.overlay-content {
	position: relative;
	top: 25%;
	width: 100%;
	text-align: center;
	margin-top: 30px;
	text-transform: uppercase;
	font-size: 60px;
	font-family: 'Lato', sans-serif;
	color: white;
	font-weight: 600;
	letter-spacing: 5px;
	text-transform: uppercase;
	}
	.overlay a {
	padding: 8px;
	text-decoration: none;
	font-size: 36px;
	color: #818181;
	display: block;
	transition: 0.3s;
	}
	.overlay a:hover, .overlay a:focus {
	color: #f1f1f1;
	}
	.closebtn {
	position: absolute;
	top: 20px;
	right: 45px;
	font-size: 60px !important;
	}
	@media screen and (max-height: 450px) {
	.overlay {overflow-y: auto;}
	.overlay a {font-size: 20px}
	.closebtn {
	font-size: 40px !important;
	top: 15px;
	right: 35px;
	}
	}
	/* #menu3 {
	width: 3vw;
	height: 7vh;
	right: 1%;
	top: 1;
	position: fixed;
	cursor: pointer;
	z-index: 3;
	}
	a {
	text-decoration: none !important;
	}
	#menu-overlay {
	opacity: 0;
	background: #111;
	position: fixed;
	visibility: hidden;
	top: 0;
	width: 100%;
	height: 100%;
	-webkit-transition: all .6s;
	-moz-transition: all .6s;
	-ms-transition: all .6s;
	-o-transition: all .6s;
	transition: all .6s
	}
	#menu-overlay.menu-show {
	visibility: visible;
	z-index: 1000;
	opacity: 1
	}
	.menu-click li a {
	font-family: "Montserrat", Helvetica, Arial, sans-serif;
	font-weight: 400;
	position: relative;
	color: #fff;
	font-size: 60px;
	text-align: center;
	line-height: 98px;
	z-index: 1000;
	-webkit-transition: all .2s ease-in;
	-moz-transition: all .2s ease-in;
	-ms-transition: all .2s ease-in;
	-o-transition: all .2s ease-in;
	transition: all .2s ease-in
	}
	.menu-click li a:hover {
	color: #2fa68e;
	}
	.v-align-html {
	position: relative;
	top: 50%;
	-webkit-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	transform: translateY(-50%)
	}
	#nav-icon {
	position: fixed;
	top: 20px;
	right: 15px;
	z-index: 88888;
	display: block;
	width: 45px;
	height: 28px;
	margin: 0;
	-webkit-transform: rotate(0deg);
	-moz-transform: rotate(0deg);
	-o-transform: rotate(0deg);
	transform: rotate(0deg);
	-webkit-transition: .5s ease-in-out;
	-moz-transition: .5s ease-in-out;
	-o-transition: .5s ease-in-out;
	transition: .5s ease-in-out;
	cursor: pointer
	}
	#nav-icon:hover span {
	background-color: #2fa68e;
	}
	#nav-icon span {
	display: block;
	position: absolute;
	height: 4px;
	width: 80%;
	background: #111;
	border-radius: 9px;
	opacity: 1;
	left: 0;
	-webkit-transform: rotate(0deg);
	-moz-transform: rotate(0deg);
	-o-transform: rotate(0deg);
	transform: rotate(0deg);
	-webkit-transition: .25s ease-in-out;
	-moz-transition: .25s ease-in-out;
	-o-transition: .25s ease-in-out;
	transition: .25s ease-in-out
	}
	#nav-icon.light span {
	background: #fff;
	}
	#nav-icon span:nth-child(1) {
	top: 0
	}
	#nav-icon span:nth-child(2),
	#nav-icon span:nth-child(3) {
	top: 12px
	}
	#nav-icon span:nth-child(4) {
	top: 24px
	} */
</style>
<script>
	//   $(document).ready(function() {
	//     $("#menu3").click(function() {
	//       $(this).toggleClass("open");
	//       $("#menu-overlay").toggleClass("menu-show")
	//     })
	//   });
	//   $(document).ready(function() {
	//     $(".hider").click(function() {
	//       $(this).toggleClass("open");
	//       $("#menu-overlay").toggleClass("menu-show")
	//     })
	//   });
	  function openMenu() {
	    document.getElementById("menu").style.height = "100%";
	  }
	
	  function closeMenu() {
	    document.getElementById("menu").style.height = "0%";
	  }
</script>
