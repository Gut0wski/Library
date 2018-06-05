<?php $this->theme->header(); ?>
    <form action="/genre/add/" method="post">
        <div class="form-group row">
            <label for="name" class="col-xl-1 col-sm-2 col-form-label">Наименование</label>
            <div class="col-xl-11 col-sm-10">
                <input type="text" class="form-control" id="name" name="name">
            </div>
        </div>
        <div class="control text-right">
            <button type="submit" class="btn btn-success btn-sm">Добавить</button>
        </div>
    </form>
<?php $this->theme->footer(); ?>