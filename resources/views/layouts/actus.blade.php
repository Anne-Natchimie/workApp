<!-- component -->
<body class="bg-black">
    

					<div class="flex justify-between grid-cols-3 gap-6 m-10 mb-10">

						@foreach ($works as $itemWork)

						<article class="h-max container bg-white shadow-2xl rounded-2xl p-5">

						<img class="rounded-t-lg px-5 py-2" src="https://i.pinimg.com/736x/a9/b1/1e/a9b11e4d36f9030511718670fa7c6af8.jpg" alt="step3">

						<h1 class="text-2xl font-bold text-black">{{$itemWork->titre}}</h1>

                        <p class="font-normal text-black">{{Str::limit($itemWork->description, 300)}}</p>

						</article>

						@endforeach

					</div>

</body>

</html>