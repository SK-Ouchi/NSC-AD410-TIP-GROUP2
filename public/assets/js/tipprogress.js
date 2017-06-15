var complete, inprogress, notstarted;
document.addEventListener("DOMContentLoaded", function(event) {

    complete = new JustGage({
        id: "complete",
        value: statsComplete,
        titleFontFamily: "Open Sans",
        valueFontFamily: "Open Sans",
        titleFontColor: "#7f8c8d",
        valueFontColor: "#7f8c8d",
        min: 0,
        max: 50,
        gaugeWidthScale: 0.2,
        levelColors: ["#a2c171", "#92b558", "#8bb14e"],
        title: "Complete",
        relativeGaugeSize: true,
        donut: true,
    });

    inprogress = new JustGage({
        id: "inprogress",
        value: statsInProgress,
        titleFontFamily: "Open Sans",
        valueFontFamily: "Open Sans",
        titleFontColor: "#7f8c8d",
        valueFontColor: "#7f8c8d",
        min: 0,
        max: 50,
        gaugeWidthScale: 0.2,
        levelColors: ["#ffd480", "#ffcc66", "#ffc34d"],
        title: "In-Progress",
        relativeGaugeSize: true,
        donut: true,
    });

    notstarted = new JustGage({
        id: "notstarted",
        value: statsNotStarted,
        titleFontFamily: "Open Sans",
        valueFontFamily: "Open Sans",
        titleFontColor: "#7f8c8d",
        valueFontColor: "#7f8c8d",
        min: 0,
        max: 50,
        gaugeWidthScale: 0.2,
        levelColors: ["#ff944d", "#ff8533", "#ff751a"],
        title: "Not-Started",
        relativeGaugeSize: true,
        donut: true
    });
});
