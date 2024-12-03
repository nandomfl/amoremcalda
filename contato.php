<!-- contato.php -->
<?php include 'header.php'; ?>
<div class="conteudo">
    <h2>Contato</h2>
    <p>Entre em contato conosco. Teremos o prazer em atender você!</p>
    <form action="enviar_contato.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" required></textarea>
        <button type="submit">Enviar</button>
    </form>
</div>
<?php include 'footer.php'; ?>
