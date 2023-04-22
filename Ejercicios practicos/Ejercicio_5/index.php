<!DOCTYPE html>
<html>

<head>
    <title>Armas</title>
</head>

<body>
    <h1>Armas</h1>

    <?php
    class Arma
    {
        protected $balas_cargadas = 0;

        public function recargar()
        {
            if ($this->balas_cargadas == 0) {
                $this->balas_cargadas = 8;
            }
        }

        public function disparar()
        {
            if ($this->balas_cargadas > 0) {
                $this->balas_cargadas--;
            }
        }
    }
    class Pistola extends Arma
    {
        public function __construct()
        {
            $this->balas_cargadas = 0;
        }

        public function mostrar()
        {
            echo "<h2>Pistola</h2>";
            echo "<input type='number' value='0' id='pistola'>";
            echo "<button onclick='recargar_pistola()'>Recargar</button>";
            echo "<button onclick='disparar_pistola()'>Disparar</button>";
        }
    }
    class Escopeta extends Arma
    {
        public function __construct()
        {
            $this->balas_cargadas = 0;
        }

        public function mostrar()
        {
            echo "<h2>Escopeta</h2>";
            echo "<input type='number' value='0' id='escopeta'>";
            echo "<button onclick='recargar_escopeta()'>Recargar</button>";
            echo "<button onclick='disparar_escopeta()'>Disparar</button>";
        }
    }
    class Rifle extends Arma
    {
        public function __construct()
        {
            $this->balas_cargadas = 0;
        }

        public function mostrar()
        {
            echo "<h2>Rifle</h2>";
            echo "<input type='number' value='0' id='rifle'>";
            echo "<button onclick='recargar_rifle()'>Recargar</button>";
            echo "<button onclick='disparar_rifle()'>Disparar</button>";
        }
    }

    class Ametralladora extends Arma
    {
        public function __construct()
        {
            $this->balas_cargadas = 0;
        }

        public function mostrar()
        {
            echo "<h2>Ametralladora</h2>";
            echo "<input type='number' value='0' id='ametralladora'>";
            echo "<button onclick='recargar_ametralladora()'>Recargar</button>";
            echo "<button onclick='disparar_ametralladora()'>Disparar</button>";
        }
    }
    $pistola = new Pistola();
    $escopeta = new Escopeta();
    $rifle = new Rifle();
    $ametralladora = new Ametralladora();

    $pistola->mostrar();
    $escopeta->mostrar();
    $rifle->mostrar();
    $ametralladora->mostrar();
    ?>

    <script>
        function recargar_pistola() {
            var input = document.getElementById("pistola");
            if (input.value == 0) {
                input.value = 8;
            }
        }

        function disparar_pistola() {
            var input = document.getElementById("pistola");
            if (input.value > 0) {
                input.value--;
            }
        }

        function recargar_escopeta() {
            var input = document.getElementById("escopeta");
            if (input.value == 0) {
                input.value = 8;
            }
        }

        function disparar_escopeta() {
            var input = document.getElementById("escopeta");
            if (input.value > 0) {
                input.value--;
            }
        }

        function recargar_rifle() {
            var input = document.getElementById("rifle");
            if (input.value == 0) {
                input.value = 8;
            }
        }

        function disparar_rifle() {
            var input = document.getElementById("rifle");
            if (input.value > 0) {
                input.value--;
            }
        }

        function recargar_ametralladora() {
            var input = document.getElementById("ametralladora");
            if (input.value == 0) {
                input.value = 8;
            }
        }

        function disparar_ametralladora() {
            var input = document.getElementById("ametralladora");
            if (input.value > 0) {
                input.value--;
            }
        }
    </script>
</body>

</html>