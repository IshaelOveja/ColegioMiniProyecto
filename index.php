<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="img/logo-icon.png">
        <title>SISTEMA COLEGIO "LOS NIÑOS DE DIOS"</title>
        <link href="dependences/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Icons Google -->
        <link href="dependences/css/material-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="dependences/css/animate.css" rel="stylesheet">
        <link href="dependences/css/style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Abel|Arsenal|Nunito|Open+Sans|Roboto" rel="stylesheet">
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav metismenu" id="side-menu">
                        <li class="nav-header">
                            <div class="dropdown profile-element"> <span>
                                    <img alt="image" class="img-circle img-lg" width="80" height="80" src="img/admin.jpg" />
                                </span>
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Israel Vargas</strong>
                                        </span> <span class="text-muted text-xs block">Administrador<i class="mdi mdi-keyboard-arrow-down"></i></span> </span> </a>
                                <ul class="dropdown-menu animated fadeInUp m-t-xs">
                                    <li><a href="#">Perfil</a></li>
                                    <li><a href="#Settings" data-toggle="modal">Configuraci&oacute;n</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Cerrar Sesi&oacute;n</a></li>
                                </ul>
                            </div>
                            <div class="logo-element">
                                IN+
                            </div>
                        </li>
                        <li class="active">
                            <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Menu Levels </span><i class="mdi mdi-keyboard-arrow-down"></i></a>
                            <ul class="nav nav-second-level collapse active">
                                <li>
                                    <a href="#">Third Level <i class="mdi mdi-keyboard-arrow-down"></i></a>
                                    <!--                                    <ul class="nav nav-third-level">
                                                                            <li>
                                                                                <a href="#">Third Level Item</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">Third Level Item</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">Third Level Item</a>
                                                                            </li>
                                                                        </ul>-->
                                </li>
                                <!--                                <li><a href="#">Second Level Item</a></li>
                                                                <li><a href="#">Second Level Item</a></li>
                                                                <li><a href="#">Second Level Item</a></li>-->
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div id="page-wrapper" class="gray-bg dashbard-1">
                <div class="row border-bottom">
                    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">
                            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary" href="#"><i class="material-icons">menu</i> </a>
                            <form role="search" class="navbar-form-custom" action="search_results.html">
                                <div class="form-group">
                                    <input type="text" placeholder="Buscar..." class="form-control" name="top-search" id="top-search">
                                </div>
                            </form>
                        </div>
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <span class="m-r-sm text-muted welcome-message">Bienvenido al Sistema Colegio</span>
                            </li>
                            <li>
                                <a role="button" href="logout.php" class="btn btn-danger btn-xs"><i class="mdi mdi-lock"></i> Log out</a></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="row wrapper border-bottom white-bg page-heading">
                    <div class="col-lg-9">
                        <h2>Men&uacute; Principal</h2>
                        <div class="wrapper wrapper-content animated fadeInRight">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="widget style1 navy-bg">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <i class="fa fa-cloud fa-5x"></i>
                                            </div>
                                            <div class="col-xs-8 text-right">
                                                <span>Estudiantes</span>
                                                <h2 class="font-bold">0</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="widget style1 lazur-bg">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <i class="fa fa-envelope-o fa-5x"></i>
                                            </div>
                                            <div class="col-xs-8 text-right">
                                                <span>Docentes</span>
                                                <h2 class="font-bold">0</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="widget style1 yellow-bg">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <i class="fa fa-music fa-5x"></i>
                                            </div>
                                            <div class="col-xs-8 text-right">
                                                <span>Pensiones</span>
                                                <h2 class="font-bold">0</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="widget style1 red-bg">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <i class="fa fa-music fa-5x"></i>
                                            </div>
                                            <div class="col-xs-8 text-right">
                                                <span>Notificaciones</span>
                                                <h2 class="font-bold">0</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                        <ol class="breadcrumb">
                                                    <li>
                                                        <a href="index.html">Home</a>
                                                    </li>
                                                    <li class="active">
                                                        <strong>Widgets</strong>
                                                    </li>
                                                </ol>-->
                    </div>
                </div>

                <div class="footer">
                    <div class="pull-right">
                        Versi&oacute;n <strong>0.4</strong> Libre.
                    </div>
                    <div>
                        <strong>Copyright</strong> PITEC PERU © 2018
                    </div>
                </div>
            </div>

        </div>
        <div id="Settings" class="modal fade">
            <div class="modal-dialog  modal-lg">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Configuraci&oacute;n de Usuario</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        <div class="col-md-2">Estilo de Letra</div>
                        <div class="col-md-4">
                            <select class="form-control" id="style-font" onchange="fn_ChangeFont(this.value);">
                                <option value="0">Arial (Defecto)</option>
                                <option value="1">Roboto</option>
                                <option value="2">Open Sans</option>
                                <option value="3">Nunito</option>
                                <option value="4">Abel</option>
                            </select>
                        </div>
                        <div class="col-md-2">Tama&ntilde;o de Letra</div>
                        <div class="col-md-4" style="height: ">
                            <select class="form-control" id="font-size" onchange="fn_ChangeFontSize(this.value);">
                                <option value="1">Peque&ntilde;o</option>
                                <option value="2" selected>Mediano (Defecto)</option>
                                <option value="3">Grande</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"> <b><i class="mdi mdi-close"></i> Cerrar</b></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mainly scripts -->
        <script src="dependences/js/jquery-2.1.1.js"></script>
        <script src="dependences/js/bootstrap.min.js"></script>
        <script src="dependences/js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="dependences/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

        <!-- Custom and plugin javascript -->
        <script src="dependences/js/inspinia.js"></script>
        <script src="dependences/js/plugins/pace/pace.min.js"></script>
        <script type="text/javascript">

            $(function(){
                //$("#Settings").modal("show");
            });

            let fn_ChangeFont = (val)=>{
                let font = ["Arial","Roboto","Open Sans","Nunito","Abel"];
                $('body').css("font-family", font[val]);
                return;
            };

            let fn_ChangeFontSize = (val)=>{
                let fontSize = ["10px","13px","16px"];
                $('body *').css("font-size", fontSize[val-1]);
                return;
            };
        </script>

    </body>
</html>


