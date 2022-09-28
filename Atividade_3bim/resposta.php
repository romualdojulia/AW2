<!DOCTYPE html>
<html lang="en">
<body>

  <!-- dados pessoais -->
  <p>Seja bem vindo(a) <?php echo $_GET["nome"]."! Você nasceu no dia {$_GET["datanasc"]} é do sexo {$_GET["sexo"]} e seu estado civil é: {$_GET["estcivil"]} "; ?></p>

  <!-- moradia -->
  <p>Você mora em <?php echo $_GET["endereco"]. " e seu meio de locomoção é: {$_GET["locomocao"]} "; ?></p>

  <!-- configurações de senha -->
  <p>Você cadastrou a senha: <?php echo $_GET["senha"]. " e sua confirmação foi: {$_GET["confirmacao"]} "; ?></p>
</body>
</html>