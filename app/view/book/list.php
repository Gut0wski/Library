<?php $this->theme->header(); ?>
<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th scope="col">Жанр</th>
        <th scope="col">Авторы</th>
        <th scope="col">Наименование</th>
        <th scope="col">Год издания</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($books as $book): ?>
        <tr onClick="location.href='/book/edit/<?=$book->id?>'">
            <td><?=$book->genre?></td>
            <td><?=$book->author?></td>
            <td><?=$book->name?></td>
            <td><?=$book->year?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<div class="control text-right">
    <a href="/book/create/" class="btn btn-primary btn-sm" role="button" aria-disabled="true">Добавить новую</a>
</div>
<?php $this->theme->footer(); ?>
