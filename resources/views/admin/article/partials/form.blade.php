<label for="">Статус</label>
<select class="form-control" name="published">
@if (isset($article->id))
  <option value="0" @if ($article->published == 0) selected=""
  @endif >Не опубликовано</option>
  <option value="1" @if ($article->published == 1) selected=""
  @endif >Опубликовано</option>
  @else


    <option value="0">Не опубликовано</option>
    <option value="1">Опубликовано</option>
  @endif

</select>

<label for="">Заголовок</label>
<input type="text" required value="{{$article->title or ""}}"  class="form-control" name="title" placeholder="Заголовок новости">

<label for="">Slug (уникальное значение)</label>
<input readonly="" type="text" name="slug" value="{{$article->slug or ""}}" class="form-control" placeholder="Автоматическая генерация">

<label for="">Родительская категория</label>
<select class="form-control" name="categories[]" multiple="">

  @include('admin.article.partials.categories', ['categories' => $categories])
</select>

<label for="">Краткое описание </label>
<textarea class="form-control" id="description_short" name="description_short" >{{$article->description_short or ""}}</textarea>

<label for="">Полное описание</label>
<textarea class="form-control" id="description" name="description">{{$article->description or ""}}</textarea>

<hr>
<label for="">Мета Заголовок</label>
<textarea type="text" class="form-control" name="meta_title" placeholder="Мета заголовок">{{$article->meta_title or ""}}</textarea>

<hr>
<label for="">Мета описание</label>
<textarea type="text" class="form-control" name="meta_description" placeholder="Мета описание">{{$article->meta_discription or ""}}</textarea>

<hr>
<label for="">Мета Слова</label>
<textarea type="text" class="form-control" name="meta_keyword" placeholder="Мета слова">{{$article->meta_keyword or ""}}</textarea>

<hr>

<input type="submit" class="btn btn-primary"  value="Сохранить">
