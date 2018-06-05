<?php $this->theme->header(); ?>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">Наименование</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($genres as $genre): ?>
                <tr onClick="location.href='/genre/edit/<?=$genre->id?>'">
                    <td><?=$genre->name?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="control text-right">
        <a href="/genre/create/" class="btn btn-primary btn-sm" role="button" aria-disabled="true">Добавить новый</a>
    </div>
<?php $this->theme->footer(); ?>
