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
                <!-- start: warehouse -->

                <section class="toggle">
                    <label>Rack</label>
                    <div class="toggle-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <button id="addToTable" class="mb-1 mt-1 mr-1 btn btn-xs btn-primary">Crear +</button>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-responsive-md table-hover table-sm mb-0">
                                <thead>
                                    <tr>
                                        <th>Rack</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($racks as $rack) : ?>
                                        <tr>
                                            <td><?= $rack['rack'] ?></td>
                                            <td>Acción</td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
                <section class="toggle">
                    <label>Sección</label>
                    <div class="toggle-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <button id="addToTable" class="mb-1 mt-1 mr-1 btn btn-xs btn-primary">Crear +</button>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-responsive-md table-hover table-sm mb-0">
                                <thead>
                                    <tr>
                                        <th>Sección</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($sections as $section) : ?>
                                        <tr>
                                            <td><?= $section['section'] ?></td>
                                            <td>Acción</td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
                <section class="toggle">
                    <label>División</label>
                    <div class="toggle-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <button id="addToTable" class="mb-1 mt-1 mr-1 btn btn-xs btn-primary">Crear +</button>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-responsive-md table-hover table-sm mb-0">
                                <thead>
                                    <tr>
                                        <th>División</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($divisions as $division) : ?>
                                        <tr>
                                            <td><?= $division['division'] ?></td>
                                            <td>Acción</td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="col-lg-6">
            <h4>Large</h4>
            <div class="toggle toggle-primary toggle-lg" data-plugin-toggle>
                <section class="toggle active">
                    <label>Curabitur eget leo at velit imperdiet vague iaculis vitaes?</label>
                    <div class="toggle-content">
                        <p>Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
                        <p>Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
                    </div>
                </section>
                <section class="toggle">
                    <label>Curabitur eget leo at imperdiet vague iaculis vitaes?</label>
                    <div class="toggle-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor.</p>
                    </div>
                </section>
                <section class="toggle">
                    <label>Curabitur eget leo at velit imperdiet vague iaculis vitaes?</label>
                    <div class="toggle-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor, orci eros pellentesque odio, nec pellentesque erat ligula nec massa. Aenean consequat lorem ut felis ullamcorper posuere gravida tellus faucibus. Maecenas dolor elit, pulvinar eu vehicula eu, consequat et lacus. Duis et purus ipsum. In auctor mattis ipsum id molestie. Donec risus nulla, fringilla a rhoncus vitae, semper a massa. Vivamus ullamcorper, enim sit amet consequat laoreet, tortor tortor dictum urna, ut egestas urna ipsum nec libero. Nulla justo leo, molestie vel tempor nec, egestas at massa. Aenean pulvinar, felis porttitor iaculis pulvinar, odio orci sodales odio, ac pulvinar felis quam sit.</p>
                    </div>
                </section>
            </div>
        </div>
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
                                <?= form_label('Estado:', 'state', $attributes_label); ?>
                                <div class="col-sm-8">
                                    <?= form_dropdown('state', ['1' => 'Activo', '0' => 'Inactivo'], '1', $attributes_text); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="card-footer">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <input type='submit' value='Guardar' class='btn btn-primary'>
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