<?php
 

include "database.php";

$date=mysqli_real_escape_string($conn,$_POST['date']);

$gahumax=mysqli_real_escape_string($conn,$_POST['gahumax']);
$gahumin=mysqli_real_escape_string($conn,$_POST['gahumin']);
$gahuavg=mysqli_real_escape_string($conn,$_POST['gahuavg']);
$gahuaavak=mysqli_real_escape_string($conn,$_POST['gahuaavak']);

$jwarimax=mysqli_real_escape_string($conn,$_POST['jwarimax']);
$jwarimin=mysqli_real_escape_string($conn,$_POST['jwarimin']);
$jwariavg=mysqli_real_escape_string($conn,$_POST['jwariavg']);
$jwariaavak=mysqli_real_escape_string($conn,$_POST['jwariaavak']);

$makamax=mysqli_real_escape_string($conn,$_POST['makamax']);
$makamin=mysqli_real_escape_string($conn,$_POST['makamin']);
$makaavg=mysqli_real_escape_string($conn,$_POST['makaavg']);
$makaaavak=mysqli_real_escape_string($conn,$_POST['makaaavak']);


$bajarimax=mysqli_real_escape_string($conn,$_POST['bajarimax']);
$bajarimin=mysqli_real_escape_string($conn,$_POST['bajarimin']);
$bajariavg=mysqli_real_escape_string($conn,$_POST['bajariavg']);
$bajariaavak=mysqli_real_escape_string($conn,$_POST['bajariaavak']);

$chanamax=mysqli_real_escape_string($conn,$_POST['chanamax']);
$chanamin=mysqli_real_escape_string($conn,$_POST['chanamin']);
$chanaavg=mysqli_real_escape_string($conn,$_POST['chanaavg']);
$chanaaavak=mysqli_real_escape_string($conn,$_POST['chanaaavak']);

$tuvarmax=mysqli_real_escape_string($conn,$_POST['tuvarmax']);
$tuvarmin=mysqli_real_escape_string($conn,$_POST['tuvarmin']);
$tuvaravg=mysqli_real_escape_string($conn,$_POST['tuvaravg']);
$tuvaraavak=mysqli_real_escape_string($conn,$_POST['tuvaraavak']);

$mungmax=mysqli_real_escape_string($conn,$_POST['mungmax']);
$mungmin=mysqli_real_escape_string($conn,$_POST['mungmin']);
$mungavg=mysqli_real_escape_string($conn,$_POST['mungavg']);
$mungaavak=mysqli_real_escape_string($conn,$_POST['mungaavak']);

$uditmax=mysqli_real_escape_string($conn,$_POST['uditmax']);
$uditmin=mysqli_real_escape_string($conn,$_POST['uditmin']);
$uditavg=mysqli_real_escape_string($conn,$_POST['uditavg']);
$uditaavak=mysqli_real_escape_string($conn,$_POST['uditaavak']);

$mathmax=mysqli_real_escape_string($conn,$_POST['mathmax']);
$mathmin=mysqli_real_escape_string($conn,$_POST['mathmin']);
$mathavg=mysqli_real_escape_string($conn,$_POST['mathavg']);
$mathaavak=mysqli_real_escape_string($conn,$_POST['mathaavak']);

$chavalimax=mysqli_real_escape_string($conn,$_POST['chavalimax']);
$chavalimin=mysqli_real_escape_string($conn,$_POST['chavalimin']);
$chavaliavg=mysqli_real_escape_string($conn,$_POST['chavaliavg']);
$chavaliaavak=mysqli_real_escape_string($conn,$_POST['chavaliaavak']);

$falliolimax=mysqli_real_escape_string($conn,$_POST['falliolimax']);
$falliolimin=mysqli_real_escape_string($conn,$_POST['falliolimin']);
$fallioliavg=mysqli_real_escape_string($conn,$_POST['fallioliavg']);
$fallioliaavak=mysqli_real_escape_string($conn,$_POST['fallioliaavak']);

$fallisukimax=mysqli_real_escape_string($conn,$_POST['fallisukimax']);
$fallisukimin=mysqli_real_escape_string($conn,$_POST['fallisukimin']);
$fallisukiavg=mysqli_real_escape_string($conn,$_POST['fallisukiavg']);
$fallisukiaavak=mysqli_real_escape_string($conn,$_POST['fallisukiaavak']);

$tilmax=mysqli_real_escape_string($conn,$_POST['tilmax']);
$tilmin=mysqli_real_escape_string($conn,$_POST['tilmin']);
$tilavg=mysqli_real_escape_string($conn,$_POST['tilavg']);
$tilaavak=mysqli_real_escape_string($conn,$_POST['tilaavak']);

$soyabinmax=mysqli_real_escape_string($conn,$_POST['soyabinmax']);
$soyabinmin=mysqli_real_escape_string($conn,$_POST['soyabinmin']);
$soyabinavg=mysqli_real_escape_string($conn,$_POST['soyabinavg']);
$soyabinaavak=mysqli_real_escape_string($conn,$_POST['soyabinaavak']);

$moharimax=mysqli_real_escape_string($conn,$_POST['moharimax']);
$moharimin=mysqli_real_escape_string($conn,$_POST['moharimin']);
$mohariavg=mysqli_real_escape_string($conn,$_POST['mohariavg']);
$mohariaavak=mysqli_real_escape_string($conn,$_POST['mohariaavak']);

$erandimax=mysqli_real_escape_string($conn,$_POST['erandimax']);
$erandimin=mysqli_real_escape_string($conn,$_POST['erandimin']);
$erandiavg=mysqli_real_escape_string($conn,$_POST['erandiavg']);
$erandiaavak=mysqli_real_escape_string($conn,$_POST['erandiaavak']);

$mirachisukimax=mysqli_real_escape_string($conn,$_POST['mirachisukimax']);
$mirachisukimin=mysqli_real_escape_string($conn,$_POST['mirachisukimin']);
$mirachisukiavg=mysqli_real_escape_string($conn,$_POST['mirachisukiavg']);
$mirachisukiaavak=mysqli_real_escape_string($conn,$_POST['mirachisukiaavak']);

$mirachiolimax=mysqli_real_escape_string($conn,$_POST['mirachiolimax']);
$mirachiolimin=mysqli_real_escape_string($conn,$_POST['mirachiolimin']);
$mirachioliavg=mysqli_real_escape_string($conn,$_POST['mirachioliavg']);
$mirachioliaavak=mysqli_real_escape_string($conn,$_POST['mirachioliaavak']);

$kandamax=mysqli_real_escape_string($conn,$_POST['kandamax']);
$kandamin=mysqli_real_escape_string($conn,$_POST['kandamin']);
$kandaavg=mysqli_real_escape_string($conn,$_POST['kandaavg']);
$kandaaavak=mysqli_real_escape_string($conn,$_POST['kandaaavak']);

$kapusmax=mysqli_real_escape_string($conn,$_POST['kapusmax']);
$kapusmin=mysqli_real_escape_string($conn,$_POST['kapusmin']);
$kapusavg=mysqli_real_escape_string($conn,$_POST['kapusavg']);
$kapusaavak=mysqli_real_escape_string($conn,$_POST['kapusaavak']);





if ($_SERVER['REQUEST_METHOD'] === 'POST') {



$query="INSERT INTO yadi (datee,gahumax,gahumin,gahuavg,gahuaavak,jwarimax,jwarimin,jwariavg,jwariaavak,makamax,makamin,makaavg,makaaavak,bajarimax,bajarimin,bajariavg,bajariaavak,chanamax,chanamin,chanaavg,chanaaavak,tuvarmax,tuvarmin,tuvaravg,tuvaraavak,mungmax,mungmin,mungavg,mungaavak,uditmax,uditmin,uditavg,uditaavak,mathmax,mathmin,mathavg,mathaavak,chavalimax,chavalimin,chavaliavg,chavaliaavak,falliolimax,falliolimin,fallioliavg,fallioliaavak,fallisukimax,fallisukimin,fallisukiavg,fallisukiaavak,tilmax,tilmin,tilavg,tilaavak,soyabinmax,soyabinmin,soyabinavg,soyabinaavak,moharimax,moharimin,mohariavg,mohariaavak,erandimax,erandimin,erandiavg,erandiaavak,mirachisukimax,mirachisukimin,mirachisukiavg,mirachisukiaavak,mirachiolimax,mirachiolimin,mirachioliavg,mirachioliaavak,kandamax,kandamin,kandaavg,kandaaavak,kapusmax,kapusmin,kapusavg,kapusaavak) VALUES ('$date','$gahumax','$gahumin','$gahuavg','$gahuaavak','$jwarimax','$jwarimin','$jwariavg','$jwariaavak','$makamax','$makamin','$makaavg','$makaaavak','$bajarimax','$bajarimin','$bajariavg','$bajariaavak','$chanamax','$chanamin','$chanaavg','$chanaaavak','$tuvarmax','$tuvarmin','$tuvaravg','$tuvaraavak','$mungmax','$mungmin','$mungavg','$mungaavak','$uditmax','$uditmin','$uditavg','$uditaavak','$mathmax','$mathmin','$mathavg','$mathaavak','$chavalimax','$chavalimin','$chavaliavg','$chavaliaavak','$falliolimax','$falliolimin','$fallioliavg','$fallioliaavak','$fallisukimax','$fallisukimin','$fallisukiavg','$fallisukiaavak','$tilmax','$tilmin','$tilavg','$tilaavak','$soyabinmax','$soyabinmin','$soyabinavg','$soyabinaavak','$moharimax','$moharimin','$mohariavg','$mohariaavak','$erandimax','$erandimin','$erandiavg','$erandiaavak','$mirachisukimax','$mirachisukimin','$mirachisukiavg','$mirachisukiaavak','$mirachiolimax','$mirachiolimin','$mirachioliavg','$mirachioliaavak','$kandamax','$kandamin','$kandaavg','$kandaaavak','$kapusmax','$kapusmin','$kapusavg','$kapusaavak')";

mysqli_query($conn,$query);


echo "your data is submitted successfully!";

}
?>

