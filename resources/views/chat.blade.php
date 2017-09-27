	<html>
	<head>

	<title>

	Chat Room

	</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
<style type="text/css">
.list-group{
	overflow-y:scroll; 
	height: 200px;
}
</style>

	</head>
	<body>

<div id="app">
		<div class="container">
		<div class="row">
	
			
			<div class="col-4"></div>
			<div class="col-4">
		<li class="list-group-item active">Chat Room</li>
		<ul class="list-group new" v-chat-scroll>
		<message v-for="message in chat.message" :key="message.index" color="warning">@{{message}}</message>
		
	
		</ul>
			<input type="text" placeholder="Type your text here" class="form-control " v-model="message" @keyup.enter="send">
	</div>
		</div>
	
		<div class="row">
			<span class="col-4"></span>
			</div>
	</div>
	</div>	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
	</body>
	</html>