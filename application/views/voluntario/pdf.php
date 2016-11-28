<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>EuVoluntário-Relatório</title>
        <link rel="icon" href="<?= base_url('assets/img/favicon.png') ?>">
<!--        <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" type="text/css">-->
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" type="text/css">
        <link rel="stylesheet" href="<?= base_url('assets/fonts/font-awesome-4.3.0/css/font-awesome.min.css') ?>" type="text/css">
        <style type="text/css">
            @page {
                margin: 10mm 5mm;
            }
            .break {
                page-break-inside: avoid;
            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-default navbar-fixed-top no-radius no-margin" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">
                        <img src="<?= base_url('assets/img/favicon.png') ?>" alt="logo">
                    </a>
                    <a class="navbar-brand hidden-xs" href="<?= site_url('Painel_academico') ?>">Banco de Oportunidades</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <b>Usuário: </b><?php echo $dadosAcademico->email ?> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?= site_url('Painel_academico/carregaEditarSenha') ?>"><i class="fa fa-wrench fa-fw"></i> Trocar de senha</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('Painel_academico/deslogar') ?>"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="page-content">
            <div class="usuario-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <h2 align="center">EuVoluntário - Relatório</h2>
                            <br>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="pn-heading">
                                        <span class="pull-left">
                                            <strong><b>Dados pessoais</b></strong>
                                        </span>
                                    </div>
                                    <br>
                                    <ul class="list-unstyled">
                                        <li><b>Nome: </b><?php echo $dadosVoluntario->nome_voluntario ?></li>
                                        <li><b>E-mail: </b><?php echo $dadosVoluntario->email ?></li>
                                        <li><b>Telefone: </b><?php echo $dadosVoluntario->telefone ?></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="pn-heading">
                                        <span class="pull-left">
                                            <strong><b>Trabalhos voluntários</b></strong>
                                        </span>
                                    </div>
                                    <br>
                                    <ul class="list-unstyled">
                                      <?php foreach ($dadosHistoricoPdf as $key): ?>


                                        <li><b>Vaga: </b><?php echo $key->nome ?></li>
                                        <li><b>Comentário da ONG: </b><?php echo $key->historico ?></li>
                                        <br>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <p>
                                      EuVoluntário - 2016 - Para maiores informações por favor entre em contato conosco.
                                    </p>


                                </div>
                            </div>











                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?= base_url('assets/js/jquery.js') ?>"></script>
        <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/scripts.js') ?>"></script>
    </body>
</html>
