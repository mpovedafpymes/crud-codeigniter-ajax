<?= $this->extend('layouts/main') ?>

<?= $this->section('specific_vendor_css') ?>
<?= view_cell('App\Libraries\Components::settingsSpecificVendorCss') ?>
<?= $this->endSection('specific_vendor_css') ?>

<?= $this->section('specific_vendor_js') ?>
<?= view_cell('App\Libraries\Components::settingsSpecificVendorJs') ?>
<?= $this->endSection('specific_vendor_js') ?>

<?= $this->section('custom_css') ?>
<?= view_cell('App\Libraries\Components::settingsCustomCss') ?>
<?= $this->endSection('custom_css') ?>

<?= $this->section('custom_js') ?>
<?= view_cell('App\Libraries\Components::settingsCustomJs') ?>
<?= $this->endSection('custom_js') ?>


<!-- start: page -->
<?= $this->section('page_content') ?>
<section role="main" class="content-body pb-0">
    <header class="page-header">
        <h2 class="text-capitalize"><?= $nav_section ?></h2>

        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span class="text-capitalize"><?= $nav_module ?></span></li>
            </ol>

            <div class="sidebar-right-toggle"></div>

        </div>
    </header>

    <!-- start: content -->
    <div class="row">
        <!-- start: location -->
        <div class="col-lg-6">
            <h4>Ubicación</h4>
            <div class="toggle toggle-primary toggle-sm" data-plugin-toggle>

                <!-- start: warehouse -->
                <section class="toggle active card">
                    <label>Bodegas</label>
                    <div class="toggle-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <button id="add_wharehouse" type="button" class="mb-1 mt-1 mr-1 btn btn-xs btn btn-primary" data-toggle="modal">Crear +</button>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-responsive-md table-hover table-sm mb-0" id="table-warehouse">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Bodega</th>
                                        <th>Tipo</th>
                                        <th>Estado</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </section>
                <!-- end: warehouse -->

                <!-- start: rack -->
                <section class="toggle">
                    <label>Racks</label>
                    <div class="toggle-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <button id="add_rack" class="mb-1 mt-1 mr-1 btn btn-xs btn-primary">Crear +</button>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-responsive-md table-hover table-sm mb-0" id="table-rack">
                                <thead>
                                    <tr>
                                        <th>Rack</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </section>
                <!-- end: rack -->

                <!-- start: section -->
                <section class="toggle">
                    <label>Secciones</label>
                    <div class="toggle-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <button id="add_section" class="mb-1 mt-1 mr-1 btn btn-xs btn-primary">Crear +</button>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-responsive-md table-hover table-sm mb-0" id="table-section">
                                <thead>
                                    <tr>
                                        <th>Sección</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </section>
                <!-- end: section -->

                <!-- start: division -->
                <section class="toggle">
                    <label>Divisiones</label>
                    <div class="toggle-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <button id="add_division" class="mb-1 mt-1 mr-1 btn btn-xs btn-primary">Crear +</button>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-responsive-md table-hover table-sm mb-0" id="table-division">
                                <thead>
                                    <tr>
                                        <th>División</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </section>
                <!-- end: division -->
            </div>
        </div>
        <!-- end: location -->
        <!-- start: product specifications -->
        <div class="col-lg-6">
            <h4>Especificaciones del Producto</h4>
            <div class="toggle toggle-primary toggle-lg" data-plugin-toggle>
                <!-- start: house -->
                <section class="toggle active card">
                    <label>Casas</label>
                    <div class="toggle-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <button id="add_house" type="button" class="mb-1 mt-1 mr-1 btn btn-xs btn btn-primary" data-toggle="modal">Crear +</button>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-responsive-md table-hover table-sm mb-0" id="table-house">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Casa</th>
                                        <th>Estado</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </section>
                <!-- end: house -->

                <!-- start: brand -->
                <section class="toggle active card">
                    <label>Marcas</label>
                    <div class="toggle-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <button id="add_brand" type="button" class="mb-1 mt-1 mr-1 btn btn-xs btn btn-primary" data-toggle="modal">Crear +</button>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-responsive-md table-hover table-sm mb-0" id="table-brand">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>casa_id</th>
                                        <th>Marca</th>
                                        <th>Casa</th>
                                        <th>Estado</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </section>
                <!-- end: brand -->
            </div>
        </div>
        <!-- end: product specifications -->
    </div>
    <!-- end: content -->

</section>

<!-- Modal warehouse -->
<div class="modal fade modal-warehouse" tabindex="-1" role="dialog" aria-labelledby="warehouseModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <section class="card">
                <header class="card-header">
                    <h2 class="card-title"><?= isset($id) ? "Editar Bodega" : "Crear Bodega" ?></h2>
                </header>
                <?= form_open('inventory/settings/addWarehouse', ['class' => 'form-horizontal', 'id' => 'formwarehouse'], ['id_warehouse' => isset($id) ? $id : '']); ?>

                <div class="warehouse card-body">
                    <div class="warehouse modal-wrapper">

                        <div class="alert alert-danger" id="msg-error">
                            <strong>Importante!</strong>
                            <div class="list-errors"></div>
                        </div>

                        <div class="modal-text">
                            <div class="form-group row">
                                <?= form_label('Bodega:', 'warehouse', $attributes_label); ?>
                                <div class="col-sm-8">

                                    <?= form_input('warehouse', '', $attributes_text); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <?= form_label('Tipo:', 'warehouse_type', $attributes_label); ?>
                                <div class="col-sm-8">
                                    <?= form_dropdown('warehouse_type', ['1' => 'Principal', '2' => 'Secundaria'], '1', $attributes_text); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <?= form_label('Estado:', 'status', $attributes_label); ?>
                                <div class="col-sm-8">
                                    <?= form_dropdown('status', ['1' => 'Activo', '0' => 'Inactivo'], '1', $attributes_text); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="card-footer">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <input type='submit' id="save" value='Guardar' class='btn btn-primary'>
                            <?= form_button('', 'Cancelar', ['class' => 'btn btn-default', 'data-dismiss' => 'modal']); ?>
                        </div>
                    </div>
                </footer>
                <?= form_close(); ?>
            </section>
        </div>
    </div>
</div>

<!-- Modal rack -->
<div class="modal fade modal-rack" tabindex="-1" role="dialog" aria-labelledby="rackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <section class="card">
                <header class="card-header">
                    <h2 class="card-title"><?= isset($id) ? "Editar Rack" : "Crear Rack" ?></h2>
                </header>
                <?= form_open('inventory/settings/addRack', ['class' => 'form-horizontal', 'id' => 'formrack']); ?>

                <div class="warehouse card-body">
                    <div class="warehouse modal-wrapper">

                        <div class="alert alert-danger" id="msg-error_rack">
                            <strong>Importante!</strong>
                            <div class="list-errors"></div>
                        </div>

                        <div class="modal-text">
                            <div class="form-group row">
                                <?= form_label('Rack:', 'rack', $attributes_label); ?>
                                <div class="col-sm-8">

                                    <?= form_input('rack', '', $attributes_text); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="card-footer">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <input type='submit' id="save" value='Guardar' class='btn btn-primary'>
                            <?= form_button('', 'Cancelar', ['class' => 'btn btn-default', 'data-dismiss' => 'modal']); ?>
                        </div>
                    </div>
                </footer>
                <?= form_close(); ?>
            </section>
        </div>
    </div>
</div>

<!-- Modal section -->
<div class="modal fade modal-section" tabindex="-1" role="dialog" aria-labelledby="sectionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <section class="card">
                <header class="card-header">
                    <h2 class="card-title">Crear Sección</h2>
                </header>
                <?= form_open('inventory/settings/addSection', ['class' => 'form-horizontal', 'id' => 'formsection']); ?>

                <div class="warehouse card-body">
                    <div class="warehouse modal-wrapper">

                        <div class="alert alert-danger" id="msg-error_section">
                            <strong>Importante!</strong>
                            <div class="list-errors"></div>
                        </div>

                        <div class="modal-text">
                            <div class="form-group row">
                                <?= form_label('Sección:', 'section', $attributes_label); ?>
                                <div class="col-sm-8">

                                    <?= form_input('section', '', $attributes_text); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="card-footer">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <input type='submit' id="save" value='Guardar' class='btn btn-primary'>
                            <?= form_button('', 'Cancelar', ['class' => 'btn btn-default', 'data-dismiss' => 'modal']); ?>
                        </div>
                    </div>
                </footer>
                <?= form_close(); ?>
            </section>
        </div>
    </div>
</div>

<!-- Modal division -->
<div class="modal fade modal-division" tabindex="-1" role="dialog" aria-labelledby="divisionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <section class="card">
                <header class="card-header">
                    <h2 class="card-title">Crear División</h2>
                </header>
                <?= form_open('inventory/settings/addDivision', ['class' => 'form-horizontal', 'id' => 'formdivision']); ?>

                <div class="warehouse card-body">
                    <div class="warehouse modal-wrapper">

                        <div class="alert alert-danger" id="msg-error_division">
                            <strong>Importante!</strong>
                            <div class="list-errors"></div>
                        </div>

                        <div class="modal-text">
                            <div class="form-group row">
                                <?= form_label('División:', 'division', $attributes_label); ?>
                                <div class="col-sm-8">

                                    <?= form_input('division', '', $attributes_text); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="card-footer">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <input type='submit' id="save" value='Guardar' class='btn btn-primary'>
                            <?= form_button('', 'Cancelar', ['class' => 'btn btn-default', 'data-dismiss' => 'modal']); ?>
                        </div>
                    </div>
                </footer>
                <?= form_close(); ?>
            </section>
        </div>
    </div>
</div>

<!-- Modal house -->
<div class="modal fade modal-house" tabindex="-1" role="dialog" aria-labelledby="houseModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <section class="card">
                <header class="card-header">
                    <h2 class="card-title"><?= isset($id) ? "Editar Casa" : "Crear Casa" ?></h2>
                </header>
                <?= form_open('inventory/settings/addHouse', ['class' => 'form-horizontal', 'id' => 'formhouse'], ['id_house' => isset($id) ? $id : '']); ?>

                <div class="warehouse card-body">
                    <div class="warehouse modal-wrapper">

                        <div class="alert alert-danger" id="msg-error-house">
                            <strong>Importante!</strong>
                            <div class="list-errors"></div>
                        </div>

                        <div class="modal-text">
                            <div class="form-group row">
                                <?= form_label('Casa:', 'house', $attributes_label); ?>
                                <div class="col-sm-8">

                                    <?= form_input('house', '', $attributes_text); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <?= form_label('Estado:', 'status', $attributes_label); ?>
                                <div class="col-sm-8">
                                    <?= form_dropdown('status', ['1' => 'Activo', '0' => 'Inactivo'], '1', $attributes_text); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="card-footer">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <input type='submit' id="save" value='Guardar' class='btn btn-primary'>
                            <?= form_button('', 'Cancelar', ['class' => 'btn btn-default', 'data-dismiss' => 'modal']); ?>
                        </div>
                    </div>
                </footer>
                <?= form_close(); ?>
            </section>
        </div>
    </div>
</div>

<!-- Modal brand -->
<div class="modal fade modal-brand" tabindex="-1" role="dialog" aria-labelledby="houseModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <section class="card">
                <header class="card-header">
                    <h2 class="card-title"><?= isset($id) ? "Editar Marca" : "Crear Marca" ?></h2>
                </header>
                <?= form_open('inventory/settings/addHBrand', ['class' => 'form-horizontal', 'id' => 'formbrand'], ['id_brand' => isset($id) ? $id : '']); ?>

                <div class="warehouse card-body">
                    <div class="warehouse modal-wrapper">

                        <div class="alert alert-danger" id="msg-error-brand">
                            <strong>Importante!</strong>
                            <div class="list-errors"></div>
                        </div>

                        <div class="modal-text">
                            <div class="form-group row">
                                <?= form_label('Marca:', 'brand', $attributes_label); ?>
                                <div class="col-sm-8">
                                    <?= form_input('brand', '', $attributes_text); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <?= form_label('Estado:', 'status', $attributes_label); ?>
                                <div class="col-sm-8">
                                    <?= form_dropdown('status', ['1' => 'Activo', '0' => 'Inactivo'], '1', $attributes_text); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="card-footer">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <input type='submit' id="save" value='Guardar' class='btn btn-primary'>
                            <?= form_button('', 'Cancelar', ['class' => 'btn btn-default', 'data-dismiss' => 'modal']); ?>
                        </div>
                    </div>
                </footer>
                <?= form_close(); ?>
            </section>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
<!-- end: page -->