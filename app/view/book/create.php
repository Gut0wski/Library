<?php $this->theme->header(); ?>
    <form action="/book/add/" method="post">
        <div class="form-group row">
            <label for="genre" class="col-xl-1 col-sm-2 col-form-label">Жанр</label>
            <div class="col-xl-11 col-sm-10">
                <select class="form-control" id="genre" name="genre">
                    <?php foreach ($genres as $genre): ?>
                        <option value="<?=$genre->id?>">
                            <?=$genre->name?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="authors" class="col-xl-1 col-sm-2 col-form-label">Авторы</label>
            <div class="col-xl-11 col-sm-10">
                <select multiple class="form-control" id="authors" name="authors[]">
                    <?php foreach ($authors as $author): ?>
                        <option value="<?=$author->id?>">
                            <?=$author->first_name?> <?=$author->last_name?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-xl-1 col-sm-2 col-form-label">Наименование</label>
            <div class="col-xl-11 col-sm-10">
                <input type="text" class="form-control" id="name" name="name">
            </div>
        </div>
        <div class="form-group row">
            <label for="year" class="col-xl-1 col-sm-2 col-form-label">Год издания</label>
            <div class="col-xl-11 col-sm-10">
                <input type="text" class="form-control" id="year" name="year">
            </div>
        </div>
        <div class="control text-right">
            <button type="submit" class="btn btn-success btn-sm">Добавить</button>
        </div>
    </form>
<?php $this->theme->footer(); ?>