<?php

return [
		'user-management' => [		'title' => 'Administración de usuarios',		'fields' => [		],	],
		'roles' => [		'title' => 'Roles',		'fields' => [			'title' => 'Título',		],	],
		'users' => [		'title' => 'Usuarios',		'fields' => [			'name' => 'Nombre',			'rut' => 'Rut',			'email' => 'Correo',			'password' => 'Contraseña',			'banco' => 'Banco',			'tipocuentabanco' => 'Tipo cuenta bancaria',			'cuentabancaria' => 'Cuenta Bancaria',			'role' => 'Rol',			'remember-token' => 'Recordar token',		],	],
		'proveedores' => [		'title' => 'Proveedores',		'fields' => [		],	],
		'contact-companies' => [		'title' => 'Proveedor',		'fields' => [			'name' => 'Nombre de la Compañía',			'rut' => 'Rut',			'address' => 'Dirección',			'website' => 'Sitio Web',			'email' => 'Correo',		],	],
		'contacts' => [		'title' => 'Contactos',		'fields' => [			'company' => 'Compañia',			'first-name' => 'Nombre',			'last-name' => 'Apellido',			'phone1' => 'Teléfono',			'email' => 'Correo',			'observaciones' => 'Observaciones',		],	],
		'user-actions' => [		'title' => 'Acciones de Usuario (Traza)',		'created_at' => 'Waktu',		'fields' => [			'user' => 'Usuario',			'action' => 'Acciones',			'action-model' => 'Modelo de Acción',			'action-id' => 'ID de Acción',		],	],
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
	'qa_create' => 'Buat',
	'qa_save' => 'Simpan',
	'qa_edit' => 'Edit',
	'qa_view' => 'Lihat',
	'qa_update' => 'Update',
	'qa_list' => 'Daftar',
	'qa_no_entries_in_table' => 'Tidak ada data di tabel',
	'qa_custom_controller_index' => 'Controller index yang sesuai kebutuhan Anda.',
	'qa_logout' => 'Keluar',
	'qa_add_new' => 'Tambahkan yang baru',
	'qa_are_you_sure' => 'Anda yakin?',
	'qa_back_to_list' => 'Kembali ke daftar',
	'qa_dashboard' => 'Dashboard',
	'qa_delete' => 'Hapus',
	'qa_delete_selected' => 'Hapus terpilih',
	'qa_category' => 'Kategori',
	'qa_categories' => 'Kategori',
	'qa_sample_category' => 'Contoh Kategori',
	'qa_questions' => 'Pertanyaan',
	'qa_question' => 'Pertanyaan',
	'qa_answer' => 'Jawaban',
	'qa_sample_question' => 'Contoh Pertanyaan',
	'qa_sample_answer' => 'Contoh Jawaban',
	'qa_faq_management' => 'Manajemen  FAQ',
	'qa_administrator_can_create_other_users' => 'Administrator (bisa membuat account user lain)',
	'qa_simple_user' => 'Pengguna Biasa',
	'qa_title' => 'Judul',
	'qa_roles' => 'Peranan',
	'qa_role' => 'Peran',
	'qa_user_management' => 'Manajemen Pengguna',
	'qa_users' => 'Daftar Pengguna',
	'qa_user' => 'Pengguna',
	'qa_name' => 'Nama',
	'qa_email' => 'Email',
	'qa_password' => 'Kata Sandi',
	'qa_remember_token' => 'Token Pengingat',
	'qa_permissions' => 'Izin',
	'qa_user_actions' => 'Aksi Pengguna',
	'qa_action' => 'Aksi',
	'qa_action_model' => 'Model Aksi',
	'qa_action_id' => 'Id Aksi',
	'qa_time' => 'Waktu',
	'qa_campaign' => 'Kampanye',
	'qa_campaigns' => 'Daftar Kampanye',
	'qa_description' => 'Deskripsi',
	'qa_valid_from' => 'Berlaku dari',
	'qa_valid_to' => 'Berlaku sampai',
	'qa_discount_amount' => 'Jumlah Diskon',
	'qa_discount_percent' => 'Persentasi Diskon',
	'qa_coupons_amount' => 'Jumlah Kupon',
	'qa_coupons' => 'Jupon',
	'qa_code' => 'Kode',
	'qa_coupon_management' => 'manajemen Kupon',
	'qa_time_management' => 'Manajemen Waktu',
	'qa_projects' => 'Daftar Kegiatan',
	'qa_reports' => 'Laporan',
	'qa_time_entries' => 'Input Waktu',
	'qa_work_type' => 'Tipe Pekerjaan',
	'qa_work_types' => 'Tipe-tipe Pekerjaan',
	'qa_project' => 'Kegiatan',
	'qa_start_time' => 'Waktu Mulai',
	'qa_end_time' => 'Waktu Selesai',
	'qa_expense_category' => 'Kategori Pengeluaran',
	'quickadmin_title' => 'DC',
];