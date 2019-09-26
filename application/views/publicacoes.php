    <div class="container">
      <?php 
        if (isset($alerta)) {
      ?>
      <div class="alert alert-success" role="alert">
        <?php echo $alerta; ?>
      </div>
        <?php } ?>

      <div class="row justify-content-center my-4">
        <div class="col-12">
          <div class="font-serif display-4 text-center">Todas as Publicações</div>
        </div>

        <div class="col-12">
          <a href="<?php echo base_url(); ?>posts/novopost" class="btn btn-outline-primary mb-5 rounded-0">Nova publicação</a>
        </div>

        <div class="col-12" id="formbusca">
          <div id="formbusca" class="form-group">
            <?= form_open(base_url()."posts/buscar"); ?>
            <?= form_label('Buscar', 'busca', array('for' => 'busca')); ?>
            <?php $data = array(
              'name' => 'busca',
              'id' => 'busca',
              'class' => 'form-control',
              'type' => 'text'); ?>
            <?= form_input($data); ?>
            <?= form_submit('button_buscar', 'Buscar'); ?>
            <?= form_close();?>
          </div>
        </div>
      </div>

      <div class="row justify-content-between">
        <?php
          if (!empty($posts)) {
            foreach ($posts as $p) {
        ?>
        <div class="col-md-6">
          <div class="card-group mb-5 font">
						<div class="card rounded-0">
							<img class="card-img-top rounded-0" src="<?php echo base_url(); ?>assets/img/<?php echo $p->img; ?>" alt="Imagem de capa do card">
							<div class="card-body">
								<h5 class="card-title font-serif"><?php echo $p->titulo; ?></h5>
                <p class="card-text"><?php echo $p->descricao; ?></p>
                <?= anchor('posts/visualizar/'.$p->id, 'Ler post', array('class' => 'btn btn-outline-primary rounded-0'));?>
                <?= anchor('posts/editar/'.$p->id, 'Editar post', array('class' => 'btn btn-outline-warning rounded-0'));?>
                <?= anchor('posts/excluir/'.$p->id, 'Excluir post', array('class' => 'btn btn-outline-danger rounded-0'));?>
							</div>
						</div>
					</div>
        </div>
        <?php
            }
          }
        ?>
      </div>
    </div>