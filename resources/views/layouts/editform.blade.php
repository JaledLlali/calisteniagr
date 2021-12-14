@yield('form')
<form action="{{route('cursos.store')}}" method="POST">

    @csrf

    <label>
        Nombre:
        <br>
        <input type="text" name="name" value="{{old('name', $curso->name)}}">
    </label>

    @error('name')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
    <label>
        <br>
        Descripcion:
        <br>
        <textarea name="description" rows="5" >{{old('description', $curso->description)}}</textarea>
    </label>

    @error('description')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <label>
        <br>
        Categoría:
        <br>
        <input type="text" name="category" value="{{old('category', $curso->category)}}">
    </label>

    @error('category')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br>
    <button type="submit">Enviar curso</button>
</form>
