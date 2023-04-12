<form action="" class="internal-pages-form">
    <div class="input-box">
        <input type="text" placeholder="Digite seu nome*">
    </div>

    <div class="input-box">
        <input type="text" placeholder="Digite seu e-mail*">
    </div>

    <div class="input-box">
        <input type="text" placeholder="Digite seu telefone*">
    </div>

    <?php if ($pageId == 'single-service') : ?>

        <div class="input-box off">
            <input type="text" value="<?= $pageKeyword ?>" readonly>
        </div>

    <?php endif; ?>

    <div class="input-box">
        <textarea placeholder="Digite sua mensagem..."></textarea>
    </div>

    <div class="button-box">
        <button class="standard-button"><span>Enviar</span></button>
    </div>
</form>