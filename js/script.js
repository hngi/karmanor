$(document).ready(function(){
    $(".add-app").click(function(){
        var applianceName = "<div class='col-4'><input class='form-control form-control-lg' type='text'></div>";
        var unitWatt = "<div class='col-4'><input class='form-control form-control-lg' type='text'></div>";
        var hoursUsed = "<div class='col-2'><select class='form-control form-control-lg'><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>9</option></select></div>";
        var deleteButton = "<div class='col-1 pt-2'><div class='btn btn-dark btn-circle btn-circle-sm m-1'><i class='fa fa-minus'></i></div></div>";
        var fourButtons ="<div class='row ml-4 mt-5' id='all-btn'>" + applianceName+ unitWatt + hoursUsed + deleteButton + "</div>";
        $(".result-container").append(fourButtons);
    });

    $(".all_details").on("click", ".btn.btn-dark.btn-circle.btn-circle-sm.m-1", function() {
        $(this).closest("#all-btn").remove();
    });

});
