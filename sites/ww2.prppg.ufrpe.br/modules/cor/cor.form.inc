<?php
/*
 * hook_form
 */
function cor_form($form, &$form_state) {
	
	// upload files
	$form = array (
			'#attributes' => array (
					'enctype' => "multipart/form-data" 
			) 
	);
	
	if (user_access ( 'admin' )) {
		
		$form ['name_color'] = array (
				'#type' => 'select',
				'#title' => t ( 'Nome da cor:' ),
				'#options' => array (
						1 => t ( 'Preto' ),
						2 => t ( 'Azul' ),
						3 => t ( 'Verde' ) 
				),
				'#required' => true 
		);
		
		$form ['submit_button'] = array (
				'#type' => 'submit',
				'#value' => t ( 'Trocar de cor' ) 
		);
	} else {
		$form ['acessoNegado'] = array (
				'#type' => 'fieldset',
				'#title' => t ( 'Acesso Negado' ),
				'#size' => 20,
				'#maxlength' => 32 
		);
	}
	return $form;
}

/*
 * Valida o formulário de criação de sites Procura na tabela sites coluna sigla a se o novo site já foi instanciado e na coluna mail se o email já foi cadastrado.
 */
function cor_form_validate($form, &$form_state) {
	$name_color = ($form_state ['values'] ['name_color']);
	
	if (strlen($name_color) == 0) {
		form_set_error ( t ( 'Selecione a cor desejada.' ) );
	}
}


function cor_form_submit($form, &$form_state) {
		
	// Roda o script para mudar o CSS
	shell_exec(drupal_get_path('module', 'cor') ."/bash/cor.sh 'doisdois' '#181818' '#262626' '#1a1a1a' '#7a7a7a'");
}