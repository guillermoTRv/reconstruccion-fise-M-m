<?php
    $u=urls_amigables($unidad);
    $t=urls_amigables($tema);

    while($registro = mysqli_fetch_array($query)){
	$id_ficha      =$registro['id_fichamat'];
	$titulo_ficha  =$registro['titulo'];
	$texto_ficha   =$registro['descripcion_texto'];
	$link_ficha    =$registro['link'];
	$tipo_ficha    =$registro['tipo_material'];
	$condideracion_ficha=$registro['consideracion'];
	$id_usuario    =$registro['id_user'];
	$fecha_c       =$registro['fecha_registro_fichamat'];
    $fecha         = substr($fecha_c, 0, 10);
	$votos_ficha   =$registro['voto'];
	
	$consulta_usuario="SELECT id_user,name_user FROM usuariosfise WHERE id_user='$id_usuario'";
	$ejecutarc=$conexion->query($consulta_usuario);
	$nm=$ejecutarc->fetch_array();
	$nombre=$nm[1];

	echo "

	
    <div class='panel panel-default pan'>
         <div class='panel-body'>
            <p>$titulo_ficha</p>
                            
            <div class='module line-clamp'><p>$texto_ficha</p></div>";
                                
     if ($link_ficha!='') {
             echo "<span class='glyphicon glyphicon-send'></span><a class='jun' target='_blank' href=$link_ficha> $link_ficha</a>";
         }                   
    echo    
    "</div>
    <div class='panel-footer'>
    <div class='row'>
        <div class='col-md-8'>";
            if ($unidad!='' && $tema=='' && $by=='' && $cons=='' && $prf=='')  {
            	echo "
            		<a class='infomat' href='?un=$u&cont=$id_ficha'><span class='glyphicon glyphicon-play'></span> Ver | $tipo_ficha - $condideracion_ficha $nombre $fecha &nbsp;&nbsp;&nbsp; Votos:$votos_ficha
            		</a>
            	";
            }
            if ($unidad!='' && $tema!='' && $by=='' && $cons=='' && $prf=='')  {
                echo "
                        <a class='infomat' href='?un=$u&tm=$t&cont=$id_ficha'><span class='glyphicon glyphicon-play'></span> Ver | $tipo_ficha - $condideracion_ficha $nombre $fecha &nbsp;&nbsp;&nbsp; Votos:$votos_ficha
                    </a>
                ";
            }
            if ($unidad!='' && $tema==''  && $by!='' && $cons=='' && $prf=='') {
            	echo "
            		<a class='infomat' href='?un=$u&by=$by&cont=$id_ficha'><span class='glyphicon glyphicon-play'></span> Ver | $tipo_ficha - $condideracion_ficha $nombre $fecha &nbsp;&nbsp;&nbsp; Votos:$votos_ficha
            		</a>
            	";
            }
            if ($unidad!='' && $tema=='' && $by=='' && $cons!='' && $prf=='') {
            	echo "
            		<a class='infomat' href='?un=$u&cons=$cons&cont=$id_ficha'><span class='glyphicon glyphicon-play'></span> Ver | $tipo_ficha - $condideracion_ficha $nombre $fecha &nbsp;&nbsp;&nbsp; Votos:$votos_ficha
            		</a>
            	";
            }
            if ($unidad!='' && $tema=='' && $by=='' && $cons=='' && $prf!='') {
            	echo "
            		<a class='infomat' href='?un=$u&prf=$prf&cont=$id_ficha'><span class='glyphicon glyphicon-play'></span> Ver | $tipo_ficha - $condideracion_ficha $nombre $fecha &nbsp;&nbsp;&nbsp; Votos:$votos_ficha
            		</a>
            	";
            }
    echo "</div>
    </div>
    </div>
    </div>

	";
    }
 ?>