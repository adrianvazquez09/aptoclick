@extends('layouts.Layout')

@section('title', 'Preguntas frecuentes')

@section('contenido')
    <div class="container mt-5 mb-md-4 py-5">
        <div class="row justify-content-center">
            <!-- Page content-->
            <div class="col-md-9">
                <!-- Breadcrumb-->
                <nav class="mb-3 pt-md-3" aria-label="Breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('inicio') }}">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Preguntas Frecuentes</li>
                    </ol>
                </nav>
                <!-- Title-->
                <div class="mb-4">
                    <h1 class="h2 mb-0 text-center">¡Hola! ¿C&oacute;mo te podemos ayudar?</h1>
                </div>
                <!-- Basic info-->
                <section class="card card-body border-0 shadow-sm p-4 mb-4" id="basic-info">
                    <div class="accordion" id="accordionExample">

                        <!-- Accordion item -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    ¿A qué tipo de casas son a las que puedo acceder?
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" id="collapseOne">
                                <div class="accordion-body">
                                    <p style="text-align: justify;">
                                    Son casas de remate que rescatamos, están remodeladas y cuentan con toda su documentación en regla, misma que te entregamos personalmente 
                                    <br><br>
                                    Todas las casas que estamos comprando se encuentran cerca de escuelas, centros comerciales, hospitales en un radio de hasta 3.5 kilómetros. Siempre contarás con los servicios básicos.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="f2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cf2" aria-expanded="false" aria-controls="cf2">
                                    ¿Es costoso comprar una casa en Aptoclick?
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse" aria-labelledby="f2" data-bs-parent="#accordionExample" id="cf2">
                                <div class="accordion-body">
                                    <p style="text-align: justify;">
                                        La vivienda más económica es de 450 mil pesos, pero nos podemos ajustar a tus necesidades y presupuesto, para ello contamos con un grupo de expertos.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="f3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cf3" aria-expanded="false" aria-controls="cf3">
                                    ¿Dónde puedo consultar los inmuebles que están disponibles?
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse" aria-labelledby="f3" data-bs-parent="#accordionExample" id="cf3">
                                <div class="accordion-body">
                                    <p style="text-align: justify;">
                                        La cartera de inmuebles está disponible en nuestra página de internet. Constantemente se actualizan e incrementa el número de inmuebles, por lo que recomendamos elegir la casa una vez que te hayas enamorado de ella.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="f4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cf4" aria-expanded="false" aria-controls="cf4">
                                    ¿Cuál es la seguridad que tengo al comprar con Aptoclick?
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse" aria-labelledby="f4" data-bs-parent="#accordionExample" id="cf4">
                                <div class="accordion-body">
                                    <p style="text-align: justify;">
                                        Con Aptoclick tienes la certeza de que revisamos atentamente todos los expedientes del inmueble, transparentamos la entrega de tu carta catastral y entregamos la documentación según el estado en el que nos encontremos.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="f5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cf5" aria-expanded="false" aria-controls="cf5">
                                    ¿Tengo que tratar con los dueños anteriores?
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse" aria-labelledby="f5" data-bs-parent="#accordionExample" id="cf5">
                                <div class="accordion-body">
                                    <p style="text-align: justify;">
                                        En México la compra de casas de remate no es nueva, sin embargo, Aptoclick lo hace sencillo ya que en ningún momento el usuario tiene que mediar entre autoridades o deudores. Los domicilios que entregamos están totalmente respaldados de acuerdo a las leyes, para que tu única preocupación sea la de llevar tus muebles y vivir en tu nuevo hogar.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="f6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cf6" aria-expanded="false" aria-controls="cf6">
                                    ¿Puedo usar mi crédito infonavit para comprar con Aptoclick?
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse" aria-labelledby="f6" data-bs-parent="#accordionExample" id="cf6">
                                <div class="accordion-body">
                                    <p style="text-align: justify;">
                                        Puedes comprar tu casa con credito INFONAVIT, COFINAVIT, FOVISSTE y créditos hipotecarios tradicionales
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="f7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cf7" aria-expanded="false" aria-controls="cf7">
                                    ¿Cómo cálculo los gastos que tendré que hacer?
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse" aria-labelledby="f7" data-bs-parent="#accordionExample" id="cf7">
                                <div class="accordion-body">
                                    <p style="text-align: justify;">
                                        En nuestra plataforma hay una calculadora que te ayuda a conocer las opciones que hay en atención a tu situación financiera. Siempre podemos ayudarte con uno de nuestros asesores.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="f8">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cf8" aria-expanded="false" aria-controls="cf8">
                                    ¿En dónde tenemos presencia?
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse" aria-labelledby="f8" data-bs-parent="#accordionExample" id="cf8">
                                <div class="accordion-body">
                                    <p style="text-align: justify;">
                                        Por el momento tenemos presencia en los estados de Nuevo León, Estado de México, Jalisco, Guanajuato, Coahuila, Tamaulipas, Baja California, Quintana Roo.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="f9">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cf9" aria-expanded="false" aria-controls="cf9">
                                    Soy freelancer, ¿puedo comprar con ustedes?
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse" aria-labelledby="f9" data-bs-parent="#accordionExample" id="cf9">
                                <div class="accordion-body">
                                    <p style="text-align: justify;">
                                        ¡Claro que puedes adquirir con nosotros! El Infonavit recientemente cambió sus reglas y permite que trabajadores sin relación laboral –freelancers- accedan a un crédito hipotecario, lo que nos ayuda a democratizar aún más la vivienda para unos 60 millones de mexicanos. 
                                        <br><br>
                                        Solo es necesario que verifiquemos tu estado y comencemos con el trámite.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="f10">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cf10" aria-expanded="false" aria-controls="cf10">
                                    ¿Aptoclick paga mi crédito infonavit?
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse" aria-labelledby="f10" data-bs-parent="#accordionExample" id="cf10">
                                <div class="accordion-body">
                                    <p style="text-align: justify;">
                                        En Aptoclick nos encargamos de la venta de casas, por lo que no podemos observar la deuda si es que tienes con el Infonavit. Lo que sí podemos hacer es apoyarte con la gestión de crédito Infonavit para que puedas comprar una casa con nosotros.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="f11">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cf11" aria-expanded="false" aria-controls="cf11">
                                    ¿Por qué elegir Aptoclick?
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse" aria-labelledby="f11" data-bs-parent="#accordionExample" id="cf11">
                                <div class="accordion-body">
                                    <p style="text-align: justify;">
                                        Entregamos casas con garantía en seis meses desde la contratación, nosotros pagamos el enganche si no te alcanza y a su vez nos puedes pagar con tu con crédito infonavit.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
