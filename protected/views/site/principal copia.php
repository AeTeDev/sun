<?php
if(Yii::app()->session['activo']) {
    $estado = true;
    $url = '?r=access/logout';
    $label = 'Cerrar sesión';
}else {
    $estado = false;
    $url = '?r=access/index';
    $label = 'Iniciar sesión';

}
?>
<div class="banner" id="templatemo_banner_slide">
    <ul>
        <li class="templatemo_banner_slide_01">
            <div class="slide_caption">
                <h1>W W W. PROPIEDADESSOLYCOBRE .CL</h1>

            </div>
        </li>
        <li class="templatemo_banner_slide_02">
            <div class="slide_caption">
                <h1>Venta y Arriendo</h1>
                <p>Entréguenos su propiedad contáctenos a través del formulario que se encuentra en la sección de contactos para enviarnos la información de la propiedad.</p>
            </div>
        </li>
        <li class="templatemo_banner_slide_03">
            <div class="slide_caption">
                <h1>No lo Dudes!</h1>
                <p>La mejor empresa de corretage en la ciudad de Calama.</p>
            </div>
        </li>
    </ul>
</div>

<div id="templatemo_mobile_menu">
    <ul class="nav nav-pills nav-stacked">
        <li><a href="#templatemo_banner_slide"><i class="glyphicon glyphicon-home"></i> &nbsp; Inicio</a></li>
        <li><a href="#templatemo_about"><i class="glyphicon glyphicon-briefcase"></i> &nbsp; ¿Quienes Somos?</a></li>
        <li><a href="#templatemo_events"><i class="glyphicon glyphicon-search"></i> &nbsp; Buscar Propiedad</a></li>
        <li><a href="#templatemo_timeline"><i class="glyphicon glyphicon-calendar"></i> &nbsp; Servicios</a></li>
        <li><a href="<?php echo $url;?>" class="external-link"><i class="glyphicon glyphicon-export"></i> &nbsp; <?php echo $label; ?></a></li>
        <li><a href="#templatemo_contact"><i class="glyphicon glyphicon-phone-alt"></i> &nbsp; Contáctenos</a></li>
        <li><a href="?r=access"><i class="glyphicon glyphicon-user"></i> &nbsp; Iniciar Sesión</a></li>

    </ul>
</div>
<div class="container_wapper">
    <div id="templatemo_banner_menu">
        <div class="container-fluid">
            <div class="col-xs-4 templatemo_logo">
                <a href="#">
                    <img src="images/LogoV1.png" id="logo_img"  title="" />
                </a>
                
            </div>
            <div class="col-sm-8 hidden-xs">
                <ul class="nav nav-justified">
                    <li><a href="#templatemo_banner_slide">Inicio</a></li>
                    <li><a href="#templatemo_about">¿Quienes Somos?</a></li>
                    <li><a href="#templatemo_events">Buscar Propiedad</a></li>
                    <li><a href="#templatemo_timeline">Servicios</a></li>
                    <li><a href="#templatemo_contact">Contáctenos</a></li>

                   <li><a href="#" id="loginform"><?php echo $label; ?></a></li>
                            <div class="login">
                                <div class="arrow-up"></div>
                                <div class="formholder">
                                    <div class="randompad">
                                        <fieldset>
                                            <label name="email">Email</label>
                                            <input type="email" value="example@example.com" />
                                            <label name="password">Password</label>
                                            <input type="password" />
                                            <input type="submit" value="Login" />




                                            
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

                    <script src="js/index.js"></script>
                </ul>
            </div>
            <div class="col-xs-8 visible-xs">
                <a href="#" id="mobile_menu"><span class="glyphicon glyphicon-th-list"></span></a>
            </div>
        </div>
    </div>
</div>z
<div id="templatemo_about" class="container_wapper">
    <div class="container-fluid">
        <h1>¿Quienes somos?</h1>
        <h3>La empresa Propiedades sol y cobre es una empresa que se dedica a la venta y arriendo de propiedades tales como: casas, departamentos, locales y hospedaje. También presta servicios como: Obras menores y ampliaciones (pintura, cambio y lavado de alfombras, aseos, búsquedas de propiedades, etc.), y asesorías como: Regularización de Ampliaciones, asesorías de ventas, tasaciones y estudio de título. Actualmente trabaja con particulares y empresas las cuales por nombrar algunas son: Elecda, Komatsu, Mena y Ovalle, a los cuales presta los servicios mencionados anteriormente.</h3>
        <div class="clearfix testimonial_top_bottom_spacer"></div>
        <div class="col-xs-1 pre_next_wap" id="prev_testimonial">
            <a href="#"><span class="glyphicon glyphicon-chevron-left pre_next"></span></a>
        </div><!--.Misión-->
        <div id="testimonial_text_wap" class="col-xs-9 col-sm-10">
            <div class="testimonial_text">
                <div class="col-sm-3">
                    <img src="images/mision.jpg" class="img-responsive" alt="Business Development Manager" />
                </div>
                <div class="col-sm-9">
                    <h2>Misión</h2>

                    <p>“Entregar excelencia en servicios de Corretaje de Propiedades, Administración de Condominios, Edificios y Tasaciones de Bienes Raíces y Capacitación. Consolidándonos como una organización joven, moderna, eficiente y eficaz.
                        De nuestra corredora de propiedades en atender las necesidades de nuestros clientes entregando seguridad, información y tranquilidad en el proceso de compra venta o arrendamiento de su propiedad. Esto apoyado en el conocimiento y profesionalismo de nuestro equipo de trabajo y de las políticas de control de gestión de la empresa, entregando como resultado un servicio de alta calidad y adecuada eficiencia en cada etapa de la cadena.”</p>
                </div>
            </div>
            <!--.Visión-->
            <div class="testimonial_text">
                <div class="col-sm-3">
                    <img src="images/vision.jpg" class="img-responsive" alt="Chief Public Relation Officer" />
                </div>
                <div class="col-sm-9">
                    <h2>Visión</h2>

                    <p>“Creemos en un proceso de mejora continua, ser un equipo multidisciplinario profesional y comercialmente consolidado, manteniendo la excelencia en la atención de nuestros clientes. Expandir nuestro mercado a nivel nacional, mediante la captación de asociados y la apertura de nuevos mercados y negocios. Que nuestros clientes se sientan plenamente acompañados y asesorados durante todo el proceso de compra venta o arrendamiento de su propiedad por nosotros como corredores de propiedades, generando así relaciones de largo plazo.”</p>
                </div>
            </div>

        </div><!--#flechas-->
        <div class="col-xs-1 pre_next_wap" id="next_testimonial">
            <a href="#"><span class="glyphicon glyphicon-chevron-right pre_next"></span></a>
        </div>
        <div class="clearfix testimonial_top_bottom_spacer"></div>
    </div>
</div><!--buscar-->
<div id="templatemo_events" class="container_wapper">
    <div class="container-fluid">
        <h1>Buscar Propiedades</h1>



        <form action="#" method="post" class="col-md-12">
            <div class="row">

                <div class="col-md-6">
                    <blanco>Venta/Arriendo</blanco>
                    <select>
                        <option value="Todo">Todo</option>
                        <option value="Venta">Venta</option>
                        <option value="Arriendo">Arriendo</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <blanco>Ubicación</blanco>
                    <select>
                        <option value="volvo">Calama</option>
                        <option value="saab">Antofagasta</option>
                        <option value="mercedes">Iquique</option>
                        <option value="audi">Arica</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <blanco>Típo de propiedad</blanco>
                    <select>
                        <option value="volvo">Casa habitacion</option>
                        <option value="saab">Departamento</option>
                        <option value="mercedes">Locales</option>
                        <option value="audi">Oficina</option>
                        <option value="audi">Galpón</option>
                        <option value="audi">Sitio Comercial</option>
                        <option value="audi">Sitio Residencial</option>
                        <option value="audi">Sitio Industrial</option>
                    </select>
                </div>


                <div class="col-xs-6 col-sm-3">
                    <button type="reset">Buscar</button>
                </div>
            </div>
        </form>

    </div>
</div>
<div id="templatemo_timeline" class="container_wapper">
    <h1>Nuestros Servicios</h1>
    <div class="container-fluid">
        <div class="time_line_wap">
            <div class="time_line_caption">1.</div>
            <div class="time_line_paragraph">
                <h1>Compraventa:</h1>

                <p>La corredora de propiedades realiza compras de propiedades para su posterior reventa.</p>
            </div>
        </div>
        <div class="time_line_wap">
            <div class="time_line_caption">2.</div>
            <div class="time_line_paragraph">
                <h1>Arriendos</h1>

                <p>Arriendo de bienes inmuebles a empresas o particulares.</p>
            </div>
        </div>
        <div class="time_line_wap">
            <div class="time_line_caption">3.</div>
            <div class="time_line_paragraph">
                <h1>Tasaciones</h1>

                <p>La empresa conoce y realiza los procedimientos y los aspectos que influyen en el precio de una propiedad, los clientes que la contraten, obtendrán los métodos y procesos correspondientes para una buena tasación de la propiedad.</p>
            </div>
        </div>
        <div class="time_line_wap">
            <div class="time_line_caption">4.</div>
            <div class="time_line_paragraph">
                <h1>Estudio de Títulos</h1>

                <p>Para poder comprar o vender una propiedad. Es importante tener clara la validez de toda su documentación, la corredora de propiedades se encarga de la búsqueda y validación de la documentación necesaria para la venta o compra de alguna propiedad.</p>
            </div>
        </div>
        <div class="time_line_wap">
            <div class="time_line_caption">5.</div>
            <div class="time_line_paragraph">
                <h1>Ampliaciones Menores</h1>

                <p>La empresa se encarga de administrar construcciones pequeñas (piezas, casas pequeñas, ampliaciones en general).</p>
            </div>
        </div>
        <div class="time_line_wap">
            <div class="time_line_caption">6.</div>
            <div class="time_line_paragraph">
                <h1>Aseos de Propiedades</h1>

                <p>Aseos de propiedades: La corredora de propiedades presta servicios de limpiezas, ya sea a empresas como particulares, los cuales se pueden pactar de forma mensual, como en algún caso en particular.</p>
            </div>
        </div>
    </div>
</div>
<div id="templatemo_contact" class="container_wapper">
    <div class="container-fluid">
        <h1>Ubicación</h1>
        <div class="col-xs-12">
            <div id="templatemo_contact_map"></div>
        </div>
        <div class="col-md-4">

            <p>Complete el siguiente formulario para enviarnos la información de la propiedad y pronto nos pondremos en contacto con usted.</p>
            <br>
            <p><strong>Email:</strong> propiedades@solycobre.com<br /><strong>Teléfono:</strong> 010-020-0340<br /><strong><strong>Dirección:</strong> Pasaje La Torre #1291 Villa Chica, Calama</p>

            <div class="caja-redes">
                <h3>Nuestras redes sociales</h3>
                <a href="#" class="icon-button google-plus"><i class="fa fa-google-plus"></i><span></span></a>
                <a href="https://www.facebook.com/propiedadessolycobre?fref=ts" class="icon-button facebook"><i class="fa fa-facebook"></i><span></span></a>
                <a href="#" class="icon-button twitter"><i class="fa fa-twitter"></i><span></span></a>
                <a href="#" class="icon-button pinterest"><i class="fa fa-youtube"></i><span></span></a>


            </div>

        </div>

        <form action="#" method="post" class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <h2>Entréguenos su propiedad</h2>
                </div>
                <div class="col-md-6">
                    <p>Nombre</p>
                    <input type="text" name="name" id="name" placeholder="Su nombre y apellido" />
                </div>
                <div class="col-md-6">
                    <p>Correo electrónico</p>
                    <input type="text" name="email" id="email" placeholder="ejemplo@ejemplo.com" />
                </div>
                <div class="col-md-12">
                    <p>Tipo de Propiedad</p>
                    <input type="text" name="subject" id="subject" placeholder="Departamento, Casa, etc." />
                </div>
                <div class="col-md-12">
                    <p>Comentario</p>
                    <textarea name="message" id="message"  placeholder="Escriba una breve descripción o comentario"></textarea>
                </div>

                <div class="col-xs-6 col-sm-3 col-md-offset-6">

                    <button type="submit">Enviar</button>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <button type="reset">Borrar</button>
                </div>
            </div>
        </form>
    </div>

</div>
<div id="templatemo_sesion" class="container_wapper">
    <div class="container-fluid">

        <div class="col-sm-8 hidden-xs">
            <ul class="nav nav-justified">
                <li><a href="?r=access">Iniciar sesión</a></li>
            </ul>
        </div>

    </div>
</div>
<div id="templatemo_footer">
    <div>
        <p id="footer">Calama &copy; 2015. Propiedades Sol y Cobre.</p>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.singlePageNav.min.js"></script>
<script src="js/unslider.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script src="js/templatemo_script.js"></script>
</body>

