<?php

return [
		'user-management' => [		'title' => 'Administración de usuarios',		'fields' => [		],	],
		'roles' => [		'title' => 'Roles',		'fields' => [			'title' => 'Título',		],	],
		'users' => [		'title' => 'Usuarios',		'fields' => [			'name' => 'Nombre',			'rut' => 'Rut',			'email' => 'Correo',			'password' => 'Contraseña',			'banco' => 'Banco',			'tipocuentabanco' => 'Tipo cuenta bancaria',			'cuentabancaria' => 'Cuenta Bancaria',			'role' => 'Rol',			'remember-token' => 'Recordar token',		],	],
		'proveedores' => [		'title' => 'Proveedores',		'fields' => [		],	],
		'contact-companies' => [		'title' => 'Proveedor',		'fields' => [			'name' => 'Nombre de la Compañía',			'rut' => 'Rut',			'address' => 'Dirección',			'website' => 'Sitio Web',			'email' => 'Correo',		],	],
		'contacts' => [		'title' => 'Contactos',		'fields' => [			'company' => 'Compañia',			'first-name' => 'Nombre',			'last-name' => 'Apellido',			'phone1' => 'Teléfono',			'email' => 'Correo',			'observaciones' => 'Observaciones',		],	],
		'user-actions' => [		'title' => 'Acciones de Usuario (Traza)',		'created_at' => 'Time',		'fields' => [			'user' => 'Usuario',			'action' => 'Acciones',			'action-model' => 'Modelo de Acción',			'action-id' => 'ID de Acción',		],	],
		'proveedor' => [		'title' => 'Proveedor',		'fields' => [		],	],
		'productos' => [		'title' => 'Productos',		'fields' => [		],	],
		'extras' => [		'title' => 'Extras',		'fields' => [		],	],
		'presentacionproducto' => [		'title' => 'Presentación Producto',		'fields' => [			'nombre' => 'Nombre',			'nombrecorto' => 'Nombre Corto',		],	],
		'tipoproducto' => [		'title' => 'Tipo Producto',		'fields' => [			'nombre' => 'Nombre',		],	],
		'principioactivo' => [		'title' => 'Principio Activo',		'fields' => [			'nombre' => 'Nombre',		],	],
		'producto' => [		'title' => 'Producto',		'fields' => [			'nombre' => 'Nombre',			'unidadescaja' => 'Unidades en cada caja',			'tipo-producto' => 'Tipo producto',			'presentacion-producto' => 'Presentación producto',			'principio-activo' => 'Principio activo',		],	],
		'listaexterna' => [		'title' => 'Lista Externa',		'fields' => [			'producto' => 'Producto',			'proveedor' => 'Proveedor',			'marca' => 'Marca',			'codigo' => 'Código',			'vencimiento' => 'Vencimiento',			'regisp' => 'Registro ISP',			'preciounidad' => 'Precio unidad',			'precio-caja' => 'Precio caja',			'stock' => 'Stock',			'observaciones' => 'Observaciones',		],	],
		'manufacturador' => [		'title' => 'Manufacturador',		'fields' => [			'nombre' => 'Nombre',		],	],
		'pedido-a-proveedores' => [		'title' => 'Pedido a proveedores',		'fields' => [		],	],
		'asd' => [		'title' => 'Asd',		'fields' => [		],	],
	'qa_create' => 'Δημιουργία',
	'qa_save' => 'Αποθήκευση',
	'qa_edit' => 'Επεξεργασία',
	'qa_view' => 'Εμφάνιση',
	'qa_update' => 'Ενημέρωησ',
	'qa_list' => 'Λίστα',
	'qa_no_entries_in_table' => 'Δεν υπάρχουν δεδομένα στην ταμπέλα',
	'qa_custom_controller_index' => 'index προσαρμοσμένου controller.',
	'qa_logout' => 'Αποσύνδεση',
	'qa_add_new' => 'Προσθήκη νέου',
	'qa_are_you_sure' => 'Είστε σίγουροι;',
	'qa_back_to_list' => 'Επιστροφή στην λίστα',
	'qa_dashboard' => 'Dashboard',
	'qa_delete' => 'Διαγραφή',
	'quickadmin_title' => 'DC',
];