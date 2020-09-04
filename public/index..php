<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
<!DOCTYPE html>
<html>
<head>
    <title>javascript calculator</title>
</head>
<body>
<div class="container">
    <div class="card mx-auto w-50">
        <div class="card-header">
            โปรแกรมจำลองเครื่องคิดเลข
        </div>
        <div class="card-body">
            <div class="row m-2">
                <div class="col-md-12">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="row m-2">
                <div class="col-md-6">
                <button type="button" class="btn btn-block btn-danger">Del</button>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-block btn-info">%</button>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-block btn-info">+</button>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-md-3">
                    <button type="button" class="btn btn-block btn-dark">7</button>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-block btn-dark">8</button>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-block btn-dark">9</button>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-block btn-info">-</button>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-md-3">
                    <button type="button" class="btn btn-block btn-dark">4</button>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-block btn-dark">5</button>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-block btn-dark">6</button>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-block btn-info">*</button>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-md-3">
                    <button type="button" class="btn btn-block btn-dark">1</button>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-block btn-dark">2</button>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-block btn-dark">3</button>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-block btn-info">/</button>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-md-6">
                    <button type="button" class="btn btn-block btn-danger">0</button>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-block btn-info">.</button>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-block btn-success">=</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
