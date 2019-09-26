    <div class="container">
      <div class="font-serif display-4 text-center my-4">Editar Publicação</div>
      
      <form class="my-5" method="post" action="<?=base_url();?>posts/atualizar/<?= $postagens['id']?>">
        <div class="form-row">
          <div class="form-group col-md-8">
            <label for="inputTitulo">Título</label>
            <input type="text" class="form-control" name="inputTitulo" placeholder="Título da publicação" value="<?= $postagens['titulo']?>" required>
          </div>

          <div class="form-group col-md-4">
            <label for="inputCategoria">Categoria</label>
            <select name="inputCategoria" class="form-control" required>
              <?php 
                foreach ($categoria as $c) {
                  if ($c->id == $postagens['categoria_id']) {
              ?>
                    <option select value="<?php echo $postagens['categoria_id']; ?>"><?php echo $c->nome; ?></option>
              <?php 
                  }
                  else {
              ?>
                    <option value="<?php echo $c->id; ?>"><?php echo $c->nome; ?></option>
              <?php 
                  }
                }
              ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="inputDescricao">Descrição</label>
          <input type="text" class="form-control" name="inputDescricao" placeholder="Descrição da publicação (opcional)" value="<?= $postagens['descricao']?>">
        </div>

        <div class="form-group">
          <label for="inputText">Texto</label><br>
          <textarea class="form-control" name="inputText" rows="20" required><?= $postagens['texto']?></textarea>
        </div>

        <div class="form-group">
          <label for="img">Selecionar imagem (opcional)</label>
          <input type="file" class="form-control-file" name="img">
        </div>

        <button type="submit">Atualizar</button>
      </form>
    </div>