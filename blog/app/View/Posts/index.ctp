<!-- <pre>
    <?php print_r ($posts);?>
<pre> -->
<div class="page-header">
    <h1> Listando Postagens</h1>
</div>

    <p>
        <a  href="#"><i class="icon-star"></i> </a>   
             
        <?php echo $this->Html->link ("Novo Item",
                array('controller'=> 'posts', 'action'=>'add'),
                array('class'=>'btn btn-success')); ?> 
             
    </p>        


    <table class="table table-hover">
        <thead>
            <tr>
                <th>Código</th>
                <th>Título</th>
                <th>Texto</th>
                <th>Atualizado em</th>
                <th>Modificado em</th>
                <th colspan="3">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $post):?>
                <tr>


                    <td><?php echo $post{"Post"} {"id"};?></td>
                    <td><?php echo $post{"Post"} {"title"};?></td>
                    <td><?php echo $post{"Post"} {"body"};?></td>
                    <td><?php echo $post{"Post"} {"created"};?></td>
                    <td><?php echo $post{"Post"} {"modified"};?></td>

                     <td>
                        <?php echo $this->Html->link("Visualizar",
                                array('controller'=>'posts','action'=>'view',
                                $post["Post"]["id"]),
                                array('class'=> 'btn btn-success'));?>

                        <?php echo $this->Html->link("Editar",
                                array('controller'=>'posts','action'=>'edit',
                                $post["Post"]["id"]),
                                array('class'=> 'btn btn-info')); ?>
                    <div class = "btn btn-danger">
                        <?php echo $this->Form->postLink("Delete",
                                array('controller'=>'posts','action'=>'delete',
                                $post["Post"]["id"]),
                               array('confirm' => 'Are you sure?')); ?>  
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