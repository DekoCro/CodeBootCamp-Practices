<?php if (count($errors) > 0) : ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach($errors->all() as $error) : ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<?php if (Session::has('success_message')) : ?>
    <div class="alert alert-success">
        <?= Session::get('success_message') ?>
    </div>
<?php endif; ?>

<form action="" method="post">

    <?= csrf_field() ?>

    <div class="form-group">
        <label for="">Name:</label>
        <input type="text" name="name" value="<?= htmlspecialchars(old('name', $note->name)) ?>">
    </div>

    <div class="form-group">
        <label for="">Text:</label>
        <input type="text" name="text" value="<?= htmlspecialchars(old('text', $note->text)) ?>">
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Save">
    </div>

</form>