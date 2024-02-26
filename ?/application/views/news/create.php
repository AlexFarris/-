<h2>Inserisci una nuova notizia</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/insert'); ?>

    <label for="title">Titolo</label>
    <input type="input" name="title" /><br />

    <label for="content">Contenuto</label>
    <textarea name="content"></textarea><br />

    <input type="submit" name="submit" value="Inserisci notizia" />

</form>