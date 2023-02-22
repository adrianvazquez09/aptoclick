@extends('layouts.Layout')

@section('title', 'Terminos y Condiciones')

@section('contenido')
    <div class="container mt-5 mb-md-4 py-5">
        <div class="row justify-content-center">
            <!-- Page content-->
            <div class="col-md-9">
                <!-- Breadcrumb-->
                <nav class="mb-3 pt-md-3" aria-label="Breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('inicio') }}">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">T&eacute;rminos y Condiciones</li>
                    </ol>
                </nav>
                <!-- Title-->
                <div class="mb-4">
                    <h1 class="h2 mb-0 text-center">T&eacute;rminos y Condiciones</h1>
                </div>
                <!-- Basic info-->
                <section class="card card-body border-0 shadow-sm p-4 mb-4" id="basic-info">
                    <p class="legales">
                        Este contrato describe los términos y condiciones generales (en adelante únicamente "TÉRMINOS Y CONDICIONES") aplicables al uso de los contenidos, productos y servicios ofrecidos a través del sitio WWW.APTOCLICK.COM (en adelante, "SITIO WEB"), del cual es titular <strong>APTOCLICK SAPI DE CV</strong> (en adelante, "TITULAR") quien tiene su domicilio establecido en la Ciudad de México, en la siguiente dirección: Av. Pdte. Masaryk 61-Int. 901-B, Polanco, Polanco V Secc, Miguel Hidalgo, 11560 Ciudad de México, CDMX, México. Cualquier persona que desee acceder o hacer uso del sitio o los servicios que en él se ofrecen, podrá hacerlo sujetándose a los presentes TÉRMINOS Y CONDICIONES, así como a políticas y principios incorporados al presente documento. En todo caso, cualquier persona que no acepte los presentes términos y condiciones, deberá abstenerse de utilizar el SITIO WEB y/o adquirir los productos y servicios que en su caso sean ofrecidos.
                    </p>
                    <p class="legales">
                        <strong>I. DEL OBJETO.</strong><br>
                        El objeto de los presentes TÉRMINOS Y CONDICIONES es regular el acceso y la utilización del SITIO WEB, entendiendo por este cualquier tipo de contenido, producto o servicio que se encuentre a disposición del público en general dentro del dominio: WWW.APTOCLICK.COM
                    </p>
                    <p class="legales">
                        El TITULAR se reserva la facultad de modificar en cualquier momento y sin previo aviso, la presentación, los contenidos, la funcionalidad, los productos, los servicios, y la configuración que pudiera estar contenida en el SITIO WEB; en este sentido, el USUARIO reconoce y acepta que APTOCLICK SAPI DE CV en cualquier momento podrá interrumpir, desactivar o cancelar cualquiera de los elementos que conforman el SITIO WEB o el acceso a los mismos.
                        El acceso al SITIO WEB por parte del USUARIO tiene carácter libre y, por regla general es gratuito sin que el USUARIO tenga que proporcionar una contraprestación para poder disfrutar de ello, salvo en lo referente al costo de la conexión a internet suministrada por el proveedor de este tipo de servicios que hubiere contratado el mismo USUARIO.
                    </p>
                    <p class="legales">
                        El acceso a parte de los contenidos y servicios del SITIO WEB podrá realizarse previa suscripción o registro previo del USUARIO.
                    </p>
                    <p class="legales">
                        El SITIO WEB se encuentra dirigido exclusivamente a personas que cuenten con la mayoría de edad (mayores de 18 años); en este sentido, <strong>APTOCLICK SAPI DE CV</strong> declina cualquier responsabilidad por el incumplimiento de este requisito.
                    </p>
                    <p class="legales">
                        El SITIO WEB está dirigido principalmente a USUARIOS residentes en la República Mexicana, por lo cual, <strong>APTOCLICK SAPI DE CV</strong> no asegura que el SITIO WEB cumpla total o parcialmente con la legislación de otros países, de forma que, si el USUARIO reside o tiene su domicilio establecido en otro país y decide acceder o utilizar el SITIO WEB lo hará bajo su propia responsabilidad y deberá asegurarse de que tal acceso y navegación cumple con la legislación local que le es aplicable, no asumiendo <strong>APTOCLICK SAPI DE CV</strong> ninguna responsabilidad que se pueda derivar de dicho acto.
                        Se hace del conocimiento del USUARIO que el TITULAR podrá administrar o gestionar el SITIO WEB de manera directa o a través de un tercero, lo cual no modifica en ningún sentido lo establecido en los presentes TÉRMINOS Y CONDICIONES.
                    </p>
                    <p class="legales">
                        <strong>II. DEL USUARIO.</strong><br>
                        El acceso o utilización del SITIO WEB, así como de los recursos habilitados para interactuar entre los USUARIOS, o entre el USUARIO y el TITULAR tales como medios para realizar publicaciones o comentarios, confiere la condición de USUARIO del SITIO WEB, por lo que quedará sujeto a los presentes TÉRMINOS Y CONDICIONES, así como a sus ulteriores modificaciones, sin perjuicio de la aplicación de la legislación aplicable, por tanto, se tendrán por aceptados desde el momento en el que se accede al SITIO WEB. Dada la relevancia de lo anterior, se recomienda al USUARIO revisar las actualizaciones que se realicen a los presentes TÉRMINOS Y CONDICIONES.
                    </p>
                    <p class="legales">
                        Es responsabilidad del USUARIO utilizar el SITIO WEB de acuerdo a la forma en la que fue diseñado; en este sentido, queda prohibida la utilización de cualquier tipo de software que automatice la interacción o descarga de los contenidos o servicios proporcionados a través del SITIO WEB. Además, el USUARIO se compromete a utilizar la información, contenidos o servicios ofrecidos a través del SITIO WEB de manera lícita, sin contravenir lo dispuesto en los presentes TÉRMINOS Y CONDICIONES, la moral o el orden público, y se abstendrá de realizar cualquier acto que pueda suponer una afectación a los derechos de terceros, o perjudique de algún modo el funcionamiento del SITIO WEB.
                    </p>
                    <p class="legales">
                        Así mismo, el usuario se compromete a proporcionar información lícita y veraz en los formularios habilitados en el SITIO WEB, en los cuales el usuario tenga que proporcionar ciertos datos o información para el acceso a algún contenido, producto o servicio ofrecido por el propio SITIO WEB. En todo caso, el USUARIO notificará de forma inmediata al TITULAR acerca de cualquier hecho que permita suponer el uso indebido de la información registrada en dichos formularios, tales como, robo, extravío, o acceso no autorizado a cuentas y/o contraseñas, con el fin de proceder a su inmediata cancelación.
                    </p>
                    <p class="legales">
                        <strong>APTOCLICK SAPI DE CV</strong> se reserva el derecho de retirar todos aquellos comentarios y aportaciones que vulneren la ley, el respeto a la dignidad de la persona, que sean discriminatorios, atenten contra los derechos de tercero o el orden público, o bien, que a su juicio no resulten adecuados para su publicación.
                    </p>
                    <p class="legales">
                        En cualquier caso, <strong>APTOCLICK SAPI DE CV</strong> no será responsable de las opiniones vertidas por los USUARIOS a través de comentarios o publicaciones que estos realicen.
                    </p>
                    <p class="legales">
                        El sólo acceso al SITIO WEB no supone el establecimiento de ningún tipo de relación entre el TITULAR y el USUARIO.
                    </p>
                    <p class="legales">
                        Al tratarse de un SITIO WEB dirigido exclusivamente a personas que cuenten con la mayoría de edad, el USUARIO manifiesta ser mayor de edad y disponer de la capacidad jurídica necesaria para sujetarse a los presentes TÉRMINOS Y CONDICIONES.
                    </p>
                    <p class="legales">
                        <strong>III. DEL ACCESO Y NAVEGACIÓN EN EL SITIO WEB.</strong><br>
                        El TITULAR no garantiza de ningún modo la continuidad y disponibilidad de los contenidos, productos o servicios ofrecidos a través del SITIO WEB, no obstante, el TITULAR llevará a cabo las acciones que de acuerdo a sus posibilidades le permitan mantener el buen funcionamiento del SITO WEB, sin que esto suponga alguna responsabilidad de parte de <strong>APTOCLICK SAPI DE CV.</strong><br>
                        De igual forma <strong>APTOCLICK SAPI DE CV</strong> no será responsable ni garantiza que el contenido o software al que pueda accederse a través del SITIO WEB, se encuentre libre de errores, software malicioso, o que pueda causar algún daño a nivel de software o hardware en el equipo a través del cual el USUARIO accede al SITIO WEB.
                    </p>
                    <p class="legales">
                        El TITULAR tampoco se hace responsable de los daños que pudiesen ocasionarse por un uso inadecuado del SITIO WEB. En ningún caso <stong>APTOCLICK SAPI DE CV</stong> será responsable por las pérdidas, daños o perjuicios de cualquier tipo que surjan por el sólo acceso o utilización del SITIO WEB.
                    </p>
                    <p class="legales">
                        <strong>IV. POLÍTICA DE PRIVACIDAD Y PROTECCIÓN DE DATOS.</strong><br>
                        De conformidad con lo establecido en la Ley Federal de Protección de Datos Personales en Posesión de Particulares, el TITULAR se compromete a adoptar las medidas necesarias que estén a su alcance para asegurar la privacidad de los datos personales recabados de forma que se garantice su seguridad, se evite su alteración, pérdida o tratamiento no autorizado.<br>
                        Además, a efecto de dar cumplimiento a lo establecido en la Ley Federal de Protección de Datos Personales en Posesión de Particulares, todo dato personal que sea recabado a través del SITIO WEB, será tratado de conformidad con los principios de licitud, calidad, finalidad, lealtad, y responsabilidad.  
                    </p>
                    <p class="legales">
                        Todo tratamiento de datos personales quedará sujeto al consentimiento de su titular. En todo caso, la utilización de datos financieros o patrimoniales, requerirán de autorización expresa de sus titulares, no obstante, esta podrá darse a través del propio SITIO WEB utilizando los mecanismos habilitados para tal efecto, y en todo caso se dará la mayor diligencia y cuidado a este tipo de datos. Lo mismo ocurrirá en el caso de datos personales sensibles, considerando por estos aquellos que debido a una utilización indebida puedan dar origen a discriminación o su divulgación conlleve un riesgo para el titular.
                    </p>
                    <p class="legales">
                        En todo momento se procurará que los datos personales contenidos en las bases de datos o archivos que en su caso se utilicen, sean pertinentes, correctos y actualizados para los fines para los cuales fueron recabados.El tratamiento de datos personales se limitará al cumplimiento de las finalidades previstas en el Aviso de Privacidad el cual se encontrará disponible en la siguiente dirección electrónica:
                    </p>
                    <ul>
                        <li>WWW.APTOCLICK.COM</li>
                    </ul>
                    <p class="legales">
                        El SITIO WEB podrá incluir hipervínculos o enlaces que permitan acceder a páginas web de terceros distintos de <strong>APTOCLICK SAPI DE CV</strong> Los titulares de dichos sitios web dispondrán de sus propias políticas de privacidad y protección de datos, por lo cual <strong>APTOCLICK SAPI DE CV</strong> no asume ningún tipo de responsabilidad por los datos que san facilitados por el USUARIO a través de cualquier sitio web distinto a WWW.APTOCLICK.COM
                    </p>
                    <p class="legales">
                        <strong>APTOCLICK SAPI DE CV</strong> se reserva el derecho a modificar su Política de Privacidad, de acuerdo a sus necesidades o derivado de algún cambio en la legislación. El acceso o utilización del SITIO WEB después de dichos cambios, implicará la aceptación de estos cambios.
                        Por otra parte, el acceso al SITIO WEB puede implicar la utilización de cookies, las cuales, son pequeñas cantidades de información que se almacenan en el navegador utilizado por el USUARIO. 
                    </p>
                    <p class="legales">
                        Las cookies facilitan la navegación, la hacen más amigable, y no dañan el dispositivo de navegación, para ello, pueden recabar información para ingresar al SITIO WEB, almacenar las preferencias del USUARIO, así como la interacción que este tenga con el SITIO WEB, como por ejemplo: la fecha y hora en la que se accede al SITIO WEB, el tiempo que se ha hecho uso de este, los sitios visitados antes y después del mismo, el número de páginas visitadas, la dirección IP de la cual accede el usuario, la frecuencia de visitas, etc. 
                    </p>
                    <p class="legales">
                        Este tipo de información será utilizada para mejorar el SITIO WEB, detectar errores, y posibles necesidades que el USUARIO pueda tener, lo anterior a efecto de ofrecer a los USUARIOS servicios y contenidos de mejor calidad. En todo caso, la información que se recopile será anónima y no se identificará a usuarios individuales. 
                    </p>
                    <p class="legales">
                        En caso de que el USUARIO no desee que se recopile este tipo de información deberá deshabilitar, rechazar, restringir y/o eliminar el uso de cookies en su navegador de internet. Los procedimientos para realizar estas acciones pueden diferir de un navegador a otro; en consecuencia, se sugiere revisar las instrucciones facilitadas por el desarrollador del navegador. En el supuesto de que rechace el uso de cookies (total o parcialmente) el USUARIO podrá continuar haciendo uso del SITIO WEB, aunque podrían quedar deshabilitadas algunas de las funciones del mismo.<br>
                        Es posible que en el futuro estas políticas respecto a las cookies cambien o se actualicen, por ello es recomendable revisar las actualizaciones que se realicen a los presentes TÉRMINOS Y CONDICIONES, con objetivo de estar adecuadamente informado sobre cómo y para qué utilizamos las cookies que se generan al ingresar o hacer uso del SITIO WEB.
                    </p>
                    <p class="legales">
                        <strong>V. POLÍTICA DE ENLACES.</strong><br>
                        El SITIO WEB puede contener enlaces, contenidos, servicios o funciones, de otros sitios de internet pertenecientes y/o gestionados por terceros, como por ejemplo imágenes, videos, comentarios, motores de búsqueda, etc.<br>
                        La utilización de estos enlaces, contenidos, servicios o funciones, tiene por objeto mejorar la experiencia del USUARIO al hacer uso del SITIO WEB, sin que pueda considerarse una sugerencia, recomendación o invitación para hacer uso de sitios externos. <strong>APTOCLICK</strong> en ningún caso revisará o controlará el contenido de los sitios externos, de igual forma, no hace propios los productos, servicios, contenidos, y cualquier otro material existente en los referidos sitios enlazados; por lo cual, tampoco se garantizará la disponibilidad, exactitud, veracidad, validez o legalidad de los sitios externos a los que se pueda tener acceso a través del SITIO WEB. Así mismo, el TITULAR no asume ninguna responsabilidad por los daños y perjuicios que pudieran producirse por el acceso o uso, de los contenidos, productos o servicios disponibles en los sitios web no gestionados por <strong>APTOCLICK SAPI DE CV</strong> a los que se pueda acceder mediante el SITIO WEB.
                    </p>
                    <p class="legales">
                        Los USUARIOS o terceros que realicen o publiquen un enlace web desde una página web externa, a este SITIO WEB deberán tomar en cuenta lo siguiente:
                    </p>
                    <ul>
                        <li class="legales">
                            No se permite la reproducción (total o parcial) de los contenidos, productos o servicios disponibles en el SITIO WEB sin la autorización expresa de <strong>APTOCLICK SAPI DE CV</strong> o su titular. Tampoco se permitirán manifestaciones falsas, inexactas o incorrectas sobre el SITIO WEB, ni sobre sus contenidos, productos o servicios, pudiendo <strong>APTOCLICK SAPI DE CV</strong> restringir el acceso al SITIO WEB a toda aquella persona que incurra en este tipo de actos.
                        </li>
                        <li class="legales">
                            El establecimiento de un enlace al SITIO WEB desde cualquier sitio externo, no implicará la existencia de alguna relación entre <strong>APTOCLICK SAPI DE CV</strong> y el titular del sitio web desde el cual se realice, tampoco implicará el conocimiento de <strong>APTOCLICK SAPI DE CV</strong> de los contenidos, productos o servicios ofrecidos en los sitios externos desde los cuales se pueda acceder al SITIO WEB.
                        </li>
                    </ul>
                    <p class="legales">
                        <strong>VI. POLÍTICA EN MATERIA DE PROPIEDAD INTELECTUAL E INDUSTRIAL.</strong><br>
                        <strong>APTOCLICK SAPI DE CV</strong> por sí o como parte cesionaria, es titular de todos los derechos de propiedad intelectual e industrial del SITIO WEB, entendiendo por este el código fuente que hace posible su funcionamiento así como las imágenes, archivos de audio o video, logotipos, marcas, combinaciones de colores, estructuras, diseños y demás elementos que lo distinguen. Serán, por consiguiente, protegidas por la legislación mexicana en materia de propiedad intelectual e industrial, así como por los tratados internacionales aplicables. Por consiguiente, queda expresamente prohibida la reproducción, distribución, o difusión de los contenidos del SITIO WEB, con fines comerciales, en cualquier soporte y por cualquier medio, sin la autorización de <strong>APTOCLICK SAPI DE CV</strong>
                    </p>
                    <p class="legales">
                        El USUARIO se compromete a respetar los derechos de propiedad intelectual e industrial del TITULAR. No obstante, además de poder visualizar los elementos del SITIO WEB podrá imprimirlos, copiarlos o almacenarlos, siempre y cuando sea exclusivamente para su uso estrictamente personal.
                    </p>
                    <p class="legales">
                        Por otro lado, el USUARIO, se abstendrá de suprimir, alterar, o manipular cualquier elemento, archivo, o contenido, del SITIO WEB, y por ningún motivo realizará actos tendientes a vulnerar la seguridad, los archivos o bases de datos que se encuentren protegidos, ya sea a través de un acceso restringido mediante un usuario y contraseña, o porque no cuente con los permisos para visualizarlos, editarlos o manipularlos.
                    </p>
                    <p class="legales">
                        En caso de que el USUARIO o algún tercero consideren que cualquiera de los contenidos del SITIO WEB suponga una violación de los derechos de protección de la propiedad industrial o intelectual, deberá comunicarlo inmediatamente a <strong>APTOCLICK SAPI DE CV</strong> a través de los datos de contacto disponibles en el propio SITIO WEB y/o a través de los siguientes medios:
                    </p>
                    <ul>
                        <li class="legales">
                            Teléfono: +52 55 5023 2006
                        </li>
                        <li class="legales">
                            Correo electrónico: hola@aptoclick.com
                        </li>
                    </ul>
                    <p class="legales">
                        <strong>VII. LEGISLACIÓN Y JURISDICCIÓN APLICABLE.</strong><br>
                        APTOCLICK SAPI DE CV se reserva la facultad de presentar las acciones civiles o penales que considere necesarias por la utilización indebida del SITIO WEB, sus contenidos, productos o servicios, o por el incumplimiento de los presentes TÉRMINOS Y CONDICIONES.
                    </p>
                    <p class="legales">
                        La relación entre el USUARIO y <strong>APTOCLICK SAPI DE CV</strong> se regirá por la legislación vigente en México, específicamente en la Ciudad de México. De surgir cualquier controversia en relación a la interpretación y/o a la aplicación de los presentes TÉRMINOS Y CONDICIONES, las partes se someterán a la jurisdicción ordinaria de los tribunales que correspondan conforme a derecho en el estado al que se hace referencia.
                    </p>
                    <p class="legales">
                        Términos y Condiciones actualizados el 05 de Diciembre de 2021.
                    </p>
                </section>
            </div>
        </div>
    </div>
@endsection
