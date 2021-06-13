<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
            
  <table class="table table-striped">
    <thead>
      <tr>
	  <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>password</th>
		<th>img</th>
		<th>phone</th>
		<th>date</th>
		<th>role</th>
		<th>Action</th>
		
      </tr>
    </thead>
    <tbody>
     
	  @foreach (session('cart') as $key  => $carts)
      <tr>
	 <td>{{$key+1}}</td>
	  <td>{{$carts[0]}}</td>
	  <td>{{$carts[1]}}</td>
	  <td>{{$carts[2]}}</td>
	  <td>{{$carts[3]}}</td>
	  <td>{{$carts[4]}}</td>
	  <td>{{$carts[5]}}</td>
	  <td>{{$carts[6]}}</td>
	  
	  
	  
	  
	  
	  
	 <td><a href={{url('edit', $key+1) }}>edit</a>     <a href="{{url('delete',$key+1)}}">Detele</a></td>
        
      </tr>
	  @endforeach 
    </tbody>
  </table>
  
  <a href="{{url('/finaldata')}}" type="submit"  class="btn btn-default">final submit</a>

</div>

</body>
</html>
