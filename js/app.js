const pricingElement = document.querySelectorAll('.pricing__price')
const pricingSpanElement = document.querySelectorAll('.pricing__price span')

/* Re-ordering tarification display [value + tarification] */
const pricingOrderValue = (element, id) => {
    pricingElement[id].innerHTML =
        `
            ${element[id].lastChild.data} <span class="pricing__currency">${element[id].firstElementChild.innerText}</span>
        `
    pricingSpanElement[id].remove();
}

for (let i=0; i<pricingElement.length; i++) {
    pricingOrderValue(pricingElement,i)
}