{{--<form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">--}}
{{--    @csrf--}}
{{--    <label>--}}
{{--        Название--}}
{{--        <input type="text" name="name" id="name" required>--}}
{{--    </label>--}}

{{--    <label>--}}
{{--        Постер--}}
{{--        <input type="file" name="poster" id="poster" required>--}}
{{--    </label>--}}



{{--    <button type="submit">--}}
{{--        <span>Сохранить</span>--}}
{{--    </button>--}}
{{--</form>--}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
</style>
<div class="container">
<form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
    @csrf
    <div class="form-group">
        <label for="name">Название</label>
        <input type="text" name="name" id="name" class="form-control" required>
        <div class="invalid-feedback">
            Пожалуйста, введите название.
        </div>
    </div>
    <div class="form-group">
        <label for="poster">Постер</label>
        <input type="file" name="poster" id="poster" class="form-control-file" required>
        <div class="invalid-feedback">
            Пожалуйста, выберите постер.
        </div>
    </div>
    <button type="submit" class="btn btn-primary">
        <span>Сохранить</span>
    </button>
</form>
</div>

