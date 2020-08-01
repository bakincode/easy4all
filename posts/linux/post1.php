<div class="line">
	<div class="column c12">
		<h2>Basics commands on linux:</h2>
		<p class="texto">The command <strong>sudo</strong> stands for <strong>"super user do"</strong>. It is useful for many tasks as installing programs, upgrading your system, etc... you can use this command simultaneously with others to do super user things. You'll need to digit your password to acess a super user command.
		 </p>
		 <div class="code-box">
			<div class="code">
				<span style="color:green">linux@pc:~$</span>
				<span style="color:red">sudo </span>
				<span style="color:green"> command</span>
			</div>
		</div>
		<br>
		<p class="texto">The command <strong>cd</strong> stands for <strong>"change directory"</strong>. It is used in its literal meaning. </p>
		<div class="code-box">
			<div class="code">
				<span style="color:green">linux@pc:~$</span>
				<span style="color:red">cd </span>
				<span style="color:green">Desktop</span>
			</div>
		</div>
		<br>
		<p class="texto">The command <strong>mkdir</strong> stands for <strong>"make directory"</strong>. It is used in its literal meaning.</p>
		<div class="code-box">
			<div class="code">
				<span style="color:green">linux@pc:~$</span>
				<span style="color:red">mkdir </span>
				<span style="color:green">Folder</span>
			</div>
		</div>
		<br>
		<p class="texto">Now to remove a directory use <strong>rmdir</strong> which means <strong>"remove directory"</strong>. Is used in its literal meaning.</p>
		<div class="code-box">
			<div class="code">
				<span style="color:green">linux@pc:~$</span>
				<span style="color:red">rmdir </span>
				<span style="color:green">Folder</span>
			</div>
		</div>
		<br>
		<p class="texto">If you want to remove files, for example <strong>file.c</strong> try the command <strong>rm</strong> which means <strong>"remove"</strong>.</p>
		<div class="code-box">
			<div class="code">
				<span style="color:green">linux@pc:~$</span>
				<span style="color:red">rm </span>
				<span style="color:green">file.c</span>
			</div>
		</div>
		<br>
		<p class="texto">Now if you want to upgrade your system, you need to check for updates before. After that you'll need to digit your password, it's very important for security purposes.</p>
		<div class="code-box">
			<div class="code">
				<span style="color:green">linux@pc:~$</span>
				<span style="color:red">sudo apt-get update </span>
			</div>
		</div>
		<br>
		<p class="texto">After updating you should search for upgrades. Try the next command. Note: If you run this command immediately after the previous one you won't need to digit your password again. To install new upgrades you'll need to write Y (Yes).
		</p>
		<div class="code-box">
			<div class="code">
				<span style="color:green">linux@pc:~$</span>
				<span style="color:red">sudo apt-get upgrade</span>
			</div>
		</div>
		<br>
		<p class="texto">After upgrading your system you should clean old packages, write the next command then.</p>
		<div class="code-box">
			<div class="code">
				<span style="color:green">linux@pc:~$</span>
				<span style="color:red">sudo apt-get autoclean</span>
			</div>
		</div>
		<br>
		<p class="texto"> Now to check if <strong>apt-get</strong> repository has useless/ replaced packages and useless memory try the next command.</p>
		<div class="code-box">
			<div class="code">
				<span style="color:green">linux@pc:~$</span>
				<span style="color:red">sudo apt-get autoremove</span>
			</div>
		</div>
	</div>
</div>

<br>