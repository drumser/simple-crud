[![Build Status](https://travis-ci.org/drumser/simple-crud.svg?branch=master)](https://travis-ci.org/drumser/simple-crud)

# Task for review
Необходимо сделать круд для одной сущности (Отрезок с двумя точками (x,y)). 

## Методы
1. Создание отрезка. (При создании можно передать параметр, который сделает создание асинхронным (очередь на кролике, например))
2. Получение списка отрезков
3. Информация о положении точки по отношению к отрезку (выше/ниже)


+ Запрос, который может передать идентификатор одного из сохраненных + точку, в ответе должен быть ответ, находится точка выше или ниже.

## Требования к запуску
* Postgresql 9+
* Php 7.4+