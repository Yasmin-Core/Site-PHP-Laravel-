<?php
namespace App\Helpers\DataBuilders;

class AgendamentoDataBuilder {
    private $v = [
        ['p_name' => 'Ana', 's_name' => 'Maria', 'email' => 'ana@gmail.com', 'data' => '20/02/2022', 'horario' => '10:30', 'servico' => 'corte'],
        ['p_name' => 'Maria', 's_name' => 'Joana', 'email' => 'anaj@gmail.com', 'data' => '30/02/2022', 'horario' => '20:30', 'servico' => 'penteado'],
        ['p_name' => 'Marcello', 's_name' => 'Nazario', 'email' => 'marcellon@gmail.com', 'data' => '14/02/2022', 'horario' => '11:30', 'servico' => 'corte'],
        ['p_name' => 'Taina', 's_name' => 'Marcela', 'email' => 'tainam@gmail.com', 'data' => '20/04/2022', 'horario' => '18:30', 'servico' => 'penteado'],
        ['p_name' => 'Michele', 's_name' => 'Cristina', 'email' => 'michelec@gmail.com', 'data' => '12/02/2022', 'horario' => '19:30', 'servico' => 'corte'],
    ];
    public function getData(){
        return $this->v;
    }
    //registrando somente um
    public function getRow(){
        $v =['p_name' => 'Yasmin', 's_name' => 'Correa', 'email' => 'yasminc@gmail.com', 
        'data' => '17/02/2022', 'horario' => '10:40', 'servico' => 'corte'];
        return $v;
    }
}