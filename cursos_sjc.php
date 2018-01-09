
<table width="780" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<td colspan="3" valign="top"><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

			<html>
			<head>
				<title>Cursos de Curta Duração</title>
				<script language="JavaScript">
					<!--
function MM_preloadImages() { //v3.0
	var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
		var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
		if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
	}
function MM_swapImgRestore() { //v3.0
	var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v3.0
	var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
		d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
		if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
		for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document); return x;
	}
function MM_swapImage() { //v3.0
	var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
	if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
function MM_displayStatusMsg(msgStr) { //v1.0
	status=msgStr;
	document.MM_returnValue = true;
}
//-->
</script>
<script>
	function instru(qtURL)
	{
		windowqt = window.open(qtURL, "","toolbar=no,location=no,status=no,menubar=no,width=500,height=728, resizable=no,scrollbars=no");
		windowqt.focus();
	}
</script>
<script language="JavaScript">
	function checar_formulario() 
	{
		if (document.form1.nome.value == "")
		{
			alert("É preciso informar o Nome!");
			document.form1.nome.focus();
			return false;
		}
		if (document.form1.empresa.value == "")
		{
			alert("É preciso informar a Empresa!");
			document.form1.empresa.focus();
			return false;
		}
		if (document.form1.endereco.value == "")
		{
			alert("É preciso informar o Endereço!");
			document.form1.endereco.focus();
			return false;
		}
		if (document.form1.cidade.value == "")
		{
			alert("É preciso informar a Cidade!");
			document.form1.cidade.focus();
			return false;
		}
		if (document.form1.estado.value == "")
		{
			alert("É preciso informar o Estado!");
			document.form1.estado.focus();
			return false;
		}
		if (document.form1.cep1.value == "")
		{
			alert("É preciso informar o CEP!");
			document.form1.cep1.focus();
			return false;
		}
		if (document.form1.pais.value == "")
		{
			alert("É preciso informar o País!");
			document.form1.pais.focus();
			return false;
		}
		if (document.form1.email.value == "")
		{
			alert("É preciso informar o Email!");
			document.form1.email.focus();
			return false;
		}
		if (document.form1.ddd.value == "")
		{
			alert("É preciso informar o DDD!");
			document.form1.ddd.focus();
			return false;
		}
		if (document.form1.fone.value == "")
		{
			alert("É preciso informar o Telefone!");
			document.form1.fone.focus();
			return false;
		}
		if (document.form1.datac.value == "")
		{
			alert("É preciso escolher uma Data!");
			document.form1.datac.focus();
			return false;
		}

	}
	function checar_curso() 
	{
		if (document.form2.curso.value == "")
		{
			alert("É preciso selecionar o curso!");
			document.form2.curso.focus();
			return false;
		}
	}
	function checar_login() 
	{
		if (document.form3.usuario.value == "")
		{
			alert("É preciso informar o usuário!");
			document.form3.usuario.focus();
			return false;
		}
		if (document.form3.senha.value == "")
		{
			alert("É preciso informar a senha!");
			document.form3.senha.focus();
			return false;
		}
	}
</script>

<link rel="stylesheet" href="estilo.css">
</head>


<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" bottommargin="0" onLoad="MM_preloadImages('img/home_on.gif', 'img/proposta_on.gif','img/hoteis_on.gif','img/docentes_on.gif','img/bibliografia_on.gif')">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td colspan="2"><a href="http://www.selperbrasil.org.br/" target="_blank"><img src="img/curso.jpg" width="780" height="90" alt="" border="0"></a></td>
		</tr>
		<tr>
			<td colspan="2"><a href="index.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('home','','img/home_on.gif',1);return document.MM_returnValue"><img src="img/home.gif" name="home" border="0"></a><a href="proposta.php" onMouseOver="MM_swapImage('proposta','','img/proposta_on.gif',1);return document.MM_returnValue" onMouseOut="MM_swapImgRestore()"><img src="img/proposta.gif" name="proposta" border="0"></a><a href="docentes.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('docentes','','img/docentes_on.gif',1);return document.MM_returnValue"><img src="img/docentes.gif" name="docentes" border="0"></a><a href="bibliografia.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('bibliografia','','img/bibliografia_on.gif',1);return document.MM_returnValue"><img src="img/bibliografia.gif" name="bibliografia" border="0"></a><a href="contato.php" onMouseOver="MM_swapImage('contato','','img/contato_on.gif',1);return document.MM_returnValue" onMouseOut="MM_swapImgRestore()"><img src="img/contato.gif" name="contato" border="0"></a></td>
		</tr>
<!-- 		<tr>
			<td height="1" colspan="2" bgcolor="#000000"></td>
		</tr> -->
	</table>


	<tr>
		<td width="175" valign="top" bgcolor="#61b78e">
			<table width="90%" cellspacing="0" cellpadding="0" align="center">
				<tr>
					<td height="10"></td>
				</tr>

				<!-- Cursos Presenciais -->
				<tr>
					<td height="20" bgcolor="#006633"><div align="center" style="color:#ffffff">Cursos SJC</div></td>
				</tr>	
				<tr>
					<td height="20"><div align="left"><img src="img/dot.gif" alt="" border="0">&nbsp;<a href="cursos_sjc.php" style="text-decoration: none;"><font color="#ffffff">Cursos Disponíveis</font></a></div></td>
				</tr>
				<tr>
					<td height="1" bgcolor="#006633"></td>
				</tr>
				<tr>
					<td height="20"><div align="left"><img src="img/dot.gif" alt="" border="0">&nbsp;<a href="cronograma_sjc.php" style="text-decoration: none;"><font color="#ffffff">Cronograma</font></a></div></td>
				</tr>
				<tr>
					<td height="1" bgcolor="#006633"></td>
				</tr>
				<tr>
					<td height="20"><div align="left"><img src="img/dot.gif" alt="" border="0">&nbsp;<a href="inscricao_sjc.php" style="text-decoration: none;"><font color="#ffffff">Inscrição</font></a></div></td>
				</tr>

				<!-- Cursos Online -->
				<tr>
					<td height="20" bgcolor="#006633"><div align="center" style="color:#ffffff">Cursos Online</div></td>
				</tr> 
				<tr>
					<td height="20"><div align="left"><img src="img/dot.gif" alt="" border="0">&nbsp;<a href="normas.php" style="text-decoration: none;"><font color="#ffffff">Sensoriamento Remoto</font></a></div></td>
				</tr>
				<tr>
					<td height="1" bgcolor="#006633"></td>
				</tr>
				<tr>
					<td height="20"><div align="left"><img src="img/dot.gif" alt="" border="0">&nbsp;<a href="curso_fora.php" style="text-decoration: none;"><font color="#ffffff">GEOBIA</font></a></div></td>
				</tr>
				<tr>
					<td height="1" bgcolor="#006633"></td>
				</tr>


				<!-- Instruções -->
				<tr>
					<td height="20" bgcolor="#006633"><div align="center" style="color:#ffffff">Geral</div></td>
				</tr> 
				<tr>
					<td height="20"><div align="left"><img src="img/dot.gif" alt="" border="0">&nbsp;<a href="normas.php" style="text-decoration: none;"><font color="#ffffff">Normas / Procedimentos</font></a></div></td>
				</tr>
				<tr>
					<td height="1" bgcolor="#006633"></td>
				</tr>
				<tr>
					<td height="20"><div align="left"><img src="img/dot.gif" alt="" border="0">&nbsp;<a href="curso_fora.php" style="text-decoration: none;"><font color="#ffffff">Cursos na sua Instituição</font></a></div></td>
				</tr>
				<tr>
					<td height="1" bgcolor="#006633"></td>
				</tr>
				<tr>
					<td height="20"><div align="left"><img src="img/dot.gif" alt="" border="0">&nbsp;<a href="contato.php" style="text-decoration: none;"><font color="#ffffff">Contato</font></a></div></td>
				</tr>

			</table>



		</td>
		<td width="700" height="400" valign="top" bgcolor="#FFFFFF">

			<!-- Início Meio -->

			<table width="95%" align="center">
				<tr>
					<td>
						<font face="Arial" size="2" color="#000000"><br>
							<div align="center"><br>
								<font color="#000000"><strong>CURSOS SJC</strong></font><br><br><br>
								<font color="#000000"><strong>40 horas</strong></font><br><br>                        					

								<a href="curso_pro.php"><font color="#000000"><strong>Processamento Digital de Imagens</strong></a><br><br>
									<a href="curso_banco_sjc.php"><font color="#000000"><strong>Banco de Dados Geográficos</strong></a><br><br>   
										<a href="curso_ana.php"><font color="#000000"><strong>Análise Espacial de Dados Geográficos</strong></a><br><br>
											<a href="curso_terraMA_sjc.php"><font color="#000000"><strong>Plataforma de Monitoramento Ambiental TerraMA<sup>2</sup></strong></a><br><br><br>

												<font color="#000000"><strong>20 horas</strong></font><br><br>
												<a href="curso_terraview_sjc.php"><font color="#000000"><strong>Introdução ao TerraView</strong></a><br><br>
												</div>
											</td>
										</tr>
									</table>

									
									<!-- Cursos Online Banners --> 
									<table width="95%" align="center">
										<tr>
											<td>
												<font face="Arial" size="2" color="#000000"><br>
													<div align="center"><br>
														<font color="#000000"><strong>CURSOS ONLINE</strong><br><br>
															<a href="http://www.selperbrasil.org.br/cursos/ead/geobia/" target="_blank"><img src="img/1-GEOBIA.jpg" alt="" style="width:480; height: 60;" border="0"></a><br><br><br>
															<a href="http://www.selperbrasil.org.br/cursos/ead/sr_ac/" target="_blank"><img src="img/2-SENSORIAMENTO.jpg" alt="" style="width:480; height: 60;" border="0"></a><br><br>
														</font>
													</div>
												</td>
											</tr>
										</table>

										<!-- Fim Meio -->

										<tr>
											<td colspan="3" valign="top">
												<table width="780" border="0" cellspacing="0" cellpadding="0">
													<tr>
														<td bgcolor="#61b78e"><a href="area_restrita.php"><img src="img/cadeado.gif" alt="" border="0"></a></td>
														<td height="20" bgcolor="#61b78e"><div align="center"><font size="1" color="#FFFFFF">Atualizado em: 20/12/2017</font></div></td>
													</tr>
												</table>
											</td>
										</tr>

									</body>
									</html>
