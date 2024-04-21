<link rel="stylesheet" href="/pop-it-mvc/public/css/img.css">

<div class="pictures">
    <h2>Загрузка картинок</h2>
    <form method="post" enctype="multipart/form-data" class="form_photo">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <input type="file"  name="image" accept="image/*">
        <button type="submit">Загрузить</button>
    </form>

    <?php if($image->isNotEmpty()){
        foreach ($image as $image) {
            echo "<img src='/pop-it-mvc/public/media/$image->name'>";
        }
    }
    ?>
</div>