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
	'qa_create' => 'Стварыць',
	'qa_save' => 'Захаваць',
	'qa_edit' => 'Рэдагаваць',
	'qa_restore' => 'Аднавіць',
	'qa_permadel' => 'Выдаліць назаўсёды',
	'qa_all' => 'Усё',
	'qa_trash' => 'Смецце',
	'qa_list' => 'Спіс',
	'qa_logout' => 'Выйсці',
	'qa_add_new' => 'Дадаць новы',
	'qa_are_you_sure' => 'Вы ўпэўнены?',
	'qa_back_to_list' => 'Назад да спісу',
	'qa_delete' => 'Выдаліць',
	'qa_category' => 'Катэгорыя',
	'qa_categories' => 'Катэгорыі',
	'qa_sample_category' => 'Прыклад катэгорыі',
	'qa_questions' => 'Пытанні',
	'qa_question' => 'Пытанне',
	'qa_answer' => 'Адказ',
	'qa_sample_question' => 'Прыклад пытання',
	'qa_sample_answer' => 'Прыклад адказу',
	'qa_title' => 'Загаловак',
	'qa_roles' => 'Ролі',
	'qa_role' => 'Роля',
	'qa_users' => 'Карыстальнікі',
	'qa_user' => 'Карыстальнік',
	'qa_name' => 'Імя',
	'qa_email' => 'Імэйл',
	'qa_password' => 'Пароль',
	'qa_price' => 'Кошт',
	'qa_email_greet' => 'Вітаем',
	'qa_register' => 'Рэгістраваць',
	'qa_registration' => 'Рэгістрацыя',
	'qa_view' => 'Прагляд',
	'qa_update' => 'Абнавіць',
	'qa_no_entries_in_table' => 'Няма запісаў у табліцы',
	'qa_dashboard' => 'Панель',
	'qa_delete_selected' => 'Выдаліць абранае',
	'qa_user_management' => 'Кіраванне карыстальнікамі',
	'qa_address' => 'Адрэса',
	'qa_first_name' => 'Імя',
	'qa_last_name' => 'Прозвішча',
	'qa_phone' => 'Тэлефон',
	'qa_created_at' => 'Створана',
	'qa_updated_at' => 'Абноўлена',
	'qa_deleted_at' => 'Выдалена',
	'qa_please_select' => 'Калі ласка, абярыце',
	'qa_category_name' => 'Назва катэгорыі',
	'qa_product_management' => 'Кіраванне таварамі',
	'qa_products' => 'Тавары',
	'qa_product_name' => 'Назва тавара',
	'qa_content_management' => 'Кіраванне старонкамі',
	'qa_text' => 'Тэкст',
	'qa_dashboard_text' => 'Вы ўвайшлі ў сістэму!',
	'qa_forgot_password' => 'Забылі пароль?',
	'qa_remember_me' => 'Памятаць мяне',
	'qa_login' => 'Увайсці',
	'qa_change_password' => 'Змяніць пароль',
	'qa_print' => 'Раздрукаваць',
	'qa_description' => 'Апісаннне',
	'qa_phone1' => 'Тэлефон 1',
	'qa_phone2' => 'Тэлефон 2',
	'qa_photo1' => 'Фота1',
	'qa_photo2' => 'Фота2',
	'qa_photo3' => 'Фота3',
	'qa_calendar' => 'Каляндар',
	'qa_notes' => 'Зацемки',
	'qa_pages' => 'Старонки',
	'qa_show' => 'Паказаць',
	'qa_group_by' => 'Групаваць па',
	'qa_faq_management' => 'Кіраванне FAQ',
	'qa_administrator_can_create_other_users' => 'Адміністратар (можа ствараць карыстальнікаў)',
	'qa_simple_user' => 'Звычайны карыстальнік',
	'qa_remember_token' => 'Запомніць',
	'qa_permissions' => 'Дазволы',
	'qa_user_actions' => 'Дзеянні карыстальніка',
	'qa_action' => 'Дзеянне',
	'qa_time' => 'Час',
	'qa_campaign' => 'Кампанія',
	'qa_campaigns' => 'Кампаніі',
	'qa_valid_from' => 'Дата пачатку',
	'qa_valid_to' => 'Дата заканчэння',
	'qa_discount_amount' => 'Сума зніжкі',
	'qa_discount_percent' => 'Працэнт зніжкі',
	'qa_redeem_time' => 'Час выкупу',
	'qa_website' => 'Сайт',
	'qa_contact_management' => 'Кіраванне кантактамі',
	'qa_contacts' => 'Кантакты',
	'qa_company' => 'Кампанія',
	'qa_tags' => 'Цэтлікі',
	'qa_tag' => 'Цэтлік',
	'qa_statuses' => 'Статусы',
	'qa_status' => 'Статус',
	'qa_attachment' => 'Далучанае',
	'qa_assigned_to' => 'Прызначана',
	'qa_axis' => 'Вось',
	'qa_is_created' => 'створана',
	'qa_is_updated' => 'абноўлена',
	'qa_is_deleted' => 'выдалена',
	'qa_notifications' => 'Авесткі',
	'qa_notify_user' => 'Абвясціць карыстальніка',
	'qa_create_new_notification' => 'Стварыць абвестку',
	'qa_messages' => 'Паведамленні',
	'qa_you_have_no_messages' => 'Вы не маеце паведамленняў',
	'qa_all_messages' => 'Усе паведамленні',
	'qa_new_message' => 'Новае паведамленне',
	'qa_outbox' => 'Зыходныя',
	'qa_inbox' => 'Уваходныя',
	'qa_recipient' => 'Атрымальнік',
	'qa_subject' => 'Тэма',
	'qa_message' => 'Паведамленне',
	'qa_send' => 'Даслаць',
	'qa_reply' => 'Адказаць',
	'qa_calendar_sources' => 'Крыніцы каляндара',
	'qa_country' => 'Краіна',
	'qa_client_status' => 'Статус кліента',
	'qa_clients' => 'Кліенты',
	'qa_currencies' => 'Валюты',
	'qa_main_currency' => 'Галоўная валюта',
	'qa_documents' => 'Дакументы',
	'qa_file' => 'Файл',
	'qa_client' => 'Кліент',
	'qa_start_date' => 'Дата пачатку',
	'qa_currency' => 'Валюта',
	'qa_current_password' => 'Бягучы пароль',
	'qa_new_password' => 'Новы пароль',
	'qa_password_confirm' => 'Падцверджанне пароля',
	'qa_copy' => 'Капіяваць',
	'qa_colvis' => 'Бачнасць калонак',
	'qa_reset_password' => 'Скінуць пароль',
	'qa_email_regards' => 'З павагаю',
	'qa_confirm_password' => 'Падцвердзіце пароль',
	'quickadmin_title' => 'DC',
];