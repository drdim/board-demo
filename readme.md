# DEMO Доска объявлений

##install 

1. Установить vagrant с homestead https://laravel.com/docs/5.2/homestead
2. Склонировать репозиторий в папку, например board
3. Отредактировать Homestead.yaml

```bash
authorize: ~/.ssh/id_rsa.pub

keys:
    - ~/.ssh/id_rsa

folders:
    - map: ~/PhpStormProjects/Homestead
      to: /home/vagrant/Homestead
sites:
    - map: board.app
      to: /home/vagrant/Homestead/board/public
```

4. Сгенерировать ключи id_rsa и справить пути принковки папок
5. Провизионить вагрант
6. Накатить миграции и тестовые данные

```php
php artisian migrate
php artisian db:seed
```

7. Прописать в hosts 192.168.10.10 board.app
8. Открыть страницу в браузере
9. Дефолтный пользователь в панели demo@gmail.com:demo
