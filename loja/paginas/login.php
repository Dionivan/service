<?php 
require_once "../src/model/Usuarios.php";
$u = new Usuarios();

require_once "../src/view/header.php";
require_once "../src/view/header_nav.php"; 
?>
    <style>
        div{
            background-color:#505D89;
        
        }
        .email{
          
        }
        .pass{
            
        }
        .passwoed{

        }
    </style>
    <main>
    <h2>:::Login:::</h2>
        <form method="post" action="../back/infologin.php">
            <div>
                <label class="email" for="email" style="color: darkred;">Digite seu email</label>
                <input type="email"  name="email" placeholder="exemplo@email.com" required class="cadastro"><br>
                <label class="pass" for="pass" style="color: darkred;">Digite sua senha</label>
                <input class="pass" type="password" name="pass" minlength="6" placeholder="senha" required class="cadastro">
                <br>
                <div>
                    <input type="checkbox" id="dropdownCheck" >
                    <label for="dropdownCheck" style="color: darkred;">
                    Remember me
                    </label>
                </div><br>
                <input type="submit" value="Enviar dados" class="cadastro">
                <input type="reset" value="Apagar dados" class="cadastro">
                <hr>
                    <a class="dropdown-item" href="../paginas/cadastro.php" style="color: darkred;">Novo, por aqui? Registre-se.</a><br>
                    <a class="dropdown-item" href="#" style="color: darkred;">Esqueceu a senha?</a></br>
            </div>


        </form> 

    </main>

<?php require_once "../src/view/footer.php"?>