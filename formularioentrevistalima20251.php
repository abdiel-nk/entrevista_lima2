<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <meta property="og:url"           content="http://upgsalud.posgradoupeu.edu.pe/entrevista.php" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Entrevista" />
  <meta property="og:description"   content="Bienvenido a la entrevista del proceso de admisión 2025 - I" />
  <meta property="og:image"         content="" />
<title>Lima - Admisión 2025 - 1</title>


<!-- -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


	<style>
        *{
            font-family: "Canela",Helvetica,Arial,Lucida,sans-serif;
        }
        .fondoDiv{
            padding:10px;
            margin-top:20px;
            color: white;
            background-color: #000000;
            border-radius: 20px 20px 20px 20px;
            -moz-border-radius: 20px 20px 20px 20px;
            -webkit-border-radius: 20px 20px 20px 20px;
            border: 0px solid #000000;
            -webkit-box-shadow: 10px 14px 27px 13px rgba(0,0,0,0.75);
            -moz-box-shadow: 10px 14px 27px 13px rgba(0,0,0,0.75);
            box-shadow: 10px 14px 27px 13px rgba(0,0,0,0.75);
        }
        
        img{
            
            border: 0px solid #232a44;
            background-color: #232a44 ;
        }
        .boton{
            margin-top:35px;
            margin-left:10px;
        }
        .h1willy {
            text-shadow: 2px 2px 3px #ececec;
            font-size: 40px;
            font-weight: 700;
            font-family: 'Canela', Helvetica, Arial, Lucida, sans-serif;
            color: #2c396b !important;
        }
        .tooltip-inner {
            max-width: 350px;
            width: 350px;
        }
        .separadorwilly{
            border-radius: 15px 15px 15px 15px;
            -moz-border-radius: 15px 15px 15px 15px;
            -webkit-border-radius: 15px 15px 15px 15px;
            border: 10px solid #ececec;

        }
        .m-3.row.text-left{
            font-size: 20px;
        }
        .input-group.row{
            display: flex;
            
            width: 100%;
            justify-content: center;
        }
        .card-footer.bg-transparent{
            margin: 2rem;
        }
        #scor{
            background: white;
            border:none;
            font-size: 20px;
            margin-left: 0rem;
            width: 30px;
/*            pointer-events: none;*/
        }

        .col-sm-10{
            display: flex;
            align-items: center;
        }
        .valid-feedback{
            width: 10%;
        }



	</style>
</head>

<body style="background-color: #ececec;">
<!-- Your share button code -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v7.0"></script>


<header>
    <div class="navbar navbar-dark shadow-sm" style="background-color: #222b45; font-size: 0.92857rem;">
        <div class="container d-flex justify-content-between">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <img src="https://raw.githubusercontent.com/abdiel-nk/Public-SVG/refs/heads/main/img_upeu_posgrado_white_bc.png" width="220" ></img>
                <strong></strong>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>          
            </button>
        </div>
    </div>
</header>



<div class="container">
    <div class="row text-center">
        <div class="card col-sm-12 m-0 p-0 separadorwilly">
            <div class="card-header">
                <h3 class="h1willy">Formulario de entrevista: UPG Ciencias de la Salud</h3>
                <center><h3 class="my-0 font-weight-normal h1willy">Sede - Lima</h3></center>
            </div>
            <div class="card-body">
                <p class="m-3 text-left">
                    El candidato a estudiar un programa de la UPG Ciencias de la Salud es el licenciado que muestra interés en su 
                    perfeccionamiento profesional en el área de la disciplina.  
                </p>
               
                <form method="post" class="needs-validation"  action="guardar_evidencia2025-1.php" enctype="multipart/form-data" novalidate>



                   <!-- Aquí va los datos del entrevistador --> 

                    <div class="m-3 row text-left"><b>Datos del entrevistador </b></div> 
                    <div class="form-group row col-sm-12 col-md-12">
                        <label class="col-sm-2 col-form-label text-left"  for="validationCustom00">Nombres y Apellidos:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="validationCustom00" minlength="2" name="Entrevistador"  required>
                             <div class="valid-feedback">
                                Correcto!
                            </div>
                            <div class=" invalid-feedback">
                                Ingrese el nombre correcto.
                            </div>
                        </div>
                    </div> 


                    
                    <div class="m-3 row text-left"><b>I. Datos del entrevistado</b></div>
                    <div class="form-group row col-sm-12 col-md-12">
                        <label class="col-sm-2 col-form-label text-left" for="validationCustom00">Programa:</label>
                        <div class="col-sm-10">
                            <select class="custom-select" id="form-select" name="programa" id="validationCustom00" required>
                               <option value="Seleccione un programa">Seleccione una opción</option>

                                <!-- <option value="Maestría en Nutrición Humana con Mención en Alimentación Basada en Plantas, Semipresencial">Maestría en Nutrición Humana con Mención en Alimentación Basada en Plantas, Semipresencial</option> -->
                                
                                <option value="Maestría en Salud Pública con Mención en Salud Global y Promoción de la Salud, A Distancia">Maestría en Salud Pública con Mención en Salud Global y Promoción de la Salud, A Distancia</option>
                        
                                <option value="Posgrado de Maestría en Enfermería con Mención en Administración y Gestión, Semipresencial">Posgrado de Maestría en Enfermería con Mención en Administración y Gestión, Semipresencial</option>

                                <option value="Posgrado de Maestría en Salud Publica Mención: Gestión de los Servicios de Salud, A Distancia">Posgrado de Maestría en Salud Publica Mención: Gestión de los Servicios de Salud, A Distancia</option>

                                                                
                                <option value="Posgrado de Segunda Especialidad de Enfermería en Emergencias y Desastres, Semipresencial">Posgrado de Segunda Especialidad de Enfermería en Emergencias y Desastres, Semipresencial</option>
                                <option value="Posgrado de Segunda Especialidad de Enfermería en Gineco Obstetricia, Semipresencial">Posgrado de Segunda Especialidad de Enfermería en Gineco Obstetricia, Semipresencial</option>
                                <option value="Posgrado de Segunda Especialidad de Enfermería en Oncología, Semipresencial">Posgrado de Segunda Especialidad de Enfermería en Oncología, Semipresencial</option>
                                <option value="Posgrado de Segunda Especialidad en Enfermería en Administración y Gestión, Semipresencial">Posgrado de Segunda Especialidad en Enfermería en Administración y Gestión, Semipresencial</option>
                                <option value="Posgrado de Segunda Especialidad en Enfermería en Centro Quirúrgico, Semipresencial">Posgrado de Segunda Especialidad en Enfermería en Centro Quirúrgico, Semipresencial </option>
                                <option value="Posgrado de Segunda Especialidad en Enfermería en Cuidados Intensivos Neonatales, Semipresencial">Posgrado de Segunda Especialidad en Enfermería en Cuidados Intensivos Neonatales, Semipresencial</option>
                                <option value="Posgrado de Segunda Especialidad en Enfermería en Cuidados Intensivos Pediátricos, Semipresencial">Posgrado de Segunda Especialidad en Enfermería en Cuidados Intensivos Pediátricos, Semipresencial</option>
                                <option value="Posgrado de Segunda Especialidad en Enfermería en Cuidados Quirúrgicos, Semipresencial">Posgrado de Segunda Especialidad en Enfermería en Cuidados Quirúrgicos, Semipresencial</option>
                                <option value="Posgrado de Segunda Especialidad en Enfermería en Neurología y Neurocirugía, Semipresencial">Posgrado de Segunda Especialidad en Enfermería en Neurología y Neurocirugía, Semipresencial</option>
                                
                                <option value="Segunda Especialidad de Enfermería en Cuidado de la Persona con Diabetes con Mención en Educación en Diabetes - Sección Lima, Semipresencial">Segunda Especialidad de Enfermería en Cuidado de la Persona con Diabetes con Mención en Educación en Diabetes - Sección Lima, Semipresencial </option>
                                
                              
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row col-sm-12 col-md-12">
                        <label class="col-sm-2 col-form-label text-left" for="validationCustom01">Nombres:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="validationCustom01" minlength="2" name="Nombres" required>
                            <div class="valid-feedback">
                                Correcto!
                            </div>
                            <div class="invalid-feedback">
                                Ingrese el nombre correcto.
                            </div>
                        </div>
                    </div>
                    <div class="form-group row col-sm-12 col-md-12">
                        <label class="col-sm-2 col-form-label text-left" for="validationCustom02">Apellidos:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="validationCustom02" minlength="2" name="Apellidos" required>
                            <div class="valid-feedback">
                                Correcto!
                            </div>
                            <div class="invalid-feedback">
                                Ingrese el apellido correcto.
                            </div>
                        </div>
                    </div>
                    


                    <div class="m-3 row text-left"><b>II. Guía de entrevista de admisión</b></div>
                    <p class="m-3 text-left">
                        Marque el casillero que considere conveniente teniendo en cuenta la siguiente valoración: <br>
                        0 &rarr; Responde de una manera muy difusa o no responde<br>
                        1 &rarr; Responde pero no hay mucha seguridad o claridad<br>
                        2 &rarr; Responde con mucha claridad.  
                    </p>
                    <br>
                    <div class="m-3 row text-left"><b>Motivación para el estudio, conocimientos básicos e interés por desarrollar habilidades.</b></div>

                    <div class="form-group row col-sm-12 col-md-12">
                        <label id="changeData1" class="col-sm-12 col-md-8 col-form-label text-left" for="inlineRadio1">
                            ¿Qué le motiva a estudiar la Segunda Especialidad en Enfermería?
                        </label>
                            
                        <div class="col-sm-4 text-right">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="P1" id="inlineRadio1" value="0" required>
                                <label class="form-check-label" for="inlineRadio1">0</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="P1" id="inlineRadio1" value="1" required>
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="P1" id="inlineRadio1" value="2" required>
                                <label class="form-check-label" for="inlineRadio1">2</label>
                            </div>
                            <div class="valid-feedback">
                                Correcto!
                            </div>
                            <div class="invalid-feedback">
                                Seleccione uno.
                            </div>
                        </div>
                    </div>

                    <div class="form-group row col-sm-12 col-md-12">
                        <label  id="changeData2" class="col-sm-12 col-md-8 col-form-label text-left" for="inlineRadio2">
                            ¿Qué herramientas de gestión en el área asistencial conoce?
                        </label>
                            
                        <div class="col-sm-4 text-right">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="P2" id="inlineRadio2" value="0" required>
                                <label class="form-check-label" for="inlineRadio2">0</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="P2" id="inlineRadio2" value="1" required>
                                <label class="form-check-label" for="inlineRadio2">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="P2" id="inlineRadio2" value="2" required>
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="valid-feedback">
                                Correcto!
                            </div>
                            <div class="invalid-feedback">
                                Seleccione uno.
                            </div>
                        </div>
                    </div>

                    <div class="form-group row col-sm-12 col-md-12">
                        <label id="changeData3" class="col-sm-12 col-md-8 col-form-label text-left" for="inlineRadio3">
                            ¿Qué habilidad espera desarrollar, al formarse como Especialista en Enfermería?
                        </label>
                            
                        <div class="col-sm-4 text-right">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="P3" id="inlineRadio3" value="0" required>
                                <label class="form-check-label" for="inlineRadio3">0</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="P3" id="inlineRadio3" value="1" required>
                                <label class="form-check-label" for="inlineRadio3">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="P3" id="inlineRadio3" value="2" required>
                                <label class="form-check-label" for="inlineRadio3">2</label>
                            </div>
                            <div class="valid-feedback">
                                Correcto!
                            </div>
                            <div class="invalid-feedback">
                                Seleccione uno.
                            </div>
                        </div>
                    </div>

                    <div class="m-3 row text-left"><b>Interés por la investigación</b></div>

                    <div class="form-group row col-sm-12 col-md-12">
                        <label class="col-sm-12 col-md-8 col-form-label text-left" for="inlineRadio4">
                            ¿Qué buscadores de información en la web utiliza?
                        </label>
                            
                        <div class="col-sm-4 text-right">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="P4" id="inlineRadio4" value="0" required>
                                <label class="form-check-label" for="inlineRadio4">0</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="P4" id="inlineRadio4" value="1" required>
                                <label class="form-check-label" for="inlineRadio4">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="P4" id="inlineRadio4" value="2" required>
                                <label class="form-check-label" for="inlineRadio4">2</label>
                            </div>
                            <div class="valid-feedback">
                                Correcto!
                            </div>
                            <div class="invalid-feedback">
                                Seleccione uno.
                            </div>
                        </div>
                    </div>

                    <div class="form-group row col-sm-12 col-md-12">
                        <label class="col-sm-12 col-md-8 col-form-label text-left" for="inlineRadio5">
                            ¿Qué trabajo de investigación ha desarrollado en el pregrado?
                        </label>
                            
                        <div class="col-sm-4 text-right">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="P5" id="inlineRadio5" value="0" required>
                                <label class="form-check-label" for="inlineRadio5">0</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="P5" id="inlineRadio5" value="1" required>
                                <label class="form-check-label" for="inlineRadio5">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="P5" id="inlineRadio5" value="2" required>
                                <label class="form-check-label" for="inlineRadio5">2</label>
                            </div>
                            <div class="valid-feedback">
                                Correcto!
                            </div>
                            <div class="invalid-feedback">
                                Seleccione uno.
                            </div>
                        </div>
                    </div>

                    <div class="m-3 row text-left"><b>Habilidades sociales y de comunicación aceptables</b></div>
                    <div class="form-group row col-sm-12 col-md-12">
                        <label class="col-sm-12 col-md-8 col-form-label text-left" for="inlineRadio6">
                            ¿Qué estrategias conoce para solucionar un problema?
                        </label>
                            
                        <div class="col-sm-4 text-right">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="P6" id="inlineRadio6" value="0" required>
                                <label class="form-check-label" for="inlineRadio6">0</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="P6" id="inlineRadio6" value="1" required>
                                <label class="form-check-label" for="inlineRadio6">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="P6" id="inlineRadio6" value="2" required>
                                <label class="form-check-label" for="inlineRadio6">2</label>
                            </div>
                            <div class="valid-feedback">
                                Correcto!
                            </div>
                            <div class="invalid-feedback">
                                Seleccione uno.
                            </div>
                        </div>
                    </div>

                    <div class="form-group row col-sm-12 col-md-12">
                        <label class="col-sm-12 col-md-8 col-form-label text-left" for="inlineRadio7">
                            ¿Cuáles son los elementos claves para una buena comunicación?
                        </label>
                            
                        <div class="col-sm-4 text-right">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="P7" id="inlineRadio7" value="0" required>
                                <label class="form-check-label" for="inlineRadio7">0</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="P7" id="inlineRadio7" value="1" required>
                                <label class="form-check-label" for="inlineRadio7">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="P7" id="inlineRadio7" value="2" required>
                                <label class="form-check-label" for="inlineRadio7">2</label>
                            </div>
                            <div class="valid-feedback">
                                Correcto!
                            </div>
                            <div class="invalid-feedback">
                                Seleccione uno.
                            </div>
                        </div>
                    </div>

                    <div class="m-3 row text-left"><b>Práctica de valores cristianos, vocación de servicio y empatía</b></div>
                    <div class="form-group row col-sm-12 col-md-12">
                        <label class="col-sm-12 col-md-8 col-form-label text-left" for="inlineRadio8">
                            ¿Qué significa para usted "Práctica de valores cristianos"? ¿Cómo lo aplica? ¿Qué valores lo identifican?
                        </label>
                            
                        <div class="col-sm-4 text-right">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="P8" id="inlineRadio8" value="0" required>
                                <label class="form-check-label" for="inlineRadio8">0</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="P8" id="inlineRadio8" value="1" required>
                                <label class="form-check-label" for="inlineRadio8">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="P8" id="inlineRadio8" value="2" required>
                                <label class="form-check-label" for="inlineRadio8">2</label>
                            </div>
                            <div class="valid-feedback">
                                Correcto!
                            </div>
                            <div class="invalid-feedback">
                                Seleccione uno.
                            </div>
                        </div>
                    </div>
                    <div class="m-3 row text-left"><b>Salud física y mental</b></div>
                    <div class="form-group row col-sm-12 col-md-12">
                        <label class="col-sm-12 col-md-8 col-form-label text-left" for="inlineRadio9">
                            ¿Qué actividades realiza para conservar su salud física?¿Controla el estado de su salud cada año?
                        </label>
                            
                        <div class="col-sm-4 text-right">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="P9" id="inlineRadio9" value="0" required>
                                <label class="form-check-label" for="inlineRadio9">0</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="P9" id="inlineRadio9" value="1" required>
                                <label class="form-check-label" for="inlineRadio9">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="P9" id="inlineRadio9" value="2" required>
                                <label class="form-check-label" for="inlineRadio9">2</label>
                            </div>
                            <div class="valid-feedback">
                                Correcto!
                            </div>
                            <div class="invalid-feedback">
                                Seleccione uno.
                            </div>
                        </div>
                    </div>

                    <div class="form-group row col-sm-12 col-md-12">
                        <label class="col-sm-12 col-md-8 col-form-label text-left" for="inlineRadio10">
                            ¿Qué estrategias aplica para regular el estrés?
                        </label>
                            
                        <div class="col-sm-4 text-right">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="P10" id="inlineRadio10" value="0" required>
                                <label class="form-check-label" for="inlineRadio10">0</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="P10" id="inlineRadio10" value="1" required>
                                <label class="form-check-label" for="inlineRadio10">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="P10" id="inlineRadio10" value="2" required>
                                <label class="form-check-label" for="inlineRadio10">2</label>
                            </div>
                            <div class="valid-feedback">
                                Correcto!
                            </div>
                            <div class="invalid-feedback">
                                Seleccione uno.
                            </div>
                        </div>
                    </div>
                    
                    <div class="m-3 row text-left"><b>III. Observaciones</b></div>
                    <div class="form-group row col-sm-12 col-md-12">
                    <label class="col-sm-10 col-form-label text-left" for="validationCustom03">Escriba las observaciones que tenga:</label>
                        <div class="col-sm-12">
                            <textarea class="form-control" rows="3" name="P11" id="validationCustom03" required></textarea>
                            <div class="valid-feedback">
                                Muchas gracias por ingresar una respuesta!
                            </div>
                            <div class="invalid-feedback">
                                Debe escribir una respuesta válida.
                            </div>
                        </div>
                    </div>

                    <strong><i>Puntaje Global: </i><strong><input  id= "scor" type="text" name="SUMA"  disabled />  
                    <!-- <p  id= "scoree" type="text" name="SUMA"></p>       -->
 
            <div class="card-footer bg-transparent ">
                <div class="input-group row">
                    <button class="btn btn-primary boton" type="submit">Guardar entrevista</button>
                </div>
            </div>


            </form>
        </div>
    </div>
</div>

</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script>

// Script to change data from section I -- nutricion

$(document).ready(function () {
    $('#form-select').change(
    function () {

        var method = $('option:selected').val();
       
        if (this.value == "Maestría en Nutrición Humana con Mención en Alimentación Basada en Plantas, Semipresencial") {
            $('#changeData1').text("¿Qué le motiva a estudiar esta maestría?");
            $('#changeData2').text("¿Qué herramientas y aplicaciones de nutrición conoce?");
            $('#changeData3').text("¿Qué habilidad espera desarrollar, al formarse como Maestro en nutrición Humana?");
            
        } else if (this.value !="nutrición" ) {
                    $('#ChangeData1').text.method;
                    $('#ChangeData2').text.method;
                    $('#ChangeData3').text.method;
            
        }
    });

});

// Script to remove disable from score input

$('form').submit(function(e) {
    $(':disabled').each(function(e) {
        $(this).removeAttr('disabled');
    })
});

// script to validate all inputs
(function () {
  'use strict'

  // Get all forms that we want to validate
  var forms = document.querySelectorAll('.needs-validation')

  // Loop que previene el submit
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()


$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})



function calcscore(){
    var score = 0;
    var p = document.getElementById("scoree");
    $(".form-check-input:checked").each(function(){
        score+=parseInt($(this).val(),10);
    });
  $("input[name=SUMA]").val(score);
    //$("p[name=SUMA]").val(score);
   // p.innerText = score;
}

$().ready(function(){
    $(".form-check-input").change(function(){
        calcscore()
    });
});

</script>

</body>
</html>
