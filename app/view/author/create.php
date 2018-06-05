<?php $this->theme->header(); ?>
    <form action="/author/add/" method="post">
        <div class="form-group row">
            <label for="first_name" class="col-xl-1 col-sm-2 col-form-label">Имя</label>
            <div class="col-xl-11 col-sm-10">
                <input type="text" class="form-control" id="first_name" name="first_name">
            </div>
        </div>
        <div class="form-group row">
            <label for="last_name" class="col-xl-1 col-sm-2 col-form-label">Фамилия</label>
            <div class="col-xl-11 col-sm-10">
                <input type="text" class="form-control" id="last_name" name="last_name">
            </div>
        </div>
        <div class="control text-right">
            <button type="submit" class="btn btn-success btn-sm">Добавить</button>
        </div>
    </form>
<?php $this->theme->footer(); ?>