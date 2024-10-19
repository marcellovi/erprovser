<?php

$dataPoints = array(
    array("x"=> 10, "y"=> 41),
    array("x"=> 20, "y"=> 35, "indexLabel"=> "Lowest"),
    array("x"=> 30, "y"=> 50),
    array("x"=> 40, "y"=> 45),
    array("x"=> 50, "y"=> 52),
    array("x"=> 60, "y"=> 68),
    array("x"=> 70, "y"=> 38),
    array("x"=> 80, "y"=> 71, "indexLabel"=> "Highest"),
    array("x"=> 90, "y"=> 52),
    array("x"=> 100, "y"=> 60),
    array("x"=> 110, "y"=> 36),
    array("x"=> 120, "y"=> 49),
    array("x"=> 130, "y"=> 41)
);

$dataPoints2 = array(
    array("label"=> "Food + Drinks", "y"=> 590),
    array("label"=> "Activities and Entertainments", "y"=> 261),
    array("label"=> "Health and Fitness", "y"=> 158),
    array("label"=> "Shopping & Misc", "y"=> 72),
    array("label"=> "Transportation", "y"=> 191),
    array("label"=> "Rent", "y"=> 573),
    array("label"=> "Travel Insurance", "y"=> 126)
);

$dataPoints3 = array(
    array("label"=> 1992, "y"=>105),
    array("label"=> 1993, "y"=>130),
    array("label"=> 1994, "y"=>158),
    array("label"=> 1995, "y"=>192),
    array("label"=> 1996, "y"=>309),
    array("label"=> 1997, "y"=>422),
    array("label"=> 1998, "y"=>566),
    array("label"=> 1999, "y"=>807),
    array("label"=> 2000, "y"=>1250),
    array("label"=> 2001, "y"=>1615),
    array("label"=> 2002, "y"=>2069),
    array("label"=> 2003, "y"=>2635),
    array("label"=> 2004, "y"=>3723),
    array("label"=> 2005, "y"=>5112),
    array("label"=> 2006, "y"=>6660),
    array("label"=> 2007, "y"=>9183),
    array("label"=> 2008, "y"=>15844),
    array("label"=> 2009, "y"=>23185),
    array("label"=> 2010, "y"=>40336),
    array("label"=> 2011, "y"=>70469),
    array("label"=> 2012, "y"=>100504),
    array("label"=> 2013, "y"=>138856),
    array("label"=> 2014, "y"=>178391),
    array("label"=> 2015, "y"=>229300),
    array("label"=> 2016, "y"=>302300),
    array("label"=> 2017, "y"=>368000)
);

?>

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
    <script>
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                exportEnabled: true,
                theme: "light1", // "light1", "light2", "dark1", "dark2"
                title:{
                    text: "Energia"
                },
                axisY:{
                    includeZero: true
                },
                data: [{
                    type: "column", //change type to bar, line, area, pie, etc
                    //indexLabel: "{y}", //Shows y value on all Data Points
                    indexLabelFontColor: "#5A5757",
                    indexLabelPlacement: "outside",
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();

            var chart2 = new CanvasJS.Chart("chartContainer2", {
                animationEnabled: true,
                exportEnabled: true,
                title:{
                    text: "Agua"
                },
                subtitles: [{
                    text: "lorem sumpin depuil"
                }],
                data: [{
                    type: "pie",
                    showInLegend: "true",
                    legendText: "{label}",
                    indexLabelFontSize: 16,
                    indexLabel: "{label} - #percent%",
                    yValueFormatString: "฿#,##0",
                    dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart2.render();

            var chart3 = new CanvasJS.Chart("chartContainer3", {
                animationEnabled: true,
                theme: "light2",
                title:{
                    text: "Preventiva "
                },
                axisY:{
                    title: "Energy (in megawatt)",
                    logarithmic: true,
                    titleFontColor: "#6D78AD",
                    gridColor: "#6D78AD",
                    includeZero: true,
                    labelFormatter: addSymbols
                },
                axisY2:{
                    title: "Energy (in megawatt)",
                    titleFontColor: "#51CDA0",
                    tickLength: 0,
                    labelFormatter: addSymbols
                },
                legend: {
                    cursor: "pointer",
                    verticalAlign: "top",
                    fontSize: 16,
                    itemclick: toggleDataSeries
                },
                data: [{
                    type: "line",
                    markerSize: 0,
                    showInLegend: true,
                    name: "Log Scale",
                    yValueFormatString: "#,##0 MW",
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                },
                    {
                        type: "line",
                        markerSize: 0,
                        axisYType: "secondary",
                        showInLegend: true,
                        name: "Linear Scale",
                        yValueFormatString: "#,##0 MW",
                        dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
                    }]
            });
            chart3.render();

            function addSymbols(e){
                var suffixes = ["", "K", "M", "B"];

                var order = Math.max(Math.floor(Math.log(Math.abs(e.value)) / Math.log(1000)), 0);
                if(order > suffixes.length - 1)
                    order = suffixes.length - 1;

                var suffix = suffixes[order];
                return CanvasJS.formatNumber(e.value / Math.pow(1000, order)) + suffix;
            }

            function toggleDataSeries(e){
                if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                    e.dataSeries.visible = false;
                }
                else{
                    e.dataSeries.visible = true;
                }
                chart.render();
            }
        }


    </script>
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

            <!-- Content with Tables and Registration -->
            <div class="row">

                <!-- Graficos -->
<!--                <div class="row">-->
<!--                    <div class="col-md-6">-->
<!--                        <div class="card mb-4">-->
<!--                            <div class="card-body">-->
<!--                                <div class="card-title">Basic Bar chart</div>-->
<!--                                <div id="basicBar" style="height: 300px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;" _echarts_instance_="ec_1729296617982"><div style="position: relative; overflow: hidden; width: 463px; height: 300px; padding: 0px; margin: 0px; border-width: 0px; cursor: pointer;"><canvas data-zr-dom-id="zr_0" width="463" height="300" style="position: absolute; left: 0px; top: 0px; width: 463px; height: 300px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div style="position: absolute; display: none; border-style: solid; white-space: nowrap; z-index: 9999999; transition: left 0.4s cubic-bezier(0.23, 1, 0.32, 1), top 0.4s cubic-bezier(0.23, 1, 0.32, 1); background-color: rgba(0, 0, 0, 0.8); border-width: 0px; border-color: rgb(51, 51, 51); border-radius: 4px; color: rgb(255, 255, 255); font: 14px / 21px &quot;Microsoft YaHei&quot;; padding: 5px; left: 713px; top: 193px; pointer-events: none;"><span style="display:inline-block;margin-right:5px;border-radius:10px;width:10px;height:10px;background-color:#5f6bc2;"></span>25: 921</div></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-6">-->
<!--                        <div class="card mb-4">-->
<!--                            <div class="card-body">-->
<!--                                <div class="card-title">Multiple Bar chart</div>-->
<!--                                <div id="multipleBar" style="height: 300px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;" _echarts_instance_="ec_1729296617983"><div style="position: relative; overflow: hidden; width: 463px; height: 300px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;"><canvas data-zr-dom-id="zr_0" width="463" height="300" style="position: absolute; left: 0px; top: 0px; width: 463px; height: 300px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div style="position: absolute; display: none; border-style: solid; white-space: nowrap; z-index: 9999999; transition: left 0.4s cubic-bezier(0.23, 1, 0.32, 1), top 0.4s cubic-bezier(0.23, 1, 0.32, 1); background-color: rgba(0, 0, 0, 0.8); border-width: 0px; border-color: rgb(51, 51, 51); border-radius: 4px; color: rgb(255, 255, 255); font: 14px / 21px &quot;Microsoft YaHei&quot;; padding: 5px; left: 202px; top: 203px; pointer-events: none;">Series 2<br><span style="display:inline-block;margin-right:5px;border-radius:10px;width:10px;height:10px;background-color:#2f4554;"></span>1: 82,000</div></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-6">-->
<!--                        <div class="card mb-4">-->
<!--                            <div class="card-body">-->
<!--                                <div class="card-title">Multiple Bar chart 2</div>-->
<!--                                <div id="multipleBar2" style="height: 300px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;" _echarts_instance_="ec_1729296617984"><div style="position: relative; overflow: hidden; width: 463px; height: 300px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;"><canvas data-zr-dom-id="zr_0" width="463" height="300" style="position: absolute; left: 0px; top: 0px; width: 463px; height: 300px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div style="position: absolute; display: none; border-style: solid; white-space: nowrap; z-index: 9999999; transition: left 0.4s cubic-bezier(0.23, 1, 0.32, 1), top 0.4s cubic-bezier(0.23, 1, 0.32, 1); background-color: rgba(50, 50, 50, 0.7); border-width: 0px; border-color: rgb(51, 51, 51); border-radius: 4px; color: rgb(255, 255, 255); font: 14px / 21px &quot;Microsoft YaHei&quot;; padding: 5px; left: 535px; top: 55px; pointer-events: none;">Dec, 7<br><span style="display:inline-block;margin-right:5px;border-radius:10px;width:10px;height:10px;background-color:#3182bd;"></span>Campaign: 215<br><span style="display:inline-block;margin-right:5px;border-radius:10px;width:10px;height:10px;background-color:#74c475;"></span>Steppe: 210<br><span style="display:inline-block;margin-right:5px;border-radius:10px;width:10px;height:10px;background-color:#e6550d;"></span>Desert: 130<br><span style="display:inline-block;margin-right:5px;border-radius:10px;width:10px;height:10px;background-color:#756bb1;"></span>Wetland: 50</div></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-6">-->
<!--                        <div class="card mb-4">-->
<!--                            <div class="card-body">-->
<!--                                <div class="card-title">Zoom Bar</div>-->
<!--                                <div id="zoomBar" style="height: 300px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;" _echarts_instance_="ec_1729296617985"><div style="position: relative; overflow: hidden; width: 463px; height: 300px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;"><canvas data-zr-dom-id="zr_0" width="463" height="300" style="position: absolute; left: 0px; top: 0px; width: 463px; height: 300px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div style="position: absolute; display: none; border-style: solid; white-space: nowrap; z-index: 9999999; transition: left 0.4s cubic-bezier(0.23, 1, 0.32, 1), top 0.4s cubic-bezier(0.23, 1, 0.32, 1); background-color: rgba(50, 50, 50, 0.7); border-width: 0px; border-color: rgb(51, 51, 51); border-radius: 4px; color: rgb(255, 255, 255); font: 14px / 21px &quot;Microsoft YaHei&quot;; padding: 5px; left: 520px; top: 49px; pointer-events: none;">18<br><span style="display:inline-block;margin-right:5px;border-radius:10px;width:10px;height:10px;background-color:rgba(0,0,0,0.05);"></span>Interested: 500<br><span style="display:inline-block;margin-right:5px;border-radius:10px;width:10px;height:10px;background-color:#83bff6;"></span>Going: 123</div></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
                <div class="col-lg-4 col-md-4 mb-4">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h3 class="w-50 float-left card-title m-0">Grafico de Energia</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div id="chartContainer" style="height: 270px; width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 mb-4">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h3 class="w-50 float-left card-title m-0">Grafico de Agua</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div id="chartContainer2" style="height: 270px; width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 mb-4">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h3 class="w-50 float-left card-title m-0">Grafico Preventiva</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div id="chartContainer3" style="height: 270px; width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End of Graficos -->


                <!-- Gestao Cadastro -->
                <div class="col-md-8">
                    <div class="card o-hidden mb-4">
                        <div class="card-header d-flex align-items-center">
                            <h3 class="w-50 float-left card-title m-0">Gestão de Compras</h3>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">

                                <table id="user_table" class="table dataTable-collapse text-center">
                                    <thead>
                                    <tr>
                                        <th scope="col">AÇÕES</th>
                                        <th scope="col">NOME</th>
                                        <th scope="col">INFO.1</th>
                                        <th scope="col">INFO.2</th>
                                        <th scope="col">INFO.3</th>
                                        <th scope="col">STATUS</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <a href="#" class="text-primary mr-2">
                                                <i class="nav-icon i-Receipt-3 font-weight-bold"></i>
                                            </a>
                                            <a href="#" class="text-success mr-2">
                                                <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                            </a>
                                            <a href="#" class="text-danger mr-2">
                                                <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                            </a>
                                        </td>
                                        <td>Ricardo</td>
                                        <td>
                                            Masculino
                                        </td>

                                        <td>RJ/RJ</td>
                                        <td>
                                            24/09/2024
                                        </td>
                                        <td><span class="badge badge-success">Aberta</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="text-primary mr-2">
                                                <i class="nav-icon i-Receipt-3 font-weight-bold"></i>
                                            </a>
                                            <a href="#" class="text-success mr-2">
                                                <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                            </a>
                                            <a href="#" class="text-danger mr-2">
                                                <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                            </a>
                                        </td>
                                        <td>Joana</td>
                                        <td>
                                            Feminino
                                        </td>

                                        <td>RJ/RJ</td>
                                        <td>
                                            24/09/2024
                                        </td>
                                        <td><span class="badge badge-warning">Em Andamento</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="text-primary mr-2">
                                                <i class="nav-icon i-Receipt-3 font-weight-bold"></i>
                                            </a>
                                            <a href="#" class="text-success mr-2">
                                                <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                            </a>
                                            <a href="#" class="text-danger mr-2">
                                                <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                            </a>
                                        </td>
                                        <td>Marcello</td>
                                        <td>
                                            Masculino
                                        </td>

                                        <td>RJ/RJ</td>
                                        <td>
                                            01/07/2000
                                        </td>
                                        <td><span class="badge badge-success">Aberta</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="text-primary mr-2">
                                                <i class="nav-icon i-Receipt-3 font-weight-bold"></i>
                                            </a>
                                            <a href="#" class="text-success mr-2">
                                                <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                            </a>
                                            <a href="#" class="text-danger mr-2">
                                                <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                            </a>
                                        </td>
                                        <td>Emerson</td>
                                        <td>
                                            Masculino
                                        </td>

                                        <td>RJ/RJ</td>
                                        <td>
                                            24/01/2014
                                        </td>
                                        <td><span class="badge badge-success">Aberta</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="text-primary mr-2">
                                                <i class="nav-icon i-Receipt-3 font-weight-bold"></i>
                                            </a>
                                            <a href="#" class="text-success mr-2">
                                                <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                            </a>
                                            <a href="#" class="text-danger mr-2">
                                                <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                            </a>
                                        </td>
                                        <td>Maria</td>
                                        <td>
                                            Feminino
                                        </td>

                                        <td>SP/SP</td>
                                        <td>
                                            05/09/2024
                                        </td>
                                        <td><span class="badge badge-danger">Encerrada</span></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of col-->

                <!-- Solicitaçao de Compras -->
                <div class="col-lg-4 col-md-4 mb-4">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h3 class="w-50 float-left card-title m-0">Solicitação de Compras</h3>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <p class="font-weight-400 mb-2">Fornecedor</p><input type="text" placeholder="Nome" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <p class="font-weight-400 mb-2">Tipo</p>
                                    <select id="theme_selector" class="form-control">
                                        <option value="" selected>---Selecione---</option>
                                        <option value="tipo1">Tipo 1</option>
                                        <option value="tipo2">Tipo 2</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <p class="font-weight-400 mb-2">CPF/CNPJ</p><input type="text" placeholder="999.999.999-99" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <p class="font-weight-400 mb-2">Endereço</p><input type="text" placeholder="Endereço" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <p class="font-weight-400 mb-2">Contato</p><input type="text" placeholder="+9 (999) 999-9999" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <p class="font-weight-400 mb-2">Tipo Prestador Serv.</p>
                                    <select id="theme_selector" class="form-control">
                                        <option value="Nenhum" selected>---Nenhum---</option>
                                        <option value="Tipo 1">Tipo 1</option>
                                        <option value="Tipo 2">Tipo 2</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <p class="font-weight-400 mb-2">Data Nasc.</p><input type="text" placeholder="mm/dd/yy" class="form-control">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <p class="font-weight-400 mb-2">CPF/CNPJ</p><input type="text" placeholder="99.999.999/9999-99" class="form-control">
                                </div>
                            </div>
                            <button type="button" class="btn float-right btn-primary">Registrar</button>
                            <!-- <div class="ul-widget-app__browser-list scroll" id="mydiv">

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
                            </div> -->


                        </div>
                    </div>
                </div>
                <!-- End Cadastro Profissionais -->




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

    <script src="assets/js/vendor/datatables.min.js"></script>


    <script src="assets/js/es5/dashboard.v2.script.min.js"></script>

    <script src="assets/js/es5/script.min.js"></script>
    <script src="assets/js/es5/sidebar.large.script.min.js"></script>

    <script src="assets/js/vendor/apexcharts.min.js"></script>
    <script src="assets/js/es5/echart.options.min.js"></script>

    <!-- Charts -->
    <script src="assets/js/es5/echart.options.min.js"></script>
    <script src="assets/js/vendor/echarts.min.js"></script>
    <script src="assets/js/vendor/echarts.min.js"></script>

    <!-- Different type of Chart Canvas -->
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>


</body>

</html>
