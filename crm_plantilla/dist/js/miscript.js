$(document).ready(function(){
 
    // show list of product on first load
    showProducts();

});
 
// function to show list of products
function showProducts(){
    // get list of products from the API
    $.getJSON("http://localhost/api/product/read.php", function(data){
        //console.log(JSON.stringify(assessments));
        // html for listing products
        var read_products_html="";
         

        // start table
        read_products_html+="<table id='dataTables-example' class='table table-bordered table-hover' id='dataTables-example'>";
            // creating our table heading
            read_products_html+="<thread>";
            read_products_html+="<tr>";
                read_products_html+="<th scope='col'>Name</th>";
                read_products_html+="<th scope='col'>Price</th>";
                read_products_html+="<th scope='col'>Category</th>";
            read_products_html+="</tr>";
            read_products_html+="</thread>";
             
            // loop through returned list of data
            $.each(data.records, function(key, val) {
             
                // creating new table row per record
                read_products_html+="<tbody>";
                read_products_html+="<tr>";
                    read_products_html+="<td>" + val.name + "</td>";
                    read_products_html+="<td>$" + val.price + "</td>";
                    read_products_html+="<td>" + val.category_name + "</td>";
                read_products_html+="</tr>";
                read_products_html+="</tbody>";
             
            });
         
        // end table
        read_products_html+="</table>";
        // inject to 'page-content' of our app
        $("#page-content").html(read_products_html);
    });
}
