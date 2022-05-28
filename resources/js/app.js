require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.data('factura', () => ({
    client_id: 0,
    ticket_id: 0,
    availableProducts: [],
    selectedProducts: [],
    currentlySelected: 0,
    quantitySelected: 0,

    init() {
        const ticket = JSON.parse(document.getElementById("ticketDetails").textContent);
        this.client_id = ticket.cliente.id;
        this.ticket_id = ticket.id;

        const notSelected = JSON.parse(document.getElementById("notSelectedProducts").textContent);
        // Hace falta hacer esta vuelta porque si en php se quita algun objeto
        // del array, en JSON el objeto queda algo como:
        //
        // ```
        // {
        //     "0": {
        //         ...
        //     },
        //     "2": {
        //         ...
        //     }
        // }
        // ```
        for (let p in notSelected) {
            this.availableProducts.push(notSelected[p]);
        }

        const selected = JSON.parse(document.getElementById("selectedProducts").textContent);
        for (let p in selected) {
            this.selectedProducts.push(selected[p])
        }
        this.selectedProducts = selected;
    },
    addProduct() {
        const index = this.currentlySelected;
        const existencias = this.availableProducts[index].existencias;

        alert(`index: ${index}`)
        alert(`existencias: ${existencias}`)
        alert(`seleccionada: ${this.quantitySelected}`)

        if (existencias < this.quantitySelected) {
            alert(`La cantidad de producto que esta solicitando excede las existencias de ${existencias}`);
            return;
        }

        const [product] = this.availableProducts.splice(index, 1);

        if (product.pivot) {
            product.pivot.cantidad = this.quantitySelected;
        } else {
            product.pivot = {
                cantidad: this.quantitySelected,
            }
        }
        
        this.selectedProducts.push(product);

        this.currentlySelected = 0;
        this.quantitySelected = 0;
    },
    removeProduct(index) {
        const [product] = this.selectedProducts.splice(index, 1);
        this.availableProducts.push(product);
    },
    async confirmTicket() {
        const body = {
            factura_id: this.ticket_id,
            cliente_id: this.client_id,
            productos: this.selectedProducts.map(p => ({
                id: p.id,
                cantidad: p.pivot.cantidad,
            }))
        }
        const res = await window.axios.post('/api/facturas/gestionar', body);
        if (res.status == 200) {
            window.location.href = '/facturas';
        }
    }
}));

Alpine.start();
