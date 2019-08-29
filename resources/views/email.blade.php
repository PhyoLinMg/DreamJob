<p>
	Dear {{$name}},
</p>
<p>
	@if ($status=="hired")
		Congratulations, You are hired.Celebrate.	
	@elseif($status=="removed")
		You are not hired.We feel sorry.
	@endif
</p>
