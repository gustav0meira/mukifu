<style>
div.menu{
	top: 0;
	z-index: 1;
	right: -100vw;
	width: 100vw;
	height: 100vh;
	position: fixed;
	background: #FF7417;
	transition: all 600ms;
}

div.menuOpen{
	right: 0;
}

div.menuContent{
	padding: 50px;
}

div.menu{
	font-family: Poppins !important;
}

div.menu .pp{
	width: 100%;
	padding-bottom: 100%;
	border-radius: 15px;
	background-size: cover !important;
	background-position: center center !important;
}

.menu .social{
	color: white;
	background: #F76C0F;
	border-radius: 15px;
	width: 70%;
	font-weight: 300;
	margin-top: 30px;
	margin-bottom: 10px;
	font-size: 0.9rem;
	padding: 15px;
}

.menu hr{
	width: 70%;
	border-color: #FFFFFF80;
	margin-bottom: 20px;
}

.menu .menuLink{
	cursor: pointer;
	margin-bottom: 13px;
	border-radius: 15px;
	background: #FF8C3F;
	padding: 15px 38px 15px 38px;
	color: #FFF;
	font-size: 15px;
	font-family: Poppins;
	font-style: normal;
	font-weight: 300;
	line-height: normal;
}

.menu p{
	font-size: 0.8rem !important;
	color: white;
	margin-bottom: 10px;
}

.menu .socialIcon{
	padding: 10px 12px;
	cursor: pointer;
	color: #FF7417;
	border-radius: 15px;
	margin-right: 5px;
	margin-top: 10px;
	background: white;
}
</style>

<div id="menu" class="menu">
	<div class="menuContent">
		<div class="row">
			<div class="col-6">
				<h1 class="logoWhite align">mukifu.</h1>
			</div>
			<div id="closeIcon" style="text-align: right;" class="col-6">
				<i style="padding: 0px !important;" class="fa-solid fa-xmark menuIcon align"></i>
			</div>
		</div>
		<div style="margin-top: 70px;" class="row">
			<div class="col-12">
				<a href="../painel">
					<label class="menuLink">painel</label>
				</a><br>
				<a href="../bills">
					<label class="menuLink">organizar contas</label>
				</a><br>
				<a href="../shopping">
					<label class="menuLink">lista de compras</label>
				</a><br>
				<a href="../assignature">
					<label class="menuLink">assinaturas</label>
				</a><br>
				<a href="../callendar">
					<label class="menuLink">calendário</label>
				</a><br>
				<hr>
				<i class="fa-brands fa-whatsapp socialIcon"></i>
				<i class="fa-brands fa-instagram socialIcon"></i>
			</div>
		</div>
	</div>
</div>