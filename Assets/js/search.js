/**
 * Created by jooke on 14/01/2015.
 */

   function search(){

    var i=0;
    $("#search").on("change",function(event){
        alert("test")
        $.post(
            'modele_SearchSuggestion.php',
            {
                query:$("#search").value
            },
            function(texte_recu){
                $("#datalist").append(texte_recu);
            },
            'text'

        );









    });



}




