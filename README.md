<h1>Installation:</h1>
<ul>
	<li>Create the database and update your .env file</li>
	<li>
		Add the below to config/auth.php:
		<pre>
'guards' => [
	...
	'admin' => [
		'driver' => 'session',
		'provider' => 'admins',
  	],
	...
],
'providers' => [
	...
	'admins' => [
		'driver' => 'eloquent',
		'model' => Zenbolt\Cms\Models\Admin::class,
	],
	...
],
		</pre>
	</li>
	<li>Configure the filesystem in config/filesystem.php, use 'public' as default value if none</li>
	<li>
		Run:
		<pre>composer require zenbolt/cms</pre>
	</li>
	<li>
		To make sure the project is well migrated:
		<pre>php artisan migrate</pre>
	</li>
	<li>
		To create the admin:
		<pre>php artisan admin:create --name=example --email=example@example.com --password=123</pre>
	</li>
</ul>

<h1>Publishables:</h1>
<ul>
	<li>
		CMS config:
		<pre>php artisan vendor:publish --tag=cms_config --force</pre>
	</li>
	<li>
		CMS sheefra config:
		<pre>php artisan vendor:publish --tag=cms_sheefra_config --force</pre>
	</li>
	<li>
		CMS viddy config:
		<pre>php artisan vendor:publish --tag=cms_viddy_config --force</pre>
	</li>
	<li>
		CMS routes:
		<pre>php artisan vendor:publish --tag=cms_routes --force</pre>
	</li>
	<li>
		CMS translatables:
		<pre>php artisan vendor:publish --tag=translatable --force</pre>
	</li>
</ul>

<h1>Http Logs Installation:</h1>
<ul>
	<li>
		Add the below to protected $middleware in app/Http/Kernel.php:
		<pre>\Zenbolt\Cms\Middlewares\HttpLogsMiddleware::class,</pre>
	</li>
</ul>

<h1>Preview Checking On The Website:</h1>
<ul>
	<li>
		If
		<pre>auth('admin')->check() && request('ht_preview_mode')</pre>
        returns true, then preview mode is on, you can get the preview data from
		<pre>session('ht-preview-mode-request')</pre>
        Code example:
        <pre>$row = auth('admin')->check() && request('ht_preview_mode') ? session('ht-preview-mode-request') : $row = Model::findOrFail($id);</pre>
	</li>
</ul>

<h1>If laravel's symlink didn't work on windows, using command prompt (not powershell do the following):</h1>
<ul>
	<li>
	https://laracasts.com/discuss/channels/laravel/how-to-link-up-storage-files
		<pre>cd C:\xampp\htdocs\fresh\public\
mklink /D storage ..\storage\app\public</pre>
	</li>
</ul>