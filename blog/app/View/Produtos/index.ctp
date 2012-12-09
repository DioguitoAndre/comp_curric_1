<!-- <pre>
    <?php print_r ($posts);?>
<pre> -->
<div class="page-header">
    <h1>Listando Produtos</h1>
</div>

    <p>                    
        <?php echo $this->Html->link ("Novo Item",
                array('controller'=> 'produtos', 'action'=>'add'),
                array('class'=>'btn btn-success')); ?>        
    </p>        


    <table class="table table-hover">
        <thead>
            <tr>
               <th>Código</th>
                <th>Nome</th>
                <th>Peso</th>
                <th>Validade</th>
                <th>Atualizado em</th>
                <th>Modificado em</th>
                <th colspan="3">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produto):?>
                <tr>


                    <td><?php echo $produto{"Produto"} {"id"};?></td>
                    <td><?php echo $produto{"Produto"} {"name"};?></td>
                    <td><?php echo $produto{"Produto"} {"weight"};?></td>
                    <td><?php echo $produto{"Produto"} {"valid"};?></td>
                    <td><?php echo $produto{"Produto"} {"created"};?></td>
                    <td><?php echo $produto{"Produto"} {"modified"};?></td>

                     <td>
                        <?php echo $this->Html->link("Visualizar",
                                array('controller'=>'produtos','action'=>'view',
                                $produto["Produto"]["id"]),
                                array('class'=> 'btn btn-success'));?>

                        <?php echo $this->Html->link("Editar",
                                array('controller'=>'produtos','action'=>'edit',
                                $produto["Produto"]["id"]),
                                array('class'=> 'btn btn-info')); ?>

                        <div class = "btn btn-danger">
                            <?php echo $this->Form->postLink("Delete",
                                    array('controller'=>'Produtos','action'=>'delete',
                                    $produto["Produto"]["id"]),
                                   array('confirm' => 'Você confirma?')); ?>  
                        </div>
                    </td>

                </tr>

            <?php endforeach;?>
        </tbody>
    </table>

    <div class="navbar">
         <div class="navbar-inner">
            
            <ul class="nav">
                             
              <li ><a href="#">Anterior</a></li>
                <li class="divider-vertical"></li>
              <li class="active" ><a href="# 1"> 1 </a></li>
                <li class="divider-vertical"></li>
              <li><a href="#">2</a></li>
                <li class="divider-vertical"></li>
              <li><a href="#">Próximo</a></li>
                <li class="divider-vertical"></li>
              <li class="divider"></li>
            </ul>
         </div>
    </div>