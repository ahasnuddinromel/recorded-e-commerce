let logout_btn = document.querySelector("#down");
let logout = document.querySelector("#logout-btn");

logout_btn.addEventListener("click", (e) => {
    e.preventDefault();

    alert(logout_btn);

    if (logout.style.display == "") {
        logout.style.display = "block";
    } else if (logout.style.display == "block") {
        logout.style.display = "";
    }
});
if (logout.style.display == "block") {
    document.addEventListener("click", () => {});
}

const myChart = document.getElementById("myChart").getContext("2d");

let gradient = myChart.createLinearGradient(0, 0, 0, 400);
gradient.addColorStop(0.15, "rgba(0,254,204,1)");
gradient.addColorStop(1, "rgba(53,132,255,.5)"); //blue

//blue

const labels = [
    "2021",
    "2022",
    "2023",
    "2024",
    "2025",
    "2026",
    "2027",
    "2028",
    "2029",
];

const data = {
    labels,
    datasets: [
        {
            data: [290, 212, 215, 250, 365, 250, 322, 365, 302],
            label: "Total users",
            tension: 0,
        },
    ],
};

const config = {
    type: "line",
    data: data,
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: false,
            },
        },
        fill: true,
        backgroundColor: gradient,
        borderColor: "#1c1c1c1c",
        hitRadius: 50,
        hoverRadius: 15,
    },
};

const chart = new Chart(myChart, config);

//2nd chart
let gradient2 = myChart.createLinearGradient(0, 0, 0, 400);
gradient2.addColorStop(0, "rgba(254,243,0,1)");
gradient2.addColorStop(1, "rgba(53,255,137,.5)");

const myChart2 = document.getElementById("myChart2").getContext("2d");

const labels2 = [
    "2021",
    "2022",
    "2023",
    "2024",
    "2025",
    "2026",
    "2027",
    "2028",
    "2029",
];

const data2 = {
    labels,
    datasets: [
        {
            data: [290, 212, 215, 250, 365, 250, 322, 365, 302],
            label: "Total users",
            tension: 0,
            backgroundColor: gradient,
        },
        {
            data: [120, 342, 153, 321, 256, 125, 216, 321, 103],
            label: "Total users",
            tension: 0,
            backgroundColor: gradient2,
        },
    ],
};

const config2 = {
    type: "bar",
    data: data2,
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: false,
            },
        },
        fill: true,
        hitRadius: 50,
        hoverRadius: 15,
    },
};

const chart2 = new Chart(myChart2, config2);

let delete_form = document.querySelector("form#btn_logout");
let submit_btn = document.querySelector("form#submit_btn");

submit_btn.addEventListener("submit", function () {
    delete_form.submit();
});
