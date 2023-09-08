const labels = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"];
const barData = {
    labels: labels,
    datasets: [{
        label: 'Sales',
        data: [10000, 15000, 6000, 17000, 8000, 7000, 5500, 1500, 9000, 10000, 7895, 6566],
        backgroundColor: 'blue',
        borderColor: 'blue',
        borderWidth: 1
    }]
};

export const barConfig = {
    type: 'bar',
    data: barData,
    responsive: true,
    options: {
        scales: {
            y: {
                beginAtZero: true
            },
        }
    },
};