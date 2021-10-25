 <?= $this->Flash->render() ?>

<div class="whole-wrap">
	<div class="container box_1170">
		
		<div class="section-top-border">
			<button type="button" class="genric-btn info circle pull-right" data-toggle="modal" data-target="#agregar_grupos">Agregar</button>
			<h3 class="mb-30">Grupos Registrados</h3>
			<div class="progress-table-wrap">
				<div class="progress-table">
					<div class="table-head">
						<div class="country" style="width: 40%">Denominación</div>
						<div class="percentage" style="width: 40%">Productos</div>
						<div class="percentage" style="width: 20%">Acción</div>
					</div>
					
					<?php foreach ($grupos as $key) { ?>
					<div class="table-row">
						<div class="visit" style="width: 40%"> <?= $key['denominacion'] ?></div>
						<div class="percentage" style="width: 40%">
							<div class="progress">
								<div class="progress-bar color-1" role="progressbar" style="width: <?= $key['cantidad'] ?>%"
									aria-valuenow="<?= $key['cantidad'] ?>" aria-valuemin="0" aria-valuemax="50"></div>
							</div>
						</div>
						<div class="visit" style="width: 20%"> 
							<a data-toggle="modal"
                                  id = "<?= $key->id ?>"
                                  denominacion ="<?= $key->denominacion ?>"
                                  onclick="modificar_grupos(this);" class="genric-btn success circle arrow" style="color: white">Editar
                                </a>
                            <?= $this->Form->postLink(__('Eliminar'), ['action' => 'deleteGrupos', @$key->id], ['confirm' => __('Desea eliminarlo?'), 'class' => 'genric-btn danger circle arrow']) ?>
						</div>
					</div>
					<?php } ?>
					

				</div>
			</div>
		</div>
		

	</div>
</div>

<?= $this->element('agregar_grupos') ?>
<?= $this->element('modificar_grupos') ?>