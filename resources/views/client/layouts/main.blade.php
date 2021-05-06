<!DOCTYPE html>
<html lang="en">
    <head>
    <title>@yield('title')</title>
    <link
      href="https://unpkg.com/tailwindcss/dist/tailwind.min.css"
      rel="stylesheet"
    />
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    @php
        $Colors = json_decode($setting[0]['Colors']);
        $primary1 =  $Colors[0];
        $primary2 =  $Colors[1];
        $secondary1 =  $Colors[2];
        $secondary2 =  $Colors[3];
        $text =  $Colors[4]; 
        $menu = json_decode($setting[0]['Nav']);
        $menu = $menu->nav;
		$header = json_decode($setting[0]['Header']);
    @endphp
	@include('client.layouts.header')

	<!--Container-->
	<div class="container w-full md:max-w-3xl mx-auto pt-20">
        @yield('content')
    </div>

	<footer class="shadow mt-4" style="background-color: {{$primary2}}">
		<div class="container flex items-center justify-center max-w-4xl mx-auto py-8">
			<p style="color: {{$primary1}}">{{ $setting[0]['Footer'] }}</p>
		</div>
	</footer>

</body>

</html>