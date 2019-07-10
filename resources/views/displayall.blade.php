@extends('layout.header')

@section("content")

<!--
<table style="width:100%"  border="4">
<tr>
<th>id</th>
<th>name</th>
<th>email</th>
<th>designation</th>
<th>address</th>
<th>phoneno</th>
</tr>


@foreach ($employee1 as $item)

<tr>
	<td>{{$item->id}}</td>
	<td>{{$item->name}}</td>	
	<td>{{$item->email}}</td>	
	<td>{{$item->designation}}</td>	
	<td>{{$item->address}}</td>	
	<td>{{$item->phoneno}}</td>	
	

</tr>
@endforeach

</table>
-->



<div class="box">
            <div class="box-header">
              <h3 class="box-title">Employee Information</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>id</th>
				<th>name</th>
				<th>email</th>
				<th>designation</th>
				<th>address</th>
				<th>phoneno</th>
 				</tr>
                </thead>
                <tbody>
                @foreach ($employee1 as $item)

<tr>
	<td>{{$item->id}}</td>
	<td>{{$item->name}}</td>	
	<td>{{$item->email}}</td>	
	<td>{{$item->designation}}</td>	
	<td>{{$item->address}}</td>	
	<td>{{$item->phoneno}}</td>	
	

</tr>
@endforeach

                </tbody>
              </table>
            </div>
          
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
 
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous">
  	
  </script>
 

 <script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>


@endsection