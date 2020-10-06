<?php
/*Bonjour Bonjour ! 
Voici une petite fonction toute bête qui permet d'ajouter un message sur toutes les pages de sa boutique woocommerce.
A c/c dans le fichier functions.php de son thème 
*/
function message_alerte() {
?>
<style type="text/css">
.alerte{ width:100%;padding: 5rem;background-color:#e4f9c5;border:3px double #79BD9A;border-radius: 1rem;margin:auto;text-align: center;box-shadow: rgba(0,0,0,0.2) 0px 1px 3px; color:#0B486B;font-size:1.6rem;font-style:italic;font-family: serif;}</style>
<div class="alerte" role="alert">
 Et ici vous pouvez raconter votre vie
</div>
<?php
}
add_action( 'woocommerce_before_main_content', 'message_alerte', 10, 2 ); 

?>