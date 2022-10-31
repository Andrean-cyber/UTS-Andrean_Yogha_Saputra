<html>
  <head>
    <meta charset="utf-8">
    <title>UTS</title>
  </head>
  <body>
    <?php 
// DISINI ADALAH MATERI 3
      $nama = "Andrean Yogha Saputra"; /* ini adalah variabel nama, ber value string */
      $umur = 22; // ini adalah variabel umur, ber value int
      $nilai = 98.90; // ini adalah variabel umur, ber value float/koma
      echo "<h2>Welcome</h2>"; 
      echo "<p>Disini adalah isi paragraf</p>"; 
      echo "halo namaku adalah ".$nama." umurku sudah ".$umur." tahun";
      echo "<br>"; 
      echo "<br>";

// DISINI ADALAH MATERI 4
      $a = 7;
      $b = 5;
      $c = 2;

      echo "hasil dari perkalian ".$a." dan ".$b." adalah ".$a*$b."<br>";


// ARRAY

    $siswa = array('andi','risky','doni','andi');
    $dompet = [2000,1000,20000,10000,5000];

    //print_r($siswa);
    echo '<br>';
    //echo($siswa[2]);

    /* metode array*/
    //shuffle($siswa);
    //print_r($siswa);

    echo '<br>';
    //sort($siswa);
    //print_r($siswa);

    //print_r(array_reverse($dompet));

    //echo count($dompet);
    //print_r(array_unique($siswa));
   
    /* Associative Array */

    $arema = array('al farizi' => 'bek',
                  'dendi' => 'penyerang',
                  'dedik' => 'penyerang');

    $persebaya = ['risky ridho' => 'bek',
      'marselino' => 'penyerang', 
      'higor' => "gelandang"
    ];

    //print_r($arema);
    //print_r(array_keys($arema));
    //print_r(array_values($arema));
    //print_r(array_merge($arema,$persebaya));


     /* multidimensi array */
    $bio = array(
      array('andi','21','donat'),
      array('risky','17','bakwan'),
      array('nanda','23','roti')
    );

    // 00 01 02
    // 10 11 12
    // 20 21 22

    $bio [2][0] = 'doni';
    print_r($bio);
    echo '<br>';
    echo($bio[2][0]);

    ?> 
    <br>
   text ini diluar dari pada php
    
  </body>
</html>
