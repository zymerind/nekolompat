<html>
<title>LinkPoi Lompaters</title> <br /><br /><br /><br /><br /><br />

<style>
a{
    text-decoration: none;
font-family:Arial;
color:white;
background-color:rgb(226, 80, 111);
width:500px;
border-radius:5px;
height:auto;
padding:10px;
padding-left:100px;padding-right:100px;
font-size:17;
text-align:center;
}
a:hover{background-color:#BF3A64;}
.tombol_submit {
font-family:Verdana;
background-color:rgb(226, 80, 111);
color:white;
border-radius:10px;
padding-left:12px;
padding-right:12px;
padding-top:16px;
padding-bottom:16px;}
.tombol_submit:hover {
background-color:white;
color:black;
border-radius:10px;
padding-left:12px;
padding-right:12px;
padding-top:16px;
padding-bottom:16px;
webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);}
header,footer{display:none;}
.body{background-color:white;width:640px;height:auto;padding:18px;}
html{
font-family:Arial;
background-color:#ddd;
font-size:13px;
min-height:100%;
background-image:url("https://1.bp.blogspot.com/-YwBCcmFuUiE/Vy0BLHpETWI/AAAAAAAADDk/B_eT8_PMl-0H3ogvBLbP2KST2kLeZXGiACLcB/s1600/Cocoalinkpoi.png"),url("https://3.bp.blogspot.com/-oXxNx-BTpeI/Vy0AKsgDPrI/AAAAAAAADDc/8jWjdyU9qWwlXnBGy8cL6KSzdfCle_JPwCLcB/s1600/Chinolinkpoi.png");
background-repeat:no-repeat;
background-position:top left,top right;
background-attachment: fixed, fixed;
}
@media screen and (max-width: 990px) {body{background-image:none;}
.taexta {background-color:red;width:300px; height:50px;border:black solid 2px;}
</style>


<center>
<div style="width:656px;background: rgb(226, 80, 111) none repeat scroll 0% 0%; font-size: 14px; text-align: center;color: rgb(255, 255, 255); padding: 10px; text-overflow: ellipsis; overflow: hidden; white-space: nowrap;">
Klik "Menuju Link" Untuk Lanjut Ke Link Download</div>
<div class='body'>
<form method='post'>
<input style='padding-left:10px;width:520;height:50px;border-radius:10px;font-size:23;' placeholder='https://linkpoi.in/'  type='text' name='neko'></input>
<input type='submit' class='tombol_submit' value="GO">
</form>

<?php
error_reporting(0);
$linkneko = $_POST["neko"];
     $ch = curl_init(); 
     curl_setopt($ch, CURLOPT_URL, $linkneko);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
     $output = curl_exec($ch); 
     curl_close($ch);      
$getneko = stristr($output,"http://link.safelinkconverter.com/epub.php?id=");
$getyeah = substr($getneko,46);
$a = explode("&", $getyeah);
$hasil = base64_decode($a[0]);

If($hasil==""){}else{
Echo "$hasil<br /><br /><br /><br /><a href='$hasil' target='_blank'>Menuju Link</a>";}
?>

</div class=body>
</center>
 </html>