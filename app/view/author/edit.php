<?php $this->theme->header(); ?>
    <form action="/author/update/" method="post">
        <input type="hidden" name="author_id" value="<?=$author->id?>">
        <div class="form-group row">
            <label for="first_name" class="col-xl-1 col-sm-2 col-form-label">Имя</label>
            <div class="col-xl-11 col-sm-10">
                <input type="text" class="form-control" id="first_name" name="first_name" value="<?=$author->first_name?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="last_name" class="col-xl-1 col-sm-2 col-form-label">Фамилия</label>
            <div class="col-xl-11 col-sm-10">
                <input type="text" class="form-control" id="last_name" name="last_name" value="<?=$author->last_name?>">
            </div>
        </div>
        <div class="control text-right">
            <button type="submit" class="btn btn-success btn-sm">Обновить</button>
            <a href="/author/delete/<?=$author->id?>" class="btn btn-danger btn-sm" role="button" aria-disabled="true"
               onclick="return confirm('Удалить автора?');">Удалить</a>
        </div>
    </form>
<?php $this->theme->footer(); ?>