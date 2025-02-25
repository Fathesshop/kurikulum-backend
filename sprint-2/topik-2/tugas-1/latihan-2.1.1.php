<?php
class PersegiPanjang
{
    public static $panjang;
    public static $lebar;

    public function __construct($panjang,$lebar)
    {
        self::$panjang = $panjang;
        self::$lebar = $lebar;
    }
    public static function luasPersegi()
    {
        return self::$panjang * self::$lebar;
    }
    public static function kelilingPersegi()
    {
        return 2*(self::$panjang + self::$lebar);
    }
}
echo "masukkan panjang persegi : ";
$panjang = trim(fgets(STDIN));
echo "masukkan lebar persegi : " ;
$lebar = trim(fgets(STDIN));
$hasilpersegi = new PersegiPanjang($panjang,$lebar);
echo "Luas persegi adalah : " .PersegiPanjang::luasPersegi(). "cm"."\n";
echo "keliling persegi adalah : " .PersegiPanjang::kelilingPersegi(). "cm"."\n";