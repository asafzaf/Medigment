window.onload = () => {
    $("#part2").hide();
    $("#finish-button").hide();
    $("#back-button").hide();
    document.getElementById("next-step-button").onclick = function() {
        $("#back-button").show();
        $("#process-bar").css("width", "100%");
        $("#process-bar").text("stage 2");
        $("#part1").hide();
        $("#part2").show();
        $("#next-step-button").hide();
        $("#finish-button").show();
    };

    document.getElementById("back-button").onclick = function() {
        $("#back-button").hide();
        $("#process-bar").css("width", "50%");
        $("#process-bar").text("stage 1");
        $("#part1").show();
        $("#part2").hide();
        $("#next-step-button").show();
        $("#finish-button").hide();
    };

    document.getElementById("cancel-button").onclick = function() {
        window.location.href = 'http://se.shenkar.ac.il/students/2022-2023/web1/dev_204/index.html';
    };
};