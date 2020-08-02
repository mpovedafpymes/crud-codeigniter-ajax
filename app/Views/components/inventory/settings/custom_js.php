<script>
	const save_warehouse = $('#formwarehouse').attr("action");
	const save_rack = $('#formrack').attr("action");
	const save_section = $('#formsection').attr("action");
	const save_division = $('#formdivision').attr("action");
	const save_house = $('#formhouse').attr("action");
	const save_brand = $('#formbrand').attr("action");
	const save_category = $('#formcategory').attr("action");
	const type = $('#formwarehouse').attr("method");
	const data_warehouse = "<?= base_url() ?>/inventory/settings/editWarehouse/";
	const data_house = "<?= base_url() ?>/inventory/settings/editHouse/";
	const data_brand = "<?= base_url() ?>/inventory/settings/editBrand/";
	const data_category = "<?= base_url() ?>/inventory/settings/editCategory/";



	/**
	 * warehouse
	 */
	// start: Show_datatable_warehouse
	$(document).ready(function() {
		var $table = $('#table-warehouse');
		$table.dataTable({
			"ajax": 'warehouse',
			"columnDefs": [{
					className: "actions", //add class to Action column
					"targets": [4]
				},
				{
					"targets": [0], //hidden Id
					"visible": false,
					"searchable": false
				}
			],
			"language": {
				"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
			}
		});

		$("#msg-error").hide(); //hidden msg error
	});
	// end: Show_datatable_warehouse

	// start: create_warehouse
	$('#add_wharehouse').on('click', function() {
		$("#formwarehouse")[0].reset();
		$("#msg-error").hide(); //hidden msg error
		$('.modal-warehouse').modal({
			backdrop: 'static',
			keyboard: false
		}); // show bootstrap modal
		$('#save').attr("disabled", false);
	});
	// end: create_warehouse

	// start: edit_warehouse
	function edit_warehouse($id) {
		$.ajax({
			url: data_warehouse + $id,
			method: type,
			dataType: "JSON",

			success: function(data) {
				$('[name="id_warehouse"]').val($id);
				$('[name="warehouse"]').val(data.warehouse);
				$('[name="warehouse_type"]').val(data.warehouse_type);
				$('[name="status"]').val(data.status);
				$('.modal-warehouse').modal({
					backdrop: 'static',
					keyboard: false
				}); // show bootstrap modal
				$('.card-title').text('Editar Bodega'); // show bootstrap modal
				$("#msg-error").hide(); //hidden msg error
				$('#save').attr("disabled", false);

			}
		});

	}
	// end: edit_warehouse

	// start: save_warehouse
	$('#formwarehouse').on('submit', function(event) {
		event.preventDefault();

		//Form data is serialized and validated
		var formData = $('#formwarehouse').serializeArray();

		$.ajax({
			url: save_warehouse,
			method: type,
			data: formData,
			headers: {
				'X-Requested-With': 'XMLHttpRequest'
			},
			success: function(response) {

				if (response === 'Success') {
					var notice = new PNotify({
						title: 'Success!',
						//text: 'Modal Confirm Message.',
						type: 'success',
					});
					setTimeout(function() {
						notice.remove();
					}, 2500);
					$('.modal-warehouse').modal('hide'); //close modal
					$('#table-warehouse').DataTable().ajax.reload(null, false); //reload data from warehouse table
					$('#save').attr("disabled", true);
				} else {
					$('#msg-error').show();
					$('.list-errors').html(response);
				}
			}
		});
	});
	// end: save_warehouse


	/**
	 * rack
	 */
	// start: Show_datatable_rack
	$(document).ready(function() {
		var $table = $('#table-rack');
		$table.dataTable({
			"ajax": 'rack',
			"language": {
				"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
			}
		});

		$("#msg-error_rack").hide(); //hidden msg error
	});
	// end: Show_datatable_rack

	// start: create_rack
	$('#add_rack').on('click', function() {
		$("#formrack")[0].reset();
		$("#msg-error_rack").hide(); //hidden msg error
		$('.modal-rack').modal({
			backdrop: 'static',
			keyboard: false
		}); // show bootstrap modal
		$('#save').attr("disabled", false);
	});
	// end: create_rack

	// start: save_rack
	$('#formrack').on('submit', function(event) {
		event.preventDefault();

		//Form data is serialized and validated
		var formData = $('#formrack').serializeArray();

		$.ajax({
			url: save_rack,
			method: type,
			data: formData,
			headers: {
				'X-Requested-With': 'XMLHttpRequest'
			},
			success: function(response) {

				if (response === 'Success') {
					var notice = new PNotify({
						title: 'Success!',
						type: 'success',
					});
					setTimeout(function() {
						notice.remove();
					}, 2500);
					$('.modal-rack').modal('hide'); //close modal
					$('#table-rack').DataTable().ajax.reload(null, false); //reload data from warehouse table
					$('#save').attr("disabled", true);
				} else {
					$('#msg-error_rack').show();
					$('.list-errors').html(response);
				}
			}
		});
	});
	// end: save_wrack


	/**
	 * section
	 */
	// start: Show_datatable_section
	$(document).ready(function() {
		var $table = $('#table-section');
		$table.dataTable({
			"ajax": 'section',
			"language": {
				"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
			}
		});

		$("#msg-error_section").hide(); //hidden msg error
	});
	// end: Show_datatable_section

	// start: create_section
	$('#add_section').on('click', function() {
		$("#formsection")[0].reset();
		$("#msg-error_section").hide(); //hidden msg error
		$('.modal-section').modal({
			backdrop: 'static',
			keyboard: false
		}); // show bootstrap modal
		$('#save').attr("disabled", false);
	});
	// end: create_section

	// start: save_section
	$('#formsection').on('submit', function(event) {
		event.preventDefault();

		//Form data is serialized and validated
		var formData = $('#formsection').serializeArray();

		$.ajax({
			url: save_section,
			method: type,
			data: formData,
			headers: {
				'X-Requested-With': 'XMLHttpRequest'
			},
			success: function(response) {

				if (response === 'Success') {
					var notice = new PNotify({
						title: 'Success!',
						type: 'success',
					});
					setTimeout(function() {
						notice.remove();
					}, 2500);
					$('.modal-section').modal('hide'); //close modal
					$('#table-section').DataTable().ajax.reload(null, false); //reload data from warehouse table
					$('#save').attr("disabled", true);
				} else {
					$('#msg-error_section').show();
					$('.list-errors').html(response);
				}
			}
		});
	});
	// end: save_section


	/**
	 * division
	 */
	// start: Show_datatable_division
	$(document).ready(function() {
		var $table = $('#table-division');
		$table.dataTable({
			"ajax": 'division',
			"language": {
				"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
			}
		});

		$("#msg-error_division").hide(); //hidden msg error
	});
	// end: Show_datatable_division

	// start: create_division
	$('#add_division').on('click', function() {
		$("#formdivision")[0].reset();
		$("#msg-error_division").hide(); //hidden msg error
		$('.modal-division').modal({
			backdrop: 'static',
			keyboard: false
		}); // show bootstrap modal
		$('#save').attr("disabled", false);
	});
	// end: create_division

	// start: save_division
	$('#formdivision').on('submit', function(event) {
		event.preventDefault();

		//Form data is serialized and validated
		var formData = $('#formdivision').serializeArray();

		$.ajax({
			url: save_division,
			method: type,
			data: formData,
			headers: {
				'X-Requested-With': 'XMLHttpRequest'
			},
			success: function(response) {

				if (response === 'Success') {
					var notice = new PNotify({
						title: 'Success!',
						type: 'success',
					});
					setTimeout(function() {
						notice.remove();
					}, 2500);
					$('.modal-division').modal('hide'); //close modal
					$('#table-division').DataTable().ajax.reload(null, false); //reload data from warehouse table
					$('#save').attr("disabled", true);
				} else {
					$('#msg-error_division').show();
					$('.list-errors').html(response);
				}
			}
		});
	});
	// end: save_division


	/**
	 * house
	 */
	// start: Show_datatable_house
	$(document).ready(function() {
		var $table = $('#table-house');
		$table.dataTable({
			"ajax": 'house',
			"columnDefs": [{
					className: "actions", //add class to Action column
					"targets": [3]
				},
				{
					"targets": [0], //hidden Id
					"visible": false,
					"searchable": false
				}
			],
			"language": {
				"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
			}
		});

		$("#msg-error-house").hide(); //hidden msg error
	});
	// end: Show_datatable_house

	// start: create_house
	$('#add_house').on('click', function() {
		$("#formhouse")[0].reset();
		$("#msg-error-house").hide(); //hidden msg error
		$('.modal-house').modal({
			backdrop: 'static',
			keyboard: false
		}); // show bootstrap modal
		$('#save').attr("disabled", false);
	});
	// end: create_house

	// start: edit_house
	function edit_house($id) {
		$.ajax({
			url: data_house + $id,
			method: type,
			dataType: "JSON",

			success: function(data) {
				$('[name="id_house"]').val($id);
				$('[name="house"]').val(data.house);
				$('[name="status"]').val(data.status);
				$('.modal-house').modal({
					backdrop: 'static',
					keyboard: false
				}); // show bootstrap modal
				$('.card-title').text('Editar Casa'); // show bootstrap modal
				$("#msg-error-house").hide(); //hidden msg error
				$('#save').attr("disabled", false);

			}
		});
	}
	// end: edit_house

	// start: save_house
	$('#formhouse').on('submit', function(event) {
		event.preventDefault();

		//Form data is serialized and validated
		var formData = $('#formhouse').serializeArray();

		$.ajax({
			url: save_house,
			method: type,
			data: formData,
			headers: {
				'X-Requested-With': 'XMLHttpRequest'
			},
			success: function(response) {

				if (response === 'Success') {
					var notice = new PNotify({
						title: 'Success!',
						type: 'success',
					});
					setTimeout(function() {
						notice.remove();
					}, 2500);
					$('.modal-house').modal('hide'); //close modal
					$('#table-house').DataTable().ajax.reload(null, false); //reload data from warehouse table
					$('#save').attr("disabled", true);

				} else {
					$('#msg-error-house').show();
					$('.list-errors').html(response);
				}
			}
		});
	});
	// end: save_house


	/**
	 * brand
	 */
	// start: Show_datatable_brand
	$(document).ready(function() {
		var $table = $('#table-brand');
		$table.dataTable({
			"ajax": 'brand',
			"columnDefs": [{
					className: "actions", //add class to Action column
					"targets": [5]
				},
				{
					"targets": [0, 1], //hidden Id
					"visible": false,
					"searchable": false
				}
			],
			"language": {
				"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
			}
		});

		$("#msg-error-brand").hide(); //hidden msg error
	});
	// end: Show_datatable_brand

	// start: create_brand
	$('#add_brand').on('click', function() {
		$("#formbrand")[0].reset();
		$("#msg-error-brand").hide(); //hidden msg error
		$('.modal-brand').modal({
			backdrop: 'static',
			keyboard: false
		}); // show bootstrap modal
		$('.js-house').val(null).trigger('change'); //Clearing selections
		$('#save').attr("disabled", false);
	});
	// end: create_brand

	// start: edit_brand
	function edit_brand($id) {
		$.ajax({
			url: data_brand + $id,
			method: type,
			dataType: "JSON",

			success: function(data) {

				$('[name="id_brand"]').val($id);
				$('[name="brand"]').val(data.brand);
				$('[name="status"]').val(data.status);
				var data = {
					id: data.house_id,
					text: data.house
				};
				var newOption = new Option(data.text, data.id, false, false);

				$('[name="house_id"]').append(newOption).trigger('change');
				$('.modal-brand').modal({
					backdrop: 'static',
					keyboard: false
				}); // show bootstrap modal
				$('.card-title').text('Editar Marca'); // show bootstrap modal
				$("#msg-error-brand").hide(); //hidden msg error

			}
		});
	}
	// end: edit_brand

	// start: save_brand
	$('#formbrand').on('submit', function(event) {
		event.preventDefault();

		//Form data is serialized and validated
		var formData = $('#formbrand').serializeArray();

		$.ajax({
			url: save_brand,
			method: type,
			data: formData,
			headers: {
				'X-Requested-With': 'XMLHttpRequest'
			},
			success: function(response) {

				if (response === 'Success') {
					var notice = new PNotify({
						title: 'Success!',
						type: 'success',
					});
					setTimeout(function() {
						notice.remove();
					}, 2500);
					$('.modal-brand').modal('hide'); //close modal
					$('#table-brand').DataTable().ajax.reload(null, false); //reload data from warehouse table
					$('#save').attr("disabled", true);
					$('.js-house').val(null).trigger('change'); //Clearing selections
				} else {
					$('#msg-error-brand').show();
					$('.list-errors').html(response);
				}
			}
		});
	});
	// end: save_brand

	// start: select_houses
	$(document).ready(function() {
		$('.js-house').select2({
			dropdownParent: $('.modal-brand'),
			allowClear: true,
			theme: "bootstrap",
			ajax: {
				url: 'selecthouse',
				dataType: 'json',
				data: function(params) {
					return {
						searchTerm: params.term // search term
					};
				},
				processResults: function(response) {
					return {
						results: response
					};
				},
				cache: true
			}
		});
	});
	// end: select_houses


	/**
	 * category
	 */
	// start: Show_datatable_category
	$(document).ready(function() {
		var $table = $('#table-category');
		$table.dataTable({
			"ajax": 'category',
			"columnDefs": [{
					className: "actions", //add class to Action column
					"targets": [3]
				},
				{
					"targets": [0], //hidden Id
					"visible": false,
					"searchable": false
				}
			],
			"language": {
				"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
			}
		});

		$("#msg-error-category").hide(); //hidden msg error
	});
	// end: Show_datatable_category

	// start: create_category
	$('#add_category').on('click', function() {
		$("#formcategory")[0].reset();
		$("#msg-error-category").hide(); //hidden msg error
		$('.modal-category').modal({
			backdrop: 'static',
			keyboard: false
		}); // show bootstrap modal
		$('#save').attr("disabled", false);
	});
	// end: create_category

	// start: edit_category
	function edit_category($id) {
		$.ajax({
			url: data_category + $id,
			method: type,
			dataType: "JSON",

			success: function(data) {
				$('[name="id_category"]').val($id);
				$('[name="category"]').val(data.category);
				$('[name="status"]').val(data.status);
				$('.modal-category').modal({
					backdrop: 'static',
					keyboard: false
				}); // show bootstrap modal
				$('.card-title').text('Editar Categoría'); // show bootstrap modal
				$("#msg-error-category").hide(); //hidden msg error
				$('#save').attr("disabled", false);

			}
		});
	}
	// end: edit_category

	// start: save_category
	$('#formcategory').on('submit', function(event) {
		event.preventDefault();

		//Form data is serialized and validated
		var formData = $('#formcategory').serializeArray();

		$.ajax({
			url: save_category,
			method: type,
			data: formData,
			headers: {
				'X-Requested-With': 'XMLHttpRequest'
			},
			success: function(response) {

				if (response === 'Success') {
					var notice = new PNotify({
						title: 'Success!',
						type: 'success',
					});
					setTimeout(function() {
						notice.remove();
					}, 2500);
					$('.modal-category').modal('hide'); //close modal
					$('#table-category').DataTable().ajax.reload(null, false); //reload data from warehouse table
					$('#save').attr("disabled", true);

				} else {
					$('#msg-error-category').show();
					$('.list-errors').html(response);
				}
			}
		});
	});
	// end: save_category
</script>