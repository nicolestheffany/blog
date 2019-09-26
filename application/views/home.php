		<?php
      if (!empty($carousel)) {
    ?>
    <div class="slideshow">
      <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <?php 
            $item_class = ' active';
            foreach ($carousel as $post) {
           ?>
          <div class="carousel-item <?php echo $item_class; ?>">
            <img class="d-block w-100" src="<?php echo base_url(); ?>assets/img/<?php echo $post->img; ?>" alt="Segundo Slide">
            <div class="carousel-caption d-md-block text-left mb-5">
              <div class="font-serif display-4 mb-1" style="color: #F2F2F2 !important"><?php echo $post->titulo ?></div>
              <h6 class="font mb-3" style="color: #F2F2F2 !important"><?php echo $post->descricao != null ? $post->descricao: ''; ?></h6>
            </div>
          </div>

          <?php 
                $item_class = ' ';
              }
            }
           ?>
        </div>
      </div>
    </div>
    

    <div class="container">
			<div class="row justify-content-between">
				<div class="col-md-8">
					<div class="display-4 my-5 font-serif">Novas publicações</div>
          <?php
          if (!empty($posts)) {
            foreach ($posts as $p) {
            
          ?>
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
          <?php
            }
          ?>
          <div>
            <a href="<?php echo base_url(); ?>posts/todososposts" class="btn btn-outline-primary mb-5 rounded-0">Todas as publicações</a>
          </div>
          <?php
          }
          else {
            echo "<p class='mb-5'>Não há novas publicações.</p>";
          }
          ?>
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
