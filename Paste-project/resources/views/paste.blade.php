@extends('layouts.app')

@section('title-block') Страница контактов @endsection

@section('content')

    <h1>Контакты</h1>

    

    <form action="{{route('paste-form')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Введите заголовок</label>
            <input type="text" name="title" placeholder="Введите имя" id="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea name="message" id="message"  class="form-control" placeholder="Введите сообщение"></textarea>
        </div>
        <div class="form-group">
            <label for="expiration">Срок публикации</label>
            <input type="text" name="expiration" placeholder="Укажите срок публикации" id="expiration" class="form-control">
        </div>
        <div class="form-group">
            <label for="access">Доступ</label>
            <input type="text" name="access" placeholder="Укажите доступ публикации" id="access" class="form-control">
        </div>
        <div class="form-group">
            <label for="lang">Язык программирования</label>
            <input type="text" name="lang" placeholder="Укажите язык" id="lang" class="form-control">
        </div>

            <button type="submit" name="button" class="btn btn-success">Отправить</button>
    </form>
@endsection