<html>

<head>
    <meta charset="UTF-8">
    <title>koordinat3D</title>
</head>

<body>
    <?php
    class koordinat3d extends koordinat
    {
        public $z;
        public function __construct($x, $y, $z)
        {
            parent::__construct($x, $y);
            $this->z = $z;
        }
        public function getX()
        {
            return $this->x;
        }
        public function getY()
        {
            return $this->y;
        }
        public function getZ()
        {
            return $this->z;
        }
        public function setX($x)
        {
            $this->x = $x;
        }
        public function setY($y)
        {
            $this->y = $y;
        }
        public function setZ($z)
        {
            $this->z = $z;
        }
        public function hitungJarak($koordinat3d)
        {
            $x = $this->x - $koordinat3d->x;
            $y = $this->y - $koordinat3d->y;
            $z = $this->z - $koordinat3d->z;
            return sqrt(pow($x, 2) + pow($y, 2) + pow($z, 2));
        }
    }
    ?>
</body>

</html>