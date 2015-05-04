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
			'/projects' => 'Projetos',
      '/programs' => 'Programas',
      '/courses' => 'Cursos',
      '/events' => 'Eventos');
	}
}
