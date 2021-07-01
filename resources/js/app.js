//require('./bootstrap');
import Axios from 'axios';
import {get, takeWhile } from 'lodash';
import Vue from 'vue';

window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

var root = new Vue({
    el: '#root',
    data: {
        orders: [],
        orderSaved: [],
        orderTotal: 0,
        ids: [],
        tags: [],
        restaurants: [],
        link: '',
        counter: 0,
        displayDropdown: "none",
        displayCart: 'block',
    },
    methods: {
        addCart(nomePiatto) {
            this.orders.push(nomePiatto);
        },
        addCartSaved(nomePiatto) {
            this.orderSaved.push(nomePiatto);
        },
        removeCart(index) {
            this.orders.splice(index, 1);
        },
        removeCartSaved(index) {
            this.orderSaved.splice(index, 1);
        },
        emptyCart() {
            this.orders = [];
        },
        emptyCartSaved() {
            this.orderSaved = [];
        },
        saveOrder() {
            localStorage.setItem("order", JSON.stringify(this.orders));
        },

        addTag(tag) {
            for (let i = 0; i < this.tags.length; i++) {
                if (this.tags[i] == tag) {
                    return null;
                }
            }
            this.tags.push(tag);
        },
        removeTag(tag) {
            for (let i = 0; i < this.tags.length; i++) {
                if (this.tags[i] == tag) {
                    this.tags.splice(i, 1);
                }
            }
        },
        pushLink(id) {
            this.link = 'http://127.0.0.1:8000/restaurants/plate/' + id;
        },
        //Filtro dei generi
        filterTags() {
            let url = "http://127.0.0.1:8000/api/deliveboo";
            axios.get(url, {
                    params: {
                        tags: this.tags,
                    }
                })
                .then(response => {
                    // handle success;
                    this.restaurants = response.data;
                })
                .catch(error => {
                    // handle error
                    console.log(error);
                });
        },
        emptyStorage() {
            localStorage.clear();
        },
        showDropdown() {
            if (this.displayDropdown == 'block') {
                this.displayDropdown = 'none'
            } else if (this.displayDropdown == 'none') {
                this.displayDropdown = 'block'
            }
        },
        showCart() {
            if (this.displayCart == 'block') {
                this.displayCart = 'none'
            } else if (this.displayCart == 'none') {
                this.displayCart = 'block'
            }
        },
    },

    created() {
        this.filterTags();
    },

    mounted() {
        this.orderSaved = JSON.parse(localStorage.getItem("order"));
        this.orderSaved.forEach(element => {
            var totalMod = Math.round(element.prezzo * 100) / 100;
            this.orderTotal += totalMod;
        });
        this.orderTotal = parseFloat(this.orderTotal).toFixed(2);

        this.orderSaved.forEach(element => {
            this.ids.push(element.id);
        });
        this.orders = this.orderSaved;
    },

});

