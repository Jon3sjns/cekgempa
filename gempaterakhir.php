<?php
system("clear");
echo "choose with your own choice\n";
echo "selection\n";
echo "Ketik 1 Data Gempabumi Berpotensi Tsunami Terkini\n";
echo "Ketik 2 Data Gempabumi M 5.0+ Terkini\n";
echo "Pilih-> ";
$pilih=trim(fgets(STDIN));
if ($pilih==1) {
        system("clear");
        echo "-----------------------------------------\n";
        echo "Data Gempabumi Berpotensi Tsunami Terkini\n";
        echo "-----------------------------------------\n";
        $xml=simplexml_load_file("http://data.bmkg.go.id/lasttsunami.xml");
        foreach($xml as $asd){
        echo "Tanggal: ".$asd->Tanggal."\n";
        echo "Jam: ".$asd->Jam."\n";
        echo "Lintang: ".$asd->Lintang."\n";
        echo "Bujur: ".$asd->Bujur."\n";
        echo "Magnitude: ".$asd->Magnitude."\n";
        echo "Kedalaman: ".$asd->Kedalaman."\n";
        echo "Area: ".$asd->Area."\n";
        echo "Linkdetail: ".$asd->Linkdetail."\n";
}
}elseif($pilih==2){
        system("clear");
        echo "-----------------------------------------\n";
        echo "Data Gempabumi M 5.0+ Terkini\n";
        echo "-----------------------------------------\n";
        $asd=simplexml_load_file('http://data.bmkg.go.id/autogempa.xml');
        foreach ($asd->children() as $gempa) {
                echo "Tanggal: ".$gempa->Tanggal."\n";
                echo "Jam: ".$gempa->Jam."\n";
                echo "Magnitude: ".$gempa->Magnitude."\n";
                echo "Kedalaman: ".$gempa->Kedalaman."\n";
                echo "Lintang: ".$gempa->Lintang."\n";
                echo "Bujur: ".$gempa->Bujur."\n";
                echo "Symbol: ".$gempa->_symbol."\n";
                echo "Koordinat: ".$gempa->coordinates;
                foreach($gempa->children() as $asuu){
                        echo $asuu->coordinates;
                }
                echo "\n";
                echo "Wilayah 1: ".$gempa->Wilayah1."\n";
                echo "Wilayah 2: ".$gempa->Wilayah2."\n";
                echo "Wilayah 3: ".$gempa->Wilayah3."\n";
                echo "Wilayah 4: ".$gempa->Wilayah4."\n";
                echo "Wilayah 5: ".$gempa->Wilayah5."\n";
                echo "Potensi: ".$gempa->Potensi;
        }
        echo "\n"."Gambar map: http://data.bmkg.go.id/eqmap.gif";
        echo "\n";
}
?>
