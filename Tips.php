<html>
    <head>
        <title>Tips y Consejos</title>
        <link href="css/Estilo.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, user-scalable=no,
        initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">   
    </head>
    <body>
        <div id="tituloTips"><h1>TIPS Y CONSEJOS</h1></div>
        <form action="Tips.php" method="POST">
            <fieldset><legend>&nbsp;Datos&nbsp;</legend><br>
                <label>Nombre :</label>
                <input type="text" name="txtNombre">&nbsp;&nbsp;&nbsp;&nbsp;
                <label>Edad :</label>
                <input type="text" name="txtEdad">&nbsp;&nbsp;&nbsp;&nbsp;
                <label>&Aacute;rea :</label>
                <select name="txtarea" >
                    <option value="Cardiologia">Cardiologia</option>
                    <option value="Neurocirugia">Neurocirugia</option>
                    <option value="Pediatria">Pediatria</option>
                    <option value="Ginecologia">Ginecologia</option>
                    <option value="Oftalmologia">Oftalmologia</option>
                    <option value="Otorrinolaringologia">Otorrinolaringologia</option>
                    <option value="Dermatologia">Dermatologia</option>
                    <option value="Fisioterapia">Fisioterapia</option>
                    <option value="Oncologia">Oncologia</option>
                    <option value="EsSalud-Gestante">EsSalud-Gestante</option>
                </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" name="btnProcesar" value="PROCESAR"><br><br>
            </fieldset>
        </form>
        <p align="center">OBS: Por favor, escoga el &aacute;rea de su inter&eacute;s.</p>
        <?php

        if(isset($_POST['txtNombre'])) {
            $nombre = $_POST["txtNombre"];
            $edad = $_POST["txtEdad"];
            $area = $_POST["txtarea"];
            echo "<br><br><br><br><br><br><br><br><br>";
            echo "Hola $nombre , te queremos dar la bienvenida a nuestra página de Tips y Consultas. Espero te sean &uacute;tiles.<br> <br> ";
            echo "Requerimos saber tu edad para poder darte la mejor recomendaci&oacute;n posible acorde a tu edad. Gracias<br> <br> ";
            echo "Recomendaciones para el &aacute;rea de $area : <br><br>";

            switch ($area) {
                case 'Cardiologia':
                    echo "<ul>
                    <li><b>1. Programa un chequeo anual :</b>
                    Como ya te lo mencionamos, tu corazón está en tus manos. Todos los años debes programar un control para verificar tus niveles de presión arterial, colesterol y glucosa. Pídele a tu médico de cabecera o cardiólogo que te ayude a mantener un peso saludable y asegúrate de seguir todas sus recomendaciones, que incluyen tomar los medicamentos recetados según las indicaciones.
                    </li><br>
                    <li><b>2. Realiza ejercicios :</b>
                    Lo recomendable es que te ejercites durante 30 minutos todos los días. Si eres una persona sedentaria, puedes comenzar de a pocos. Por ejemplo, camina o trota durante al menos 15 minutos. Aumenta tu actividad por cinco minutos cada semana hasta que puedas realizar un mínimo de media hora.
                    </li><br>
                    Asimismo, recuerda que permanecer sentado durante largos períodos de tiempo es perjudicial para tu salud, sin importar cuánto ejercicio hagas. Estas son malas noticias para las personas que deben trabajar sentados todo el día. Estar sentado durante largos períodos de tiempo (especialmente al viajar) aumenta tu riesgo de trombosis venosa profunda (un coágulo de sangre).
                    <br>
                    <li><b>3. Mantén un peso saludable :</b>
                    El sobrepeso aumenta el riesgo de sufrir de una enfermedad cardíaca, accidente cerebrovascular y diabetes. Para lograr una pérdida de peso constante, tómalo con calma. Si modificas tu dieta y empiezas a consumir de 200 a 300 calorías menos por día de lo que normalmente consumirías y haces ejercicio por lo menos 30 minutos, podrás lograr una pérdida de peso constante y estable.
                    </li><br>
                    <li><b>4. No consumas alcohol y bebe más agua :</b>
                    Demasiado alcohol puede causar presión arterial alta, ritmos cardíacos anormales y daño al músculo cardíaco. Lleva una botella de agua donde quiera que vayas. Te mantendrá hidratado en todo momento, tan solo recuerda no tomar bebidas alta en azúcares.
                    </li>
                    </ul>";
                    break;
                
                case 'Neurocirugia':
                    echo "RE SOBRE PEDIATRIA.";
                    break;

                case 'Pediatria':
                    echo " <b>Estas son pautas que debe tener en cuenta al momento de acudir al area de Pediatria.</b>
                    <ul>
                    <li>Disponer de un programa de prescripción electrónica que cuente con límites de dosis y que proporcione alertas cuando se detecten dosis potencialmente incorrectas.
                    </li><br>
                    <li>Indicar el peso y la edad del niño en la prescripción.
                    </li><br>
                    <li>Confirmar el peso corporal real del paciente antes de hacer la prescripción.
                    </li><br> 
                    <li>Expresar las dosis en unidades de masa y por toma, no prescribir en volumen ni en unidades de forma farmacéutica.
                    </li><br>
                    <li>Efectuar una doble comprobación de los cálculos de los medicamentos de alto riesgo.
                    </li><br>
                    <li>Informar y educar a padres y cuidadores de forma verbal y escrita.
                    </li><br> 
                    <li>Ayudar y motivar a los padres y cuidadores para que tomen un rol activo en el tratamiento y para que aclaren sus dudas.
                    </li><br>
                    <li>Explicar a los padres y cuidadores con detalle la forma correcta de utilizar aquellos medicamentos que conllevan una cierta complejidad en la preparación o la administración.
                    </li><br> 
                    <li>Proporcionar herramientas a los padres y cuidadores para mejorar la adherencia terapéutica, tales como alarmas o aplicaciones móviles específicas.
                    </li><br>
                    <li>Utilizar correctamente los dispositivos y asegurarse de que son adecuados para pacientes pediátricos.
                    </li><br>
                    <li>Implementar sistemas de apoyo a la decisión clínica adecuados a pediatría.</li>";
                    break;

                case 'Ginecologia':
                    echo "Ahora te contaremos todo lo que debes saber antes de ir a tu cita:";
                    echo "<ul>
                        <li><b>1. Orinar:</b> por los nervios es probable que tengas ganas de orinar justo antes de concretar tu visita. <br>
                        Si puedes, aguanta un poco, ya que tu ginecólogo te podría solicitar una muestra de orina y no querrás esperar horas agachada sobre un tubito.</li>
                        <li><b>2. Depilación:</b> no debes depilarte demasiado antes de ir al ginecólogo.  Es natural querer estar bien preparada <br>
                        cuando sabes que alguien estará mirando de cerca tus partes íntimas. Pero a los médicos realmente no les importa. <br>
                         Recuerda que depilarte con cera puede terminar por irritar tu zona íntima y dificultar la detección de cualquier anormalidad.</li>
                        <li><b>3. Nada de mentiras:</b> mentir sobre tu vida sexual no te llevará a ninguna parte. Debes tener presente que un buen ginecólogo nunca te juzgará por eso.<br>
                        Contarle falsedades solo impedirá que te dé los mejores consejos para disfrutar de tu sexualidad de la forma más sana y plena.</li>
                        <li><b>4. Revisión de mamas:</b> el médico palpará tus pechos y axilas de forma circular para detectar quistes o problemas mamarios, bultos o alguna secreción anormal.<br> 
                        El ginecólogo te puede enseñar una técnica de auto exploración para que te revises tú misma en casa.</li>
                        <li><b>5. Papanicolau:</b> es un examen que toda mujer sexualmente activa debe hacerse cada año. Sirve para detectar posibles células cancerígenas y consiste en introducir <br>
                        pequeño cepillo dentro del cuello del útero o matriz para tomar una muestra de tejido que se analizará en el laboratorio.</li>
                        </ul>";

                case 'Oftalmologia':
                    echo "";
                    break;
                        
                case 'Otorrinolaringologia':
                    echo "";
                    break;     
 
                case 'Dermatologia':
                    echo "Tips durate tu visita :  <br>
                    <ul>
                    <li><b>ACUDE CON UNA PERSONA DE CONFIANZA.</b> Ir acompañado de una persona de confianza puede ser de
                    ayuda tanto para comunicar y recordar aspectos relevantes, como para contar con apoyo emocional.<br>
                    Es aconsejable que antes de la visita, decidáis qué papel tendrá esta persona en la consulta.<br><br>
                    <li><b>TOMA NOTA.</b> Anota las recomendaciones de tu dermatólogo para poder repasarlas en cualquier
                    momento y/o compartirlas con otros especialistas que puedan darte una segunda opinión.<br> Recuerda que
                    siempre puedes pedir a alguien que te acompañe y se ocupe de tomar nota, si lo necesitas.<br><br>
                    <li><b>PREGUNTA.</b> Si tienes cualquier duda o no entiendes el vocabulario que utiliza el doctor, pregunta y pídele
                    que utilice un lenguaje más simple.<br><br>
                    <li><b>PIDE EL MEJOR TRATAMIENTO PARA TI.</b> Si sientes que el tratamiento que estás realizando no está
                    dando resultados, consúltalo con tu dermatólogo. Aunque todos los tratamientos son efectivos para<br>
                    mucha gente, ninguno lo es para todo el mundo y la respuesta a cada uno varía de una persona a otra.</li>";
                    break;
                        
                case 'Fisioterapia':
                    echo "";
                    break; 

                case 'Oncologia':
                    echo "";
                    break;
                        
                case 'EsSalud-Gestante':
                    echo "<h1>ANTES DEL EMBARAZO</h1>
                    Acude a tu centro asistencial para realizarte descarte de: <br>
                    <ul>
                    <li>Diabetes</li>
                    <li>VIH</li>
                    <li>Hepatitis B</li>
                    <li>Anemia</li>
                    <li>Cáncer de cuello uterino (Papanicolaou)</li>
                    </ul><br>
                    <h1>DURANTE EL EMBARAZO:</h1>
                    <ul>
                    <li>Acude a una evaluaciòn nutricional.</li>
                    <li>Realízate todas la ecografías.</li>
                    <li>Vacúnate (contra el tétano, influenza, fiebre amarilla).</li>
                    <li>Organiza un plan de parto.</li>
                    <li>Cáncer de cuello uterino (Papanicolaou)</li>
                    <li>Consume suplemento de hierro y ácido fólico (previa indicación del médico)</li>
                    </ul><br>
                    <h1>DESPUES DEL EMBARAZO</h1>
                    <ul>
                    <li>Consume alimentos saludables, ricos en hierro.</li>
                    <li>Recibe orientación sobre métodos anticonceptivos seguros.</li>
                    <li>Acude rigurosamente a los controles médicos.</li>
                    </ul>";
                    break;                     
                    
            }
            
            
            
        }
        ?>  
    </body>
    
</html>

