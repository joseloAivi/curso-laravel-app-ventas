<h1>Nuevo Producto</h1>

<form action="/producto" method="post">
    @csrf
    <label for="">Nombre de Producto :</label>
    <input type="text" name="nombre" id="">
    <br>
    <label for="">Cantidad :</label>
    <input type="number" name="cantidad" id="">
    <br>
    <label for="">Precio Producto</label>
    <input type="text" name="precio" id="">
    <br>
    <label for="">Imagen Producto:</label>
    <input type="file" name="imagen" id="">
    <br>
    <label for="">Detalle de Producto</label>
    <textarea name="detalle" ></textarea>
    <br>

<input type="submit" name="" id="">
</form>