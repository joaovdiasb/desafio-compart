<div class="pb-3 <?= $cols ?>">
    <label for="<?= $name ?>"><?= $label ?></label>
    <select class="form-control <?= $class ?>" placeholder="<?= $placeholder ?>" name="<?= $name ?>" <?= $props ?>>
        <?php foreach ($options as $index => $option) { ?>
            <option value="<?= $index ?>" <?php $index === $value ? 'selected' : '' ?>><?= $option ?></option>
        <?php } ?>
    </select>
</div>
