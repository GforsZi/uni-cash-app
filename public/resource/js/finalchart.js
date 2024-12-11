const ctx = document.getElementById("myChart");
const containerData = document.getElementById("conData");

let dataJson = "";

fetch("/Home")
  .then(response => response.json())
  .then(data => {
    dataJson = data;
    containerData.innerHTML(`${dataJson}`);
  })
  .catch(error => {
    console.error("Error:", error);
  });

new Chart(ctx, {
  type: "bar",
  data: {
    labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
    datasets: [
      {
        label: "Values of RP",
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }
    ]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});
