<?php $this->theme->header(); ?>
    <form action="/book/update/" method="post">
        <input type="hidden" name="book_id" value="<?=$book->id?>">
        <div class="form-group row">
            <label for="genre" class="col-xl-1 col-sm-2 col-form-label">Жанр</label>
            <div class="col-xl-11 col-sm-10">
                <select class="form-control" id="genre" name="genre">
                    <?php foreach ($genres as $genre): ?>
                        <option value="<?=$genre->id?>" <?php if ($genre->id == $book->genre_id) echo 'selected'; ?>>
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
                        <option value="<?=$author->id?>" <?php if (Helper::isInObject($bookAuthors, 'author_id', $author->id)) echo 'selected'; ?>>
                            <?=$author->first_name?> <?=$author->last_name?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-xl-1 col-sm-2 col-form-label">Наименование</label>
            <div class="col-xl-11 col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="<?=$book->name?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="year" class="col-xl-1 col-sm-2 col-form-label">Год издания</label>
            <div class="col-xl-11 col-sm-10">
                <input type="text" class="form-control" id="year" name="year" value="<?=$book->year?>">
            </div>
        </div>
        <div class="control text-right">
            <button type="submit" class="btn btn-success btn-sm">Обновить</button>
            <a href="/book/delete/<?=$book->id?>" class="btn btn-danger btn-sm" role="button" aria-disabled="true"
               onclick="return confirm('Удалить книгу?');">Удалить</a>
        </div>
    </form>
<?php $this->theme->footer(); ?>