@extends ('welcome')
@section ('title','Currency')
@section ('content')
<?php 
$result = json_decode(file_get_contents('http://forex.cbm.gov.mm/api/latest'));
?>
<div style = "text-align:center; color:blue">
    <h1 class="text-carrot"> <?php echo $result->info; ?></h1>
</div>
<div class="container">
    <table class="table  table-striped" style="text-align:center;">
        <tr>
            <th>Currency</th>
            <th>MMK</th>
        </tr>
        @foreach($result->rates as $key=>$value)
        <tr>
            <td>{{$key}}</td>
        <td>{{$value}}</td>
        </tr>
        @endforeach
    </table>
</div>

@endsection