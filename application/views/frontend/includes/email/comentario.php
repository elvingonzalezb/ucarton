	<style type="text/css">
	.tabla{width:100%;}
	.tabla thead td{background:#738e39;color:white;padding:5px;}
	.tabla tbody td{border-bottom:#c0c0c0 solid 1px;border-left:#c0c0c0 solid 1px;padding:5px;}	
	.tabla tbody td:first-child{border:none;border-left:#c0c0c0 solid 1px;border-bottom:#c0c0c0 solid 1px;}		
	.tabla tbody td:last-child{border:none;border-left:#c0c0c0 solid 1px;border-right:#c0c0c0 solid 1px;border-bottom:#c0c0c0 solid 1px;}			
	</style>  

            <table class="tabla" cellpadding="10" cellspacing="0" border="1" width="100%">
            <tr>
                <td colspan="2">El articulo: <?php echo $articulo;?> recibio un comentario.</td>
            </tr>
            <tr>
            	<td><strong>Fecha:</strong></td><td><?php echo $datos['comentario_fecha'];?></td>
            </tr>
            <tr>
            	<td><strong>Nombre:</strong></td><td><?php echo $datos['comentario_nombre']; ?></td>            	
            </tr>
            <tr>
                <td><strong>Correo:</strong></td><td><?php echo $datos['comentario_email']; ?></td>                
            </tr>                   
            <tr>
                <td colspan="2"><strong>COMENTARIO:</strong></td>
            </tr> 
            <tr>
                <td colspan="2"><?php echo $datos['comentario_texto']; ?></td>                
            </tr>                                                                                    
            </table>
