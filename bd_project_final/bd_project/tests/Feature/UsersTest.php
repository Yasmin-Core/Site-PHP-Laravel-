<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


use App\Helpers\DataBuilders\UsersDataBuilder;
use App\User;//model

//TESTE DE UNIDADE
class UsersTest extends TestCase
{
    //execução inicial
    public function setUp() :void {
        //codigo de configuração
        parent::setUp();
        User::truncate();
        $vdb = new UsersDataBuilder();
        $v = $vdb->getData();
        User::insert($v);
   }
  /*  //Teste de array
   public function test_le_um_cliente(){
        //o dado com o id 2 é o matheus
        //arrange (setup)

        //act
        $marcello = User::find(2);
        $nome = $marcello['name'];

        //assert
        $this->assertEquals('Marcello', $nome);
   }

   public function test_le_todos_os_clientes(){
          $v = User::all();
          $this->assertEquals(5, sizeof($v));
   }

   public function test_le_todos_os_clientes_corretamente(){
          $lista = User::all();

          $this->assertEquals('ana@gmail.com', $lista[0]['email']);
          $this->assertEquals('marcello@gmail.com', $lista[1]['email']);
   }
   //Teste Update
   public function test_atualiza_os_clientes_corretamente(){
          //lê o cliente
          $michele = User::find(5);

          //Verificar se é o cliente correto
          $this->assertEquals('Michele', $michele['name']);

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
          $matheus = User::find(4);
     
          //remover o cliente
          $matheus->delete();

          //verificar se a remoção, de fato, ocorreu
          $matheus = User::find(4);
          $this->assertNull($matheus);
     }
     //Cadstrando um novo usuário
     public function test_cadastro_cliente(){
          //arrange
          $vdb = new UsersDataBuilder();
          $row = $vdb->getRow();
          
          //act
          User::create($row);

          //assert
          $v = User::all();
          $num = sizeof($v);
          //o proximo id
          $this->assertEquals(6, $num);

          $val =$v[$num -1];
          $this->assertEquals('taina@gmail.com', $val['email']);

     }*/ 
     
}