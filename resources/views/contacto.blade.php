<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Proyecto1 pagina estatica</title>
   </head>

<header>
        <h1 id="title">Contacto</h1>
    </header>

    <form action="/recibe-form-contacto" method="POST" >
      
        @csrf
        <label id="nombre" for="nombre">Nombre del estudiante</label><br>
        <input id="nombre" type="text"  name="nombre" value = {{ $nombre }}><br>

        <label id="correo" for="email">Correo</label><br>
        <input id="correo" type="text" name="correo" value= {{ $correo }}><br>
        

        <p>Mensaje</p><br>
        <textarea id="suggestions" name="mensaje" cols= "40" rows= "10" placeholder="Escribe tu mensaje"></textarea>
        
        <input id="submit" type="submit" value="Submit">

        @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    <br>
                @endforeach
            </ul>
        </div>
        @endif
    </form>

</body>
</html>