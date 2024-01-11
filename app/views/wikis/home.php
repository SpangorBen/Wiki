
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="<?php echo URLROOT;?>/css/style.css">
    <title><?php echo SITENAME ?></title>
<style>:root{
::-webkit-scrollbar{height:10px;width:10px}::-webkit-scrollbar-track{background:#efefef;border-radius:6px}::-webkit-scrollbar-thumb{background:#d5d5d5;border-radius:6px}::-webkit-scrollbar-thumb:hover{background:#c4c4c4}}</style>
</head>
<body class="bg-gray-200 font-sans leading-normal tracking-normal" style="background-image: url('../images/newnew.png'); background-repeat:no-repeat; background-size:cover; background-position: center;">

	<!--Header-->
	<div class="w-full m-0 p-0 bg-cover bg-bottom" style="background-image:url('../images/TT.png'); height: 60vh; max-height:460px; background-size:cover; background-position:center;">
			<div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
				<!--Title-->
					<p class="text-white font-extrabold text-3xl md:text-5xl">
						Wikis just for you
					</p>
					<p class="text-xl md:text-2xl text-gray-500">Welcome dear reader</p>
                    <button  class="flex-1 mt-4 md:mt-0 block md:inline-block appearance-none bg-blue-500 text-white text-base font-semibold tracking-wider uppercase py-3 px-6 rounded shadow hover:bg-blue-400" onclick="openMyPopup()">Add new Wiki</button>
			</div>
		</div>

		<!--Container-->
		<div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">

			<div class="mx-0 sm:mx-6">

				<!--Nav-->
				<nav class="mt-0 w-full">
					<div class="container mx-auto flex items-center">

						<div class="flex w-1/2 pl-4 text-sm">
							<ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
								<li class="mr-2">
								<a class="inline-block py-2 px-2 text-black no-underline hover:underline" href="post.html">POST</a>
								</li>
								<li class="mr-2">
								<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-2" href="multimenu post.html">MULTIMENU POST</a>
								</li>
								<li class="mr-2">
								<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-2" href="#">LINK</a>
								</li>
								<li class="mr-2">
								<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-2" href="post_vue.html">POST_VUE</a>
								</li>
							</ul>
						</div>


						<div class="flex w-1/2 justify-end content-center">
                            <a href="#" class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-3 px-2">Login</a>
							<a class="inline-block text-gray-500 no-underline hover:text-white hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 avatar" data-tippy-content="@twitter_handle" href="https://twitter.com/intent/tweet?url=#">
								<svg class="fill-current h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M30.063 7.313c-.813 1.125-1.75 2.125-2.875 2.938v.75c0 1.563-.188 3.125-.688 4.625a15.088 15.088 0 0 1-2.063 4.438c-.875 1.438-2 2.688-3.25 3.813a15.015 15.015 0 0 1-4.625 2.563c-1.813.688-3.75 1-5.75 1-3.25 0-6.188-.875-8.875-2.625.438.063.875.125 1.375.125 2.688 0 5.063-.875 7.188-2.5-1.25 0-2.375-.375-3.375-1.125s-1.688-1.688-2.063-2.875c.438.063.813.125 1.125.125.5 0 1-.063 1.5-.25-1.313-.25-2.438-.938-3.313-1.938a5.673 5.673 0 0 1-1.313-3.688v-.063c.813.438 1.688.688 2.625.688a5.228 5.228 0 0 1-1.875-2c-.5-.875-.688-1.813-.688-2.75 0-1.063.25-2.063.75-2.938 1.438 1.75 3.188 3.188 5.25 4.25s4.313 1.688 6.688 1.813a5.579 5.579 0 0 1 1.5-5.438c1.125-1.125 2.5-1.688 4.125-1.688s3.063.625 4.188 1.813a11.48 11.48 0 0 0 3.688-1.375c-.438 1.375-1.313 2.438-2.563 3.188 1.125-.125 2.188-.438 3.313-.875z"></path></svg>
							</a>
							<a class="inline-block text-gray-500 no-underline hover:text-white hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 avatar" data-tippy-content="#facebook_id" href="https://www.facebook.com/sharer/sharer.php?u=#">
								<svg class="fill-current h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M19 6h5V0h-5c-3.86 0-7 3.14-7 7v3H8v6h4v16h6V16h5l1-6h-6V7c0-.542.458-1 1-1z"></path></svg>
							</a>
						</div>

					</div>
				</nav>

				<div class="bg-gray-200 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t p-4" style="background-color: transparent;
background: rgba(255, 255, 255, 0.32);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(7.4px);
-webkit-backdrop-filter: blur(7.4px);
border: 1px solid rgba(255, 255, 255, 0.3);">

				<!--Lead Card-->
				<div class="flex h-full bg-white rounded overflow-hidden shadow-lg" style="background-color: #EA87C7;">
					<a href="post.html" class="flex flex-wrap no-underline hover:no-underline">
						<div class="w-full md:w-2/3 rounded-t">	
							<img src="https://source.unsplash.com/collection/494263/800x600" class="h-full w-full shadow">
						</div>

						<div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
							<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg" style="background-color: #D592FF;">
								<p class="w-full text-gray-600 text-xs md:text-sm pt-6 px-6">GETTING STARTED</p>
								<div class="w-full font-bold text-xl text-gray-900 px-6">👋 Welcome fellow reader</div>
								<p class="text-gray-800 font-serif text-base px-6 mb-5">
                                Get ahead of the curve with our newly unveiled selection of trendy wikis, offering unique insights and in-depth exploration into contemporary themes
								</p>
							</div>

							<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
								<div class="flex items-center justify-between">
									<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
									<p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
								</div>
							</div>
						</div>

					</a>
				</div>
				<!--/Lead Card-->


				<!--Posts Container-->
				<div class="flex flex-wrap justify-between pt-12 -mx-6">

				<!--1/2 col -->
					<?php $count = 0; foreach($data['wikis'] as $wiki){?>
					<div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
						<?php $count++;?>
						<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
							<a href="#" class="flex flex-wrap no-underline hover:no-underline">
								<img src="https://source.unsplash.com/collection/3657445/800x600" class="h-full w-full rounded-t pb-6">
								<p class="w-full text-gray-600 text-xs md:text-sm px-6"><?php echo $wiki->Category_Title?></p>
								<div class="w-full font-bold text-xl text-gray-900 px-6"><?php echo $wiki->Title?></div>
								<p class="text-gray-800 font-serif text-base px-6 mb-5"> <?php echo $wiki->Description?></p>
							</a>
						</div>
						<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
							<div class="flex items-center justify-between">
								<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="<?php echo $wiki->Name?>" src="http://i.pravatar.cc/300" alt="Avatar of Author">
								<p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
							</div>
						</div>
					</div>
					<?php if($count == 2){break;}?>
					<?php }?>

					<!--1/3 col -->
					<?php foreach(array_slice($data['wikis'], 2) as $wiki){?>
					<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
						<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
							<a href="#" class="flex flex-wrap no-underline hover:no-underline">
								<img src="https://source.unsplash.com/collection/225/800x600" class="h-64 w-full rounded-t pb-6">
								<p class="w-full text-gray-600 text-xs md:text-sm px-6"><?php echo $wiki->Category_Title?></p>
								<div class="w-full font-bold text-xl text-gray-900 px-6"><?php echo $wiki->Title?></div>
								<p class="text-gray-800 font-serif text-base px-6 mb-5"><?php echo $wiki->Description?></p>
							</a>
						</div>
						<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
							<div class="flex items-center justify-between">
								<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="<?php echo $wiki->Name?>" src="http://i.pravatar.cc/300" alt="Avatar of Author">
								<p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
							</div>
						</div>
					</div>
					<?php }?>

					

					<!--1/2 col -->
					<div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
						<div class="flex-1 flex-row bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
							<a href="#" class="flex flex-wrap no-underline hover:no-underline">	
								<img src="https://source.unsplash.com/collection/764827/800x600" class="h-full w-full rounded-t pb-6">
								<p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
								<div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
								<p class="text-gray-800 font-serif text-base px-6 mb-5">
									Lorem ipsum eu nunc commodo posuere et sit amet ligula. 
								</p>
							</a>
						</div>
						<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
							<div class="flex items-center justify-between">
								<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
								<p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
							</div>
						</div>
					</div>



					<!--2/3 col -->
					<div class="w-full md:w-2/3 p-6 flex flex-col flex-grow flex-shrink">
						<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
							<a href="#" class="flex flex-wrap no-underline hover:no-underline">	
								<img src="https://source.unsplash.com/collection/325867/800x600" class="h-full w-full rounded-t pb-6">
								<p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
								<div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
								<p class="text-gray-800 font-serif text-base px-6 mb-5">
									Lorem ipsum eu nunc commodo posuere et sit amet ligula. 
								</p>
							</a>
						</div>
						<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
							<div class="flex items-center justify-between">
								<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
								<p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
							</div>
						</div>
					</div>

					<!--1/3 col -->
					<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
						<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
							<a href="#" class="flex flex-wrap no-underline hover:no-underline">
								<img src="https://source.unsplash.com/collection/1118905/800x600" class="h-full w-full rounded-t pb-6">
								<p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
								<div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
								<p class="text-gray-800 font-serif text-base px-6 mb-5">
									Lorem ipsum eu nunc commodo posuere et sit amet ligula. 
								</p>
							</a>
						</div>
						<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
							<div class="flex items-center justify-between">
								<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
								<p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
							</div>
						</div>
					</div>

				</div>
				<!--/ Post Content-->
						
			</div>
			
			
				<!--Subscribe-->	
				<div class="container font-sans bg-green-100 rounded mt-8 p-4 md:p-24 text-center" style="background-color: #BE4BFF;">
					<h2 class="font-bold break-normal text-2xl md:text-4xl">Subscribe to the wikis</h2>
					<h3 class="font-bold break-normal font-normal text-gray-600 text-base md:text-xl">Get the latest wikis delivered right to your inbox</h3>
					<div class="w-full text-center pt-4">
						<form action="#">
							<div class="max-w-xl mx-auto p-1 pr-0 flex flex-wrap items-center">
								<input type="email" placeholder="youremail@example.com" class="flex-1 appearance-none rounded shadow p-3 text-gray-600 mr-2 focus:outline-none">
								<button type="submit" class="flex-1 mt-4 md:mt-0 block md:inline-block appearance-none bg-blue-500 text-white text-base font-semibold tracking-wider uppercase py-4 rounded shadow hover:bg-blue-400">Subscribe</button>
							</div>
						</form>
					</div>
				</div>
				<!-- /Subscribe-->
			
	
				<!--Author-->
				<div class="flex w-full items-center font-sans p-8 md:p-24">
					<img class="w-10 h-10 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of Author">
					<div class="flex-1">
						<p class="text-base font-bold text-base md:text-xl leading-none">Ghostwind CSS</p>
						<p class="text-gray-600 text-xs md:text-base">Tailwind CSS version of Ghost's Casper theme by <a class="text-gray-800 hover:text-green-500 no-underline border-b-2 border-green-500" href="https://www.tailwindtoolbox.com">TailwindToolbox.com</a></p>
					</div>
					<div class="justify-end">
					<a href="post.html" class="bg-transparent border border-gray-500 hover:border-green-500 text-xs text-gray-500 hover:text-green-500 font-bold py-2 px-4 rounded-full">Read More</a>
					</div>
				</div>
				<!--/Author-->
			
		</div>
	

	</div>

	<!-- Add Wiki -->
<div id="Add" tabindex="-1" aria-hidden="true" class="absolute top-[50%] left-[50%] translate-y-[-50%] translate-x-[-10%] p-5 w-full rounded-md shadow-sm z-50 hidden">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Wiki
                </h3>
                <button type="button" onclick="closeMyPopup()" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <form action="<?php echo URLROOT; ?>wikis/addWiki" method="post" class="p-4 md:p-5">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Wiki title</label>
                        <input type="text" name="title" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type Category name" required="">
                    </div>
					 <div class="col-span-2 sm:col-span-1">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Wiki Description</label>
                        <input type="test" name="description" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="..." required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                        <select name="category" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
							<option value="" hidden>Pick a Category</option>
							<?php
							foreach ($data['categories'] as $cat) {
								echo '<option value="' . $cat->Category_ID . '">' . $cat->Title . '</option>';
							}
							?>
                        </select>
                    </div>
                    <div class="col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Wiki contenu</label>
                        <textarea id="description" name="contenu" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write wiki contenu here"></textarea>                    
                    </div>
					<div class="col-span-2 text-white">
						<label for="tags">
							<h4>Tags</h4>
							<div class="addTags">
								<?php
								foreach ($data['tags'] as $tag) {
									echo '<label class="cyberpunk-checkbox-label" for="' . $tag->Tag_ID . '"><input type="checkbox" class="cyberpunk-checkbox" name="tag[]" id="' . $tag->Tag_ID . '" value="'. $tag->Tag_ID.'">' . $tag->Title . '</label>';
								}
								?>
							</div>
						</label>
					</div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Add new wiki
                </button>
            </form>
        </div>
    </div>
</div>



	<footer class="bg-gray-900">	
		<div class="container max-w-6xl mx-auto flex items-center px-2 py-8">

			<div class="w-full mx-auto flex flex-wrap items-center">
				<div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-extrabold">
					<a class="text-gray-900 no-underline hover:text-gray-900 hover:no-underline" href="#">
						<span class="text-base text-gray-200">Wikis for u</span>
					</a>
				</div>
				<div class="flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-end">
					<ul class="list-reset flex justify-center flex-1 md:flex-none items-center">
					  <li>
						<a class="inline-block py-2 px-3 text-white no-underline" href="#">Active</a>
					  </li>
					  <li>
						<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3" href="#">link</a>
					  </li>
					  <li>
						<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3" href="#">link</a>
					  </li>
						<li>
						<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3" href="#">link</a>
					  </li>
					</ul>
				</div>
			</div>

		</div>
	</footer>

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
	<script>
		//Init tooltips
		tippy('.avatar');
	</script>
	<script>

		function openMyPopup() {
			document.getElementById('Add').style.display = 'block';
		}
		function closeMyPopup() {
			document.getElementById('Add').style.display = 'none';
		}
	</script>
</body>
</html>