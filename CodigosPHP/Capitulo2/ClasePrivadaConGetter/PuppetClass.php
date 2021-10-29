<html>

<head>
    <Title>Example</Title>
</head>

<body>
<h2>Ejemplo de Uso:</h2>
    <?php

    class Puppet
    {

        public $Name;
        protected $ID;
        private $Age;
        public $Surname;


        function __construct($Name, $ID, $Age, $Surname)
        {
            $this->Name = $Name;
            $this->ID = $ID;
            $this->Age = $Age;
            $this->Surname = $Surname;
        }

        public function getName()
        {
            return $this->Name;
        }
        public function getPrivateAge()
        {
            return $this->Age;
        }

    }

    ?>
    <?php 
    $ranaGustavo = new Puppet("KermitW",7,19,"TheFrog");
    echo $ranaGustavo->getPrivateAge();
    ?>
    
</body>

</html>