<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="img/jellyfish_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/cadastro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Petit+Formal+Script&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bona+Nova+SC:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <header>
      <div><img id="jellyfish_logo" src="img/jellyfish_logo.png" alt="logo" width=50px></div> <div class="paradise"> Jellyfish Paradise </div>
    </header>


           <br>
              <h1 class="text-center" style="color: #06C3D0;">CADASTRO DE FORNECEDOR</h1>
            <br>
     <div class="campos_respostas">
    <form action="#" method="POST">
        
          
              <label class="form-label"><h3>Nome da Empresa</h3>
                <input type="text"  name="nome" style="border-radius: 30px;border: 3px solid #CB9FBB;  width: 400px;height: 40px; color: #06C3D0;" required></label>
              
            <br>
              <label class="form-label"><h3>CNPJ</h3>             
            <input type="number" name="cnpj" id="cnpj" onblur="validarCNPJ(this.value);" style="border-radius: 30px;border: 3px solid #CB9FBB;  width: 400px;height: 40px; color: #06C3D0;" required></label>

            <br>
              <label class="form-label"><h3>ID do Contrato</h3> <input type="text"  name="id" style="border-radius: 30px;border: 3px solid #CB9FBB;  width: 400px;height: 40px; color: #06C3D0;" required></label>
              
              <br>
              <label class="form-label"><h3>CEP</h3> <input type="text" name="cep" id="cep" style="border-radius: 30px;border: 3px solid #CB9FBB;  width: 400px;height: 40px; color: #06C3D0;"
              onblur="pesquisacep(this.value);" required></label>
              
              <br>
              <label class="form-label"><h3>Rua</h3> <input type="text" name="rua" id="rua" style="border-radius: 30px;border: 3px solid #CB9FBB;  width: 400px;height: 40px; color: #06C3D0;" required></label>
              
              <br>
              <label class="form-label"><h3>Nº</h3> <input type="number"  name="num" style="border-radius: 30px;border: 3px solid #CB9FBB;  width: 400px;height: 40px; color: #06C3D0;" required></label>
              
              <br>
              <label class="form-label"><h3>Bairro</h3> <input type="text"  name="bairro" id="bairro" style="border-radius: 30px;border: 3px solid #CB9FBB;  width: 400px;height: 40px; color: #06C3D0;" required></label>
              
              <br>
              <label class="form-label"><h3>Cidade</h3> <input type="text"  name="cidade" id="cidade" style="border-radius: 30px;border: 3px solid #CB9FBB;  width: 400px;height: 40px; color: #06C3D0;" required></label>
              
              <br>
              <label class="form-label"><h3>Estado</h3> <input type="text"  name="estado" id="uf" style="border-radius: 30px;border: 3px solid #CB9FBB;  width: 400px;height: 40px; color: #06C3D0;" required></label>
              
              <br>
              <label class="form-label"><h3>Telefone</h3> <input type="number" name="celular"style="border-radius: 30px;border: 3px solid #CB9FBB;  width: 400px;height: 40px; color: #06C3D0;" required></label>
              
              <br>
              <label class="form-label"><h3>Email</h3> <input type="email"  name="email" style="border-radius: 30px;border: 3px solid #CB9FBB;  width: 400px;height: 40px; color: #06C3D0;" required></label>
                
              <br>
              <br>
               <input type="submit" value="cadastrar" style="border-radius: 30px;border: 3px solid #CB9FBB; background-color:#CB9FBB ;  width: 150px;height: 40px; color: white;" >
 
        </div>
    
 

   


      </form>
    </body>
  </html>
    
</body>
<script>
    function validarCNPJ(cnpj) {
 
 cnpj = cnpj.replace(/[^\d]+/g,'');

 if(cnpj == '') return false;
  
 if (cnpj.length != 14)
     return false;

 // Elimina CNPJs invalidos conhecidos
 if (cnpj == "00000000000000" || 
     cnpj == "11111111111111" || 
     cnpj == "22222222222222" || 
     cnpj == "33333333333333" || 
     cnpj == "44444444444444" || 
     cnpj == "55555555555555" || 
     cnpj == "66666666666666" || 
     cnpj == "77777777777777" || 
     cnpj == "88888888888888" || 
     cnpj == "99999999999999")
     return false;
      
 // Valida DVs
 tamanho = cnpj.length - 2
 numeros = cnpj.substring(0,tamanho);
 digitos = cnpj.substring(tamanho);
 soma = 0;
 pos = tamanho - 7;
 for (i = tamanho; i >= 1; i--) {
   soma += numeros.charAt(tamanho - i) * pos--;
   if (pos < 2)
         pos = 9;
 }
 resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
 if (resultado != digitos.charAt(0))
     return false;
      
 tamanho = tamanho + 1;
 numeros = cnpj.substring(0,tamanho);
 soma = 0;
 pos = tamanho - 7;
 for (i = tamanho; i >= 1; i--) {
   soma += numeros.charAt(tamanho - i) * pos--;
   if (pos < 2)
         pos = 9;
 }
 resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
 if (resultado != digitos.charAt(1))
       return false;
        
 return true;
 
}

    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {
        
        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };
</script>
</html>

<?php
if(!empty($_POST))
{
  $cliente = array($_POST['nome'], $_POST['cnpj'], $_POST['rg'], $_POST['cep'], $_POST['rua'], $_POST['num'], $_POST['bairro'], $_POST['cidade'], $_POST['estado'], $_POST['celular'], $_POST['email'] );

  $conteudo = "Cliente: ";
  
  for($i = 0; $i < count($cliente); $i++)
  {
   "<br>".$cliente[$i];
    $conteudo .= $cliente[$i].", ";
  }

  $conteudo .= "

";

  $caminho = "cadastros/fornecedor.txt"; //caminho onde sera criado o arquivo
  
        if(file_put_contents($caminho,$conteudo,FILE_APPEND))
        {
          echo"<script> alert('Dados cadastrado com sucesso');</script>";
        }
        else
        {
          echo"<script> alert('Erro ao cadastrar!');</script>";
        }
  }
?>