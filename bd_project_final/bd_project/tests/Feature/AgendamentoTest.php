<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


use App\Helpers\DataBuilders\AgendamentoDataBuilder;
use App\Agendamento;//model

//TESTE DE UNIDADE
class AgendamentoTest extends TestCase
{
    //execução inicial
    public function setUp() :void {
        //codigo de configuração
        parent::setUp();
        agendamento::truncate();
        $vdb = new AgendamentoDataBuilder();
        $v = $vdb->getData();
        agendamento::insert($v);
   }
    //Teste de array
   public function test_le_um_cliente(){
        //o dado com o id 2 é a maria
        //arrange (setup)

        //act
        $maria = Agendamento::find(2);
        $nome = $maria['p_name'];

        //assert
        $this->assertEquals('Maria', $nome);
   }

    public function test_le_todos_os_clientes(){
          $v = Agendamento::all();
          $this->assertEquals(5, sizeof($v));
   }

   public function test_le_todos_os_clientes_corretamente(){
          $lista = Agendamento::all();

          $this->assertEquals('ana@gmail.com', $lista[0]['email']);
          $this->assertEquals('anaj@gmail.com', $lista[1]['email']);
   }
   //Teste Update
   public function test_atualiza_os_clientes_corretamente(){
          //lê o cliente
          $michele = Agendamneto::find(5);

          //Verificar se é o cliente correto
          $this->assertEquals('Michele', $michele['p_name']);

          //Altera alguma informacao
          $michele['email'] = 'michele022@gmail.com';

          //Salva
          $michele->save();

          //le novamente o mesmo registro
          $mi = User::find(5);

          //Verifica se o valor alterado está correto
          $this->assertEquals('michele022@gmail.com', $michele['email']);

     }
     //Teste delete
     public function test_remove_cliente_corretamente(){
          // verificar se existe o cliente
          $taina = Agendamento::find(4);
     
          //remover o cliente
          $taina->delete();

          //verificar se a remoção, de fato, ocorreu
          $taina = Agendamento::find(4);
          $this->assertNull($taina);
     }
     //Cadstrando um novo usuário
     public function test_cadastro_cliente(){
          //arrange
          $vdb = new AgendamentoDataBuilder();
          $row = $vdb->getRow();
          
          //act
          User::create($row);

          //assert
          $v = Agendamento::all();
          $num = sizeof($v);
          //o proximo id
          $this->assertEquals(6, $num);

          $val =$v[$num -1];
          $this->assertEquals('yasminc@gmail.com', $val['email']);

     }
     
} 