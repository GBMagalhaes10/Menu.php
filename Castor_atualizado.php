<?php 


   //Recebe o nome do arquivo login.php e vai para a var logado
   if(isset($_SESSION['acesso'])){
     $logado=$_SESSION['acesso'];
   }else{
   $_SESSION["deslogar"]=false;
   }

   if(isset($_SESSION['nome'])){
    $nome=$_SESSION['nome'];
    $recepcao=$_SESSION['nome'];
   }else{
   $nome="Erro";
     $recepcao="";
   }

?>



<!DOCTYPE html>
<html lang="pt-br">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Castor Sistema de Arquivamento</title>
    <link rel="shortcut icon" href="castor.png">
    <link rel="stylesheet" href="index castor.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>



<body>
	
    <input type="checkbox" id="check">


    
    <header><!--header começo-->
        

                   <label for="check"> <!--Menu lateral-->
                         <ion-icon name="menu-outline" id="sidebar_btn"></ion-icon>
                   </label>

        
                     <div class="left"> <!--Título do header-->
                         <h3>-<span> Castor</span> Sistema Digital de Arquivamento</h3>
                     </div>

             <img src="Logo branca.png" alt="Logo" width="200" height="200" class="img_logo"> <!--lOGO DO ISERJ-->
      

                    <div class="right">
                        <a href="../acesso/login/deslogar.php" class="sair_btn">Sair</a>
                    </div>


    </header><!--header final-->

 
    
    <div class="sidebar"> <!--sidebar começo-->

        <a href="Castor 2.0.php"><ion-icon name="home-outline"></ion-icon><span>Início</span></a>
        
        <center>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzs-J5KPn8z7txH9ro2sVHSMxxrOmYjquQs6vd2Q9phXQylBYQsLxByadgFKX26E8GCrQ&usqp=CAU" class="image" alt="">
            <div class="name-usu">
                <label><span><?php echo $nome?></span></label>
            </div>
        </center>
        

        <br>
        
        <!--ícones-->
        <a href="../consultarcaixa/consultarcaixa.php"><ion-icon name="search-outline"></ion-icon><span>Consultar Aluno</span></a>
        <a href="../buscar.php"><ion-icon name="folder-open-outline"></ion-icon><span>Buscar Caixa</span></a> 
        
        <?php  
      
         if(isset($_SESSION['acesso']) and $_SESSION['acesso']=="Admin"){
         echo '<a href="../cadastraraluno/cadastraraluno.php"><ion-icon name="add-circle" style = "margin-right: 1.25%;"></ion-icon><span>Cadastrar Aluno</span></a>';
         }
            if(isset($_SESSION['acesso']) and $_SESSION['acesso']=="Admin"){
         echo '<a href="../editaraluno/editaraluno.php"><ion-icon name="construct" style = "margin-right: 1.25%;"></ion-icon><span>Editar Aluno</span></a>';
         }
         
         if(isset($_SESSION['acesso']) and $_SESSION['acesso']=="Admin"){
         echo '<a href="../cadastrarcaixa/cadastrarcaixa.php"><ion-icon name="add-circle" style = "margin-right: 1.25%;"></ion-icon><span>Criar Caixa</span></a>';
         }
         
         if(isset($_SESSION['acesso']) and $_SESSION['acesso']=="Admin"){
         echo '<a href="../alterarcaixa/alterarcaixa.php?pag=1"><ion-icon name="hammer" style = "margin-right: 1.25%;"></ion-icon><span>Alterar Caixa</span></a>';
         }
         
         if(isset($_SESSION['acesso']) and $_SESSION['acesso']=="Admin"){
         echo '<a href="../cadastrousuario/cadastrarusuario.php"><ion-icon name="add-circle" style = "margin-right: 1.25%;"></ion-icon><span>Cadastrar Usuário</span></a>';
         }
         
         if(isset($_SESSION['acesso']) and $_SESSION['acesso']=="Admin"){
         echo '<a href="../editarusuario/alterarusuario.php?pag=1"><ion-icon name="hammer" style = "margin-right: 1.25%;"></ion-icon><span>Editar Usuário</span></a>';
         }
         
         if(isset($_SESSION['acesso']) and $_SESSION['acesso']=="Admin"){
         echo '<a href="../cadastrarcurso/cadastrarcurso.php"><ion-icon name="add-circle" style = "margin-right: 1.25%;"></ion-icon><span>Cadastrar Curso</span></a>';
         }
         
         if(isset($_SESSION['acesso']) and $_SESSION['acesso']=="Admin"){
         echo '<a href="../editarcurso/alterarcurso.php?pag=1"><ion-icon name="hammer" style = "margin-right: 1.25%;"></ion-icon><span>Editar Curso</span></a>';
         }
         
         if(isset($_SESSION['acesso']) and $_SESSION['acesso']=="Admin"){
         echo '<a href="../cadastrarlocal/cadastrarlocal.php"><ion-icon name="add-circle" style = "margin-right: 1.25%;"></ion-icon><span>Cadastrar Local</span></a>';
         }
         
         if(isset($_SESSION['acesso']) and $_SESSION['acesso']=="Admin"){
         echo '<a href="../editarlocal/editarlocal.php?pag=1"><ion-icon name="hammer" style = "margin-right: 1.25%;"></ion-icon><span>Editar Local</span></a>';
         }
        
         ?>
        
        <br>

    </div> <!--sidebar final-->
    
    <div class="content"></div> <!--manipular o background-->
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



</body>

</html>