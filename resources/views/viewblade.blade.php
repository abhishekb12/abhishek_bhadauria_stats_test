@extends('layouts.app')
@section('content')
<div class="container">
    <p>
      
      Total Number of IN Visitor is {{ $arraydata['IN'] ? $arraydata['IN']: 0 }} <br>
      Total Number of USA Visitor is {{ $arraydata['USA'] ? $arraydata['USA']: 0 }} <br> 
      Total Number of NZ Visitor is {{ $arraydata['NZ'] ? $arraydata['NZ'] : 0 }} <br>
      
    </p>
</div>
@endsection
@section('js')
    <script type="text/javascript">
      $('.daterange').daterangepicker();
    </script>
@endsection

