
<!-- Función validación de fomulario -->
 <script>
               function comprobarPassword() {
		         var verificarLargo="FAIL";
		         var verificarIgual="FAIL";
		         var contra1 = document.getElementById("password");
		         var contra2 = document.getElementById("password2");
		         var aviso = document.getElementById("aviso");
		         aviso.innerHTML = ""
		         if (contra1.value.length >= 6) {
		            verificarLargo = "OK"
		            }
		         else {
		            texto = "La contraseña debe tener más de 6 caracteres alfanuméricos.<br/>"  
		            aviso.innerHTML += texto
		            }
		         if (contra1.value == contra2.value) {
		            verificarIgual = "OK"
		            }
		         else {
		            texto = "Las contraseñas de confirmación no coinciden .<br/>"  
		            aviso.innerHTML += texto
		            }
		         if (verificarLargo == "FAIL" || verificarIgual == "FAIL") {
		            return false
		            }
		         }
				function restaurar() {
			         var aviso = document.getElementById("aviso");
			         aviso.innerHTML = ""
			         aviso.style.color = "red";
		         }
		        </script>




		 <form class="register" action="http://digital.revistarelax.com/register.php" method="post" 
		 enctype="multipart/form-data" name="formulario"
		 onsubmit="return comprobarPassword()">

             

		  	<input type="hidden" name="action"  value="checkdata"/> 
		  	    <input type="hidden" name="admin" value="0"/>
			
		   <input type="text" name="xxx"  id="xxx"/>


			<fieldset class="row1">
		        <legend>Datos de Acceso</legend>

		        <p>
		            <label>E-Mail *</label>
		                <input type="email" name="email" required autofocus maxlength="50" tabindex="1" id="email" 
		                placeholder="Email Vigente" tyle="text-transform::lowercase;" onKeyUp="javascript:this.value=this.value.toLowerCase();"/> 
		        </p>
				
				<p>
		            <label>Contraseña *</label>
		                <input type="password" name="password"  id="password" required tabindex="2"  placeholder="Crear contraseña" 
		                style="text-transform::lowercase;" onKeyUp="javascript:this.value=this.value.toLowerCase();" onfocus="restaurar()"/>
		                <label>Confirmar Contraseña *</label>
		                <input type="password" name="password2"  id="password2" required tabindex="3"  placeholder="Repetir contraseña"
		                 style="text-transform::lowercase;" onKeyUp="javascript:this.value=this.value.toLowerCase();" onfocus="restaurar() "/>
		          <p id="aviso"></p>
		        </p>
		      

		        <p>
		            <label>Usuario *</label>
		                <input type="text" name="usuario" id="usuario" required tabindex="4"  placeholder="Crear usuario" style="text-transform::lowercase;" onKeyUp="javascript:this.value=this.value.toLowerCase();"/>    		                
		        </p>
		    </fieldset>
		            
			<fieldset class="row2">
		        <legend>Datos personales</legend>
		        <p>
		            <label>Nombre *</label>
		            		<select class="pref" name="prefijo" required tabindex="5" id="prefijo"> 
		                    <option value=" "></option>
		                    <option value="LIC. ">LIC.</option>
		                    <option value="ING. ">ING.</option>
		                    <option value="DR. ">DR.</option>
		                    <option value="DRA. ">DRA.</option>
		                    <option value="PSIC. ">PSIC.</option>
		                    <option value="Mtro. ">Mtro.</option>
		            </select>
		            <input type="text" name="nombre" tabindex="6" class="long" required  id="nombre"/>
		        </p>
		        <p>
		            <label>Teléfono </label>
		                <input type="number" name="telefono" id="telefono" tabindex="7" maxlength="10" placeholder="Ej. 5556778899" onBlur="MM_validateForm('tel_local','','NisNum');return document.MM_returnValue" maxlength="10"/>
		        </p>
		        <p>
		            <label>Género </label>
		            	<label class="gender">F:</label>
		                <input type="radio" name="genero" value="F" tabindex="8" id="genero-f"/>
		           		<label class="gender">M:</label>
		                <input type="radio" name="genero" value="M" tabindex="9" id="genero-m" />
		            
		        </p>
		        <p>
		            <label>Cumpleaños </label>
		                	<select class="date" name="dia"tabindex="10" id="dia">
		                    	<option value="01">01</option>
		                        <option value="02">02</option>
		                        <option value="03">03</option>
		                        <option value="04">04</option>
		                        <option value="05">05</option>
		                        <option value="06">06</option>
		                        <option value="07">07</option>
		                        <option value="08">08</option>
		                        <option value="09">09</option>
		                        <option value="10">10</option>
		                        <option value="11">11</option>
		                        <option value="12">12</option>
		                        <option value="13">13</option>
		                        <option value="14">14</option>
		                        <option value="15">15</option>
		                        <option value="16">16</option>
		                        <option value="17">17</option>
		                        <option value="18">18</option>
		                        <option value="19">19</option>
		                        <option value="20">20</option>
		                        <option value="21">21</option>
		                        <option value="22">22</option>
		                        <option value="23">23</option>
		                        <option value="24">24</option>
		                        <option value="25">25</option>
		                        <option value="26">26</option>
		                        <option value="27">27</option>
		                        <option value="28">28</option>
		                        <option value="29">29</option>
		                        <option value="30">30</option>
		                        <option value="31">31</option>
		                    </select>
		                    <select class="mes" name="mes" tabindex="11" id="mes">
		                        <option value="1">Enero</option>
		                        <option value="2">Febrero</option>
		                        <option value="3">Marzo</option>
		                        <option value="4">Abril</option>
		                        <option value="5">Mayo</option>
		                        <option value="6">Junio</option>
		                        <option value="7">Julio</option>
		                        <option value="8">Agosto</option>
		                        <option value="9">Septiembre</option>
		                        <option value="10">Octubre</option>
		                        <option value="11">Noviembre</option>
		                        <option value="12">Diciembre</option>
		                    </select>
		                    <input class="year" name="anno" type="text" tabindex="12" size="4" maxlength="4" value="19" />
		                    <p>ej. 01/enero/1976</p>
		        </p>
		    </fieldset>
		            
		    <fieldset class="row3">
		        <legend>Datos Adicionales</legend>
		        	<p>
		            	<label>Especialidad *</label>
		                	<input type="text"  name="especialidad" required class="long" tabindex="13" id="especialidad"/>
		        	</p>
		       		<p>
		            	<label>Cédula Prof. *</label>
		                	<input type="number" name="cedula" required class="long" tabindex="14" id="cedula" />
		        	</p>
		            
		            <div class="infobox"><h4>IMPORTANTE</h4>
		                    <p>La suscripción es gratuita y esta sujeta a validación por parte
		                    de Atenea Pharma. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque nemo repudiandae, expedita amet ad mollitia, aperiam ipsum. </p>
		            </div>
		    </fieldset>

		    
		    
		    <fieldset class="row4">
		        <legend>Términos y Avisos</legend>
		            <p class="terminos">
		                <input type="checkbox" name="terminos" value="SI" tabindex="15" required />
		                *  Acepto los <a href="#">Términos y condiciones de uso.</a>
		            </p>
		            <p>
		                <input type="checkbox" name="boletines" value="SI" tabindex="16" />
		                Acepto recibir el boletín electrónico.
		            </p>
		            <p>
		                <input type="checkbox" name="declaracion" value="SI" tabindex="17"  />
		                Declaro que soy Profesionista y cuento una Ced. Profesional
		            </p>


		            <div class="forsend">
		            	<div class="oblig">* Campos obligatorios</div>	  
		            	<div><button class="boton" tabindex="18" >Registrarse &raquo;&raquo;</button></div>
		    			
		    		</div> 
		    </fieldset>

		 


		</form>
