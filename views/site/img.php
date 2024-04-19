<link rel="stylesheet" href="/pop-it-mvc/public/css/img.css">

<div>
    <form method="post" enctype="multipart/form-data" class="form_photo">
        <input type="file"  name="image" accept="image/*">
        <button type="submit">Загрузить изображение</button>
    </form>

    <?php if($img->isNotEmpty()){
        foreach ($img as $img) {
            echo "<img src='/pop-it-mvc/public/img/$img->name'>";
        }
    }
    ?>
</div>