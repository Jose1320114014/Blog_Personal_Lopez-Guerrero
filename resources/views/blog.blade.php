@extends('Layout')
@section('blog-info')
    <body style="background-color: #040505">
    <section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Este es mi <em>blog</em></h2>
                        <img src="/images/line-dec.png" alt="">
                        <p>Aqui posteare lo mas interesante en trama de videojuegos, pues porque me gusta, a parte me gustaria dar mi opinion de algo sin que alguien me saque la ip en twitter </p>
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
                <div class="col-lg-4">
                    <ul>
                        <li><a href='#tabs-1'>Bienvenido al primer post</a></li>
                        <li><a href='#tabs-2'>"NFT" ¿Es el futuro del gaming?</a></a></li>
                        <li><a href='#tabs-3'>El nuevo parche de League of Legends ha llegado</a></a></li>
                        <li><a href='#tabs-4'>¿Sera buena la nueva pelicula de Batman?</a></a></li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <section class='tabs-content'>
                        <article id='tabs-1'>
                            <img src="/images/ok.png" alt="First Class">
                            <h4>Bienvenido al primer post</h4>
                            <p>Este solo es un post de prueba, pero no se preocupen , pronto comenzare a hablar un poco sobre temas que sean de interes para toda persona que tenga como hobbie jugar videjuegos</p>
                        </article>
                        <article id='tabs-2'>
                            <img src="/images/OIP.jpg" alt="Second Training">
                            <h4>"NFT" ¿Es el futuro del gaming?</h4>
                            <p>Sinceramente no conozco mucho acerca de este tema, pero estoy conciente de que puede hacer que la empresa de los videojuegos degrade su calidad y pueda crear la tercera caida de la industria del gaming, considero que deberian hacerlo de manera independiente a la industria y no permitir mezclar a los usuarios que disfrutan los juegos con aquellos que lo hacen por "negocios"</p>
                        </article>
                        <article id='tabs-3'>
                            <img src="/images/calling.png" alt="Third Class">
                            <h4>El nuevo parche de League of Legends ha llegado</h4>
                            <p>Me entere que ayer hubo una actualizacion de League of Legends, me sorprende en como es que en un juego que tiende a la monotonia tiene la capacidad de poder innovar en terminos de ocntenido fresco, vi el trailer que publicaron, tiene el nombre de "El llamado", me sorprendio la calidad que tiene los detalles del personaje, me se curioso ver el como varios personajes estan unidos por una causa, espero y el contenido que vayan publicando sea balanceado, sin necesidad de que desestabilize el estilo del juego</p>
                        </article>
                        <article id='tabs-4'>
                            <img src="/images/batman.jpeg" alt="Fourth Training">
                            <h4>¿Sera buena la nueva pelicula de Batman?</h4>
                            <p>¿Que opino sobre "The batman"?, no lo se, me llama la atencion por el estilo que lleva la pelicula, me trae recuerdo a la pelicula de batman donde aparecia Heath leadger, una tematica mas seria, pero interesante, talvez vaya a verla en su estreno, no soy muy fan de Dc, pero cada vez que veo el trailer, me sorprende el diseño que tiene batman, al igual la introduccion del personaje llamado como "acertijo".</p>
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </body>
    </section>
@endsection
