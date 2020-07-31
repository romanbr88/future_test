<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Тестовое задание</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
<header>
    <div class="container">
        <img class="header-logo" src="{{ asset('img/logo.png') }}" alt="Future internet agency" width="163" height="172">
        <div class="header-contact">
            <p>Телефон: (499) 340-94-71</p>
            <p>Email: <a href="mailto:info@future-group.ru">info@future-group.ru</a></p>
        </div>
        <h1>Комментарии</h1>
    </div>
</header>
<main>
    <div class="container">
        <div class="comments">
            @foreach ($comments as $comment)
                <div class="comment-block">
                    <div class="comment-info">
                        <span class="comment-name">{{ $comment->name }}</span>
                        <span class="comment-time">{{ $comment->created_at->format('h:m') }}</span>
                        <span class="comment-year">{{ $comment->created_at->format('d.m.Y') }}</span>
                    </div>
                    <div class="comment-text">{{ $comment->text }}</div>
                </div>
            @endforeach
        </div>
        <form class="form clearfix" action="{{ route('store') }}" method="post">
            <h2>Оставить комментарий</h2>
            @csrf
            <label class="form-label">
                <span class="label-text">Ваше имя</span>
                <input class="form-input" type="text" name="name" required>
            </label>
            <label class="form-label">
                <span class="label-text">Ваш комментарий</span>
                <textarea class="form-input" name="text" rows="5" required></textarea>
            </label>
            <button class="btn" type="submit">Отправить</button>
        </form>
    </div>
</main>
<footer>
    <div class="container">
        <img class="footer-logo" src="{{ asset('img/logo_footer.png') }}" alt="Future internet agency" width="101" height="106">
        <div class="footer-contact">
            <p>Телефон: (499) 340-94-71</p>
            <p>Email: <a href="mailto:info@future-group.ru">info@future-group.ru</a></p>
            <p>Адрес: <a href="https://yandex.ru/maps/-/CCQpeGE7oD" rel="nofollow">115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</a></p>
            <p class="copyright">&copy; 2010 - 2014 Future. Все права защищены</p>
        </div>
    </div>
</footer>
</body>
</html>
