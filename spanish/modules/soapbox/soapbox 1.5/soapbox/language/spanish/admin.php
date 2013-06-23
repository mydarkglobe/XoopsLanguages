<?php
/**
 * $Id: admin.php v 1.5 27 February 2004 hsalazar Exp $
 * Module: Soapbox
 * Version: v 1.5
 * Release Date: 18 February 2004
 * Author: hsalazar
 * Licence: GNU
 */

define("_AM_SB_ABOUT","Acerca de");
define("_AM_SB_ACTION","Acci&oacute;n");
define("_AM_SB_ADMINARTMNGMT","Creaci&oacute;n y edici&oacute;n de art&iacute;culos");
define("_AM_SB_ADMINCOLMNGMT","Creaci&oacute;n y edici&oacute;n de columnas");
define("_AM_SB_ALLOWCOMMENTS","Se pueden hacer comentarios al art&iacute;culo?");
define("_AM_SB_ARTAUTHORIZED","El art&iacute;culo ha sido autorizado.");
define("_AM_SB_ARTBODY","Texto<span style='font-size: xx-small; font-weight: normal; display: block;'>(Puedes crear art&iacute;culos multip&aacute;gina<br />insertando la etiqueta [pagebreak]<br />donde desees poner un corte.)</span>");
define("_AM_SB_ARTCOLNAME","Nombre de columna");
define("_AM_SB_ARTCREATED","Creado");
define("_AM_SB_ARTCREATEDOK","&iexcl;El art&iacute;culo ha sido creado correctamente!");
define("_AM_SB_ARTHEADLINE","Encabezado");
define("_AM_SB_ARTID","Id");
define("_AM_SB_ARTISDELETED","&iexcl;El art&iacute;culo ha sido borrado correctamente!");
define("_AM_SB_ARTISOFF","El art&iacute;culo est&aacute; fuera de l&iacute;nea");
define("_AM_SB_ARTISON","El art&iacute;culo est&aacute; en l&iacute;nea");
define("_AM_SB_ARTISSUB","El art&iacute;culo a&uacute;n no est&aacute; aprobado");
define("_AM_SB_ARTLEAD","P&aacute;rrafo inicial<span style='font-size: xx-small; font-weight: normal; display: block;'>(Primer p&aacute;rrafo del art&iacute;culo.)</span>");
define("_AM_SB_ARTMODIFIED","&iexcl;El art&iacute;culo ha sido modificado correctamente!");
define("_AM_SB_ARTNOTCREATED","Disculpe. No ha sido posible crear el art&iacute;culo.");
define("_AM_SB_ARTNOTUPDATED","Disculpe. No ha sido posible actualizar el art&iacute;culo.");
define("_AM_SB_ARTS","Art&iacute;culos");
define("_AM_SB_ARTSTEXT","Esta lista muestra los art&iacute;culos publicados presentes en el m&oacute;dulo, tanto en l&iacute;nea como offline.");
define("_AM_SB_ARTTEASER","Presentaci&oacute;n de art&iacute;culo <span style='font-size: xx-small; font-weight: normal; display: block;'>(P&aacute;rrafo que aparecer&aacute; en las p&aacute;ginas &iacute;ndice.)</span>");
define("_AM_SB_AUTHART","Autorizar publicaci&oacute;n");
define("_AM_SB_AUTHOR","Autor");
define("_AM_SB_AUTHORIZE","Autorizar");
define("_AM_SB_AUTOTEASER","Hacer autom&aacute;ticamente el teaser<br />del art&iacute;culo?:");
define("_AM_SB_AUTOTEASERAMOUNT","N&uacute;mero de caracteres a usar en el<br />teaser autom&aacute;tico:");
define("_AM_SB_BACK2IDX","Cancelado. Regresando al &iacute;ndice");
define("_AM_SB_BLOCK"," Agregar al bloque de art&iacute;culos?");
define("_AM_SB_BLOCKS","Bloques");
define("_AM_SB_BREAKS"," Usar conversion linebreak?");
define("_AM_SB_BY","Por ");
define("_AM_SB_CANCEL","Cancelar");
define("_AM_SB_CLEAR","Limpiar");
define("_AM_SB_COLCREATED","La nueva columna ha sido creada y guardada! Ahora por favor configure los permisos.");
define("_AM_SB_COLDESCRIPT","Descripci&oacute;n de Columna");
define("_AM_SB_COLIMAGE","Imagen de la columna");
define("_AM_SB_COLIMAGEUPLOAD"," Subir imagen para la columna");
define("_AM_SB_COLISDELETED","La %s Columna %s ha %n sido borrada %s");
define("_AM_SB_COLMODIFIED","La columna escogida ha sido modificada y guardada!");
define("_AM_SB_COLNAME","Nombre de la columna");
define("_AM_SB_COLPERMS","Permisos");
define("_AM_SB_COLPOSIT","Posici&oacute;n de la columna");
define("_AM_SB_COLS","Columnas");
define("_AM_SB_COLSHEADER","Administraci&oacute;n de m&oacute;dulo de columna");
define("_AM_SB_COLSTEXT","Esta lista muestra las columnas que existen actualmente en el m&oacute;dulo.");
define("_AM_SB_CREATE","Crear");
define("_AM_SB_CREATEART","Crear art&iacute;culo");
define("_AM_SB_CREATECOL","Crear columna");
define("_AM_SB_CREATINGART"," > Creando nuevo art&iacute;culo");
define("_AM_SB_CREATINGCOL"," > Creando nueva columna");
define("_AM_SB_CREATEIN","Crear en Categor&iacute;a:");
define("_AM_SB_DELETE","Borrar");
define("_AM_SB_DELETEART","Borrar art&iacute;culo");
define("_AM_SB_DELETECOL","Borrar columna");
define("_AM_SB_DELETESUBM","Borrar env&iacute;o");
define("_AM_SB_DELETETHISARTICLE","Borrar este art&iacute;culo?");
define("_AM_SB_DELETETHISCOL","Est&aacute; seguro de querer borrar esta columna?");
define("_AM_SB_DESCRIP","Descripci&oacute;n de columna");
define("_AM_SB_DOHTML","Habilitar etiquetas HTML");
define("_AM_SB_DOSMILEY","Habilitar iconos de caritas");
define("_AM_SB_DOXCODE"," Habilitar c&oacute;digos XOOPS");
define("_AM_SB_EDITART","Editar art&iacute;culo");
define("_AM_SB_EDITCOL","Editar columna");
define("_AM_SB_EDITING"," > Editando '");
define("_AM_SB_EDITSUBM","Editar env&iacute;o");
define("_AM_SB_FILEEXISTS","Un archivo con el mismo nombre ya existe en el servidor. Por favor selecciona otro nombre.");
define("_AM_SB_GOMOD","Ir al m&oacute;dulo");
define("_AM_SB_HELP","Ayuda");
define("_AM_SB_HILITE","Resaltar bloques");
define("_AM_SB_ID","Id");
define("_AM_SB_IDXINTRO","Hoy, %s, el contenido de este m&oacute;dulo es el siguiente:");
define("_AM_SB_INDEX","&Iacute;ndice");
define("_AM_SB_INVENTORY","Lista de elementos");
define("_AM_SB_MODADMIN"," :: Gesti&oacute;n del m&oacute;dulo: ");
define("_AM_SB_MODART","Modificar un art&iacute;culo");
define("_AM_SB_MODCOL","Modificar una columna existente");
define("_AM_SB_MODCONTENT","Contenido del m&oacute;dulo");
define("_AM_SB_MODIFY","Modificar");
define("_AM_SB_MODIFYCOL","Modificar columna");
define("_AM_SB_MODIFYTHISCOL","Modificar &eacute;sta columna?");
define("_AM_SB_MODULEHEAD","Art&iacute;culos y columnas");
define("_AM_SB_NEEDONECOLUMN","Para crear un art&iacute;culo, primero debes crear una columna.");
define("_AM_SB_NEWART","Crear nuevo art&iacute;culo");
define("_AM_SB_NEWCOL","Crear columna");
define("_AM_SB_NO","No");
define("_AM_SB_NOARTS","No hay art&iacute;culos qu&eacute; mostrar");
define("_AM_SB_NOCOLS","No hay columnas qu&eacute; mostrar");
define("_AM_SB_NOCOLTOEDIT","No hay columnas para editar");
define("_AM_SB_NOHILITE","No hay columna resaltada");
define("_AM_SB_NOPERMSSET","No se pueden asignar permisos: &iexcl;Todav&iacute;a no has creado columnas!");
define("_AM_SB_NOSUBMISSYET","Actualmente no hay solicitudes de publicaci&oacute;n para aprobar.");
define("_AM_SB_NOTUPDATED","Error actualizando la base de datos!");
define("_AM_SB_OPTIONS","Opciones");
define("_AM_SB_OPTS","Configuraci&oacute;n");
define("_AM_SB_ORDERUPDATED","Columnas reordenadas correctamente");
define("_AM_SB_PERMS","Permisos");
define("_AM_SB_PERMSMNGMT","Manejo de permisos");
define("_AM_SB_PERMSNOTE","<div><b>NOTA:</b> Por favor aseg&uacute;rate de haber asignado correctamente los permisos de visualizaci&oacute;n aqu&iacute;. Recuerda que es posible que un usuario NO pueda ver los art&iacute;culos o los bloques si no le concedes tambi&eacute;n a su grupo los permisos de acceso al m&oacute;dulo. Para hacerlo, ve a <b>Administraci&oacute;n de sistema > Grupos</b>, elige el grupo apropiado y haz clic en las casillas pertinentes para dar acceso a sus miembros.</div>");
define("_AM_SB_REORDERCOL","Reordenar columnas");
define("_AM_SB_SELALL","Todos los art&iacute;culos");
define("_AM_SB_SELAPV","Art&iacute;culos aprobados");
define("_AM_SB_SELOFF","Art&iacute;culos inactivos");
define("_AM_SB_SELONL","Art&iacute;culos activos");
define("_AM_SB_SELSUB","Art&iacute;culos pendientes");
define("_AM_SB_SELECT_COLS","Elige qu&eacute; columnas puede ver cada grupo");
define("_AM_SB_SELECTSTATUS","Elige un estatus: ");
define("_AM_SB_SELECT_IMG","Seleccionar imagen de art&iacute;culo:");
define("_AM_SB_SHOWARTS","Art&iacute;culos");
define("_AM_SB_SHOWCOLS","Columnas");
define("_AM_SB_SHOWSUBMISSIONS","Art&iacute;culos en espera de autorizaci&oacute;n");
define("_AM_SB_SHWALL","Mostrando todos los art&iacute;culos");
define("_AM_SB_SHWAPV","Mostrando los art&iacute;culos aprobados");
define("_AM_SB_SHWOFF","Mostrando los art&iacute;culos inactivos");
define("_AM_SB_SHWONL","Mostrando los art&iacute;culos activos");
define("_AM_SB_SHWSUB","Mostrando los art&iacute;culos pendientes");
define("_AM_SB_STATUS","Status");
define("_AM_SB_SUBS","Art&iacute;culos > Autorizando '");
define("_AM_SB_SUBTEXT","Esta lista muestra los art&iacute;culos enviados por autores para su revisi&oacute;n y autorizaci&oacute;n.");
define("_AM_SB_SUBMITS","Env&iacute;os");
define("_AM_SB_SUBMITSMNGMT","Manejo de env&iacute;os");
define("_AM_SB_SWITCHOFFLINE","&iquest;Poner art&iacute;culo offline?");
define("_AM_SB_TOTART","Art&iacute;culos publicados");
define("_AM_SB_TOTCOL","Columnas");
define("_AM_SB_TOTOFF","Art&iacute;culos off-line");
define("_AM_SB_TOTSUB","Art&iacute;culos propuestos");
define("_AM_SB_UPLOADIMAGE","Subir imagen de art&iacute;culo:");
define("_AM_SB_WEIGHT","Peso");
define("_AM_SB_YES","S&iacute;");
//add by domifara
define("_AM_SB_DATESUBNOCHANGE","no cambiar la fecha de este art&iacute;culo");
define("_AM_SB_NOTIFY","&iquest;Notificar al publicar?");
define("_AM_SB_POSTED","Publicado:");
define("_AM_SB_REORDERART","Reordenar art&iacute;culos (por peso)");
//1.06
define('_AM_SB_MODULEADMIN_MISSING','Error: The ModuleAdmin class is missing. Please install the ModuleAdmin Class into /Frameworks (see /docs/readme.txt)');
define("_AM_SB_NEED_APPROVAL","Need Approval:  <strong>%s</strong> ");