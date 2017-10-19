<?php
//Funções Recursivas
$hierarquia = array(
  array(
  'nome_cargo' =>'CEO',
  'subordinados'=> array(
//Inicio: Diretor Comercial
      array(
        'nome_cargo' =>'Diretor Comercial',
        'subordinados'=>array(
//Inicio: Gerente de Vendas
        array(
          'nome_cargo' =>'Gerente de Vendas'
    )
//Termino: Gerente de Vendas
  )
),
//Termino: Diretor COmercial
//Inicio: Diretor Financeiro
      array(
        'nome_cargo' =>'Diretor Financeiro',
        'subordinados'=>array(
        //Inicio: Gerente de Contas a Pagar
        array(
          'nome_cargo'=>'Gerente de Contas a Pagar',
          'subordinados'=>array(
            //Inicio: Supervisor de Pagamentos
            array(
              'nome_cargo'=>'Supervisor de Pagamentos'
    )
//Termino: Supervisor de Pagamentos
  )
),

//Termino: Gerente de Contas a Pagar
// Inicio: Gerente de Compras
        array(
          'nome_cargo'=>'Gerente de Compras',
          'subordinados'=>array(
            //Inicio: Supervisor de Suprimentos
            array(
              'nome_cargo'=>'Supervisor de Suprimentos',
              'subordinados'=>array(
                array(
                  'nome_cargo'=>'Programador Lucas CASARIN MARQUEZINI'
                )
              )
    )
//Termino: Supervisor de suprimentos
  )
)
//Termino: Gerente de Compras

      )
    )
//Termino: Diretor Financeiro
  )
)
);

// Codigo para exibir dados na tela
function mostrar($cargos_do_emprego)
{
  $html = '<ul>';
//foreach para mostrar os dados na tela de maneira dinamica
//[] para acessar uma chave
foreach ($cargos_do_emprego as $cargo_exemplo_new_var)
{
$html .= "<li>";
$html .= $cargo_exemplo_new_var['nome_cargo'];
//isset verifica se a variavel foi definida
if(isset($cargo_exemplo_new_var['subordinados']) && count($cargo_exemplo_new_var['subordinados']) > 0)
{
  //concatenacao da funcao mostrar que ja tem a funcao de exibir
  $html .= mostrar($cargo_exemplo_new_var['subordinados']);

}
$html .= "</li>";
}
  $html .= '</ul>';
  return $html;
}
echo mostrar($hierarquia);
?>
