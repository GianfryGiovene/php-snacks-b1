<!-- 
    Snack 4
    Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
-->

<?php

    $paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Aut eligendi commodi, minima velit eum aliquam odit dolorem provident quos. 
        Repudiandae, modi suscipit repellat odio aliquid magnam. Doloremque temporibus animi facilis?";


    $manyParagraph = explode('.', $paragraph);
    
    var_dump($manyParagraph);
?>