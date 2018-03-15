<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	$config = array(
		'valida_login' => array(
			array(
				'field' => 'usuario',
				'label' => 'usuario',
				'rules' => 'trim|required|min_length[3]|max_length[150]'
			),
			array(
				'field' => 'pass',
				'label' => 'contraseña',
				'rules' => 'trim|required|min_length[6]|max_length[20]'

			)
		),

		'valida_newCliente' => array(
				array(
					'field' => 'cliente_cedula',
					'label' => 'Cédula',
					'rules' => 'trim|required|numeric|min_length[6]|max_length[8]|is_unique[cliente.cliente_cedula]'
				),
				array(
					'field' => 'nombre',
					'label' => 'Nombre',
					'rules' => 'trim|required|alpha|min_length[2]|max_length[50]'

				),
				array(
					'field' => 'apellido',
					'label' => 'Apellido',
					'rules' => 'trim|required|alpha|min_length[2]|max_length[50]'

				),
				array(
					'field' => 'direccion',
					'label' => 'Dirección',
					'rules' => 'trim|required|min_length[6]|max_length[255]'

				),
				array(
					'field' => 'telf_celular',
					'label' => 'Teléfono Celular',
					'rules' => 'trim|required|is_numeric|min_length[6]|max_length[255]'

				),
				array(
					'field' => 'telf_local',
					'label' => 'Teléfono Local',
					'rules' => 'trim|is_numeric|min_length[6]|max_length[255]'

				),
				array(
					'field' => 'email',
					'label' => 'Correo Electrónico',
					'rules' => 'trim|valid_email|min_length[6]|max_length[255]'

				)
			),

		'valida_editCliente' => array(
				array(
					'field' => 'nombre',
					'label' => 'Nombre',
					'rules' => 'trim|required|min_length[2]|max_length[50]'

				),
				array(
					'field' => 'apellido',
					'label' => 'Apellido',
					'rules' => 'trim|required|min_length[2]|max_length[50]'

				),
				array(
					'field' => 'direccion',
					'label' => 'Dirección',
					'rules' => 'trim|required|min_length[6]|max_length[255]'

				),
				array(
					'field' => 'telf_celular',
					'label' => 'Teléfono Celular',
					'rules' => 'trim|required|is_numeric|min_length[6]|max_length[255]'

				),
				array(
					'field' => 'telf_local',
					'label' => 'Teléfono Local',
					'rules' => 'trim|is_numeric|min_length[6]|max_length[255]'

				),
				array(
					'field' => 'email',
					'label' => 'Correo Electrónico',
					'rules' => 'trim|valid_email|min_length[6]|max_length[255]'

				)
			),

		'valida_editClienteCed' => array(
				array(
					'field' => 'cliente_cedula',
					'label' => 'número de cédula',
					'rules' => 'trim|required|numeric|min_length[6]|max_length[8]'
				)
			),

		'valida_addService' => array(
				array(
					'field' => 'tipo',
					'label' => 'Tipo',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'nombreService',
					'label' => 'Nombre',
					'rules' => 'trim|required|min_length[3]|max_length[100]'
				),
				array(
					'field' => 'descripcionService',
					'label' => 'Descripción',
					'rules' => 'trim|required|min_length[2]|max_length[255]'
				)
			),

		'valida_editServiceBD' => array(
				array(
					'field' => 'servicio_tipo',
					'label' => 'Tipo',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'nombreServices',
					'label' => 'Nombre Producto/Servicio',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'servicio_nombre',
					'label' => 'Editar Nombre',
					'rules' => 'trim|required|min_length[3]|max_length[100]'
				),
				array(
					'field' => 'servicio_descripcion',
					'label' => 'Editar Descripción',
					'rules' => 'trim|required|min_length[2]|max_length[255]'
				)
			),

		'valida_addCard' => array(
			array(
					'field' => 'numero_tarjeta',
					'label' => 'Número de Tarjeta',
					'rules' => 'trim|required|callback_validaCard[numero_tarjeta]'
				)
			),

		'valida_recarga' => array(
				array(
					'field' => 'numero_tarjeta',
					'label' => 'Número de tarjeta',
					'rules' => 'trim|required'
				),
				array(
					'field' => 'min',
					'label' => 'Minutos de la recarga',
					'rules' => 'trim|required'
				)
			),

		'valida_ventaTarjeta' => array(
				array(
					'field' => 'tarjetaNum',
					'label' => 'Tipo',
					'rules' => 'trim|required|callback_validCard[tarjetaNum]'
				),
				array(
					'field' => 'cedula',
					'label' => 'Tipo',
					'rules' => 'trim|required|callback_validCliente[cedula]'
				),
				array(
					'field' => 'min',
					'label' => 'Minutos a Recargar',
					'rules' => 'trim|required'
				)
			),
		'valida_cambioClave' => array(
				array(
					'field' => 'passOld',
					'label' => 'Contraseña Actual',
					'rules' => 'trim|required|callback_validOldPass[passOld]',
					'message' => 'asdasdasdasd'
				),
				array(
					'field' => 'passNew',
					'label' => 'Contraseña Nueva',
					'rules' => 'trim|required|min_length[6]|max_length[150]'
				),
				array(
					'field' => 'passNewRep',
					'label' => 'Repetir Contraseña',
					'rules' => 'trim|required|min_length[6]|max_length[150]|matches[passNew]'
				),
		),
	);
?>