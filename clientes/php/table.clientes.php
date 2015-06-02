<?php

/*
 * Editor server script for DB table clientes
 * Created by http://editor.datatables.net/generator
 */

// DataTables PHP library and database connection
include( "lib/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Join,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate;


// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'clientes', 'id' )
	->fields(
		Field::inst( 'nombre' ),
		Field::inst( 'apellidos' ),
		Field::inst( 'estado' ),
		Field::inst( 'municipio' ),
		Field::inst( 'direccion' ),
		Field::inst( 'codigopostal' ),
		Field::inst( 'correo' ),
		Field::inst( 'telefono' ),
		Field::inst( 'contrasena' )
	)
	->process( $_POST )
	->json();
