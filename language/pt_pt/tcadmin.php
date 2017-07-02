<?php
/**
 * pt_pt language for the Tcadmin module
 * by Miguel Monteiro - mail@miguelmonteiro.net
 */
// Basics
$lang['Tcadmin.name'] = "TCAdmin";
$lang['Tcadmin.module_row'] = "Servidor";
$lang['Tcadmin.module_row_plural'] = "Servidores";
$lang['Tcadmin.module_group'] = "Grupo de Servidores";

// Module management
$lang['Tcadmin.add_module_row'] = "Adicionar Servidor";
$lang['Tcadmin.add_module_group'] = "Adicionar Grupo de Servidor";
$lang['Tcadmin.manage.module_rows_title'] = "Servidores";
$lang['Tcadmin.manage.module_groups_title'] = "Grupos de Servidores";
$lang['Tcadmin.manage.module_rows_heading.name'] = "Nome do Servidor";
$lang['Tcadmin.manage.module_rows_heading.hostname'] = "Hostname";
$lang['Tcadmin.manage.module_rows_heading.port'] = "Porta";
$lang['Tcadmin.manage.module_rows_heading.options'] = "Opções";
$lang['Tcadmin.manage.module_groups_heading.name'] = "Nome do Grupo";
$lang['Tcadmin.manage.module_groups_heading.servers'] = "Contagem de Servidores";
$lang['Tcadmin.manage.module_groups_heading.options'] = "Opções";
$lang['Tcadmin.manage.module_rows.edit'] = "Editar";
$lang['Tcadmin.manage.module_groups.edit'] = "Editar";
$lang['Tcadmin.manage.module_rows.delete'] = "Apagar";
$lang['Tcadmin.manage.module_groups.delete'] = "Apagar";
$lang['Tcadmin.manage.module_rows.confirm_delete'] = "Tem a certeza de que deseja apagar este servidor?";
$lang['Tcadmin.manage.module_groups.confirm_delete'] = "Tem a certeza de que deseja apagar este grupo de servidores?";
$lang['Tcadmin.manage.module_rows_no_results'] = "Não existem servidores.";
$lang['Tcadmin.manage.module_groups_no_results'] = "Não existem grupos de servidores.";


$lang['Tcadmin.order_options.first'] = "Primeiro servidor não cheio";

// Add row
$lang['Tcadmin.add_row.box_title'] = "Adicionar servidor TCAdmin";
$lang['Tcadmin.add_row.basic_title'] = "Definições Básicas";
$lang['Tcadmin.add_row.add_btn'] = "Adicionar servidor";

$lang['Tcadmin.edit_row.box_title'] = "Editar servidor TCAdmin";
$lang['Tcadmin.edit_row.basic_title'] = "Definições Básicas";
$lang['Tcadmin.edit_row.add_btn'] = "Editar servidor";

$lang['Tcadmin.row_meta.server_name'] = "Nome do Servidor";
$lang['Tcadmin.row_meta.host_name'] = "Hostname";
$lang['Tcadmin.row_meta.user_name'] = "Nome de Utilizador";
$lang['Tcadmin.row_meta.password'] = "Password";
$lang['Tcadmin.row_meta.port'] = "Porta";
$lang['Tcadmin.row_meta.use_ssl'] = "Usar SSL quando se ligar ao API (recomendado)";
$lang['Tcadmin.row_meta.account_limit'] = "Limite de Contas";

// Package fields
$lang['Tcadmin.package_fields.server_type'] = "Tipo de Servidor";
$lang['Tcadmin.package_fields.game_server'] = "Servidor de Jogo";
$lang['Tcadmin.package_fields.voice_server'] = "Servidor de Voz";
$lang['Tcadmin.package_fields.supported_servers'] = "Servidores TCAdmin suportados";
$lang['Tcadmin.package_fields.yes'] = "Sim";
$lang['Tcadmin.package_fields.no'] = "Não";
$lang['Tcadmin.package_fields.start'] = "Iniciar depois da Criação";
$lang['Tcadmin.package_fields.priority'] = "Prioridade";
$lang['Tcadmin.package_fields.startup'] = "Arranque";
$lang['Tcadmin.package_fields.priority.abovenormal'] = "Acima do Normal";
$lang['Tcadmin.package_fields.priority.belownormal'] = "Abaixo do Normal";
$lang['Tcadmin.package_fields.priority.normal'] = "Normal";
$lang['Tcadmin.package_fields.priority.high'] = "Alta";
$lang['Tcadmin.package_fields.priority.idle'] = "Baixa";
$lang['Tcadmin.package_fields.priority.realtime'] = "Tempo Real";
$lang['Tcadmin.package_fields.startup.automatic'] = "Automatico";
$lang['Tcadmin.package_fields.startup.manual'] = "Manual";
$lang['Tcadmin.package_fields.startup.disabled'] = "Desativado";

// Service fields
$lang['Tcadmin.service_field.hostname'] = "Hostname";
$lang['Tcadmin.service_field.user_name'] = "Nome de Utilizador TCAdmin";
$lang['Tcadmin.service_field.user_password'] = "Password TCAdmin";
$lang['Tcadmin.service_field.rcon_password'] = "Password RCON";
$lang['Tcadmin.service_field.private_password'] = "Password Privada";


// Service info
$lang['Tcadmin.stored_locally_only'] = "Este campo apenas será atualizado localmente";
$lang['Tcadmin.service_info.hostname'] = "Hostname";
$lang['Tcadmin.service_info.rcon_password'] = "Password RCON";
$lang['Tcadmin.service_info.private_password'] = "Password Privada";
$lang['Tcadmin.service_info.username'] = "Nome de Utilizador";
$lang['Tcadmin.service_info.password'] = "Password";
$lang['Tcadmin.service_info.server'] = "Servidor";
$lang['Tcadmin.service_info.options'] = "Opções";
$lang['Tcadmin.service_info.option_login'] = "Login";


// Errors
$lang['Tcadmin.!error.server_name_valid'] = "Tem de introduzir um Nome do Servidor.";
$lang['Tcadmin.!error.host_name_valid'] = "O Hostname aparenta ser inválido.";
$lang['Tcadmin.!error.user_name_valid'] = "O Nome de Utilizador aparenta ser inválido.";
$lang['Tcadmin.!error.port_valid'] = "A Porta aparenta ser inválida.";
$lang['Tcadmin.!error.password_valid'] = "A Password aparenta ser inválida.";
$lang['Tcadmin.!error.account_limit_valid'] = "O Limite de Contas aparenta ser inváldo.";
$lang['Tcadmin.!error.meta[server_type].valid'] = "Por favor escolha um tipo de servidor válido.";
$lang['Tcadmin.!error.meta[supported_servers].empty'] = "Por favor escolha um dos servidores TCAdmin suportados.";
$lang['Tcadmin.!error.meta[start].valid'] = "Por favor escolha uma opção de início válida";
$lang['Tcadmin.!error.meta[priority].valid'] = "Por favor escolha uma prioridade válida";
$lang['Tcadmin.!error.meta[startup].valid'] = "Por favor escolha uma opção de arranque válida";
$lang['Tcadmin.!error.api.internal'] = "Occoreu um erro interno, ou o servidor não respondeu ao pedido.";
$lang['Tcadmin.!error.module_row.missing'] = "Occoreu um erro interno. A linha do módulo não está disponível.";

$lang['Tcadmin.!error.hostname.format'] = "Por favor introduza um domínio válido, ex: dominio.com.";
$lang['Tcadmin.!error.hostname.test'] = "O domínio não pode começar por 'test'.";
$lang['Tcadmin.!error.user_name.empty'] = "O Nome de Utilizador não pode estar vazio.";
$lang['Tcadmin.!error.user_password.valid'] = "A Password tem de ter pelo menos 8 caracteres de comprimento.";
$lang['Tcadmin.!error.rcon_password.valid'] = "A Password RCON Password tem de ter pelo menos 8 caracteres de comprimento.";
$lang['Tcadmin.!error.private_password.valid'] = "A Password Privada tem de ter pelo menos 8 caracteres de comprimento.";
?>