<?php

$books = [
				[
					'name' => 'Do Androids Dream of Electric Sheep',
					'author' => 'Philip K. Dick',
					'purchaseUrl' => 'http://example.com',
					'releaseYear' => 1924
				],
				[
					'name' => 'Project Hail Mary',
					'author' => 'Andy Weir',
					'purchaseUrl' => 'http://example.com',
					'releaseYear' => 1999
				],
				[
					'name' => 'The Martian',
					'author' => 'Andy Weir',
					'purchaseUrl' => 'http://example.com',
					'releaseYear' => 2011
				]
			];

			$movies = [
				[
					'movieName' => 'The Princess Bride',
					'releaseDate' => 1987
				],
				[
					'movieName' => 'Everything Everywhere All At Once',
					'releaseDate' => 2022
				],
				[
					'movieName' => 'Batman',
					'releaseDate' => 2020
				]
			];

			function filterByYear($movies) {
				$filteredMovies = [];
				foreach ($movies as $movie) {
					if ($movie['releaseDate'] >= 2000) {
						$filteredMovies[] = $movie;
					}
				}
				return $filteredMovies;
			}


		

			$filteredBooks = array_filter($books, function ($book) {
				return $book['releaseYear'] > 1950 && $book['releaseYear'] < 2020;
			});

			require "index.view.php";
	?>