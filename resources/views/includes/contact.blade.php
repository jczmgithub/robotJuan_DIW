<div id="contact" class="container-fluid">
    <h1>Contact Us</h1>
    <form action="nuevoMensaje" method="post">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" placeholder="Enter name" name="nombre">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <label for="mensaje">Mensaje:</label>
            <textarea class="form-control" id="mensaje" placeholder="Enter message" name="mensaje"></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>