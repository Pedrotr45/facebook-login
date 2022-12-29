<?php

if(isset($_POST['nome']))

{
    
   // print_r('nome:'.$_POST['nome']);
   // print_r('<br>');
   // print_r('sobrenome:'.$_POST['sobrenome']);
   //
   // print_r('<br>');
   // print_r('email:'.$_POST['email']);
   // print_r('<br>');
   // print_r('senha:'.$_POST['senha']);
   // print_r('<br>');
   // print_r('dia:'.$_POST['dia']);
    //print_r('<br>');
   // print_r('mes:'.$_POST['mes']);
   // print_r('<br>');
   // print_r('ano:'.$_POST['ano']);
   // print_r('<br>');
   // print_r('sexo:'.$_POST['sexo']);

    include_once('conexao.php');

    $nome=$_POST['nome'];
    $sobrenome=$_POST['sobrenome'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $mes=$_POST['mes'];
    $ano=$_POST['ano'];
    $sexo=$_POST['sexo'];

    $result=mysqli_query($conexao,"INSERT INTO  login (nome,sobrenome,email,senha,mes,ano,sexo)
    VALUES ('$nome','$sobrenome','$email','$senha','$mes','$ano','$sexo')");
}


?>








<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login facebook">
    <meta name="keywords" content="html & css">
    <meta name="author" content="Pedro henrique">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:wght@100&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Playfair+Display&family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
    <title>Login facebook</title>
</head>
<body>
    <header>
        <div class="center">
            <div class="logo">
                <h2>facebook</h2>

            </div><!--logo-->
            <form class="form-login">
                    <div class="form-element">
                        <p>E-mail ou telefone:</p>
                        <input type="email"/>

                    </div><!--form-element-->
                    <div class="form-element">
                        <p>Senha:</p>
                        <input type="password"/>

                    </div><!--form-element-->
                    <div class="form-element">
                        <input type="submit" name="açao" value="Enviar"/>

                    </div><!--form-element-->
                    

            </form><!--form-login-->
            <div class="clear"></div>

        </div><!--center-->
        
    </header>
    <section class="main">
        <div class="center">
         <div class="img">
            <img src="imagem/comunity.png" alt="comunity">

         </div><!--img-->
         <div class="abri-conta">
            <h2>Abra sua conta </h2>
            <h3>É gratuito e sempre será!</h3>
            <form action="form.php" method="POST" class="criar-conta">
              
                <div class="w50">
                    <input name="nome" placeholder="nome" type="text">

                </div><!--w50-->
                
                <div class="w50">
                    <input name="sobrenome" placeholder="sobrenome" type="text">

                </div><!--w100-->
                
                <div class="w100">
                    <input name="email" placeholder="E-mail" type="email">
                </div><!--w100-->
                <div class="w100">
                    <input name="senha" placeholder="senha" type="password">

                </div><!--w100-->
                <div class="w100">
                    <h3>Data de Nascimento:</h3>
                    <select class="nascimento" name="dia">
                        
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                            
                    </select>
                    <select class="nascimento" name="mes">
                        <option value="janeiro">janeiro</option>
                        <option value="fevereiro">fevereiro</option>
                        <option value="março">março</option>
                        <option value="abriu">abriu</option>
                        <option value="junho">junho</option>
                        <option value="julho">julho</option>
                        <option value="agosto">agosto</option>
                        <option value="setembro">setembro</option>
                        <option value="outubro">outubro</option>
                        <option value="novembro">novembro</option>
                        <option value="dezembro">dezembro</option>

                    </select>
                    <select class="nascimento" name="ano">
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>

                    </select>
                    <div class="clear"></div>

                </div><!--w100-->
                <div class="w100">
                    <div class="input-radio">
                        <input type="radio" name="sexo" value="Masculino"><span>Masculino</span>
                        
                    </div><!--input-radio-->
                    <div class="input-radio">
                        <input type="radio" name="sexo" value="Feminino"><span>Feminino</span>
                        
                    </div><!--input-radio-->
                    <div class="clear"></div>

                </div><!--w100-->
                <div class="w100">
                    <input type="submit" name="açao" value="Cadastrar!">

                </div><!--w100-->
                <div class="clear"></div>

            </form><!--cria-conta-->

         </div><!--abri-conta-->
          

        </div><!--center-->
        <div class="clear"></div>
      


    </section><!--main-->

    <section class="linguas">
        <div class="center">
            <a class="selected-lingua" href="#">Português</a>
            <a  href="#">Inglês</a>
            <a  href="#">Francês</a>
            <a href="#">Holandês</a>
            <a  href="#">Chinês</a>
            <a  href="#">Japonês</a>
            <a  href="#">Libanês</a>
            <a href="#">Norueguês</a>
            


        </div><!--center-->
        <div class="center" style="border: 0; padding-top: 20px;">
            <a href="#">Cadastre-se</a>
            <a  href="#">Entra</a>
            <a  href="#">Messenger</a>
            <a href="#">facebook lite</a>
            <a  href="#">Celular</a>
            <a  href="#">Encontra amigos</a>
            <a  href="#">Pessoas</a>
            <a href="#">Páginas</a>
            <a href="#">Locais</a>
            <a href="#">Jogos</a>
            <a href="#">Marketplace</a>
            <a href="#">Videos</a>
            <a href="#">Grupos</a>
            


        </div><!--center-->
    </section><!--linguas-->
    </body>
</html>