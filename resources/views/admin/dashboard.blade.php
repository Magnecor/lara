@extends('admin.layouts.app_admin')

<!-- загрузка осноного шаблона из папки laravel/resources/views/admin/layouts фаил app_admin.blade.php  layouts - папка и app - это фаил  app_admin.blade.php  -->

@section('content') <!-- // в секцию 'content' в файле app_admin.blade.php -->

<div class="container">
<div class="row">
<div class="col-sm-3">
<div class="jumbotron">
  <p><span class="label label-primary">Категорий 0</span></p>

</div>

</div>
<div class="col-sm-3">
<div class="jumbotron">
  <p><span class="label label-primary">Материалов 0</span></p>

</div>

</div>
<div class="col-sm-3">
<div class="jumbotron">
  <p><span class="label label-primary">Пользователей 0</span></p>

</div>

</div>
<div class="col-sm-3">
<div class="jumbotron">
  <p><span class="label label-primary">Пользователей сегодня 0</span></p>

</div>

</div>

</div>

<div class="row">
<div class="col-sm-6">
<a class="btn btn-block btn-default" href="#">Создать категорию</a>
<a class="list-group-item" href="#">
<h4 class="list-group-item-heading">Категория первая</h4>
</a>
<p class="list-group-item-text">Количество материалов</p>

</div>
<div class="col-sm-6">
  <a class="btn btn-block btn-default" href="#">Создать категорию</a>

<a class="list-group-item" href="#">
<h4 class="list-group-item-heading">Материал первый</h4>
</a>
<p class="list-group-item-text">Категория</p>

</div>

</div>


</div>


@endsection
