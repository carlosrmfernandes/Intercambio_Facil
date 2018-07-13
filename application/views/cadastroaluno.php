<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!--<html lang="en">
    <head>

    </head>
    <body>
        <form method="post" enctype="multipart/form-data" action="<?= base_url('cadastroalunocontrol') ?>">
            <input type="text" name="nome_aluno" placeholder="nome_aluno"/>
            <input type="text" name="pais" placeholder="pais"/>
            <input type="text" name="celular" placeholder="celular"/>
            <input type="file" name="nome_img_perfil"/>
            <input type="text" name="cep" placeholder="cep"/>
            <input type="text" name="endereco" placeholder="endereco"/>
            <input type="text" name="estado" placeholder="estado"/>
            <input type="text" name="cidade" placeholder="cidade"/>  
            <input type="text" name="email" placeholder="email"/>
            <input type="password" name="senha" placeholder="senha"/>
            <input type="password" name="repsenha" placeholder="repsenha"/>
            <input type="submit" name="Enviar" />           
        </form>
    </body>
</html>-->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?= base_url('cadastroalunocontrol') ?>">
    <fieldset>

        <!-- Form Name -->
        <legend align="center"><a href="http://localhost:8888/IntercambioFacil">Back</a> Cadastro do Aluno</legend>
        <div style="background-color: #4ED4E8"></div>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="identificacao">Nome do Aluno</label>  
            <div class="col-md-5">
                <input id="identificacao" name="nome_aluno" placeholder="nome_aluno" type="text" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="nome">Pais</label>  
            <div class="col-md-5">
                <input id="nome" name="pais" placeholder="pais" type="text" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="cpf">Celular</label>  
            <div class="col-md-5">
                <input id="cpf" name="celular" placeholder="+(cod) 99 999 999 9" type="text" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="datanascimento">Carregar Img Perfil</label>  
            <div class="col-md-4">
                <input id="datanascimento" type="file" name="nome_img_perfil" class="form-control input-md">

            </div>
        </div>

        <!-- Select Basic -->

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="cep">CEP</label>  
            <div class="col-md-4">
                <input id="cep" name="cep" placeholder="cep" type="text" placeholder="00000000" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="endereco">Endereco</label>  
            <div class="col-md-8">
                <input id="endereco" name="endereco" type="text" placeholder="Endereço Complemento" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="bairro">Estado</label>  
            <div class="col-md-5">
                <input id="bairro" name="estado" placeholder="estado" type="text" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="cidade">Cidade</label>  
            <div class="col-md-6">
                <input id="cidade" name="cidade" placeholder="cidade" type="text" class="form-control input-md">

            </div>
        </div>


        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="celular">Email</label>  
            <div class="col-md-4">
                <input id="celular" name="email" type="text" placeholder="Email@email.com" class="form-control input-md">

            </div>
        </div>


        <!-- Password input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="senha">Senha</label>
            <div class="col-md-4">
                <input id="senha" name="senha"F type="password" placeholder="Entre com a Senha" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Password input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="confirmasenha">Confirma Senha</label>
            <div class="col-md-4">
                <input id="confirmasenha"  name="repsenha" type="password" placeholder="Confirme a Senha" class="form-control input-md">

            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton">Gravar</label>
            <div class="col-md-4">
                <button id="singlebutton" name="Enviar" class="btn btn-primary">Gravar</button>
            </div>
        </div>

    </fieldset>
</form>

