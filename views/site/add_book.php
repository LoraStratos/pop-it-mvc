<link rel="stylesheet" href="/pop-it-mvc/public/css/add_book.css">
<div class="add_book_div">
    <form enctype="multipart/form-data" method="post" class="add_book_form">
        <h2>Добавление новой книги</h2>
        <div>
            <p>Название:</p>
            <input type="text" name="title" placeholder="Название" required>
        </div>
        <div>
            <p>Фио автора:</p>
            <div class="fio">
                <input type="text" name="name" placeholder="Фамилия">
                <input type="text" name="surname" placeholder="Имя">
                <input type="text" name="patronymic" placeholder="Отчество">
            </div>
        </div>
        <div>
            <p>Год издания:</p>
            <input type="text" name="year" placeholder="Год издания">
        </div>
        <div>
            <p>Тип издания:</p>
            <select required>
                <option selected value="Новая">Новая</option>
                <option value="Старая">Старая</option>
                <option value="Очень старая">Очень старая</option>
            </select>
        </div>
        <div>
            <p>Аннотация:</p>
            <textarea cols="50" rows="3" name="annotation" placeholder="Краткое описание книги"></textarea>
        </div>
        <div>
            <p>Обложка:</p>
            <input type="file" accept="image/*" required>
        </div>
        <button>Добавить книгу</button>
    </form>
</div>
