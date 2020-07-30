(function($) {

    'use strict';

    var idioma =

        {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "NingÃºn dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Ãšltimo",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            },
            "buttons": {
                "copyTitle": 'Informacion copiada',
                "copyKeys": 'Use your keyboard or menu to select the copy command',
                "copySuccess": {
                    "_": '%d filas copiadas al portapapeles',
                    "1": '1 fila copiada al portapapeles'
                },

                "pageLength": {
                    "_": "Mostrar %d filas",
                    "-1": "Mostrar Todo"
                }
            }
        };

    var datatableInit = function() {
        var $table = $('#getAllProducts');

        // format function for row details
        var fnFormatDetails = function(datatable, tr) {
            var data = datatable.fnGetData(tr);

            return [
                '<table class="table mb-0">',
                '<tr class="b-top-0">',
                '<td><label class="mb-0">Casa:</label></td>',
                '<td>' + data[7] + '</td>',
                '</tr>',
                '<tr class="b-top-0">',
                '<td><label class="mb-0">Marca:</label></td>',
                '<td>' + data[8] + '</td>',
                '</tr>',
                '<tr class="b-top-0">',
                '<td><label class="mb-0">Categoría:</label></td>',
                '<td>' + data[9] + '</td>',
                '</tr>',
                '<tr class="b-top-0">',
                '<td><label class="mb-0">EAN:</label></td>',
                '<td>' + data[10] + '</td>',
                '</tr>',
                '<tr class="b-top-0">',
                '<td><label class="mb-0">Stock:</label></td>',
                '<td>' + data[11] + '</td>',
                '</tr>',
                '<tr class="b-top-0">',
                '<td><label class="mb-0">Alias:</label></td>',
                '<td>' + data[12] + '</td>',
                '</tr>',
                '<tr class="b-top-0">',
                '<td><label class="mb-0">Clase:</label></td>',
                '<td>' + data[13] + '</td>',
                '</tr>',
                '<tr class="b-top-0">',
                '<td><label class="mb-0">Notas:</label></td>',
                '<td>' + data[14] + '</td>',
                '</tr>',
                '<tr class="b-top-0">',
                '<td><label class="mb-0">Actualizado el:</label></td>',
                '<td>' + data[16] + '</td>',
                '</tr>',
                '<tr class="b-top-0">',
                '<td><label class="mb-0">Creado el:</label></td>',
                '<td>' + data[15] + '</td>',
                '</tr>',
                '</table>'
            ].join('');
        };

        // insert the expand/collapse column
        var th = document.createElement('th');
        var td = document.createElement('td');
        td.innerHTML = '<i data-toggle class="far fa-plus-square text-primary h5 m-0" style="cursor: pointer;"></i>';
        td.className = "text-center";

        $table
            .find('thead tr').each(function() {
                this.insertBefore(th, this.childNodes[0]);
            });

        $table
            .find('tbody tr').each(function() {
                this.insertBefore(td.cloneNode(true), this.childNodes[0]);
            });

        // initialize
        var datatable = $table.dataTable({

            dom: '<"row"<"col-lg-6"l><"col-lg-6"f>><"table-responsive"t>p',
            aoColumnDefs: [{
                bSortable: false,
                aTargets: [0]
            }],
            aaSorting: [
                [1, 'asc']
            ],
            "language": idioma,
            sDom: '<"text-right mb-md"T><"row"<"col-lg-6"l><"col-lg-6"f>><"table-responsive"t>p',
            //'Bfrt<"col-md-6 inline"i> <"col-md-6 inline"p>',

            buttons: [
                { extend: 'excel' },
                { extend: 'copy' },
                {
                    text: 'Crear +',

                    action: function(e, dt, node, config) {
                        $('#addProductModal').modal({ show: true, backdrop: 'static' });
                    },
                    className: 'btn_addProduct',
                }
            ],
        });



        $('<div />').addClass('dt-buttons mb-2 pb-1 text-right').prependTo('#getAllProducts_wrapper');

        $table.DataTable().buttons().container().prependTo('#getAllProducts_wrapper .dt-buttons');

        $('#getAllProducts_wrapper').find('.btn-secondary').removeClass('btn-secondary').addClass('btn-default');


        // add a listener
        $table.on('click', 'i[data-toggle]', function() {
            var $this = $(this),
                tr = $(this).closest('tr').get(0);

            if (datatable.fnIsOpen(tr)) {
                $this.removeClass('fa-minus-square').addClass('fa-plus-square');
                datatable.fnClose(tr);
            } else {
                $this.removeClass('fa-plus-square').addClass('fa-minus-square');
                datatable.fnOpen(tr, fnFormatDetails(datatable, tr), 'details');
            }
        });
    };


    /*
	Modal Dismiss
	*/
    $(document).on('click', '.modal-dismiss', function(e) {
        e.preventDefault();
        $.model.close();
    });

    $(function() {
        datatableInit();
    });

}).apply(this, [jQuery]);