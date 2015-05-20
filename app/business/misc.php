<?php

/**
* Classe para dados específicos
*/
class Misc
{
	
	/**
	* Retorna array com mapeamento de siglas para nomes de estados
	*/
	public static function states() {
		return array(
			'AC' => 'Acre',
			'AL' => 'Alagoas',
			'AM' => 'Amazonas',
			'AP' => 'Amapá',
			'BA' => 'Bahia',
			'CE' => 'Ceará',
			'DF' => 'Distrito Federal',
			'ES' => 'Espírito Santo',
			'GO' => 'Goiás',
			'MA' => 'Maranhão',
			'MT' => 'Mato Grosso',
			'MS' => 'Mato Grosso do Sul',
			'MG' => 'Minas Gerais',
			'PA' => 'Pará',
			'PB' => 'Paraíba',
			'PR' => 'Paraná',
			'PE' => 'Pernambuco',
			'PI' => 'Piauí',
			'RJ' => 'Rio de Janeiro',
			'RN' => 'Rio Grande do Norte',
			'RO' => 'Rondônia',
			'RS' => 'Rio Grande do Sul',
			'RR' => 'Roraima',
			'SC' => 'Santa Catarina',
			'SE' => 'Sergipe',
			'SP' => 'São Paulo',
			'TO' => 'Tocantins'); 
	}

	/**
	* Retorna array contendo os campi da Universidade
	*/
	public static function campi() {
		return array(
			'Baixada Santista' => 'Baixada Santista',	
			'Diadema' => 'Diadema',
			'Guarulhos' => 'Guarulhos',
			'Osasco' => 'Osasco',
			'São Paulo - EPE' => 'São Paulo - EPE',
			'São Paulo - EPM' => 'São Paulo - EPM',
			'São José dos Campos' => 'São José dos Campos',
			'Reitoria' => 'Reitoria');
	}

	/**
	* Retorna array contendo as áreas temáticas
	*/
	public static function themes() {
		return array(
			'Comunicação' => 'Comunicação',
			'Cultura' => 'Cultura',
			'Direitos Humanos e Justiça' => 'Direitos Humanos e Justiça',
			'Educação' => 'Educação',
			'Meio Ambiente' => 'Meio Ambiente',
			'Saúde' => 'Saúde',
			'Tecnologia e Produção' => 'Tecnologia e Produção',
			'Trabalho' => 'Trabalho');
	}

	/**
	* Retorna array contendo os tipos de eventos
	*/
	public static function kinds() {
		return array(
			'EaD' => 'EaD',
			'Presencial' => 'Presencial');
	}

	/**
	* Retorna array contendo os tipos de eventos
	*/
	public static function knowledge_areas() {
		return array(
			'Medicina' => 'Medicina',
			'Outros' => 'Outros');
	}

	/**
	* Retorna array contendo as áreas temáticas
	*/
	public static function characterizations() {
		return array(
			'Atualização' => 'Atualização',
			'Assembléia' => 'Assembléia',
			'Campanha' => 'Campanha',
			'Colóquio' => 'Colóquio',
			'Conferência' => 'Conferência',
			'Congresso' => 'Congresso',
			'Debate' => 'Debate',
			'Difusão Cultural' => 'Difusão Cultural',
			'Economia Solidária' => 'Economia Solidária',
			'Encontro' => 'Encontro',
			'Espetáculo' => 'Espetáculo',
			'Evento Esportivo' => 'Evento Esportivo',
			'Exame de Proficiência' => 'Exame de Proficiência',
			'Exposição/Feira' => 'Exposição/Feira',
			'Fórum' => 'Fórum',
			'Jornada' => 'Jornada',
			'Laboratório' => 'Laboratório',
			'Mesa Redonda' => 'Mesa Redonda',
			'Oficina' => 'Oficina',
			'Oficinas, Exposição e Concurso de Projetos' => 'Oficinas, Exposição e Concurso de Projetos',
			'Painel' => 'Painel',
			'Palestra' => 'Palestra',
			'Palestra do Prof. James Leckman' => 'Palestra do Prof. James Leckman',
			'Pré-Congresso' => 'Pré-Congresso',
			'Reciclagem' => 'Reciclagem',
			'Reunião Científica' => 'Reunião Científica',
			'Seminário' => 'Seminário',
			'Simpósio' => 'Simpósio',
			'Teleconferência' => 'Teleconferência',
			'Workshop' => 'Workshop',
			'Iniciação' => 'Iniciação',
			'Treinamento e qualificação Profissional' => 'Treinamento e qualificação Profissional');
	}

	/**
	* Retorna array contendo os tipos de dados registrados e suas rotas
	*/
	public static function models() {
		return array(
			//'/projects' => 'Projetos',
      '/programs' => 'Programas',
      //'/courses' => 'Cursos',
      '/events' => 'Eventos');
	}

	/**
	* Retorna array contendo os campos necessários no formulário de eventos/cursos para contato
	*/
	public static function ev_cr_contact_fields() {
		return array(
			'main_coordinator_name' => 'Coordenador (Responsável Técnico Científico)',
      'main_coordinator_cpf' => 'CPF do Coordenardor',
      'main_coordinator_secretary' => 'Secretaria (Suporte Administrativo)',
			'main_coordinator_secretary_cel' => 'Celular Secretaria',
			'main_coordinator_first_phone' => 'Telefone 1',
			'main_coordinator_second_phone' => 'Telefone 2',
			'main_coordinator_fax' => 'Fax',
			'main_coordinator_cel' => 'Celular',
			'main_coordinator_email' => 'Email',
			'main_coordinator_address_street' => 'Endereço',
			'main_coordinator_address_complement' => 'Complemento',
			'main_coordinator_address_number' => 'Número',
			'main_coordinator_address_district' => 'Bairro',
			'main_coordinator_address_city' => 'Cidade',
			'main_coordinator_address_state' => 'Estado',
			'main_coordinator_address_postal_code' => 'CEP',
			'department_chief' => '	Chefe Departamento ou Diretor(a) Acadêmico',
			'discipline_chief' => '	Chefe Disciplina ou Diretor(a) Acadêmico');
	}
}
