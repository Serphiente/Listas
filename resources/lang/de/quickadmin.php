<?php

return [
		'user-management' => [		'title' => 'Administración de usuarios',		'fields' => [		],	],
		'roles' => [		'title' => 'Roles',		'fields' => [			'title' => 'Título',		],	],
		'users' => [		'title' => 'Usuarios',		'fields' => [			'name' => 'Nombre',			'rut' => 'Rut',			'email' => 'Correo',			'password' => 'Contraseña',			'banco' => 'Banco',			'tipocuentabanco' => 'Tipo cuenta bancaria',			'cuentabancaria' => 'Cuenta Bancaria',			'role' => 'Rol',			'remember-token' => 'Recordar token',		],	],
		'proveedores' => [		'title' => 'Proveedores',		'fields' => [		],	],
		'contact-companies' => [		'title' => 'Proveedor',		'fields' => [			'name' => 'Nombre de la Compañía',			'rut' => 'Rut',			'address' => 'Dirección',			'website' => 'Sitio Web',			'email' => 'Correo',		],	],
		'contacts' => [		'title' => 'Contactos',		'fields' => [			'company' => 'Compañia',			'first-name' => 'Nombre',			'last-name' => 'Apellido',			'phone1' => 'Teléfono',			'email' => 'Correo',			'observaciones' => 'Observaciones',		],	],
		'user-actions' => [		'title' => 'Acciones de Usuario (Traza)',		'created_at' => 'Zeit',		'fields' => [			'user' => 'Usuario',			'action' => 'Acciones',			'action-model' => 'Modelo de Acción',			'action-id' => 'ID de Acción',		],	],
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
	'qa_create' => 'Erstellen',
	'qa_save' => 'Speichern',
	'qa_edit' => 'Bearbeiten',
	'qa_view' => 'Betrachten',
	'qa_update' => 'Aktualisieren',
	'qa_list' => 'Liste',
	'qa_no_entries_in_table' => 'Keine Einträge in der Tabelle.',
	'qa_custom_controller_index' => 'Custom controller index.',
	'qa_logout' => 'Abmelden',
	'qa_add_new' => 'Hinzufügen',
	'qa_are_you_sure' => 'Sind Sie sicher?',
	'qa_back_to_list' => 'Zurück zur Liste',
	'qa_dashboard' => 'Dashboard',
	'qa_delete' => 'Löschen',
	'qa_restore' => 'Wiederherstellen',
	'qa_permadel' => 'Permant löschen',
	'qa_all' => 'Alle',
	'qa_trash' => 'Papierkorb',
	'qa_delete_selected' => 'Markierte löschen',
	'qa_category' => 'Kategorie',
	'qa_categories' => 'Kategorien',
	'qa_sample_category' => 'Beispielkategorie',
	'qa_questions' => 'Fragen',
	'qa_question' => 'Frage',
	'qa_answer' => 'Antwort',
	'qa_sample_question' => 'Beispielfrage',
	'qa_sample_answer' => 'Beispielantwort',
	'qa_faq_management' => 'FAQ Verwaltung',
	'qa_administrator_can_create_other_users' => 'Administrator (kann andere Benutzer erstellen)',
	'qa_simple_user' => 'Einfacher Benutzer',
	'qa_title' => 'Titel',
	'qa_roles' => 'Rollen',
	'qa_role' => 'Rolle',
	'qa_user_management' => 'Benutzerverwaltung',
	'qa_users' => 'Benutzer',
	'qa_user' => 'Benutzer',
	'qa_name' => 'Name',
	'qa_email' => 'E-Mail',
	'qa_password' => 'Passwort',
	'qa_remember_token' => 'Remember Token',
	'qa_permissions' => 'Zugriffsrechte',
	'qa_user_actions' => 'Prokoll',
	'qa_action' => 'Action',
	'qa_action_model' => 'Action Model',
	'qa_action_id' => 'Action ID',
	'qa_time' => 'Zeit',
	'qa_campaign' => 'Kampagne',
	'qa_campaigns' => 'Kampagnen',
	'qa_description' => 'Beschreibung',
	'qa_valid_from' => 'Gültig von',
	'qa_valid_to' => 'Gültig bis',
	'quickadmin_title' => 'DC',
];