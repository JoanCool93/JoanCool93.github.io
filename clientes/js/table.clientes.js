
/*
 * Editor client script for DB table clientes
 * Created by http://editor.datatables.net/generator
 */

(function($){

$(document).ready(function() {
	var editor = new $.fn.dataTable.Editor( {
		"ajax": "php/table.clientes.php",
		"table": "#clientes",
		"fields": [
			{
				"label": "Nombre",
				"name": "nombre"
			},
			{
				"label": "Apellidos",
				"name": "apellidos"
			},
			{
				"label": "Estado",
				"name": "estado"
			},
			{
				"label": "Municipio",
				"name": "municipio"
			},
			{
				"label": "Direcci\u00f3n",
				"name": "direccion"
			},
			{
				"label": "C.P.",
				"name": "codigopostal"
			},
			{
				"label": "Correo",
				"name": "correo"
			},
			{
				"label": "Telefono",
				"name": "telefono"
			},
			{
				"label": "Contrase\u00f1a",
				"name": "contrasena"
			}
		]
	} );

	$('#clientes').DataTable( {
		"dom": "Tfrtip",
		"ajax": "php/table.clientes.php",
		"columns": [
			{
				"data": "nombre"
			},
			{
				"data": "apellidos"
			},
			{
				"data": "estado"
			},
			{
				"data": "municipio"
			},
			{
				"data": "direccion"
			},
			{
				"data": "codigopostal"
			},
			{
				"data": "correo"
			},
			{
				"data": "telefono"
			},
			{
				"data": "contrasena"
			}
		],
		"tableTools": {
			"sRowSelect": "os",
			"aButtons": [
				{ "sExtends": "editor_create", "editor": editor },
				{ "sExtends": "editor_edit",   "editor": editor },
				{ "sExtends": "editor_remove", "editor": editor }
			]
		}
	} );
} );

}(jQuery));

