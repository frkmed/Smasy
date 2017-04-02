<div class="row-fluid">
    <a href="<?php echo base_url();?>pessoas/adicionar" class="btn btn-success pull-right">
        <i class="icon-plus icon-white"></i>
        Adicionar
    </a>
</div>
<div class="widget-box">
    <div class="widget-title">
            <span class="icon">
                <i class="fa fa-users" aria-hidden="true"></i>
            </span>
        <h5>Pessoas</h5>
    </div>
    <div class="widget-content nopadding">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Telefones</th>
                <th>Email</th>
                <th>Perfis</th>
            </tr>
            </thead>
            <tbody>
                <?php if(count($pessoas)>0):
                    foreach ($pessoas as $pessoa):
                        $telefones = array();
                        $telefones[] = $pessoa->telefone1;
                        $telefones[] = $pessoa->telefone2;
                        $telefones[] = $pessoa->telefone3;

                        ?>
                        <tr class="row-clickable" data-link="<?php echo base_url()."pessoas/edit/{$pessoa->codigo}";?>">
                            <td><?php echo $pessoa->nome;?></a></td>
                            <td><?php echo implode('|',array_filter($telefones));?></td>
                            <td><?php echo $pessoa->email;?></td>
                            <td></td>
                        </tr>
                    <?php endforeach;?>
                <?php else:?>
                    <tr>
                        <td colspan="5">Nenhum resultado encontrado</td>
                    </tr>
                <?php endif;?>
            </tbody>
        </table>
    </div>
</div>