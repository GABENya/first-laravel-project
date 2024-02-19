<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label>
        Название
        <input type="text" name="name" placeholder="название поста" required>
    </label>

    <label>
        Описание
        <input type="text" name="description" placeholder="описание поста">
    </label>

    <label>
        Содержимое
        <textarea name="content" id="content" cols="30" rows="10" required></textarea>
    </label>

    <label>
        Постер
        <input type="file" name="poster" id="poster" required>
    </label>

    <label>
        Категория
        <select name="category_ids" id="category_ids" multiple>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </label>

    <button type="submit">
        <span>Сохранить</span>
    </button>
</form>

<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
    @csrf
    <div class="form-group">
        <label for="name">Название</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="название поста" required>
        <div class="invalid-feedback">
            Пожалуйста, введите название.
        </div>
    </div>
    <div class="form-group">
        <label for="description">Описание</label>
        <input type="text" name="description" id="description" class="form-control" placeholder="описание поста">
    </div>
    <div class="form-group">
        <label for="content">Содержимое</label>
        <textarea name="content" id="content" class="form-control" rows="10" required></textarea>
        <div class="invalid-feedback">
            Пожалуйста, введите содержимое.
        </div>
    </div>
    <div class="form-group">
        <label for="poster">Постер</label>
        <input type="file" name="poster" id="poster" class="form-control-file" required>
        <div class="invalid-feedback">
            Пожалуйста, выберите постер.
        </div>
    </div>
    <div class="form-group">
        <label for="category_ids">Категория</label>
        <select name="category_ids[]" id="category_ids" class="form-control" multiple>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">
        <span>Сохранить</span>
    </button>
</form>


