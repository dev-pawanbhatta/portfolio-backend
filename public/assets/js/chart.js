import { barConfig } from "./data/barchart.js";

if (document.querySelector('#sales-analytics')) {
    new Chart(document.querySelector('#sales-analytics'), barConfig);
}