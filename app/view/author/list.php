<?php $this->theme->header(); ?>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">Имя</th>
                <th scope="col">Фамилия</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($authors as $author): ?>
                <tr onClick="location.href='/author/edit/<?=$author->id?>'">
                    <td><?=$author->first_name?></td>
                    <td><?=$author->last_name?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="control text-right">
        <a href="/author/create/" class="btn btn-primary btn-sm" role="button" aria-disabled="true">Добавить нового</a>
    </div>
<?php $this->theme->footer(); ?>
