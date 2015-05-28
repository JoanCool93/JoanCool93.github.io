
/*
 * Editor client script for DB table productos
 * Created by http://editor.datatables.net/generator
 */

(function($){

$(document).ready(function() {
	var editor = new $.fn.dataTable.Editor( {
		"ajax": "php/table.productos.php",
		"table": "#productos",
		"fields": [
			{
				"label": "Descripcion",
				"name": "descripcion"
			},
			{
				"label": "Talla",
				"name": "Talla",
				"type": "select",
				"options": [
					"XS",
					"S",
					"M",
					"L",
					"Xl"
				]
			},
			{
				"label": "Categoria",
				"name": "categoria",
				"type": "select",
				"options": [
					"Dama",
					"Caballero",
					"Calzado",
					"Deportiva"
				]
			},
			{
				"label": "Precio",
				"name": "precio"
			},
			{
				"label": "Existencia",
				"name": "existencia"
			}
		]
	} );

	$('#productos').DataTable( {
		"dom": "Tfrtip",
		"ajax": "php/table.productos.php",
		"columns": [
			{
				"data": "descripcion"
			},
			{
				"data": "Talla"
			},
			{
				"data": "categoria"
			},
			{
				"data": "precio"
			},
			{
				"data": "existencia"
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

