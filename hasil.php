
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halaman 2</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>
    <body>
    <?php
    interface sparepart
    {
        public function get_part();
    }


    function printIterable(iterable $itemiterable)
    {
        foreach ($itemiterable as $item) {
            echo $item;
        }
        str_split($item);
    }

    class barang implements sparepart
    {
        protected $name;
        private $harga;
        public static $part = "part";


        public function __construct($name, $harga)
        {

            $this->name = $name;
            $this->harga = $harga;
        }
        public function get_part()
        {
            return self::$part;
        }

        public function get_all()
        {
            $keystrong = array(self::$part, $this->name, $this->harga);
            return $keystrong;
        }



        public function intro()
        {


            echo "Nama sparepart {$this->name} harga : Rp.{$this->harga},00";
            echo "<br></br>";
        }
    }
    // Inherit from info buku
    class infopart extends barang
    {
        public function message()
        {
            echo "<br>";
            echo "Info : ";
        }
    }
    if (isset($_POST['submit'])) {
        $name = $_POST['Nama'];
        $harga = $_POST['harga'];


        $game = array($name, $harga);


        $produk1 = new infopart($name, $harga);
        $produk1->message();
        $produk1->intro();
    } elseif (isset($_POST['array'])) {
        $name = $_POST['Nama'];
        $harga = $_POST['harga'];


        $produk1 = new infopart($name, $harga);
        $meong = $produk1->get_all();
        print_r($meong);
    } else {
    }


    ?>
  <a href='index.php' class='btn-login'> Kembali</a>
    </body>
    </html>