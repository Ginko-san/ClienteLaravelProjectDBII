@extends('layouts.app')

@section('content')
<!--h1 class="cover-heading">Cover your page.</h1>
<p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
<p class="lead">
    <a href="#" class="btn btn-lg btn-secondary">Learn more</a>
</p>
<-->

<div class="col-md-12">
    <h4 class="mb-3">Settings</h4>
    <form class="needs-validation" novalidate>
        <div class="mb-3">
            <label for="connections">Number of Connections</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">#</span>
                </div>
                <input type="text" class="form-control" id="connections" placeholder="Connections" required>
                <div class="invalid-feedback" style="width: 100%;">
                    The number of connections is required.
                </div>
            </div>
        </div>

        <hr class="mb-4">
        <h4 class="mb-3">Operations by time Frequency</h4>

        <div class="row">
            <div class="col-md-5 mb-3">
                <label for="country">Type</label>
                <select class="custom-select d-block w-100" id="country" required>
                    <option value="">Choose...</option>
                    <option>idk</option>
                    <option>idk2</option>
                    <option>idk3</option>
                    <option>idk4</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid type.
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="state">Time Frequency</label>
                <select class="custom-select d-block w-100" id="state" required>
                    <option value="">Choose...</option>
                    <option>1s</option>
                    <option>15s</option>
                    <option>30s</option>
                    <option>60s</option>
                </select>
                <div class="invalid-feedback">
                    Please provide a valid state.
                </div>
                <small class="text-muted">Time are in seconds</small>
            </div>
            <div class="col-md-3 mb-3">
            <label for="zip">Number of </label>
            <input type="text" class="form-control" id="zip" placeholder="" required>
            <div class="invalid-feedback">
                Zip code required.
            </div>
            </div>
        </div>

        <hr class="mb-4">
        
        <div class="mb-3">
            <label for="state">Server</label>
            <select class="custom-select d-block w-100" id="state" required>
                <option value="">Choose...</option>
                <option>Central</option>
                <option>Node 1</option>
                <option>Node 2</option>
                <option>Node # etc</option>
            </select>
            <div class="invalid-feedback">
                Please provide a valid state.
            </div>
            <small class="text-muted">Server to do the Test</small>
        </div>
        
        <hr class="mb-4">
        <button class="btn btn-dark btn-lg btn-block" type="submit">Continue to test</button>
    </form>
</div>
@endsection