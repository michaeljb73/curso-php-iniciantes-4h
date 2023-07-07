<?php
/**
* Questão:
* Dados retornados em um array estão duplicados.

* Resposta 01:
* ...na hora de fazer o Fetch é necessário informar o tipo de resultado. 
* Você está usando PDO, Mysqli ou o que para conectar com a base de dados?
* No PDO eu uso $stmt->fetch(PDO::FETCH_ASSOC);, onde somente retorna por atributos por chave...
*/

/**
 * Resposta 02:
 * Por padrão o retorno de consultas do PDO é o PDO::FETCH_BOTH que devolve os dados duplicados 
 * sendo um índice com o nome do campo e outro índice númerico.
 * Pode definir o formato dos dados de três formas:
 * No construtor que afeta todas as consultas feita por essa conexão.
 *      $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
 *      $pdo = new PDO('.....', $options);
 * 
 * No método query() apenas a consulta atual é afetada.
 *      $result = $pdo->query('select ....', PDO::FETCH_ASSOC);
 * 
 * E por último na extração no método fetch()/fetchAll() onde o formato é passado como argumento.
 *      $result = $pdo->query('select ....');
 *      $info = $result->fetchAll(PDO::FETCH_ASSOC);
 *      foreach($info as $item){
 *          echo $item['chave'] .'<br>';
 *      }
 * Como só retorna os dados sem nenhuma manipulação pode dar o return direto em query() 
 * ou no fetch() caso deseje adicionar tratamento a erros.
 *      $resultado = $this->conn->query($sql);
 *      if ($resultado->rowCount() > 0) {
 *          return $resultado->fetchAll(PDO::FETCH_ASSOC);
 *      } else {
 *          return $this->conn->errorInfo();
 *      }
 * 
 * Resposta 03:
 * Somente informando PDO::FETCH_ASSOC como parâmetro no fetchAll
 * resolve.
 * 
 */

function connection() {
    $pdo = new PDO('mysql:host=localhost;dbname=twclientes','root','159357');
    return $pdo;
}

function getData($table) {
    $conn = connection();

    // $query = $conn->query("select * from $table");
    $query = $conn->query("select * from {$table}");
    $query->execute();

    return $query->fetchAll(PDO::FETCH_ASSOC);
} 

// var_dump(getData());
// print_r(getData('cliente'));


var_dump(getData('cliente'));
