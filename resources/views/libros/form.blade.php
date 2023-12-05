<h1>{{$modo}}Libro</h1>
<label for="Titulo">Título</label>
    <input type="text" name="Titulo" value="{{isset($libros->Titulo)?$libros->Titulo:''}}" id="Titulo">
    <br>
    <label for="Titulo">Autor</label>
    <input type="text" name="Autor" value="{{isset($libros->Autor)?$libros->Autor:''}}" id="Autor">
    <br>
    <label for="Titulo">N° Páginas</label>
    <input type="text" name="Paginas" value="{{isset($libros->Paginas)?$libros->Paginas:''}}" id="Paginas">
    <br>
    <input type="submit" value="{{$modo}} Libro">
    <a href="{{url('libros/')}}">Regresar</a>