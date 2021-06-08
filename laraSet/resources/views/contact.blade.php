@extends('loyauts.loyaut')
@section('title')
    Контакты
@endsection
@section('content')
    <h1>Наши контакты</h1>
    <form action="{{ route('contact-form') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Введите email</label>
            <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea type="message" name="message" id="message" class="form-control"></textarea>
        </div>
        <div class="d-grid gap-2">
            <button class="btn btn-secondary" type="submit">Button</button>
        </div>
    </form>
@endsection

