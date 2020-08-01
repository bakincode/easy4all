<div class="line">
	<div class="column c12">
		<h2>Haskell - Introduction</h2>
		<p class="texto">Use the next predefined functions to help you coding next exercises...</p>
		<ul>
			<li><strong class="boldBlue">length l - </strong> number of elements in l list;</li>
			<li><strong class="boldBlue">head l - </strong> head of l list (non empty list);</li>
			<li><strong class="boldBlue">tail l - </strong> tail of l list (non empty list);</li>
			<li><strong class="boldBlue">last l - </strong> last element of l list (non empty list);</li>
			<li><strong class="boldBlue">sqrt x - </strong> square root of x;</li>
			<li><strong class="boldBlue">div x y - </strong> integer division between x and y;</li>
			<li><strong class="boldBlue">mod x y - </strong> remainder of integer division between x and y;</li>
		</ul>
		<br>
	</div>

	<h4>Exercise 1:</h4>
	<p class="texto"><strong class="boldBlue">perimeter - </strong>given a radious calculates the perimeter of a circumference.</p>
	<div class="code-box">
		<div class="code">
			<span style="color:red">perimeter</span>
			<span style="color:purple"> :: </span>
			<span style="color:blue">Float</span>
			<span style="color:purple"> -> </span>
			<span style="color:blue">Float</span>
			<br>
			<span style="color:black">perimeter radius</span>
			<span style="color:purple"> = </span>
			<span style="color:green">2</span>
			<span style="color:black"> * pi * radius</span>
		</div>
	</div>
	
	<h4>Explanation:</h4>
	<p class="texto">In the first line you write the name and data type of the given function. The first <strong>Float</strong> refers to the argument and the last <strong>Float</strong> for the returned data. In the second line you have function's name again and the radious argument after. Equal sign points for the returned data.</p>
	
	<br>
	<div class="header"></div>
	<br> 

	<h4>Exercise 2:</h4>
	<p class="texto"><strong class="boldBlue">dist - </strong>given two points calculates the distance between both. Each point is a pair of <strong>Float</strong> values.</p>
	
	<div class="code-box">
		<div class="code">
			<span style="color:red">dist</span>
			<span style="color:purple"> :: </span>
			<span style="color:blue">(Float, Float)</span>
			<span style="color:purple"> -> </span>
			<span style="color:blue">(Float, Float)</span>
			<span style="color:purple"> -> </span>
			<span style="color:blue">Float</span>
			<br>
			<span style="color:black">perimeter (x1, y1) (x2, y2)</span>
			<span style="color:purple"> = </span>
			<span style="color:black">sqrt( (x2</span>
			<span style="color:purple">-</span>
			<span style="color:black">x1) ^</span>
			<span style="color:green">2</span>
			<span style="color:purple"> + </span>
			<span style="color:black">(y2</span>
			<span style="color:purple">-</span>
			<span style="color:black">y1) ^</span>
			<span style="color:green">2</span>
			<span style="color:black"> )</span>
		</div>
	</div>
	
	<h4>Explanation:</h4>
	<p class="texto">This function is diferent than the previously one. It receive two pairs/ tuples as parameters and return a <strong>Float</strong>. A pair is way you can manipulate 2 values at the same time, but we will see this in detail in future lessons. </p>
</div>

<br>
