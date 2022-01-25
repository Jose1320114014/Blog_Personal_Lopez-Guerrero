@extends('Layout')
@section('Mis_Hobbies')
    <body style="background-color: #040505">
    <section class="section" id="schedule" style="background-color: #040505">
        <div class="container"style="background-color: #040505">
            <div class="row"style="background-color: #040505">
                <div class="col-lg-6 offset-lg-3"style="background-color: #040505">
                    <div class="section-heading dark-bg"style="background-color: #040505">
                        <h2>Hobbies <em>De Yharonsmoke</em></h2>

                        <p>Sincereamente no es mucho lo que hago, ya que casi siempre me la paso estudiando o jugando.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="filters">
                        <ul class="schedule-filter">
                            <li class="active" data-tsfilter="monday">Lunes</li>
                            <li data-tsfilter="tuesday">Martes</li>
                            <li data-tsfilter="wednesday">Miercoles</li>
                            <li data-tsfilter="thursday">Jueves</li>
                            <li data-tsfilter="friday">Viernes</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="schedule-table filtering">
                        <table>
                            <tbody>
                            <tr>
                                <td class="day-time">Jugar League of Legends</td>
                                <td class="monday ts-item show" data-tsmeta="monday">10:00AM - 11:30AM</td>
                                <td class="tuesday ts-item" data-tsmeta="tuesday">2:00PM - 3:30PM</td>
                            </tr>
                            <tr>
                                <td class="day-time">Hacer ejercicio</td>
                                <td class="friday ts-item" data-tsmeta="friday">10:00AM - 11:30AM</td>
                                <td class="thursday friday ts-item" data-tsmeta="thursday" data-tsmeta="friday">2:00PM - 3:30PM</td>
                            </tr>
                            <tr>
                                <td class="day-time">Estudiar</td>
                                <td class="tuesday ts-item" data-tsmeta="tuesday">10:00AM - 11:30AM</td>
                                <td class="monday ts-item show" data-tsmeta="monday">2:00PM - 3:30PM</td>
                            </tr>
                            <tr>
                                <td class="day-time">Estudiar</td>
                                <td class="wednesday ts-item" data-tsmeta="wednesday">02:00PM - 09:00PM</td>
                                <td class="friday ts-item" data-tsmeta="friday">2:00PM - 9:00PM</td>
                            </tr>
                            <tr>
                                <td class="day-time">Dibujar</td>
                                <td class="thursday ts-item" data-tsmeta="thursday">10:00AM - 11:30AM</td>
                                <td class="wednesday ts-item" data-tsmeta="wednesday">2:00PM - 3:30PM</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </section>
@endsection
