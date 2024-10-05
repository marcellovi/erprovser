<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de O.S</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/vendor/datatables.min.css">
    <link rel="stylesheet" href="assets/styles/css/themes/lite-purple.css">
    <link rel="stylesheet" href="assets/styles/vendor/perfect-scrollbar.css">
    <style>
        div.scroll {
            max-height: 500px;
            overflow: scroll;
            overflow-x: auto;
        }
    </style>
</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large clearfix">

        <!-- Top Menu and Left Side Menu -->
        <?php
            require_once ('layouts/partials/menu.php');
        ?>
        <!--=============== Left side End ================-->

        <!-- ============ Body content start ============= -->
        <div class="main-content-wrap sidenav-open d-flex flex-column">

            <!-- -->
            <div class="breadcrumb">
                <h1 class="mr-2">Sistema de OS</h1>
                <ul>
                    <li><a href="">Dashboard</a></li>
                    <li></li>
                </ul>
            </div>
            <div class="separator-breadcrumb border-top"></div>


            <div class="row">
                <!-- ICON BG -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                        <div class="card-body text-center">
                            <i class="i-File-Clipboard-File--Text"></i>
                            <div class="content">
                                <p class="text-muted mt-2 mb-0">ABERTA</p>
                                <p class="text-primary text-24 line-height-1 mb-2">25</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                        <div class="card-body text-center">
                            <i class="i-Financial"></i>
                            <div class="content">
                                <p class="text-muted mt-2 mb-0">FECHADA</p>
                                <p class="text-primary text-24 line-height-1 mb-2">21</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                        <div class="card-body text-center">
                            <i class="i-Checkout-Basket"></i>
                            <div class="content">
                                <p class="text-muted mt-2 mb-0">CANCELADAS</p>
                                <p class="text-primary text-24 line-height-1 mb-2">80</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                        <div class="card-body text-center">
                            <i class="i-Money-2"></i>
                            <div class="content">
                                <p class="text-muted mt-2 mb-0">TOTAL OS</p>
                                <p class="text-primary text-24 line-height-1 mb-2">220</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">

                <!-- New Users -->
                <div class="col-md-8">
                    <div class="card o-hidden mb-4">
                        <div class="card-header d-flex align-items-center">
                            <h3 class="w-50 float-left card-title m-0">Lista de O.S Programadas</h3>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">

                                <table id="user_table" class="table dataTable-collapse text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">N. OS</th>
                                            <th scope="col">RESPONSÁVEL</th>
                                            <th scope="col">TIPO</th>
                                            <th scope="col">NATUREZA</th>
                                            <th scope="col">STATUS</th>
                                            <th scope="col">DATA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Ricardo</td>
                                            <td>
                                                Corretiva
                                            </td>

                                            <td>Elétrica</td>
                                            <td><span class="badge badge-success">Aberta</span></td>
                                            <td>
                                                24/09/2024
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Marcello</td>
                                            <td>
                                                Corretiva Programada
                                            </td>

                                            <td>Refrigeração</td>
                                            <td><span class="badge badge-close">Fechada</span></td>
                                            <td>
                                                23/09/2024
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Emerson</td>
                                            <td>
                                                Preditiva
                                            </td>

                                            <td>Jardinagem</td>
                                            <td><span class="badge badge-primary">Programada</span></td>
                                            <td>
                                                24/08/2024
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Eduardo</td>
                                            <td>
                                                Preventiva Manual
                                            </td>

                                            <td>Limpeza</td>
                                            <td><span class="badge badge-danger">Cancelada</span></td>
                                            <td>
                                                01/09/2024
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Maria</td>
                                            <td>
                                                Melhoria
                                            </td>

                                            <td>Civil</td>
                                            <td><span class="badge badge-warning">Em Espera</span></td>
                                            <td>
                                                25/09/2024
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>Ricardo</td>
                                            <td>
                                                Instalação
                                            </td>

                                            <td>Eng. Clinica</td>
                                            <td><span class="badge badge-waiting">Aguardando Material</span></td>
                                            <td>
                                                30/09/2024
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7</th>
                                            <td>Junior</td>
                                            <td>
                                                Corretiva
                                            </td>

                                            <td>Analista de TI</td>
                                            <td><span class="badge badge-waiting">Aguardando Material</span></td>
                                            <td>
                                                30/09/2024
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">8</th>
                                            <td>Rui</td>
                                            <td>
                                                Preditiva
                                            </td>

                                            <td>Pintor</td>
                                            <td><span class="badge badge-warning">Em Espera</span></td>
                                            <td>
                                                25/09/2024
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of col-->

                <!-- notification -->
                <div class="col-lg-4 col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title" >Preventiva</div>
                            <div class="ul-widget-app__browser-list scroll" id="mydiv">

                                <div class="ul-widget-app__browser-list-1 mb-4">
                                    <i class="i-Gears  text-white bg-warning rounded-circle p-2  mr-3"></i>
                                    <span class="text-15">Elétrica</span>
                                    <span class="badge badge-success">ABERTA</span>
                                </div>
                                <div class="ul-widget-app__browser-list-1 mb-4">
                                    <i class="i-Gears  text-white green-500 rounded-circle p-2  mr-3"></i>
                                    <span class="text-15">Refrigeração</span>
                                    <span class="badge badge-close">FECHADA</span>
                                </div>
                                <div class="ul-widget-app__browser-list-1 mb-4">
                                    <i class="i-Gears  text-white cyan-500 rounded-circle p-2  mr-3"></i>
                                    <span class="text-15">Jardinagem</span>
                                    <span class="badge badge-info">PROGRAMADA</span>
                                </div>
                                <div class="ul-widget-app__browser-list-1 mb-4">
                                    <i class="i-Gears  text-white teal-500 rounded-circle p-2  mr-3"></i>
                                    <span class="text-15">Limpeza</span>
                                    <span class="badge badge-danger">CANCELADA</span>
                                </div>
                                <div class="ul-widget-app__browser-list-1 mb-4">
                                    <i class="i-Gears  text-white purple-500 rounded-circle p-2  mr-3"></i>
                                    <span class="text-15">Civil</span>
                                    <span class="badge badge-warning">EM ESPERA</span>
                                </div>
                                <div class="ul-widget-app__browser-list-1 mb-4">
                                    <i class="i-Gears  text-white bg-danger rounded-circle p-2  mr-3"></i>
                                    <span class="text-15">Eng. Clinica</span>
                                    <span class="badge badge-waiting">AGUARDANDO MATERIAL</span>
                                </div>
                                <div class="ul-widget-app__browser-list-1 mb-4">
                                    <i class="i-Gears  text-white green-500 rounded-circle p-2  mr-3"></i>
                                    <span class="text-15">Jardinagem</span>
                                    <span class="badge badge-success">ABERTA</span>
                                </div>
                                <div class="ul-widget-app__browser-list-1 mb-4">
                                    <i class="i-Gears  text-white green-500 rounded-circle p-2  mr-3"></i>
                                    <span class="text-15">Refrigeração</span>
                                    <span class="badge badge-close">FECHADA</span>
                                </div>
                                <div class="ul-widget-app__browser-list-1 mb-4">
                                    <i class="i-Gears  text-white green-500 rounded-circle p-2  mr-3"></i>
                                    <span class="text-15">Elétrica</span>
                                    <span class="badge badge-success">ABERTA</span>
                                </div>
                                <div class="ul-widget-app__browser-list-1 mb-4">
                                    <i class="i-Gears  text-white cyan-500 rounded-circle p-2  mr-3"></i>
                                    <span class="text-15">Jardinagem</span>
                                    <span class="badge badge-info">PROGRAMADA</span>
                                </div>
                                <div class="ul-widget-app__browser-list-1 mb-4">
                                    <i class="i-Gears  text-white bg-danger rounded-circle p-2  mr-3"></i>
                                    <span class="text-15">Eng. Clinica</span>
                                    <span class="badge badge-waiting">AGUARDANDO MATERIAL</span>
                                </div>
                                <div class="ul-widget-app__browser-list-1 mb-4">
                                    <i class="i-Gears  text-white bg-warning rounded-circle p-2  mr-3"></i>
                                    <span class="text-15">Elétrica</span>
                                    <span class="badge badge-success">ABERTA</span>
                                </div>
                                <div class="ul-widget-app__browser-list-1 mb-4">
                                    <i class="i-Gears  text-white bg-danger rounded-circle p-2  mr-3"></i>
                                    <span class="text-15">Eng. Clinica</span>
                                    <span class="badge badge-waiting">AGUARDANDO MATERIAL</span>
                                </div>
                                <div class="ul-widget-app__browser-list-1 mb-4">
                                    <i class="i-Gears  text-white green-500 rounded-circle p-2  mr-3"></i>
                                    <span class="text-15">Jardinagem</span>
                                    <span class="badge badge-success">ABERTA</span>
                                </div>
                                <div class="ul-widget-app__browser-list-1 mb-4">
                                    <i class="i-Gears  text-white teal-500 rounded-circle p-2  mr-3"></i>
                                    <span class="text-15">Limpeza</span>
                                    <span class="badge badge-danger">CANCELADA</span>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- end of row-->
        </div>
        <!-- ============ Body content End ============= -->
    </div>
    <!--=============== End app-admin-wrap ================-->

    <!-- ============ Search UI Start ============= -->
    <div class="search-ui">
        <div class="search-header">
            <img src="./assets/images/er_profile.png" alt="" class="logo">
            <button class="search-close btn btn-icon bg-transparent float-right mt-2">
                <i class="i-Close-Window text-22 text-muted"></i>
            </button>
        </div>

        <input type="text" placeholder="Type here" class="search-input" autofocus>

        <div class="search-title">
            <span class="text-muted">Search results</span>
        </div>

        <div class="search-results list-horizontal">
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="./assets/images/products/headphone-1.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">
                                $300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-danger">Sale</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="./assets/images/products/headphone-2.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">
                                $300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="./assets/images/products/headphone-3.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">
                                $300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="./assets/images/products/headphone-4.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">
                                $300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- PAGINATION CONTROL -->
        <div class="col-md-12 mt-5 text-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination d-inline-flex">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- ============ Search UI End ============= -->

    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/perfect-scrollbar.min.js"></script>
    <script src="assets/js/vendor/echarts.min.js"></script>
    <script src="assets/js/vendor/datatables.min.js"></script>

    <script src="assets/js/es5/echart.options.min.js"></script>
    <script src="assets/js/es5/dashboard.v2.script.min.js"></script>

    <script src="assets/js/es5/script.min.js"></script>
    <script src="assets/js/es5/sidebar.large.script.min.js"></script>

    <script src="assets/js/vendor/apexcharts.min.js"></script>
    <script src="assets/js/vendor/echarts.min.js"></script>
    <script src="assets/js/es5/echart.options.min.js"></script>
</body>

</html>
