<?php $this->theme->header(); ?>
    <form action="/genre/update/" method="post">
        <input type="hidden" name="genre_id" value="<?=$genre->id?>">
        <div class="form-group row">
            <label for="name" class="col-xl-1 col-sm-2 col-form-label">Имя</label>
            <div class="col-xl-11 col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="<?=$genre->name?>">
            </div>
        </div>
        <div class="control text-right">
            <button type="submit" class="btn btn-success btn-sm">Обновить</button>
            <a href="/genre/delete/<?=$genre->id?>" class="btn btn-danger btn-sm" role="button" aria-disabled="true"
               onclick="return confirm('Удалить жанр?');">Удалить</a>
        </div>
    </form>
<?php $this->theme->footer(); ?>