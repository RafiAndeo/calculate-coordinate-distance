<html>

<head>
    <meta charset="UTF-8">
    <title>koordinatWarna</title>
</head>

<body>
    <?php
    class koordinatWarna extends koordinat
    {
        public $warna;
        public function __construct($x, $y, $warna)
        {
            parent::__construct($x, $y);
            $this->warna = $warna;
        }
        public function getX()
        {
            return $this->x;
        }
        public function getY()
        {
            return $this->y;
        }
        public function getWarna()
        {
            return $this->warna;
        }
        public function setX($x)
        {
            $this->x = $x;
        }
        public function setY($y)
        {
            $this->y = $y;
        }
        public function setWarna($warna)
        {
            $this->warna = $warna;
        }
        public function hitungJarak($koordinatWarna)
        {
            $x = $this->x - $koordinatWarna->x;
            $y = $this->y - $koordinatWarna->y;
            return sqrt(pow($x, 2) + pow($y, 2));
        }
    }
    ?>
</body>

</html>