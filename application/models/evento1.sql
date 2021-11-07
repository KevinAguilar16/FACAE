
use educayso_facae;

create view evento1 as select evento.idevento,evento.titulo,evento.detalle,evento.fechacreacion,evento.fechainicia,evento.fechafinaliza,evento_estado.nombre as estado from evento,evento_estado where evento.idevento_estado=evento_estado.idevento_estado;
