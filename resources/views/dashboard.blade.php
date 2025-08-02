<div >
	<h1>here is your dashboard</h1>
	<h1>{{Auth::user()->name}}</h1>
	<div class="btn-group">

		<button name="logout" id="logout"><a href="logout">Logout</a></button>
		<button> <a href="/inner">go to inner</a> </button>
	</div>
</div>
<style>
	.btn-group{
		display: flex;
		gap: 10px;
		margin-top: 20px;
		
	}
	.btn-group button{
		padding: 10px;
		background-color: green;
		color: rgb(49, 25, 25);
	}
</style>