<form id="contactForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

	<!-- Hidden fild: Just for robots -->
	<div class="form-fild" class="hidden" style="display: none;">
		<label for="hidden">Hidden: <span class="error">* <?php echo $hiddenErr;?></span>
			<input type="text" name="hidden" id="formHidden" value="">
		</label>
	</div><!-- form-fild -->

	<div class="form-fild">
		<label for="name">Nume: <span class="error">* <?php echo $numeErr;?></span>
			<input type="text" name="nume" id="formNume" value="<?php echo isset($_POST['nume']) ? htmlspecialchars($_POST['nume']) : ""; ?>">
		</label>
	</div><!-- form-fild -->

	<div class="form-fild">
		<label for="telefon">Telefon: <span class="error">* <?php echo $telefonErr;?></span>
			<input type="text" name="telefon" id="formTelefon" value="<?php echo isset($_POST['telefon']) ? htmlspecialchars($_POST['telefon']) : ""; ?>">
		</label>
	</div><!-- form-fild -->

	<div class="form-fild">
		<label for="email">Email: <span class="error">* <?php echo $emailErr;?></span>
			<input type="text" name="email" id="formEmail" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ""; ?>">
		</label>
	</div><!-- form-fild -->


	<div class="form-fild">
		<label for="mesaj">Mesaj <span class="error">* <?php echo $mesajErr;?></span>
			<textarea name="mesaj" id="formMesaj" cols="30" rows="3"><?php echo isset($_POST['mesaj']) ? htmlspecialchars($_POST['mesaj']) : ""; ?></textarea>
		</label>
	</div><!-- form-fild -->
	
	<div class="form-fild">
		<input type="submit" id="formSubmit" name="submit" value="Trimite">
	</div><!-- #form-fild -->
	
</form>