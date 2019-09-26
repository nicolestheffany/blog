    <div class="container">
      <div class="row justify-content-between">
        <div class="col-md-8">
          <div class="display-4 mt-5 mb-1 font-serif"><?= $postagens['titulo'];?></div>
          <small class="font text-muted">Publicado em: <?= $postagens['datacadastro'] ?></small>
          <div class="text-justify mt-5">
            <img src="<?php echo base_url() . 'assets/img/' . $postagens['img'];?>" class="img-fluid" alt="Imagem responsiva">
            <p class="my-5 font"><?= $postagens['texto'];?></p>
          </div>
        </div>

        <div class="col-md-4">
					<div class="about my-5 p-3" style="background-color: #F2F2F2">
            <?php foreach ($usuario as $user) { ?>
						<h3 class="text-center font-serif">Sobre mim</h3>
            <div class="img-user my-4">
              <img src="<?php echo base_url(); ?>assets/img/<?php echo $user->img; ?>" class="w-100">
            </div>
            <div >
              <h5 class="text-center font-serif"><?php echo $user->nome; ?></h5>
              <p class="font"><?php echo $user->sobre; ?></p>
            </div>
          <?php } ?>
          </div>
				</div>
      </div>
    </div>