<?php

	namespace Egorryaroslavl\ClassUpload;

	use Illuminate\Support\ServiceProvider;

	class ClassuploadServiceProvider extends ServiceProvider
	{

		public function boot()
		{
 
			$this->publishes([
				__DIR__ . '/class.upload.php' => base_path('app/class.upload.php'),
				__DIR__ . '/lang/class.upload.ru_RU.php' => base_path('app/lang/class.upload.ru_RU.php');				
			], '');



		}

		public function register()
		{
 

		}

	}