	
<?php 

	require "../conexion/conexion.php";
	class consulta{
		var $conn;
		var $conexion;
		function consulta(){		
			$this->conexion= new  Conexion();				
			$this->conn=$this->conexion->conectarse();
		}	
	
		function reportePdfUsuarios(){			
			$html="";
			$sql="select * from lugares";
			$rs=mysqli_query($this->conn,$sql);
			$i=0;

			$html=$html.'<div align="center">
			<div><table aling="left">
			<tr><td></td>
			<td></td>  
			<td> </td>
			</tr>
			<tr><td><img src="logo.jpg" alt="Example" width="50" height="50"></td>
			<td><table><tr><td> <H1>Universidad Tecnologica de El Salvador</H1></td>
</tr></table></td>  
			<td> </td>
			</tr>
	<tr>
	<td></td>
	<td><H3>TOUR UTEC</H3></td>
	<td></td>
	</tr>
	<tr>
	<td></td>
	<td><H5>Reporte de usuarios registrados en la Base de Datos.</H5></td>
	<td></td>
	</tr>
	</table>			
			
			</div>
			<br>
			
			<br /><br />			
			<table border="0.5px" bordercolor="#0000CC" bordercolordark="#FF0000">';	
			$html=$html.'<tr bgcolor="#FF0000">
			<td><font color="#FFFFFF">Codigo</font></td>
			<td><font color="#FFFFFF">Tipo</font></td>
			<td><font color="#FFFFFF">Nombre</font></td>
			<td><font color="#FFFFFF">Capacidad</font></td>
			<td><font color="#FFFFFF">Descripcion</font></td>
			<td><font color="#FFFFFF">Planta</font></td>
			<td><font color="#FFFFFF">Abreviatura</font></td>
			<td><font color="#FFFFFF">fecha_construccion</font></td>
			<td><font color="#FFFFFF">Codigo Sitio</font></td>
			<td><font color="#FFFFFF">Fecha Ingreso</font></td>
			<td><font color="#FFFFFF">Ubicacion</font></td></tr>';
			while ($row = mysqli_fetch_array($rs)){
				if($i%2==0){
					$html=  $html.'<tr bgcolor="#95B1CE">';
				}else{
					$html=$html.'<tr>';
				}
				$html = $html.'<td>';
				$html = $html. $row["idlugar"];
				$html = $html.'</td><td>';
				$html = $html. $row["tipo"];
				$html = $html.'</td><td>';
				$html = $html. $row["nombre"];
				$html = $html.'</td><td>';
				$html = $html. $row["capacidad"];
				$html = $html.'</td><td>';
				$html = $html. $row["descripcion"];
				$html = $html.'</td><td>';
				$html = $html. $row["planta"];
				$html = $html.'</td><td>';
				$html = $html. $row["abreviatura"];
				$html = $html.'</td><td>';	
				$html = $html. $row["fecha_construccion"];
				$html = $html.'</td><td>';
				$html = $html. $row["idsitio"];
				$html = $html.'</td><td>';
				$html = $html. $row["fecha_b"];
				$html = $html.'</td><td>';
				$html = $html. $row["ubicacion"];
				$html = $html.'</td></tr>';	
				$i++;
			}			
			$html=$html.'</table></div>';			
     		 return ($html);
		}
		//-----------------------------------------------------------------------------------------------------------------------		
	}

?>

