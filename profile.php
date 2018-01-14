 

<?php include "veritabani.php"; ?>
<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />

<?php

$user = $_POST["user"]; 
 $pass = $_POST["pass"]; 
  $ad = $_POST["ad"]; 
   $sehir = $_POST["sehir"];

 $giris = mysql_query("SELECT * from users where user='$user' &&  pass='$pass'"); 
 
$k_cek = mysql_query("select ad from users where user = '$user' and pass='$pass'");
list($ad) = mysql_fetch_row($k_cek);
 
 $k_cek = mysql_query("select sehir from users where user = '$user' and pass='$pass'");
list($sehir) = mysql_fetch_row($k_cek);
 
  $k_cek = mysql_query("select presim from users where user = '$user' and pass='$pass'");
list($presim) = mysql_fetch_row($k_cek);
 








if(@mysql_num_rows($giris) > 0 ) { 
echo ""; 
} else { 
  echo "<script>window.location = 'uye-girisi.php'</script>";
}
?>

 <style type="text/css">
 #altpro {
}
 </style>
<head>
 <link rel="stylesheet" href="css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 <meta name="theme-color" content="#000">


<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
 <meta charset="UTF-8"/>

<title>Üye Kayıt - Tadilat</title>
</head>
<style>
h56{
	font-size: 10px}
h14{
	font-size: 12px;
    color: #484848;
    line-height: 45px;}
 h666{
	 color:#3b5998;
	    font-size: 27px;
    letter-spacing: 0px;
    vertical-align: -6px;
    text-indent: 1px;}
	 h777{
	 color:#1da1f2;
	    font-size: 27px;
    letter-spacing: 0px;
    vertical-align: -6px;
    text-indent: 1px;}
	 h888{
	 color:#d24b4b;
	    font-size: 27px;
    letter-spacing: 0px;
    vertical-align: -6px;
    text-indent: 1px;}
	*, *:before, *:after{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}

 h444{
	 color:#ff6508;
	 text-decoration:underline;
	 font-family:verdana;
	 font-size:11px;}
body{
	margin:0 auto;
	background:#fff
}
h123{
 	padding:7px;
	padding-left:12px;
	padding-right:12px;
	border-radius:10px;}
	h124{
		padding: 3px;
    padding-left: 9px;
    margin-left: 5px;
    padding-right: 9px;
    border-radius: 5px;
    background:  rgb(54, 68, 148);
    
    padding-right: 9px;
   
} 
 @media only screen and (max-width: 510px) {
h124 {
     display:none;
    }
}
#ust{
	
 	-webkit-box-sizing: content-box;
	}
	
#head {
	      width: 100%;
    margin: auto;
    background: #118C4E;
    height: 50px;
    -webkit-box-sizing: content-box;
    border-bottom: 1px solid rgba(218, 218, 218, 0.45);

}
@media only screen and (max-width: 600px) {
#head {
	 display:none
      
}
}
#headicc {
	max-width:1030px;
	margin:auto;
	line-height:50px;
		background:blue;

}
#sol {
	float:left;
	    font-size: 16px;
 			font-family:poppins;
			color: #ffffff;
			padding-left:15px;
			padding-right:15px;

}
  @media only screen and (min-width: 500px) {
#sol {
	float:left;
	    font-size: 21px;
 			font-family:poppins;
			color: #ffffff;
			padding-left:15px;
			padding-right:15px;

}}
#sag {
	float:right;
 			font-family:poppins;
			color: #fff;
			padding-left:15px;
			padding-right:15px;
			font-size: 13px;

}
#sag a {
  			 
			color: #fff;
			text-decoration:none
			 

}
 @media only screen and (max-width: 406px) {
#sag {
	float:right;
 			font-family:poppins;
			color:#fff;
			padding-left:15px;
			padding-right:15px;
			font-size: 10px;

}}
 
#ne{
	    color: black;
    font-family: poppins;
    padding-top: 40px;
    text-align: center;
	}
			 @media only screen and (max-width: 500px) {
#ne {
color:black;
	font-family:poppins;
	padding-top:0px;
	text-align:center;
	font-size:14px;
    }
}
	
	@import url(https://fonts.googleapis.com/css?family=Roboto);

*, *:before, *:after{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}
 
a{
  text-decoration: none;
  color: inherit;
}


h2.title{
  color: #6cc551;
  text-align: center;
  margin: 20px 0;
}

div.container{
  width: 1040px;
  margin: auto;
}

div.images {
  margin: 5px;
  border: 1px solid #CCC;
  float: left;
  width: 250px;
  
  filter:progid:DXImageTransform.Microsoft.Shadow(color=#aaa, Direction=134, Strength=3);
  border-radius: 3px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
}

div.images:hover{
 
filter:progid:DXImageTransform.Microsoft.Shadow(color=#999, Direction=134, Strength=3);
}

div.images:hover .description{
  color: #2d2d2d;
}

div.images img {
  width: 100%;
  height: auto;
  padding: 0px;
}

p.description {
  color:  #252525;
  font-family:arial;
  padding: 10px;
  text-align: center;
}

div.clear{
  clear: both;
}

p.information{
  color: #888;
  text-align: center;
  margin: 20px 0;
}

@media screen and (max-width: 1045px){
  div.container{
    width: 780px;
  }
}

@media screen and (max-width: 785px){
  div.container{
    width: 560px;
  }
  
  div.images{
    margin: 15px;
  }
}

@media screen and (max-width: 575px){
  div.container{
    width: 407px;
  }
  
  div.images{
    margin: 10px 5px;
    width: 189px;
  }
}

@media screen and (max-width: 405px){
  div.container{
    width: 280px;
  }
  
  div.images{
    width: 280px;
  }
}
#footer {
	width: 100%;	
	max-width: 1030px;
	margin: auto;
		height:100px;

 }
 @media only screen and (max-width: 600px) {
#footer {
	 display:none
      
}
}
#foot1 {
	width:25%;
 	min-width:130px;
	float:left;
 
}
 @media only screen and (max-width: 500px) {
#foot1 {
        width:100%;
		padding-bottom: 17px;
		text-align:center;
    }
}
#foooter {
 		height: auto;
		padding-left:15px;
		padding-right:15px;
    margin-top: 34px;
    border: 1px solid rgba(0, 0, 0, 0.16);
    padding-top: 20px;
    padding-bottom: 20px;
    background: #f9f9f9;

}
 @media only screen and (max-width: 500px) {
#foooter {
       background:none;
	   border:none;
    }
}
ul{
	list-style-type:none;
	    font-size: 11px;
		    line-height: 25px;
    font-family: Verdana;}
	 @media only screen and (max-width: 500px) {
ul {
   list-style-type: none;
    font-size: 15px;
    line-height: 33px;
    font-family: Verdana;
    }
}
	ul1{
	list-style-type: none;
    font-size: 12px;
    line-height: 29px;
    color: #042bbd;
    text-indent: 107px;
    font-family: Verdana;
    font-weight: bold;
	}
	 @media only screen and (max-width: 500px) {
ul1 {
    text-indent: 0px;
    text-align: center;
    width: 100%;
    float: left;
    height: 10px;
    }
}
	#sehir{
		background: #0035ff;
    color: white;
	padding-left: 0;
	float:right;
      width: 157px;;
	    margin-top: 6px;
    padding: 8px;
    border-radius: 5px;
    font-family: 'Open Sans', sans-serif;
	font-weight:bold;
    text-align: center;
     font-size: 11px;}
	 @media only screen and (max-width: 500px) {
#sehir {
       background: #0035ff;
    color: white;
    width: 141px;
    margin-top: 17px;
	float:none;
    margin: auto;
    padding: 8px;
    border-radius: 5px;
    font-family: 'Open Sans', sans-serif;
    text-align: center;
    font-size: 11px;
    }
}
	#bifooter{
		margin-top:45px;
		max-width:1030px;
		margin:auto;}
		@media only screen and (max-width: 600px) {
#bifooter {
	 display:none
      
}
}
		#bidivsag{float: right;
    padding-bottom: 9px;
    margin-top: -3px;
		}
		
		
		 @media only screen and (max-width: 500px) {
#bidivsag {
	text-align:	center;
	float:none;
    }
}
			
			
			 @media only screen and (max-width: 500px) {
#bidivsol {
	margin-top:10px;
	padding-left:15px;
	padding-right:15px;
	text-align:center;
	    margin-bottom: 10px;
    }
}
		#bidivsol{float:left; color:#333;
 	 font-family:verdana;
	 font-size:11px;}
#sehirplaka {
	float: left;
    font-size: 17px;
	margin-left: -11px;
	margin-bottom:-8px;
     line-height: 28px;
    padding-left: 7px;
    border-right: 1px solid;
    height: 29px;
    border-top-left-radius: 8px;
    border-bottom-left-radius: 8px;
    padding-right: 6px;
    margin-top: -8px;
    background: #4b70ff;
}
#sosyal {
	    margin: auto;
    max-width: 1031px;
    margin-top: 17px;
    font-family: verdana;
    font-size: 11px;
    font-weight: bold;
}

  @media only screen and (max-width: 600px) {
#sosyal {
      display:none;
    }
}
#giris {
}
#girisic {
	     max-width: 334px;
     margin: auto;
    text-align: left;
    padding-top: 20px;
    text-indent: 30px;
}
input {
    -webkit-appearance: textfield;
    background-color: white;
    -webkit-rtl-ordering: logical;
    user-select: text;
    cursor: auto;
    padding: 1px;
    height: 36px;
    padding-left: 11px;
	width:81%;
    border-width: 2px;
    border-style: inset;
    border-color: initial;
    border-image: initial;
}
input[type=checkbox] {
    -webkit-appearance: checkbox;
    background-color: #fff;
    -webkit-rtl-ordering: logical;
    user-select: text;
    cursor: auto;
    padding: 1px;
    height: auto;
    margin-top: 1px;
    margin-right: 7px;
    padding-left: 13px;
    width: auto;
    border-width: 2px;
    vertical-align: top;
    border-style: inset;
    border-color: initial;
    border-image: initial;
    float: left;
}
#girisbuton {
	    background: rgb(4, 85, 244);
    color: white;
	text-indent: 0;
    padding: 7px;
    text-align: center;
    border-bottom: 4px solid #72a2ff;
}
#select12 {
    line-height: 13px;
    text-indent: 0;
    padding-left: 30px;
    padding-right: 20px;
}
#button {
	TEXT-INDENT: 0;
    text-align: center;
    background: #0163fd;
    padding: 7px;
    color: #fff;
    border-radius: 5px;
    border-bottom: 5px solid #0447b1;
}
#button:hover {
	TEXT-INDENT: 0;
    text-align: center;
    background:  #0355d6;
    padding: 7px;
    color: #fff;
    border-radius: 5px;
    border-bottom: 5px solid #0447b1;
}
 
 
#iconsol {
	    float: left;
    font-size: 32px;
    padding-left: 10px;
    color:  #7a63d2;
}
 
#puan {
      float: right;
    border: 1px solid rgba(123, 106, 255, 0.62);
    padding: 3px;
    font-size: 16px;
    color: #7b6aff;
    font-weight: 100;
    font-family: poppins;
    margin-top: -2px;
    background: white;
    border-radius: 5px;
}
 
#ikki {
	max-width:819px;
	margin:auto;
}
#ikkisol {
	float:left;
		width:30%;

}
@media only screen and (max-width: 706px){
 
#ikkisol {
 	display:none;
}
	}
#ikkisag {
 	float: right;
    width: 70%;
    margin: auto;
}
@media only screen and (max-width: 706px){
 
#ikkisag {
 	float: right;
    width: 100%;
    margin: auto;
}
	}
#icerikic{
	margin-bottom: 10px;
}
	@media only screen and (max-width: 706px){
 
#icerikic{
        margin-bottom: 10px;
  }
	}
	
	#icerikicic{
	font-family: arial;
 border:  1px solid #ececec;
    border-radius: 3px;
    font-weight: bold;
    margin-left: 10px;
    margin-right: 10px;
	    font-size: 13px;
    padding-left: 5px;
    padding-right: 5px;
    text-align: left;
    padding-top: 10px;
    padding-bottom: 10px;}
		#icerikicic:hover{
			background:#F9F9F9;
			cursor:pointer;
	 }
	
	 p13{
		    font-size: 13px;
    color: dimgrey;
    font-weight: 100;}
	 
#iconsol {
	    float: right;
    font-size: 32px;
    padding-left: 10px;
    color:  #7a63d2;
}
 
#puan {
     float: left;
    font-size: 14px;
    padding-left: 5px;
    padding-right: 5px;
    color: #ffffff;
    font-weight: 100;
    margin-right: 10px;
    font-family: arial;
    margin-top: 3px;
    background: #1bc130;
    border-radius: 5px;
    margin-left: 5px;
}
#profil {
	    background:  rgba(234, 234, 234, 0.29);
    height: 70px;
    margin: auto;
    padding: 14px;
	    border: 1px solid #cecccc;
    border-radius: 4px;
}
#profil1 {
	    background:  rgba(234, 234, 234, 0.29);
    height: 65px;
    margin: auto;
    padding: 14px;
	    border: 1px solid #cecccc;
    border-radius: 4px;
}
.prof {
	float:left;
	border-radius:4px;
}
p44{
font-family: 'Open Sans', sans-serif;
    font-size: 12px;
    padding-left: 5px;
	
	}
	p49{
	 
	}
#sehirim {
	   font-size: 12px;
    font-family: 'Open Sans', sans-serif;
    max-width: 200px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-weight: bold;
    text-decoration: none;
    padding-left: 8px;
	margin-top: 2px;
}
#adim {
	   font-size: 12px;
    font-family: 'Open Sans', sans-serif;
    max-width: 135px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-weight: bold;
    text-decoration: none;
    padding-left: 8px;
	margin-top:5px;
}
#tahmini {
	    float: right;
    margin-top: 4px;
    color: #8a8a8a;
	    font-weight: 100;
}

select{
height: 30px;
    border-radius: 7px;
    width: 100px;
    padding-left: 5px;
	}
	
	#altpro {
	    position: fixed;
    left: 0;
    background: #3e3e3e;
    bottom: 0;
    font-family: arial;
    right: 0;
    padding-right: 20px;
    color: white;
    padding-bottom: 6px;
    padding-top: 6px;
    padding-left: 15px;
    border-top: 1px solid #CCC;
}
#altprosol {
	float:left
}
#altprosag {
	float:right
}
#sehh {
	       display: inline-block;
    font-size: 13px;
    float: left;
    margin-left: 10px;
}
@media only screen and (min-width: 600px) {
#altpro {
	 display:none
      
}
}

@media only screen and (min-width: 600px) {
#proalt {
	 display:none
      
}
}
@media only screen and (max-width: 600px) {
#foooter {
	 display:none
      
}
}
#proalt{
	
	       height: 41px;
    position: fixed;
    text-align: center;
    bottom: 50px;
    left: 0px;
    right: 0;
    font-family: arial;
    color: rgba(62, 62, 62, 0.35);
    padding: 10px;}
</style>

<body>
<div class="ust" id="ust">
<div class="head" id="head">
  <div class="headicc" id="headicc">
      <div class="sol" id="sol"><a href="index.html"><strong>Tadilat</strong>Sepeti</a></div>
      <div class="sag" id="sag"> <a href="#"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;<?php
	  

echo "$ad";

 

 
 
 

 

 ?></a>
    <h124> <a href="dukkangirisi.html">Hesap Ayarları</a></h124></div>
    </div>   </div>
</div><br />
<div class="ikki" id="ikki">
  <div class="ikkisol" id="ikkisol">
    <div class="profil" id="profil"><img src="<?php echo  "$presim" ?>" width="40" height="40" class="prof" /> 
      <div class="adim" id="adim"><?php
 
 
 echo "$ad"  
 ?></div>
       <p> 
      <div class="sehirim" id="sehirim"><?php
 
 
 echo "$sehir"  
 ?></div>
    </div><br />

    <div class="profil1" id="profil1">
      
       <p> 
      <div class="sehirim" id="sehirim">Şehir değiştir: &nbsp; <select name="Antalya">
        <option>Antalya</option>
        <option>İstanbul</option>
        <option>Ankara</option>
        <option>İzmir</option>
        <option>Adana</option>
      </select></div>
    </div>
  </div>
  
  
  
  
  
  <div class="ikkisag" id="ikkisag"><div class="icerikic" id="icerikic"  onclick="window.location.href='newurl.html';"> 
    <div class="icerikicic" id="icerikicic">
      <div class="iconsol" id="iconsol"><i class="fa fa-address-card-o" aria-hidden="true"></i>
        
        
        </div>
      <div class="puan" id="puan">8.4</div>
      <div class="tahmini" id="tahmini">4 Saat & 2 Gün <font size="4px" color="black">|</font> Min. 300 ₺</div>
      Hikmet Usta<p><p13>Lara<p13><p></div>
    </div><div class="icerikic" id="icerikic"  onclick="window.location.href='newurl.html';"> 
    <div class="icerikicic" id="icerikicic">
      <div class="iconsol" id="iconsol"><i class="fa fa-address-card-o" aria-hidden="true"></i>
        
        
        </div>
      <div class="puan" id="puan">6.6</div><div class="tahmini" id="tahmini">4 Saat & 2 Gün <font size="4px" color="black">|</font> Min. 300 ₺</div>Hikmet Usta<p><p13>Lara<p13><p></div>
    </div><div class="icerikic" id="icerikic"  onclick="window.location.href='newurl.html';"> 
    <div class="icerikicic" id="icerikicic">
      <div class="iconsol" id="iconsol"><i class="fa fa-address-card-o" aria-hidden="true"></i>
        
        
        </div>
      <div class="puan" id="puan">9.3</div><div class="tahmini" id="tahmini">4 Saat & 2 Gün <font size="4px" color="black">|</font> Min. 300 ₺</div>Hikmet Usta<p><p13>Lara<p13><p></div>
    </div><div class="icerikic" id="icerikic"  onclick="window.location.href='newurl.html';"> 
    <div class="icerikicic" id="icerikicic">
      <div class="iconsol" id="iconsol"><i class="fa fa-address-card-o" aria-hidden="true"></i>
        
        
        </div>
      <div class="puan" id="puan">7.2</div><div class="tahmini" id="tahmini">4 Saat & 2 Gün <font size="4px" color="black">|</font> Min. 300 ₺</div>Hikmet Usta<p><p13>Lara<p13><p></div>
    </div><div class="icerikic" id="icerikic"  onclick="window.location.href='newurl.html';"> 
    <div class="icerikicic" id="icerikicic">
      <div class="iconsol" id="iconsol"><i class="fa fa-address-card-o" aria-hidden="true"></i>
        
        
        </div>
      <div class="puan" id="puan">5.4</div><div class="tahmini" id="tahmini">4 Saat & 2 Gün <font size="4px" color="black">|</font> Min. 300 ₺</div>Hikmet Usta<p><p13>Lara<p13><p></div>
    </div><div class="icerikic" id="icerikic"  onclick="window.location.href='newurl.html';"> 
    <div class="icerikicic" id="icerikicic">
      <div class="iconsol" id="iconsol"><i class="fa fa-address-card-o" aria-hidden="true"></i>
        
        
        </div>
      <div class="puan" id="puan">7.9</div><div class="tahmini" id="tahmini">4 Saat & 2 Gün <font size="4px" color="black">|</font> Min. 300 ₺</div>Hikmet Usta<p><p13>Lara<p13><p></div>
    </div><div class="icerikic" id="icerikic"  onclick="window.location.href='newurl.html';"> 
    <div class="icerikicic" id="icerikicic">
      <div class="iconsol" id="iconsol"><i class="fa fa-address-card-o" aria-hidden="true"></i>
        
        
        </div>
      <div class="puan" id="puan">8.2</div><div class="tahmini" id="tahmini">4 Saat & 2 Gün <font size="4px" color="black">|</font> Min. 300 ₺</div>Hikmet Usta<p><p13>Lara<p13><p></div>
    </div></div>




</div>
 
 
 
 
 
 
 
  
 </div>
 
  
 
<div class="clear"></div>
</div>
 
<div class="proalt" id="proalt"><strong>Tadilat</strong>Sepeti
<div class="altpro" id="altpro">
  
 
  <div class="altprosol" id="altprosol"><img src="<?php echo  "$presim" ?>" width="40" height="40" class="prof" />&nbsp; <?php
 
 
 echo "$ad"  
 ?><br>&nbsp;
    <div class="sehh" id="sehh">
      <?php
 
 
 echo "$sehir"  
 ?>
    </div>
  </div>
  

  <div class="altprosag" id="altprosag">Sağ</div>
  
  
  










</div></div>


<div class="foooter" id="foooter">
  <div class="footer" id="footer">
    <div class="foot1" id="foot1"><ul><li>S.S.S.</li><li>Kullanıcı Sözleşmesi</li><li>İşlem Rehberi</li>
     </ul></div> <div class="foot1" id="foot1"><ul><li>İletişim</li><li>Kampanyalar</li><li>Hizmet veren giriş</li><li>Hizmet Veren Sipariş Takip</li></ul></div> <div class="foot1" id="foot1"><ul><li>Mobil Uygulama</li><li>Badana Ustası</li><li>Temizlik Elemanı</li><li>Fayans Ustası</li></ul></div> <div class="foot1" id="foot1"><div class="sehir" id="sehir">
         <div class="sehirplaka" id="sehirplaka">07</div>
        ŞEHİR DEĞİŞTİR</div><ul1>
          <li2>
            <div align="right">English</div>
          </li2></ul1></div>
  </div>
</div><br />
 

<div class="bifooter" id="bifooter"><div class="bifootersol" id="bidivsol">Soru ve önerileriniz için <h444>destek@tadilatsepeti.com</h444>&nbsp;adresine mail gönderebilirsiniz.</div><div class="bidivsag" id="bidivsag"><img src="img/googleplay.png" width="100" height="" />&nbsp;<img src="img/appstore.png" width="100" height="" /></div></div><br />

<div class="sosyal" id="sosyal">Bizi takip edin : <h666><i class="fa fa-facebook-square" aria-hidden="true"></i></h666>
<h777><i class="fa fa-twitter-square" aria-hidden="true"></i></h777>
 
<h888><i class="fa fa-pencil-square" aria-hidden="true"></i></h888>
</div>
<br />
 <br />
<br />





</body>
</html>
