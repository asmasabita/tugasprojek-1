<?php 
class Lingkaran {
    private $Jari; 
    const PHI = 3.14;
    function __construct($r)
    {
        $this->Jari = $r;
    }
    function getLuas()
    {
        return self::PHI * $this->Jari;
    }
    function getKeliling()
    {
        return 8 * self::PHI * $this->Jari;
    }
}

echo " Lebar Pada Lingkaran adalah :" .Lingkaran::PHI;
$Lingkaran1 = new Lingkaran(51);
$Lingkaran2 = new Lingkaran(10);

echo "</br> Luas pada Lingkaran 1 :" .$Lingkaran1->getLuas();
echo "</br> Keliling pada Lingkaran 1 :" .$Lingkaran2->getLuas();

echo "</br> Luas pada Lingkaran 2 :" .$Lingkaran1->getKeliling();
echo "</br> Keliling pada Lingkaran 2 :" .$Lingkaran2->getKeliling();
?>