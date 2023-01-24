<html>

<head>
    <meta charset="UTF-8">
    <title>koordinat</title>
</head>

<body>
    <?php
    class koordinat
    {
        public $x;
        public $y;
        public function __construct($x, $y)
        {
            $this->x = $x;
            $this->y = $y;
        }
        public function getX()
        {
            return $this->x;
        }
        public function getY()
        {
            return $this->y;
        }
        public function setX($x)
        {
            $this->x = $x;
        }
        public function setY($y)
        {
            $this->y = $y;
        }
        public function hitungJarak($koordinat)
        {
            $x = $this->x - $koordinat->x;
            $y = $this->y - $koordinat->y;
            return sqrt(pow($x, 2) + pow($y, 2));
        }
    }
    ?>
</body>

</html>