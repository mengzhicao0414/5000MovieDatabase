<?php

function table_type ($table_name) {
	$Type = "";
	switch ($table_name) {
		case "Actor":
			$Type = "Actor";##"PersonA";
			break;
		case "Crew": #Director
			$Type = "Crew";##"Person";
			break;
		case "Movie":
			$Type = "Movie";
                        break;

                case "Reception": #"Critiques"
                        $Type = "Reception"; #"Critiques"
                        break;

		default:
			# code...
			break;
	}

	return $Type;
}

function return_attributes ($return_type) {
	$Attributes = "";
	switch (table_type($return_type)) {
		case 'Actor':##'PersonA':
			$Attributes = "Actor.name, Actor.character";
			break;
		case 'Crew': ##'Person':
			$Attributes = "Crew.name, Crew.job";
			#$Attributes = "first_name, last_name, birth_date, death_date";
			break;
		case 'Movie':
			#$Attributes = "title, release_date, rating, length, tagline, summary, budget"; #1
			$Attributes = "title,budget, release_date, original_language, runtime";
                        break;
                case 'Reception': #'Critiques'
                        $Attributes = "title, popularity,revenue, vote_average, vote_count";
                       break; 

		default:
			# code...
			break;
	}
	return $Attributes;
}

function tables($return_type, $param_type) {
	#if ($param_type = "Person"){$param_type = "Movie";}
	$Tables = $param_type; #strtolower($param_type); #2
	if (table_type($return_type) != $param_type) {
		switch ($_POST["return-type"]) {
			case "Actor":
				if ($_POST["param-type"] == "Genre") {
					$Tables = "Actor, Movie, Genre";
				} else {
					$Tables = "Actor, Movie";
				}
				#$Tables = "Actor, Movie";
				break;
			case "Crew": #"Director"
				if ($_POST["param-type"] == "Genre") {
					$Tables = "Crew, Movie, Genre";
				} else {
					$Tables = "Crew, Movie";;
				}
				#$Tables = "Crew, Movie";
				break;
			case "Movie":
				if ($_POST["param-type"] == "Genre") {
					#$Tables .= ", movie, in_genre";
					$Tables .= ", Movie";
				} else {
					$Tables = "Movie , Crew, Actor";
				}
				break;
			default:
				# code...
				break;
		}
	}
	return $Tables;
}

function select($return_type, $param_type, $param_value) {
	$Select = "";

	//query by user value
	switch ($param_type) {
		case 'Person':
			if ($_POST["return-type"] == "Movie") {
				$Select .=  "( Crew.name ='" . $param_value . "')" ; #"( Actor.name ='" . $param_value . "')" . " OR " .
			} else {
				$Select .= "(" . $return_type . ".name ='" . $param_value . "')";
			}
			break;
		case 'Movie':
			$Select .= "Movie.title='" . $param_value . "'"; #movie --> Movie #3 
			break;
		case 'Genre':
			#$Select .= "genre.name='" . $param_value . "'";
			$Select .= "Genre.genre='" . $param_value . "'";
			break;
    
	default:
		# code...
		break;
	}

	//handles join tables
	if (table_type($return_type) != $param_type) {
		$Select .= " AND ";
		switch ($return_type) {
			case "Actor":
			#$Select .= "person.id = acts.person_id AND acts.movie_id = movie.id";
				$Select .= "Actor.movie_id = Movie.movie_id";
				break;
			case "Crew": #"Director"
				#$Select .= "person.id = directs.person_id AND directs.movie_id = movie.id";
				$Select .= "Crew.movie_id = Movie.movie_id";
				break;
    
			case "Movie":
				if ($param_type == "Genre"){
					#$Select .= "(movie.id = in_genre.movie_id AND genre.id = in_genre.genre_id) ";
					$Select .= "(Movie.movie_id = Genre.movie_id) ";
				} else {
					$Select .= "((Movie.movie_id = Crew.movie_id))"; #(Movie.movie_id = Actor.movie_id) OR
					#$Select .= " AND Crew.job = 'Director'";
					#$Select .= "((person.id = directs.person_id AND directs.movie_id = movie.id) OR (person.id = acts.person_id AND acts.movie_id = movie.id))";
				}
			break;

		default:
			# code...
			break;
		}
	}

	#if(isset($sort_by)){
	#	$Select .= " ORDER BY ";
	#	$Select .= $sort_by;
	#}
	return $Select;
}

function query ($return_type, $param_type, $param_value) {
	return "SELECT DISTINCT " . return_attributes($return_type) . " FROM " . tables($return_type, $param_type) . " WHERE " . select($return_type, $param_type, $param_value);
}

?>
