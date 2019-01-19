<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">

	
	<?php  

	class Dog {
		function __Construct($name, $age, $breed, $color, $owner){
			$this->name = $name;
			$this->age = $age;
			$this->breed = $breed;
			$this->color = $color;
			$this->owner = $owner;
		}

		function IntroduceDog(){
			echo "$this->name is $this->age years old. He is a $this->color $this->breed and his owner is $this->owner";
		}
	}

	$Doobs = new Dog("MacGruber", "3", "Wiener Dog", "black and tan", "Charlie");
	$Doobs->IntroduceDog();

	/*  Step 1: Use the Make a class called Dog

		Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color

		Step 4: Make a method named ShowAll that echos all the properties

		Step 5: Instantiate the class / create object and call it pitbull

Step 6: Call the method ShowAll

	

		
	*/
	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>