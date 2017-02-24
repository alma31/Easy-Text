<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Easy Text</title>
	<link rel="stylesheet" href="{{mix('/css/app.css')}}">
</head>
<body>
	<h1 style="text-align: center">Easy Text</h1>

	<div class="ligneTitle"></div>

	<div class="container fluide">
		<div class="row">
			<div class="col-md-4">
				<h2>Texte à générer : </h2>
				<form method="GET" action="/home">
					{{ csrf_field() }}
					<div class="form-group">
						<div class="radio">
							<label>
								<input type="radio" name="optionsRadios" id="radio1" value="{{$faker->word}}">
								Mots
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="optionsRadios" id="radio2" value="{{$faker->paragraph}}">
								Paragraphes
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="optionsRadios" id="radio3" value=  "{{$faker->word}}">
								Listes
							</label>
						</div>
					</div>
					<div>
						<label for="inputNbr">
							[nom] à générer de fois</label>
							<input type="text" class="form-control" id="inputNbr" name="inputNbr" placeholder="">
						</div>
						<div>
						</div>
						<input id="input" class="form-control" type="submit" name="valid">
					</form>
				</div>
				
				<div class="col-md-8">
					<textarea class="form-control" rows="14" id="textarea">{{$inputRadio}}</textarea>
				</div>
				<div>{{$inputNbr}} </div>
			</div>
		</div>

		<script type="text/javascript" src="{{mix('/js/app.js')}}"></script>
	</body>
	</html>