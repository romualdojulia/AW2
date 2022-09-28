<html>
  <head>
    <title>Atividade 3° bimestre</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
		  <form name="form1" method="get" action="resposta.php">

        <!-- nome -->
        <p> Nome: <br> <input name="nome" type="text" id="nome" size="30" maxlength="30" /> </p>
      
        <!-- data de nascimento -->
        <p>Data de Nascimento: 
          <input type="date" name="datanasc" id="datanasc">
        </p>

        <!-- endereço -->
        <p>Endereço: </p>
        <textarea id="endereco" name="endereco" rows="2" cols="50"></textarea>

        <!-- estado civil -->
        <p>
          Estado civil: <br>
          <select name="estcivil" id="estcivil">
            <option value="Casado">Casado</option>
            <option value="Namorando">Namorando</option>
            <option value="Solteiro">Solteiro</option>
            <option value="Divorciado">Divoriciado</option>
            <option value="Viuvo">Viúvo</option>
          </select>
        </p>

        <!-- sexo -->
        <p>
          Sexo:<br />
          <input name="sexo" type="radio" value="Masculino" /> Masculino
          <input name="sexo" type="radio" value="Feminino" /> Feminino
        </p>

        <!-- meio de locomocao -->
        <p>
          Meio de locomoção:<br />
          <input name="locomocao" type="checkbox" id="locomocao" value="VeiculoProprio" />Veículo próprio
          <input name="locomocao" type="checkbox" id="locomocao" value="Coletivo" />Coletivo
          <input name="locomocao" type="checkbox" id="locomocao" value="Bicicleta" />Bicicleta
        </p>

        <!-- senha -->
        <p> Senha:
          <input type="password" name="senha" id="senha">
        </p>
					
        <!-- confirmar senha -->
        <p> Confirmar senha:
          <input type="password" name="confirmacao" id="confirmacao">
        </p>

        <!-- botoes -->
        <p><input type="submit" value="Enviar" /><input type="reset" value="Limpar" /></p>
        <input type="hidden" name="btnOK" value="1" />
      </form>
		
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>