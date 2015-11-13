<?php

class WallpaperController extends BaseController {

	public function index()
	{
		$dir = public_path() . "/images/AndroidRandomWallpaper";

		$folders = scandir($dir);
		//Choose a folder, starting from Array index 3.
		//
		for($i = 0; $i < 50; $i++) {
			$num = rand(3, count($folders)-1);
		}

		/* Make sure the README.md is not returned*/
		while($folders[$num] == "README.md" || $folders[$num] == "." || $folders[$num] == ".." || $folders[$num] == ".git"){
			for($i = 0; $i < 50; $i++) {
				$num = rand(0, count($folders)-1);
			}
		}

		//Get a random image from the folder.
		$dir = public_path() . "/images/AndroidRandomWallpaper/" . $folders[$num];

		$pictures = scandir($dir);

		$num2 = rand(2, count($pictures)-1);

		while($pictures[$num2] == "." || $pictures[$num2] == ".."){
			for($i = 0; $i < 50; $i++) {
				$num2 = rand(0, count($pictures)-1);
			}
		}
		//Create the image url.
		$image = "/images/AndroidRandomWallpaper/" . $folders[$num] . "/" . $pictures[$num2];

		return View::make('wallpapers.wallpapers')
				->with('image', $image);
	}

}
