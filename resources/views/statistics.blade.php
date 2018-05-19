@extends('layouts.app')

@section('content')
<!--h1 class="cover-heading">Cover your page.</h1>
<p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
<p class="lead">
    <a href="#" class="btn btn-lg btn-secondary">Learn more</a>
</p>
<-->

<div class="mb-3 p-3">
    <h3 class="masthead-brand">Número de conexiones: (#conexiones)</h3>
</div>
<div>
        <h4 class="masthead-brand">Statistics Options</h4>
        <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active"  onclick="show('ope')">Operations for frecuency</a>
        <a class="nav-link active" onclick="show('ave')">Average answers</a>
        <a class="nav-link active" onclick="show('inc'); update('stats', 10, 6, 4, 2)">Increase</a>
        </nav>
</div>
<div id="statistics" class="col-md-12" style="float:left">
    <div class="mb-3">
        <!-- Operations for frecuency -->
        <div id="ope" class="input-group">
            <p>Operations for frecuency</p>
            <div class="rect">
            <ul class="list-group">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
        </div>
        </div>
        <!-- Average Answers -->
        <div id="ave" class="input-group" style="display:none">
            <p>Average Answers</p>
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre Consulta</th>
                        <th scope="col">Promedio</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Consulta alto nivel mal hecha 1</td>
                        <td>50%</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Consulta alto nivel mal hecha 2</td>
                        <td>50%</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Consulta alto nivel mal hecha 3</td>
                        <td>50%</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Consulta alto nivel bien hecha 3</td>
                        <td>50%</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Consulta alto nivel bien hecha 3</td>
                        <td>50%</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Consulta alto nivel bien hecha 3</td>
                        <td>50%</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Increase -->
        <div id="inc" class="input-group" style="display:none">
            <p>Increase</p>
            <div id="grafic" class="w-80 h-80">
            </div>
        </div>
    </div>
</div>
@endsection