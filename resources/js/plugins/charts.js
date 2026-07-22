import Chart from 'chart.js/auto';

export function createLineChart(id, labels, data) {

    const ctx = document.getElementById(id);

    if (!ctx) return;

    new Chart(ctx, {

        type: 'line',

        data: {

            labels,

            datasets: [

                {

                    label: 'Statistiques',

                    data

                }

            ]

        }

    });

}