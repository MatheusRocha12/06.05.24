<?php
class Esportes {
    public $modalidade;
    public $instrumento;

    function __construct($modalidade, $instrumento) {
        $this->modalidade = $modalidade;
        $this->instrumento = $instrumento;
    }

    function get_modalidade() {
        return $this->modalidade;    
    }

    function get_instrumento() {
        return $this->instrumento;
    }
};

$goat = new Esportes("basquete", "bola");

echo "qual o esporte do mj:  " . $goat->get_modalidade();

echo "<br/>";

echo "qual o objeto do basquete:  " . $goat->get_instrumento();
?>
