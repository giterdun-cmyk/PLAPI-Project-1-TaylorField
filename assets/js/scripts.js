
$(document).ready(function(){
    // Document is loaded, ready to run more code

    var search_query = '';
    var selected_year = 0;
    var make_model = '';


    $("#search-form").on("submit", function(e){
        e.preventDefault(); // Prevents FORM from refreshing
    });

    // On keyup start searching cars
    $("#search-form #search-nickname").on("keyup", function(){
        // Get the value in the search box
        // Send query to PHP file
        // Return rows from PHP file that match query
        // Replace table rows with new results

        search_query = $(this).val();
        cool_search();
        
        
    }); // end of search kepyup



    $("#year-select").on("change", function(){
        selected_year = $(this).val();
        cool_search();
    });


    
    $("#search-form #search-model").on("keyup", function(){
        // Get the value in the search box
        // Send query to PHP file
        // Return rows from PHP file that match query
        // Replace table rows with new results

        search_query = $(this).val();
        cool_search();
        
        
    });

    /*
     * 
     * Cool Search
     * Send search query to search.php
     * Return json results
     * 
     */

    function cool_search(){
        $.post(
            'ajax/search.php', // URL of file to call
            {
                search: search_query,
                year: selected_year,
                make: make_model

            }, // Data to be passed to file via POST
            function(car_data){ // On Complete function(returned data)
                if(car_data == "") return;

                var cars = JSON.parse(car_data); // Translates PHP JSON into usable JavaScript
                var table_rows = '';
                            // for each( index, object)
                $.each(cars, function(i, car){
                    table_rows += "<tr><td>"+car.make+"</td><td>"+car.model+"</td><td>"+car.year+"</td><td>"+car.nickname+"</td></tr>";
                });

                $("#search-results").html(table_rows);
            }
        );
    } // End of cool_search

}); // end of document ready