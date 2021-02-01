@extends('layouts.admin')

@section('content')
    <main>
        <div class="container-fluid">
            <form action="{{route('admin.company.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="small mb-1">Название</label>
                    <input class="form-control py-4" type="text" name="name"/>
                </div>
                <div class="form-group">
                    <label class="small mb-1">Категория</label>
                    <select name="category_id" class="form-control" required>
                        <option value="">Выбор категории</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="form-group">
                    <label class="small mb-1">Адрес</label>
                    <input class="form-control py-4" type="text" name="address"/>
                </div>

                <div class="form-group">
                    <label class="small mb-1">Location</label>
                    <input class="form-control py-4" type="text" name="location"/>
                </div>

                <div class="form-group">
                    <label class="small mb-1" for="inputEmailAddress">Description</label>
                    <textarea name="description" id="" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-sm btn-info" type="submit">Сохранить</button>
                </div>
            </form>
        </div>
    </main>
@endsection
