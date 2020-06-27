<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Estrategia y transformación digital para PYMES. Te llevamos a adaptarte a los cambios que conlleva la nueva era para aumentar
                    significativamente tus ventas">
    <link rel="icon" type="image/png" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/bulma.min.css">
    <link rel="stylesheet" href="assets/css/global.css">

    <title>Formate en Marketing Digital - Los Olivos Cartagena </title>
</head>

<body>
    <div class="main_alliance">
        <header>
            <div class="header__content">
                <div class="header__logo">
                    <div>
                        <img src="assets/images/logo-blanco.png" alt="Los olivos cartagena">
                    </div>
                </div>
                <div class="header__contact">
                    <div class="contacto">
                        <span>contacto@losolivoscartagena.com</span>
                        <div>
                            <span>3008131043</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container text-content">
            <div class="columns main">
                <div class="column is-6 main__content">
                    <h1 class="title">CURSO DE MARKETING DIGITAL 100% GRATIS</h1>
                    <h2 class="subtitle">Si eres emprendedor o deseas serlo, esta es la oportunidad que necesitas para comenzar a tener mayores ingresos.
                        Solo debes afiliarte o comprar un producto de Olivos Cartagena ¡y listo!</h2>
                    <p>Aprenderás online marketing digital con John Harvard y Digital Alliance:
                    </p>
                    <div class="main_bullets">
                        <p>&#10148; Como vender por internet</p>
                        <p>&#10148; Como atraer clientes</p>
                        <p>&#10148; Como fidelizar a tus clientes</p>
                        <p>&#10148; ¡Y mucho más!</p>
                    </div>
                </div>
                <div class="column is-6">
                    <div class="form_main">
                        <form action="sendData" method="post" class="form_content">
                            <h3 class="title2 title__form">Forma parte de nuestro curso</h3>
                            <h3 class="title2 title__form">¡CUPOS LIMITADOS!</h3><br>
                            <div class="field">
                                <label for="nombre" class="label">Nombre</label>
                                <div class="control">
                                    <input class="input" name="nombre" id="nombre" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="field">
                                <label for="telefono" class="label">Teléfono</label>
                                <div class="control">
                                    <input class="input" name="telefono" id="telefono" type="text" required placeholder="">
                                </div>
                            </div>
                            <div class="field">
                                <label for="correo" class="label">Correo</label>
                                <div class="control">
                                    <input class="input" name="correo" id="correo" type="email" required placeholder="">
                                </div>
                            </div>
                            <div class="field">
                                <label for="productos" class="label">Servicio o producto de interés</label>
                                <div class="control">
                                    <div class="select">
                                        <select class=" select input" id="productos">
                                            <option selected disabled>Seleccione el servicio</option>
                                            <option>Planes exequiales</option>
                                            <option>Productos de Olivos</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control" style="display: block ruby;">
                                    <label class="checkbox">
                                        <input type="checkbox" id="check">
                                    </label>
                                    <a class=" is-link is-large" id="button">Acepto políticas de privacidad</a>
                                    <div class="modal" id="page-modal">
                                        <div class="modal-background">

                                        </div>
                                        <div class="modal-card">
                                            <header class="modal-card-head">
                                                <p class="modal-card-title">Política de tratamiento <br> de datos personales</p>
                                                <button class="delete"  id="cerrar" aria-label="close"></button>
                                            </header>
                                            <section class="modal-card-body">
                                                Dando cumplimiento a lo dispuesto en la Ley estatutaria 1581 de 2012 y a su Decreto Reglamentario 1377 de 2013,
                                                Funerales Los Olivos adopta la presente política para el tratamiento de datos personales, la cual será informada
                                                a todos los titulares de los datos recolectados o que en el futuro se obtengan en el ejercicio de las actividades comerciales, culturales o laborales.
                                            </section>
                                            <footer class="modal-card-foot">

                                            </footer>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="control">
                                <button type="submit" class="form_content__button" id="send">QUIERO POSTULARME</button>
                            </div>
                            <p style="color: red; display:none" id="error">error complete correctamente los campos</p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="header__content">
                <div class="header__logo">
                    <div>
                        <label style="margin: 10px; color: white">&copy;2020 Los Olivos Cartagena</label>
                    </div>
                </div>
                <div class="header__contact">
                    <div class="contacto">
                        <label style="margin: 10px; color: white"><a href="https://www.facebook.com/Olivos.Ctg/"><img src="assets/images/fb.png" alt="facebook" width="35"></a></label>
                        <label style="margin: 10px; color: white"><a href="https://www.instagram.com/olivos.ctg/"><img src="assets/images/ig_logo.png" alt="instagram" width="35"></a></label>
                        <label style="margin: 10px; color: white"><a href="https://api.whatsapp.com/send?phone=+573008131043"><img src="assets/images/ws.png" alt="whatsapp" width="35"></a></label>

                    </div>
                    <label style="margin: 10px; color: white"><a href="https://losolivoscartagena.com/tratamiento-de-datos/" target="_blank">Tratamiento de datos</a></label>
                </div>
            </div>
        </footer>
    </div>

    <script src="validate.js"></script>
</body>

</html>