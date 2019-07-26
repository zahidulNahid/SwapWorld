@extends('layouts.logged')

@section('title', 'Post your ad')

@section('header')
    @parent
@stop
@section('nav-bar')
    @parent
@stop
@section('nav-bar2')

@stop

@section('sidebar')
    
@stop

@section('content')
    <div class="content">
		<div class="main">
			<form method="post" enctype="multipart/form-data">
				{{csrf_field()}}
					<h3>Swap your products with others</h3>
						<div class="card" style="width: 700px;background-image: url('/assets/images/books.jpg');background-repeat: no-repeat;background-position: right top;margin-right: 250px;">
							<table>
								<tr><h4 align="center">Post your ad</h4></tr>
								<tr>
									<td>Location : </td>
									<td style="height: 50px;width: 350px" colspan="2">
										<input list="locations" name="location">
										<datalist id="locations">
  											<option value="Dhaka"></option>
  											<option value="Chattogram"></option>
  											<option value="Khulna"></option>
  											<option value="Jessore"></option>
  											<option value="Rangpur"></option>
  											<option value="Barishal"></option>
  											<option value="Sylhet"></option>
  											<option value="Rajshahi"></option>
										</datalist>
									</td>
								</tr>
								<tr>
									<td>Book Name : </td>
									<td style="height: 50px;width: 350px;" colspan="2"><input type="text" name="book_name"></td>
								</tr>
								<tr>
									<td>Author Name : </td>
									<td style="height: 50px;width: 350px;" colspan="2"><input type="text" name="writer_name"></td>
								</tr>
								<tr>
									<td>Category: </td>
									<td style="height: 50px;width: 350px" colspan="2">
									<input list="Categories" name="category">
										<datalist id="Categories">
											<option value="Novel"></option>
											<option value="Thriller"></option>
											<option value="Satire"></option>
											<option value="Drama"></option>
											<option value="Science Fiction"></option>
  											<option value="Mystery"></option>
  											<option value="Romance"></option>
  											<option value="Travel"></option>
  											<option value="Horror"></option>
  											<option value="Poetry"></option>
  											<option value="Encyclopedias"></option>
  											<option value="Dictionaries"></option>
											<option value="Health"></option>
											<option value="Engineering"></option>
											<option value="Commerce"></option>
											<option value="Arts"></option>
											<option value="Medical"></option>
										</datalist>
									</td>
								</tr>
								<tr>
									<td>Book Edition: </td>
									<td style="height: 50px;width: 350px;" colspan="2"><input type="text" name="edition"></td>
								</tr>
								<tr>
									<td valign="top">Description or short summary: </td>
									
									<td valign="top"><textarea name="description" cols="50" rows="10" style="height:150px;width:350px;"></textarea>
					   				</td>
								</tr>
								<tr>
									<td>UPLOAD AN IMAGE: </td>
									<td style="height: 50px;width: 350px" colspan="2"><input type="file" name="image"></td>
								</tr>
								<tr>
									<td></td>
									<td><h4>Now select your prefer Category :</h4></td>
								</tr>
								<tr>
									<td>Category : </td>
									<td style="height: 50px;width: 350px" colspan="2">
									<input list="Categories" name="prefer_category">
										<datalist id="Categories">
											<option value="Novel"></option>
											<option value="Thriller"></option>
											<option value="Satire"></option>
											<option value="Drama"></option>
											<option value="Science Fiction"></option>
  											<option value="Mystery"></option>
  											<option value="Romance"></option>
  											<option value="Travel"></option>
  											<option value="Horror"></option>
  											<option value="Poetry"></option>
  											<option value="Encyclopedias"></option>
  											<option value="Dictionaries"></option>
											<option value="Health"></option>
											<option value="Engineering"></option>
											<option value="Commerce"></option>
											<option value="Arts"></option>
											<option value="Medical"></option>
										</datalist>
									</td>
								</tr>
								<tr>
									<td></td>
									<td style="height: 50px;width: 350px;"><input type="submit" value="SUBMIT" style="height: 30px;width: 350px;background-color: rgb(30, 144, 255);"></td>
								</tr>

								<tr>
									<label style="color: red">
									@foreach($errors->all() as $err)
									{{$err}} <br>
									@endforeach
									</label>
								</tr>
							</table>
						</div>
			</form>
		</div>
	</div>
@stop


@section('footer')
    @parent
@stop