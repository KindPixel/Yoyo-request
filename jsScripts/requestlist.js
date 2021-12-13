$(document).ready(function () {
    
    fetchUser(); //This function will load all data on web page when page load
    function fetchUser() {
        // This function will fetch data from table and display under <div id="result">
        var action = "Load";
        $.ajax({
            url: "phpScripts/requestlist.php", //Request send to "action.php page"
            method: "POST", //Using of Post method for send data
            data: { action: action }, //action variable data has been send to server
            success: function (data) {
                $("#result").html(data); //It will display data under div tag with id result
            },
        });
    }

    //This JQuery code is for Delete customer data. If we have click on any customer row delete button then this code will execute
    $(document).on("click", ".delete", function () {
        var answer = window.confirm("u sure u want to del");
        var id = $(this).attr("id");
        console.log(answer);
        
        // console.log("id clicked: " + id);
   
        // if() {
        //     $.ajax({
        //         url: "phpScripts/requestlist.php",
        //         method: "POST",
        //         data: { id: id, action: "Delete" },
        //         success: function (data) {
        //             fetchUser();
        //             alert(data);
        //         },
        //     });
        // }
        // else {
        //     return false;
        // }
    });
});
