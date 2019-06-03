<?php
/**
 * Created by Cesar Mejía.
 * User: Sistemas
 * Date: 28/3/2019 14:27 2019
 * FileName: cuotasLista.php
 */
?>
<div class="row">
	<div class='col-12 col-sm-12 col-md-12'>
		<!--<div class="pull-right">
			<button id="btnActualizarFacturas" class="mb-xs mt-xs mr-xs btn btn-primary">
				Actualizar <i class="fa fa-download"></i>
			</button>
		</div> -->
	</div>
</div>
<!-- start: page -->
<div class="row">
	<div class="col-12 col-sm-12 col-md-12">
		<section class="panel col-12 col-sm-12 col-md-12">
			<header class="panel-heading">
				<div class="panel-actions">
					<a href="#" class="fa fa-caret-down"></a>
				</div>

				<h2 class="panel-title">Listado de Facturas</h2>
			</header>
			<div class="panel-body">
				<div class="col-sm-12 col-12 col-md-12 col-lg-12">
					<div class="form-group col-3 col-sm-3 col-md-3">
						<div class="input-group input-group-icon">
								<span class="input-group-addon">
									<span class="icon"><i class=""></i></span>
                                </span>
							<select id="ddlRutas" data-plugin-selectTwo  class="form-control col12 col-md-12 col-sm-12 populate">
								<option selected></option>
								<?php
								if (!$rutas) {
								} else {
									foreach ($rutas as $ruta) {
										echo "
												<option value=".$ruta["ID"].">".$ruta["DESCRIPCION"]."</option>
											";
									}
								}

								?>

							</select>
						</div>
					</div>

					<div class="col-2 col-sm-2 col-md-2">
						<div class="form-group">
							<div class="input-group input-group-icon">
							  <span class="input-group-addon">
									<span class="icon"></span>
                                </span>
								<select id="Mes" data-plugin-selectTwo  class="form-control col12 col-md-12 col-sm-12 populate">
									<?php
									$Meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
										'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

									for ($i=1; $i<=12; $i++) {
										if ($i == date('m'))
											echo '<option value="'.$i.'"selected>'.$Meses[($i)-1].'</option>';
										else
											echo '<option value="'.$i.'">'.$Meses[($i)-1].'</option>';
									}
									?>
								</select>
							</div>
						</div>
					</div>

					<div class="form-group col-2 col-sm-2 col-md-2 pull-left">
						<div class="input-group input-group-icon">
								<span class="input-group-addon">
									<span class="icon"><i class="fa fa-calendar"></i></span>
								</span>
							<input type="text" id="fechaFac1" data-plugin-skin="primary"
								   data-plugin-datepicker="" class="form-control" placeholder="Fecha Inicio" autocomplete="off">
						</div>
					</div>

					<div class="form-group col-2 col-sm-2 col-md-2 pull-left">
						<div class="input-group input-group-icon">
								<span class="input-group-addon">
									<span class="icon"><i class="fa fa-calendar"></i></span>
								</span>
							<input type="text" id="fechaFac2" data-plugin-skin="primary"
								   data-plugin-datepicker="" class="form-control" placeholder="Fecha Fin" autocomplete="off">
						</div>
					</div>
					<div class="col-2 col-sm-2 col-md-2">
						<button id="btnActualizar" class="mb-xs mt-xs mr-xs btn btn-primary btn-block">
							<i class="fa fa-search"></i> Filtrar
						</button>
					</div>

				</div>
				<br>
				<div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered table-stripedtable-condensed" id="dtCuotas">
							<thead>
							<tr style="text-transform: capitalize">
								<th>IdRuta</th>
								<th>Descripcion</th>
								<th>Nombre</th>
								<th>Cuota <br> mensual</brt></th>
								<th>libras <br> vendidas</th>
								<th>Cuota a <br> llevar</th>
								<th>GAP <br> libras</th>
								<th>falta <br> vender</th>
								<th>avance <br> ventas</th>
								<th>cumplimiento</th>
								<th>promedio <br> diario</th>
								<th>dias <br> efectivos</th>
								<th>primer <br> dia</th>
								<th>dias <br> transcurridos</th>
							</tr>
							</thead>
							<tbody style="font-size: 11.5px;">
							</tbody>
						<!--	<tfoot style="font-size: 11.5px; font-weight: bolder;">
							<tr class="bg-primary">
								<th>Totales</th>
								<th style="display: none"></th>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
								<th id="SubTotal"></th>
								<th id="Desc"></th>
								<th id="ISC"></th>
								<th id="IVA"></th>
								<th id="Total"></th>
								<th></th>
							</tr>
							</tfoot> -->
						</table>
					</div>
				</div>
				<div class="text-right mr-lg">
					<a target="_blank" id="exportarMetas">
						<img src="<?php echo base_url()?>assets/img/pdf.png" alt="printPDF" />
					</a>
				</div>
			</div>
		</section>
	</div>
</div>

<div class="row">

</div>

<div class="row">

</div>

