<h2>Editar</h2>
<?php
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label for="">Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Email</label>
        <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Senha</label>
        <input type="password" name="senha" class="form-control" require>
    </div>
    <div class="mb-3">
        <label for="">Data nascimento</label>
        <input type="date" name="data_nasc"  value="<?php print $row->data_nasc; ?>"class="form-control">
    </div>
    <div class="mt-4">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</form>