<?php
/*
 *	Made by Samerton
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr3
 *
 *  License: MIT
 *
 *  Portuguese Language - Admin
 *  Translation By Douglas Teles & dasilvaj4
 *  Last Update: 11/04/2018
 */
$language = array(
	/*
	 *  Admin Control Panel
	 */
	// Login
	're-authenticate' => 'Por favor, logue-se novamente',

	// Sidebar
	'admin_cp' => 'AdminCP',
	'administration' => 'Administração',
	'overview' => 'Visão Geral',
	'core' => 'Core',
	'minecraft' => 'Minecraft',
	'modules' => 'Módulos',
	'security' => 'Segurança',
	'styles' => 'Estilos',
	'users_and_groups' => 'Usuários & Grupos',

	// Overview
	'running_nameless_version' => 'Versão do NamelessMC: <strong>{x}</strong>', // Don't replace "{x}"
	'running_php_version' => 'Versão do PHP: <strong>{x}</strong>', // Don't replace "{x}"
	'statistics' => 'Estatísticas',
	'registrations' => 'Registrations',
	'topics' => 'Topics',
	'posts' => 'Posts',
    'notices' => 'Avisos',
    'no_notices' => 'Sem avisos.',
    'email_errors_logged' => 'Erros de e-mail foram registrados. Clique <a href="{x}">aqui</a> para ver.', // Don't replace "{x}"

	// Core
	'settings' => 'Configurações',
	'general_settings' => 'Configurações Gerais',
	'sitename' => 'Nome do site',
	'default_language' => 'Linguagem padrão',
	'default_language_help' => 'Os usuários poderão escolher entre os idiomas instalados.',
	'installed_languages' => 'Todos os novos idiomas foram instalados com êxito.',
	'default_timezone' => 'Fuso horário padrão',
	'registration' => 'Cadastro',
	'enable_registration' => 'Ativar cadastro?',
	'verify_with_mcassoc' => 'Verificar contas dos usuários com MCAssoc?',
	'email_verification' => 'Ativar verificação de e-mail?',
	'homepage_type' => 'Tipo de Homepage',
	'post_formatting_type' => 'Tipo de formatação de postagem',
	'portal' => 'Portal',
	'missing_sitename' => 'Por favor, insira o nome do site contendo de 2 a 64 caracteres.',
	'use_friendly_urls' => 'URLs Amigáveis',
	'use_friendly_urls_help' => 'IMPORTANTE: Seu servidor deverá permitir o uso do mod_rewrite e do .htaccess para que isso funcione.',
	'config_not_writable' => 'Seu arquivo <strong>core/config.php</strong> não é gravável. Por favor, verifique as permissões do arquivo.',
	'social_media' => 'Social',
	'youtube_url' => 'URL do Youtube',
	'twitter_url' => 'URL do Twitter',
	'twitter_dark_theme' => 'Utilizar tema escuro do Twitter?',
	'discord_id' => 'Discord Server ID',
	'discord_widget_theme' => 'Discord Widget Theme',
	'dark' => 'Dark',
	'light' => 'Light',
	'google_plus_url' => 'URL do Google Plus',
	'facebook_url' => 'URL do Facebook',
	'successfully_updated' => 'Atualizado com sucesso!',
    'debugging_and_maintenance' => 'Depuração e manutenção',
    'enable_debug_mode' => 'Habilitar o modo de depuração?',
    'force_https' => 'Forçar o uso do https?',
    'force_https_help' => 'Se ativado, todas as requisições para o seu site serão redirecionadas para o https. Você deve ter um certificado SSL válido ativo para que isso funcione corretamente.',
    'force_www' => 'Force www?',
    'contact_email_address' => 'Endereço de e-mail para contato',
    'emails' => 'E-mails',
    'email_errors' => 'Erros de e-mail',
    'registration_email' => 'E-mail de inscrição',
    'contact_email' => 'Email de contato',
    'forgot_password_email' => 'Esqueceu o e-mail cadastrado',
    'unknown' => 'Desconhecido',
    'delete_email_error' => 'Erro de exclusão',
    'confirm_email_error_deletion' => 'Tem certeza de que deseja excluir esse erro?',
    'viewing_email_error' => 'Visualizando o erro',
    'unable_to_write_email_config' => 'Não é possível escrever no arquivo <strong>core/email.php</core>. Por favor, verifique as permissões de arquivo.',
    'enable_mailer' => 'Ativar o PHPMailer?',
    'enable_mailer_help' => 'Habilite isso se os e-mails não estão sendo enviados por padrão. O uso de PHPMailer exige que você tenha um serviço capaz de enviar e-mails, como o Gmail ou um provedor SMTP.',
    'outgoing_email' => 'Endereço de e-mail de envio',
    'outgoing_email_info' => 'Este é o endereço de e-mail do qual NamelessMC usará para enviar e-mails.',
    'mailer_settings_info' => 'Os campos a seguir são necessários se você tiver habilitado PHPMailer. Para obter mais informações sobre como preencher esses campos, confira <a href="https://github.com/NamelessMC/Nameless/wiki/Setting-up-Gmail-or-SMTP-with-Nameless" target="_blank">a wiki</a>.',
    'host' => 'Host',
    'email_port' => 'Porta',
    'email_password_hidden' => 'A senha não é mostrada por razões de segurança.',
    'send_test_email' => 'Enviar e-mail de teste',
    'send_test_email_info' => 'O seguinte botão irá tentar enviar um e-mail para o seu endereço de e-mail, <strong>{x}</strong>. Qualquer erro que occora enquanto envia o e-mail será exibido.', // Don't replace {x}
    'send' => 'Enviar',
    'test_email_error' => 'Erro do e-mail de teste:',
    'test_email_success' => 'E-mail de teste enviado com sucesso!',
    'terms_error' => 'Certifique-se de que seus termos e condições não passa dos 2048 caracteres.',
    'terms_updated' => 'Termos atualizados com sucesso.',
    'avatars' => 'Avatares',
    'allow_custom_avatars' => 'Permitir os usuários utilizar avatares personalizados?',
    'default_avatar' => 'Avatar Padrão',
    'custom_avatar' => 'Avatar personalizado',
    'minecraft_avatar' => 'Minecraft Avatar',
    'minecraft_avatar_source' => 'Fonte do Minecraft avatar',
    'built_in_avatars' => 'Serviço de avatar incorporado',
    'minecraft_avatar_perspective' => 'Perspectiva do Minecraft avatar',
    'face' => 'Face',
    'head' => 'Head',
    'select_default_avatar' => 'Selecione um novo avatar padrão:',
    'no_avatars_available' => 'Não há avatares disponíveis. Por favor, envie uma nova imagem acima primeiro.',
    'avatar_settings_updated_successfully' => 'Configurações do Avatar atualizadas com sucesso.',
    'navigation' => 'Navegação',
    'navbar_order' => 'Ordem na Navbar',
    'navbar_order_instructions' => 'Você pode dar a cada item um número acima de 0 para os itens na barra de navegação, sendo 1 o primeiro item e os números mais altos após ele.',
    'navbar_icon' => 'Navbar Icon',
    'navbar_icon_instructions' => 'You can also add an icon to each navbar item here, for example using <a href="https://fontawesome.com/v4.7.0/" target="_blank" rel="noopener nofollow">Font Awesome</a>.',
    'dropdown_items' => 'Dropdown Items',
    'enable_page_load_timer' => 'Ativar o page load timer?',
    'google_recaptcha' => 'Enable Google reCAPTCHA?',
    'recaptcha_site_key' => 'reCAPTCHA Site Key',
    'recaptcha_secret_key' => 'reCAPTCHA Secret Key',
    'registration_disabled_message' => 'Motivo do registro está desativado',
    'enable_nicknames_on_registration' => 'Ativar nickname para registrar usuários?',
    'validation_promote_group' => 'Grupo pós-validação',
    'validation_promote_group_info' => 'Este é o grupo para o qual um usuário será promovido depois de ter validado sua conta.',
    'login_method' => 'Método de login',
    'privacy_and_terms' => 'Privacy Policy and Terms & Conditions',

	// Reactions
	'icon' => 'Ícone',
	'type' => 'Tipo',
	'positive' => 'Positivo',
	'neutral' => 'Neutro',
	'negative' => 'Negativo',
	'editing_reaction' => 'Editando Reação',
	'html' => 'HTML',
	'new_reaction' => '<i class="fa fa-plus-circle"></i> Nova Reação',
	'creating_reaction' => 'Criando Reação',

	// Custom profile fields
	'custom_fields' => 'Campos Personalizados do Perfil',
	'new_field' => '<i class="fa fa-plus-circle"></i> Novo Campo',
	'required' => 'Requerido',
	'editable' => 'Editable',
	'public' => 'Público',
	'text' => 'Texto',
	'textarea' => 'Área de texto',
	'date' => 'Data',
	'creating_profile_field' => 'Criando Campo de Perfil',
	'editing_profile_field' => 'Editando Campo de Perfil',
	'field_name' => 'Nome do Campo',
	'profile_field_required_help' => 'Os campos obrigatórios devem ser preenchidos pelo usuário, e eles aparecerão durante o registro.',
	'profile_field_public_help' => 'Os campos públicos serão exibidos para todos os usuários, se ele estiver desabilitado, somente os moderadores poderão ver os valores.',
	'profile_field_error' => 'Introduza um nome de campo entre 2 e 16 caracteres.',
	'description' => 'Descrição',
	'display_field_on_forum' => 'Mostrar campo no fórum?',
	'profile_field_forum_help' => 'Se ativado, o campo será exibido pelo usuário próximo aos posts do fórum.',
	'profile_field_editable_help' => 'If enabled, users will have permission to edit the field in their profile settings.',
	'no_custom_fields' => 'There are no custom fields yet.',

	// Minecraft
	'enable_minecraft_integration' => 'Ativar a integração do Minecraft?',
    'mc_service_status' => 'Status do Minecraft Service',
    'service_query_error' => 'Não é possível recuperar o status do service.',
    'authme_integration' => 'Integração com o AuthMe',
    'authme_integration_info' => 'Quando a integração com o AuthMe estiver habilitada, os usuários só podem registrar dentro do jogo.',
    'enable_authme' => 'Ativar a integração com o AuthMe?',
    'authme_db_address' => 'Endereço do banco de dados do AuthMe',
    'authme_db_port' => 'Porta do banco de dados do AuthMe',
    'authme_db_name' => 'Nome do banco de dados do AuthMe',
    'authme_db_user' => 'Usuário do banco de dados do AuthMe',
    'authme_db_password' => 'Senha do banco de dados do AuthMe',
    'authme_hash_algorithm' => 'Algoritmo de hash do AuthMe',
    'authme_db_table' => 'Tabela de usuário do AuthMe',
    'enter_authme_db_details' => 'Insira os detalhes do banco de dados válidos.',
    'authme_password_sync' => 'Sincronizar a senha com o AuthMe?',
    'authme_password_sync_help' => 'Se habilitado, sempre que a senha de um usuário é atualizada no jogo, a senha também será atualizada no site.',
    'minecraft_servers' => 'Servidores de Minecraft',
    'account_verification' => 'Verificação da Conta Minecraft',
    'server_banners' => 'Server Banners',
    'query_errors' => 'Query Errors',
    'add_server' => '<i class="fa fa-plus-circle"></i> Adicionar servidor',
    'no_servers_defined' => 'Nenhum servidor foi definido ainda',
    'query_settings' => 'Configurações de Query',
    'default_server' => 'Servidor padrão',
    'no_default_server' => 'Sem servidor padrão',
    'external_query' => 'Usar uma query externa?',
    'external_query_help' => 'Se a consulta de servidor padrão não funcionar, habilite esta opção.',
    'adding_server' => 'Adicionando Servidor',
    'server_name' => 'Nome do Servidor',
    'server_address' => 'Endereço do Servidor',
    'server_address_help' => 'Este é o endereço IP ou domínio usado para se conectar ao seu servidor, sem a porta.',
    'server_port' => 'Porta do Servidor',
    'parent_server' => 'Servidor Pai',
    'parent_server_help' => 'Um servidor pai geralmente é a instância Bungee à qual o servidor está conectado, se houver.',
    'no_parent_server' => 'Sem servidor pai',
    'bungee_instance' => 'Instância BungeeCord?',
    'bungee_instance_help' => 'Selecione essa opção se o servidor for uma instância BungeeCord.',
    'server_query_information' => 'Para exibir uma lista de jogadores online em seu site, seu servidor <strong>deve</strong> estar com a opção \'enable-query\' ativada no arquivo <strong>server.properties</strong> do seu servidor',
    'enable_status_query' => 'Ativar o status da query?',
    'status_query_help' => 'Se isso estiver habilitado, a página de status mostrará a este servidor como estando online ou offline.',
    'enable_player_list' => 'Ativar a lista de jogadores?',
    'pre_1.7' => 'A versão do Minecraft é mais velho que a 1.7?',
    'player_list_help' => 'Se isso estiver habilitado, a página de status exibirá uma lista de jogadores online.',
    'server_query_port' => 'Porta Query do Servidor',
    'server_query_port_help' => 'Esta é a opção query.port no arquivo server.properties do servidor, desde que a opção enable-query no mesmo arquivo seja definida como true.',
    'server_name_required' => 'Por favor, insira o nome do servidor',
    'server_name_minimum' => 'Certifique-se de que o nome do servidor tem pelo menos 1 caractere',
    'server_name_maximum' => 'Certifique-se de que o nome do servidor tem no máximo 20 caracteres',
    'server_address_required' => 'Por favor, insira o endereço do servidor',
    'server_address_minimum' => 'Verifique se o endereço do servidor tem pelo menos 1 caractere',
    'server_address_maximum' => 'Verifique se o endereço do servidor tem no máximo 64 caracteres',
    'server_port_required' => 'Por favor, insira a porta do servidor',
    'server_port_minimum' => 'Verifique se a porta do servidor tem pelo menos 2 caracteres',
    'server_port_maximum' => 'Verifique se a porta d oservidor tem no máximo 5 caracteres',
    'server_parent_required' => 'Por favor, selecione um servidor pai',
    'query_port_maximum' => 'Verifique se a porta de query tem no máximo 5 caracteres',
    'server_created' => 'Servidor criado com sucesso.',
    'confirm_delete_server' => 'Tem certeza de que deseja excluir este servidor?',
    'server_updated' => 'Servidor atualizado com sucesso.',
    'editing_server' => 'Editando o Servidor',
    'server_deleted' => 'Servidor deletado com sucesso',
    'unable_to_delete_server' => 'Não foi possível excluir o servidor.',
    'leave_port_empty_for_srv' => 'Você pode deixar a porta vazia se for 25565, ou se seu domínio usar um registro SRV',
    'viewing_query_error' => 'Visualizando os erros da Query',
    'confirm_query_error_deletion' => 'Tem certeza de que deseja excluir esse erro de Query?',
    'no_query_errors' => 'Sem erro de Query registrado.',
    'new_banner' => '<i class="fa fa-plus-circle"></i> Novo Banner',
    'purge_errors' => 'Limpar os erros',
    'confirm_purge_errors' => 'Tem certeza de que deseja limpar todos os erros?',
    'mcassoc_help' => 'O mcassoc é um serviço externo que pode ser usado para verificar que os usuários possuem a conta Minecraft com a qual se registraram. Para usar este recurso, você precisará se inscrever para uma chave compartilhada <a href="https://mcassoc.lukegb.com/" target="_blank">aqui</a>.',
    'mcassoc_key' => 'Chave compartilhada mcassoc',
    'mcassoc_instance' => 'Chave de instância do mcassoc',
    'mcassoc_instance_help' => '<a href="#" onclick="generateInstance();">Clique para gerar uma chave de instância</a>',
    'mcassoc_error' => 'Certifique-se de que você inseriu sua chave compartilhada corretamente e que gerou uma chave de instância corretamente.',
    'updated_mcassoc_successfully' => 'Configurações do mcassoc atualizadas com sucesso.',
    'force_premium_accounts' => 'Forçar contas Minecraft premium?',
    'banner_background' => 'Fundo do Banner',
    'query_interval' => 'Intevalo de Consulta (em minutos, deve ser entre 5 e 60)',
    'player_graphs' => 'Gráficos de Jogadores',
    'player_count_cronjob_info' => 'Você pode configurar uma cron job para consultar o seu servidor a cada {x} minutos com os seguintes comandos:',

	// Modules
	'modules_installed_successfully' => 'Todos os novos módulos foram instalados com êxito.',
	'enabled' => 'Ativado',
	'disabled' => 'Desativado',
	'enable' => 'Ativar',
	'disable' => 'Desativar',
	'module_enabled' => 'Módulo ativado.',
	'module_disabled' => 'Módulo desativado.',
	'author' => 'Autor:',

	// Styles
	'templates' => 'Templates',
	'template_outdated' => 'Você está utilizando um template para a versão {x} do Nameless, porém sua versão do Nameless é {y}', // Don't replace "{x}" or "{y}"
	'active' => 'Ativo',
	'deactivate' => 'Desativar',
	'activate' => 'Ativar',
	'warning_editing_default_template' => 'Atenção! É recomendável que você não edite o modelo padrão.',
	'images' => 'Imagens',
	'upload_new_image' => 'Carregar nova imagem',
	'reset_background' => 'Resetar o Fundo',
	'install' => '<i class="fa fa-plus-circle"></i> Instalar',
	'template_updated' => 'Template atualizado com sucesso.',
	'default' => 'Padrão',
	'make_default' => 'Tornar Padrão',
	'default_template_set' => 'Template padrão definido para {x} com sucesso.', // Don't replace {x}
	'template_deactivated' => 'Template desativado.',
	'template_activated' => 'Template ativado.',
	'permissions' => 'Permissões',
	'setting_perms_for_x' => 'Configurando as permissões do template {x}', // Don't replace {x}
	'templates_installed_successfully' => 'Todos os novos templates foi instalado com sucesso.',
	'confirm_delete_template' => 'Tem certeza que você quer remover esse template?',
	'delete' => 'Remover',
	'template_deleted_successfully' => 'Template removido com sucesso.',
    'background_image_x' => 'Imagem de fundo: <strong>{x}</strong>', // Don't replace {x}

	// Users & groups
	'users' => 'Usuários',
	'groups' => 'Grupos',
	'group' => 'Grupo',
	'new_user' => '<i class="fa fa-plus-circle"></i> Novo Usuário',
	'creating_new_user' => 'Criando novo usuário',
	'registered' => 'Cadastrado',
	'user_created' => 'Usuário criado com sucesso.',
	'cant_delete_root_user' => 'Não é possível excluir o usuário root!',
	'cant_modify_root_user' => 'Não é possível modificar o grupo root!',
	'user_deleted' => 'Usuário excluído com sucesso.',
	'confirm_user_deletion' => 'Você tem certeza que deseja excluir o usuário <strong>{x}</strong>?', // Don't replace {x}
	'validate_user' => 'Validar Usuário',
	'update_uuid' => 'Atualizar UUID',
	'update_mc_name' => 'Atualizar Usuário Minecraft',
	'reset_password' => 'Resetar Senha',
	'punish_user' => 'Punir Usuário',
	'delete_user' => 'Excluir Usuário',
	'minecraft_uuid' => 'Minecraft UUID',
	'other_actions' => 'Outras Ações',
	'disable_avatar' => 'Desativar Avatar',
	'select_user_group' => 'Você deve selecionar um grupo de usuários.',
	'uuid_max_32' => 'A UUID deve ter no máximo 32 caracteres.',
	'title_max_64' => 'O título do usuário deve ter no máximo 64 caracteres.',
	'group_id' => 'ID do Grupo',
	'name' => 'Nome',
	'title' => 'Título do Usuário',
	'new_group' => '<i class="fa fa-plus-circle"></i> Novo Grupo',
	'group_name_required' => 'Introduza um nome de grupo.',
	'group_name_minimum' => 'Certifique-se de que o nome do seu grupo tem um mínimo de 2 caracteres.',
	'group_name_maximum' => 'Certifique-se de que o nome do seu grupo tem um máximo de 20 caracteres.',
	'creating_group' => 'Criando novo grupo',
	'group_html_maximum' => 'Certifique-se de que o HTML do grupo não exceda 1024 caracteres.',
	'group_html' => 'HTML do Grupo',
	'group_html_lg' => 'HTML do Grupo Grande',
	'group_username_colour' => 'Cor do Grupo',
	'group_staff' => 'O grupo é um grupo da Staff?',
	'group_modcp' => 'O grupo possui acesso ao ModCP?',
	'group_admincp' => 'O grupo possui acesso ao AdminCP?',
	'delete_group' => 'Excluír Grupo',
	'confirm_group_deletion' => 'Você tem certeza de que deseja excluir o grupo {x}?', // Don't replace {x}
	'group_not_exist' => 'Esse grupo não existe.',
	'secondary_groups' => 'Grupos secundários',
	'secondary_groups_info' => 'Este usuário vai ganhar qualquer permissão adicional provenientes destes grupos',
	'unable_to_update_uuid' => 'Unable to update UUID.',
	'default_group' => 'Grupo padrão (para novos usuários)?',

	// Permissions
	'select_all' => 'Selecionar Todos',
	'deselect_all' => 'Deselecionar Todos',
	'background_image' => 'Imagem de Fundo',
	'can_edit_own_group' => 'Pode editar as permissão do seu próprio grupo',
	'permissions_updated_successfully' => 'Permissões atualizada com sucesso.',
	'cant_edit_this_group' => 'Você pode editar as permissões destes grupos!',

	// General Admin language
	'task_successful' => 'Tarefa bem-sucedida.',
	'invalid_action' => 'Ação inválida.',
	'enable_night_mode' => 'Ativar modo noturno',
	'disable_night_mode' => 'Desativar modo noturno',
	'view_site' => 'Ver Site',
	'signed_in_as_x' => 'Logado como {x}', // Don't replace {x}
    'warning' => 'Aviso',

    // Maintenance
    'maintenance_mode' => 'Modo de manutenção',
    'maintenance_enabled' => 'O modo de manutenção está ativado no momento.',
    'enable_maintenance_mode' => 'Habilitar modo de manutenção?',
    'maintenance_mode_message' => 'Mensagem de modo de manutenção',
    'maintenance_message_max_1024' => 'Certifique-se de que sua mensagem de manutenção é de no máximo 1024 caracteres.',

	// Security
	'acp_logins' => 'Logins do AdminCP',
	'please_select_logs' => 'Selecione logs para visualizar',
	'ip_address' => 'Endereço IP',
	'template_changes' => 'Alterações do Template',
	'file_changed' => 'Arquivo Modificado',
	'all_logs' => 'All Logs',
	'action' => 'Action',
	'action_info' => 'Action Info',

	// Updates
	'update' => 'Atualizar',
	'current_version_x' => 'Versão atual: <strong>{x}</strong>', // Don't replaec {x}
	'new_version_x' => 'Nova versão: <strong>{x}</strong>', // Don't replace {x}
	'new_update_available' => 'Há uma nova atualização disponível',
	'up_to_date' => 'A sua instalação do NamelessMC está atualizada!',
	'urgent' => 'Esta atualização é uma atualização crítica',
	'changelog' => 'Changelog',
	'update_check_error' => 'Ocorreu um erro ao verificar se havia uma atualização:',
	'instructions' => 'Instruções',
	'download' => 'Download',
	'install_confirm' => 'Certifique-se de que transferiu o pacote e carregou os ficheiros contidos em primeiro lugar!',

	// Widgets
	'widgets' => 'Widgets',
	'widget_enabled' => 'Widget ativado.',
	'widget_disabled' => 'Widget desativado.',
	'editing_widget_x' => 'Editando o widget {x}', // Don't replace {x}
	'module_x' => 'Módulo: {x}', // Don't replace {x}

    // Online users widget
    'include_staff_in_user_widget' => 'Include staff members in user widget?',

    // Custom Pages
    'pages' => 'Páginas',
    'new_page' => '<i class="fa fa-plus-circle"></i> Nova página',
    'no_custom_pages' => 'Nenhuma págia foi criada ainda.',
    'creating_new_page' => 'Criando Página',
    'page_title' => 'Título da Página',
    'page_path' => 'Endereço da Página (com o /, ex: /example)',
    'page_icon' => 'Ícone da Página',
    'page_link_location' => 'Local do link para Página',
    'page_link_navbar' => 'Navbar',
    'page_link_footer' => 'Footer',
    'page_link_more' => '"More" Dropdown',
    'page_link_none' => 'Sem link',
    'page_content' => 'Conteudo da Página',
    'page_redirect' => 'Página de Redirecionamento?',
    'page_redirect_to' => 'Link para o redirecionamento (com o http:// ou https://)',
    'unsafe_html' => 'Permitir tags HTML não seguras?',
    'unsafe_html_warning' => 'Ativando está opção, siginifica que qualquer HTML pode ser usada nesta página, incluindo JavaScript potencialmente perigosos. Somente ativa esta opção se você está ciente que o seu HTML é seguro.',
    'page_permissions' => 'Permisões da Página',
    'view_page' => 'Ver Página?',
    'editing_page_x' => 'Editando a Página {x}', // Don't replace {x}
    'unable_to_create_page' => 'Não foi possível criar a página:',
    'page_title_required' => 'É necessário um título.',
    'page_url_required' => 'É necessário um endereço para página.',
    'link_location_required' => 'É necessário um link.',
    'page_title_minimum_2' => 'O título da página deve ter no mínimo 2 caracteres.',
    'page_url_minimum_2' => 'O endereço da página deve ter no mínimo 2 caracteres.',
    'page_title_maximum_30' => 'O título da página deve ter no máximo 30 caracteres.',
    'page_icon_maximum_64' => 'O ícone da página deve ter no máximo 64 caracteres.',
    'page_url_maximum_20' => 'O endereço da página deve ter no máximo 20 caracteres.',
    'page_content_maximum_20480' => 'O conteudo da página deve ter no máximo 20480 caracteres.',
    'page_redirect_link_maximum_512' => 'O link de redirecionamento deve ter no máximo 512 caracteres.',
    'confirm_delete_page' => 'Você tem certeza que quer deletar está página?',

    // API
    'api' => 'API',
    'enable_api' => 'Ativar a API?',
    'api_info' => 'A API permite que plugins e outros serviços interajam com o seu site, como o <a href="https://namelessmc.com/resources/resource/5-namelessplugin/" target="_blank" >como o plugin Nameless oficial</a>.',
    'enable_legacy_api' => 'Ativar API legacy?',
    'legacy_api_info' => 'A API legacy permite que plugins que usam a API antiga do Nameless v1 para trabalhar com o seu site da versão 2.',
    'confirm_api_regen' => 'Tem certeza de que deseja gerar uma nova chave para API?',
    'api_registration_email' => 'E-mail de registro da API',
    'link_to_complete_registration' => 'Link para o registro completo: {x}', // Don't replace {x}
    'api_verification' => 'Ativar verificação de API?',
    'api_verification_info' => 'Se ativado, as contas só podem ser verificadas por meio da API, por exemplo, usando o plugin oficial Nameless. <strong>Essa opção substituirá a verificação de e-mail e as contas serão ativadas automaticamente.</strong><br />Você deve configurar seu grupo padrão para ter permissões limitadas e, em seguida, atualizar o grupo de pós-validação na guia AdminCP -> Core -> Cadastro para o grupo de membros completo com permissões normais.',
    'enable_username_sync' => 'Ativar sincronização de nome de usuário?',
    'enable_username_sync_info' => 'Se ativado, os nomes de usuário do site serão atualizados para corresponder aos nomes de usuário do jogo.',

	// File uploads
	'drag_files_here' => 'Arraste arquivos aqui para fazer o upload.',
	'invalid_file_type' => 'Tipo de arquivo inválido!',
	'file_too_big' => 'Arquivo muito grande! Seu arquivo possui {{filesize}} e o limite é {{maxFilesize}}', // Don't replace {{filesize}} or {{maxFilesize}}
	'allowed_proxies' => 'Proxies permitidos',
	'allowed_proxies_info' => 'Lista separada por linha de IPs de proxy permitidos.',

	// Error logs
	'error_logs' => 'Logs de erros',
	'notice_log' => 'Logs notices',
	'warning_log' => 'Logs de avisos',
	'custom_log' => 'Logs custom',
	'other_log' => 'Outros logs',
	'fatal_log' => 'Logs fatais',
	'log_file_not_found' => 'Arquivo de log não encontrado.',

	// Hooks
	'discord_hooks' => 'Discord Hooks',
	'discord_hooks_info' => 'Envie uma mensagem para um canal Discord quando algo acontecer em seu site. Crie um hook no seu Discord nas Configurações do seu Servidor Discord -> aba Webhooks.',
	'discord_hook_url' => 'URL do webhook do Discord',
	'discord_hook_events' => 'Ativar eventos hook do Discord (Ctrl + clique para selecionar vários eventos)',
	'register_hook_info' => 'Registro do usuário',
	'validate_hook_info' => 'Validação do usuário'
);
