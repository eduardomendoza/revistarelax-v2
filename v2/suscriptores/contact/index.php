<!--CODIGO PARA CAPTCHA-->
<script>
            <!--
               function llenarDIV(){
                  var obj = document.getElementById('newcap');
                  obj.innerHTML = '<img src="contact/captcha.php" align="baseline"><a href="#" onClick="llenarDIV()"> Generar Otro</a>';
               }
            //-->
</script>

<div id="myform">

        <!--<h2><span class="fontawesome-comments"></span>Formulario de Contacto</h2>-->

        <form action="contact/send2014.php" method="POST">
        <input name="action" type="hidden" value="checkdata">

            <fieldset>

                <p>
                <label for="nombre">Nombre: </label>
                <input class="align-right" type="text" id="nombre" name="nombre" autofocus required tabindex="1" />
                </p>

                <p>
                <label for="email">E-Mail: </label>
                <input class="align-right" type="email" id="email" name="emailclient"
                    style="text-transform::lowercase;" onKeyUp="javascript:this.value=this.value.toLowerCase();" required tabindex="2">
                </p>

                <p>
                <label for="empresa">Empresa: </label>
                <input class="align-right" type="text" class="input-mini" id="empresa" name="empresa" tabindex="3" />
                </p>

                <p>
                <label for="telefono">Telefono: </label>
                <input class="align-right" type="text" id="telefono"  name="telefono" class="input-mini" placeholder="10 Digitos" maxlength="10"
                onBlur="MM_validateForm('tel_local','','NisNum');return document.MM_returnValue"  tabindex="4" />
                </p>
                
                <p>
                <label for="asunto">Asunto:  </label>
                <select class="align-right" name="asunto" id="asunto" name="asunto"  size="1"  tabindex="5">
                                                    <option selected>Información</option> 
                                                    <option>Cotización</option>
                                                    <option>Publicidad en Web</option>
                                                    <option>Otro</option>
                                                    </select>

                </p>
                <label for="mensaje">Mensaje: </label>
                <textarea class="align-right" name="comentarios" id="comentarios" 
                           cols="38" rows="4" required tabindex="6"></textarea></p>

                    <div class="captcha">
                        Codigo validador: 
                        <input type ="text" name="captcha_reqcap" maxlength="4" required tabindex="7" />
                        <div id="newcap">
                            <img src="contact/captcha.php" align="baseline">
                            <a href="#" onClick="llenarDIV()">Generar otro</a>
                        </div>
                    </div>    


                <p><input type="submit" value="Enviar" class="btn btn-lightblue pull-right"></p>

            </fieldset>

        </form>

    </div> <!-- end login -->
