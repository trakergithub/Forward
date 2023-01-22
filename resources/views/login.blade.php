@component('layouts.login_nvar')
@slot('content')

    <br>
    <div class="row">
    <div class="offset-md-5 col-md-3">
        <div class="card">
            <br>
            <div class="row">
                <div class="offset-md-1 col-md-7">
                    <img height="50px" src="img/forward.png" alt="logo" align="left">
                    <h1 style="color:#1173ad;">FORWARD</h1>
                </div> 
            </div>
            <br>
            <div class="row">
                <div class="offset-md-1 col-md-10">
                    <center>
                        <h3 style="color:#1173ad;">INICIAR SESIÓN</h3>  
                        <br>
                        <form action="#">
                            <div class="mb-3 mt-3">
                                <label for="user">Usuario:</label>
                                <input type="user" class="form-control" id="user" name="user">
                            </div>
                            <div class="mb-3">
                                <label for="pwd">Contraseña:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                            </div>
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </form>
                        <br>
                    </center>
                </div> 
            </div>
        </div>
    </div>
    </div>
    <div class="row">
    <div class="offset-md-4 col-md-4" style="color:gray;">
        Por razones de seguridad, por favor cierre su sesión y su navegador web cuando haya terminado de acceder a los servicios que requieren autentificación.
    </div>
    </div>


@endslot
@endcomponent
