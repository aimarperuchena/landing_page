<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="header">

        <div class="header_nombre_div">
            <h3>Gastro Society</h3>
        </div>
        <div class="header_login_div">
            <img src="/img/user.png" alt="" class="user_login_img">

        </div>
    </div>

    <section class="intro">
        <div class="inner">
            <div class="content">
                <h1>Gastro Society</h1>
                <a href="#formulario" class="registrarse">Registrarse</a>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="text_container1">

            <h3>EuskoErp es un programa visual e intuitivo</h3>
            <p>EuskoErp es un programa estándar para la gestión de sociedades gastronómicas, culturales, deportivas…. Desarrollado específicamente por Gastro Society.</p>
        </div>

        <div class="text_container2">
            <p>Con este programa podrá controlar todos los aspectos de su sociedad como: gestión de notas de consumo, socios, almacén, pedidos, proveedores, estadísticas, faltas, cobros de recibos…. Además la reserva de mesas online permite a los socios realizar las reservas por internet sin desplazamientos y al momento.</p>
            <p>EuskoErp es la aplicación de gestión para sociedades gastronómicas. Con ella los socios realizarán notas fácilmente y la junta directiva podrá gestionar las compras, almacenes, ventas, formas de pago, socios, cuotas, recibos, balance, estadísticas, reservas...</p>
        </div>

        <div class="col-12  cuadrados">
            <div class="card p-5">
                <img src="/img/reservas.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">Reservas</h3>
                    <p class="card-text">Organize la reserva de mesas con solo un click</p>

                </div>
            </div>
            <div class="card p-5">
                <img src="/img/stock.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">Stock</h3>
                    <p class="card-text">El stock de los productos en tiempo real</p>

                </div>
            </div>
            <div class="card p-5">
                <img src="/img/contabilidad.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">Contabilidad</h3>
                    <p class="card-text">Lleve la contabilidad precisa de su sociedad</p>

                </div>
            </div>
            <div class="card p-5">
                <img src="/img/incidencias.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">Incidencias</h3>
                    <p class="card-text">Comunicación directa de incidencias con los socios</p>

                </div>
            </div>
        </div>

        <div class="div_pantallazo">
            <h3>Tu software / programa para la sociedad gastronómica</h3>
            <p>Una visión moderna, completa y sencilla para todas las sociedades</p>
            <img src="/img/captura_programa.png" class="card-img-top" alt="...">

        </div>
        <div class="formulario" id="formulario">
            <form action="{{route('usuario.store')}}" method="post">
            @csrf
                <h3>Registro</h3>

                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                <br>
                <label>Apellido</label>
                <input type="text" name="apellido" class="form-control" placeholder="Apellido">
                <br>
                <label>Email</label>
                <input type="text" name="email" class="form-control" placeholder="Email">
                <br>
                <label>Contraseña</label>
                <input type="password" name="contraseña" class="form-control" placeholder="Contraseña">
                <br>
                <button type="submit" class="btn btn-dark btn-lg btn-block">Registrarse</button>
            </form>
        </div>

    </div>

    <div class="footer">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h3 class="card-title">Gastro Society</h3>
                <p class="card-text">Gastro society es una empresa del Pais Vasco que ayuda a las sociedades gastronomicas a fomentar su uso y utilidad. Con nuestros servicios los clientes tendran a mano la actualidad de su sociedad.</p>
                
               
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h3 class="card-title">Contactanos</h3>
                <p class="card-text">Email: gastrosociety@gmail.com</p>
                <p class="card-text">Instagram: gastrosociety</p>
               
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h3 class="card-title">Accesos Rápidos</h3>
                <a class="card-text" href="#">Inicio</a><br>
                <a class="card-text" href="#">Registro</a>
               
            </div>
        </div>
    </div>

</body>

</html>