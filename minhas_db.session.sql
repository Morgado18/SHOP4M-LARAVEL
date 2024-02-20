

USE p1_tlp;

SELECT * FROM apresentador;


/* Trazer os nomes de todos apresentadores dos programas entretenimento com o
tipo “Infantil” */

SELECT apresentador.nome, programa.nome 
FROM apresentador 
INNER JOIN programa ON (apresentador.id = programa.id_apresentador )
WHERE programa.id IN 
    (SELECT entretenimento.id_programa 
     FROM entretenimento 
     WHERE entretenimento.tipo = "INFANTIL");

     
SELECT apresentador.nome, programa.nome 
FROM apresentador 
INNER JOIN programa ON (apresentador.id = programa.id_apresentador )
WHERE programa.id IN 
    (SELECT noticia.id_programa 
     FROM noticia);


SELECT programa.id, programa.nome as "Nome programa", canal.nome "Nome canal" FROM programa INNER JOIN canal ON (programa.id_canal = canal.id);

DELETE FROM noticia WHERE categoria='URGENTE';