<script>
	const save_warehouse = $('#formwarehouse').attr("action");
	const type = $('#formwarehouse').attr("method");
	const data_warehouse = "<?= base_url() ?>/inventory/settings/editWarehouse/";
	const deleted_warehouse = "<?= base_url() ?>/inventory/settings/deleteWarehouse/";

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
				$('[name="state"]').val(data.state);
				$('.modal-warehouse').modal({
					backdrop: 'static',
					keyboard: false
				}); // show bootstrap modal
				$('.card-title').text('Editar Bodega'); // show bootstrap modal

			}
		});

	}
	// end: edit_warehouse

	// start: save_warehouse
	$('#formwarehouse').on('submit', function(event) {
		event.preventDefault();

		//Form data is serialized and validated
		const formData = $('#formwarehouse').serializeArray();

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
				} else {
					$('#msg-error').show();
					$('.list-errors').html(response);
				}
			}
		});
	});
	// end: save_warehouse
</script>