create TABLE passeios(

	pasta_recurso int(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome_passeio  varchar(255) NOT NULL ,
	inicio date NOT NULL ,
	fim date NOT NULL ,
	por_que_ir text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	incluso  text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	nao_incluso  text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	numero_parcelas int(2) NOT NULL,
	forma_pagamento varchar(255) NOT NULL,
	valor_descricao_1 varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	valor_vista_1  decimal(10,2) NOT NULL,
	valor_total_parcelado_1  decimal(10,2) NOT NULL,
	valor_entrada_1  decimal(10,2) NOT NULL,
	valor_descricao_2 varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci,
	valor_vista_2  decimal(10,2),
	valor_total_parcelado_2  decimal(10,2),
	valor_entrada_2  decimal(10,2),
	valor_descricao_3 varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci,
	valor_vista_3  decimal(10,2),
	valor_total_parcelado_3  decimal(10,2),
	valor_entrada_3  decimal(10,2),
	valor_descricao_4 varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci,
	valor_vista_4  decimal(10,2),
	valor_total_parcelado_4  decimal(10,2), 
	valor_entrada_4  decimal(10,2),
	valor_descricao_5 varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci,
	valor_vista_5  decimal(10,2),
	valor_total_parcelado_5  decimal(10,2),
	valor_entrada_5  decimal(10,2),
	valor_descricao_6 varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci,
	valor_vista_6  decimal(10,2),
	valor_total_parcelado_6  decimal(10,2),
	valor_entrada_6  decimal(10,2),
	avisos_importantes  text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	data_partida date NOT NULL,
	local_partida_1 varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	hora_partida_1  time NOT NULL,
	local_partida_2 varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci,
	hora_partida_2  time,
	local_partida_3 varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci,
	hora_partida_3  time,
	local_partida_4 varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci,
	hora_partida_4  time,
	local_partida_5 varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci,
	hora_partida_5  time,
	local_partida_6 varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci,
	hora_partida_6  time
);
