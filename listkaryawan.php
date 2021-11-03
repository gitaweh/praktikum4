<!DOCTYPE html>
<html>
    <head>
    <style>
        .header {
            padding: 18px;
            text-align: left;
            background: #1abc9c;
            color: black;
            font-size: 20px;

        }
        table {
            font-family: arial;
            border-collapse: collapse;
            width : 100;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 10px;
        }
        th {
            background-color: #1abc9c;
            color: pink;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        .kosong {
            background-color: white;
            color: black;
        }
    </style>
</head>

<body>
    <?php  
        abstract class Kariawan {
            public $nama;
            public $TTL;
            public $kelamin;
            public $Lavel;
            public $status;
            public $gaji;

            abstract function setGaji();

            function setName($nama) {
                $this->nama =  $nama;
            }
            function setTTL($TTL) {
                $this->TTL = $TTL;
            }
            function setKelamin($kelamin) {
                $this->kelamin = $kelamin;
            }
            function setLavel($lavel) {
                $this->lavel = $Lavel;
            }
            function setStatus($status) {
                $this->status = $status;
            }
            function setgaji($gaji) {
                $this->gaji = $gaji;
            }

            function getName() {
                return $this->nama;
            }
            function getTTL() {
                return $this->TTL;
            }
            function getKelamin() {
                return $this->kelamin;
            }
            function getLavel() {
                return $this->Lavel;
            }
            function getStatus() {
                return $this->status;
            }
            function getGaji() {
                return $this->Gaji;
            }
        }

        class Fulltime extends Kariawan {
            function __construct($nama, $lavel, $Kelamin, $TTL, $Status, $Gaji)
            $this-> Name = $name;
            $this-> TTL = $TTL;
            $this-> Kelamin = $kelamin;
            $this-> level = $Lavel;
            $this-> status = $status;
            $this-> gaji = $gaji;
        }

        function setGaji() {
            if($this-> level == "Junior") {
                $this->gaji = 2000000;
            } else if($this->level == "Amateur") {
                $this->gaji == 450000;
            }else if->($this->level == "Senior") {
                $this->gaji == 600000;
            }else{
                $this->gaji = 0;
            }
        }
    }
    class PartTime extends Kariawan {
        function __construct($nama, $lavel, $Kelamin, $TTL, $Status, $Gaji)
        $this-> Nama = $nama;
        $this-> TTL = $TTL;
        $this-> Kelamin = $kelamin;
        $this-> level = $Lavel;
        $this-> status = $status;
        $this-> gaji = $gaji;
    }

    function setGaji() {
        if($this-> level == "Junior") {
            $this->gaji = 2000000/2;
        } else if($this->level == "Amateur") {
            $this->gaji == 450000/2;
        }else if->($this->level == "Senior") {
            $this->gaji == 600000/2;
        }else{
            $this->gaji = 0;
        }
    }
}

            $Kariawan1 = new FullTime("Mash", "bandung, 15/08/2002", "pria", "Amateur", "Fulltime");
            $kariawan2 = new FullTime("Lemon", "Jakrta, 12/10/2001", "wanita", "Senior", "Fulltime");
            $kariawan3 = new PartTime("Lance", "Bogor, 01/08/1999", "Pria", "Junior", "Parttime");
            $kariawan4 = new PartTime("Hinata", "Semarang, 09/02/2004", "Wanita", "Senior", "PartTime");

            $Kariawan1-> setGaji();
            $Kariawan2-> setGaji();
            $Kariawan3-> setGaji();
            $Kariawan4-> setGaji();

            $Kariawan = array($Kariawan1, $Kariawan2,$Kariawan3, $Kariawan4);
        ?>
        <div class="header">
            <h2>DAFTAR KARYAWAN</h2>
        </div>
        <br>
        <table>
            <tr>
                <th> Nama </th>
                <th> TTL </th>
                <th> Kelamin </th>
                <th> Level </th>
                <th> Status </th>
                <th> Gaji </th>
            </tr>

            <?php foreach ($kariawan as $kariawan) {
                ?>
                <tr>
                    <td><?php echo $kariawan->getNama(); ?></td>
                    <td><?php echo $kariawan->getTTL(); ?></td>
                    <td><?php echo $kariawan->getKelamin(); ?></td>
                    <td><?php echo $kariawan->getLevel(); ?></td>
                    <td><?php echo $kariawan->getStatus(); ?></td>
                    <td><?php echo $kariawan->getGaji(); ?></td>
                </tr>
            <?php } ?>
        </table>
    </body>
<html>




