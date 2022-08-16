@extends('layouts.app')
@section('css')
  
<style type="text/css">
   body {
    font-family: Arial;
    }

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>

@endsection

@section('content')
<div class="container">
    <p>Full width:</p>
    <form class="example" method="get" action="get-data">
      <input type="date" class="daterange" placeholder="Search.." name="search">
      <button class="btn btn-primary" type="submit">Search</button>
    </form>
</div>
@endsection
@section('js')
    <script type="text/javascript">
      $('.daterange').daterangepicker();
    </script>
@endsection

