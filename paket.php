

<?php
//  Create by panjoel
//  https://github.com/panjoel08 
//  Thanks to Versailles
//  sec7or - hexaCode
@ini_set('display_errors', 0);
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
function banner(){
	system('clear');
	echo "
  +----------------------------------------+
  |     Applikasi Tracking Paket [CLI]     |
  |               by pan7oeL               |
  |         Thanks To: Versailles          |
  +----------------------------------------+
	\n";
}
banner();
sleep(1);
echo "1) JNE\n";
echo "2) TIKI\n";
echo "";
echo "Pilih salah satu opsi : ";
$no = trim(fgets(STDIN, 1024));
if ($no == "1") {
echo "Code Resi :";
$kode = trim(fgets(STDIN, 1024));
if ($f = json_decode(file_get_contents("https://www.paketq.com/api/v1/tracking/?courier=jne-indonesia&identifier=$kode"))) {


echo "--------------------------------------------\n";
foreach($f->items as $k )
{
echo  'Dikirim Ke  :'.$k->origin."\n";
}

echo "--------------------------------------------";
echo "\n";
echo "STATUS :"."\n";
 foreach($f->items[0]->shipment_history as $k )
 {
 echo  $k->status."\n";
}
echo "--------------------------------------------\n";
echo "                Data Pengirim               \n";
echo "--------------------------------------------\n";
echo "\n";
foreach($f->items as $k )
{
echo  'Pengirim         :'.$k->sender."\n";
}
foreach($f->items as $k )
{
echo  'Service          :'.$k->service."\n";
}
foreach($f->items as $k )
{
echo  'tempat           :'.$k->destination."\n";
}
foreach($f->items as $k )
{
echo  'Waktu Pengirim    :'.$k->datetime."\n";
}
foreach($f->items as $k )
{
echo  'Kode Pengirim     :'.$k->identifier."\n";
}
foreach($f->items as $k )
{
echo  'Atas Nama         :'.$k->recipient."\n";
}
}
else {
  echo "resi tidak di temukan";
}
}

if ($no == "2") {
  echo "Code Resi :";
  $kode = trim(fgets(STDIN, 1024));
  if ($f = json_decode(file_get_contents("https://www.paketq.com/api/v1/tracking/?courier=tiki-indonesia&identifier=$kode"))) {

  //echo $f->items->origin;
  echo "--------------------------------------------\n";
  foreach($f->items as $k )
  {
  echo  'Dikirim Ke  :'.$k->origin."\n";
  }

  echo "--------------------------------------------";
  echo "\n";
  echo "STATUS :"."\n";
   foreach($f->items[0]->shipment_history as $k )
   {
   echo  $k->status."\n";
  }
  echo "--------------------------------------------\n";
  echo "                Data Pengirim               \n";
  echo "--------------------------------------------\n";
  echo "\n";
  foreach($f->items as $k )
  {
  echo  'Pengirim         :'.$k->sender."\n";
  }
  foreach($f->items as $k )
  {
  echo  'Service          :'.$k->service."\n";
  }
  foreach($f->items as $k )
  {
  echo  'tempat           :'.$k->destination."\n";
  }
  foreach($f->items as $k )
  {
  echo  'Waktu Pengirim    :'.$k->datetime."\n";
  }
  foreach($f->items as $k )
  {
  echo  'Kode Pengirim     :'.$k->identifier."\n";
  }
  foreach($f->items as $k )
  {
  echo  'Atas Nama         :'.$k->recipient."\n";
  }
  }
  else {
    echo "resi tidak di temukan";
  }
}
 ?>
