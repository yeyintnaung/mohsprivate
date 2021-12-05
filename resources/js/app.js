/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data: {
        weight: 0,
        height:oldheight,
    },
    // methods:{
    //   bmifn:function(){
    //   let value=this.weight /Math.pow(this.height,2);
    //   this.bmi=Number(value.toFixed(1))
    //   console.log(this.bmi)
    //   }
    // },
    methods:{
        seth(v){
            this.height=parseInt(v);
            console.log(this.height)
        },
        setw(sv){
            this.weight=sv;
        },

    },
    computed: {
        // a computed getter

        bmifn:function(){
            if(this.weight==0 && this.height==0){
                return 0;
            }else{
                let value=this.weight /Math.pow(this.height,2);
                return Number(value.toFixed(1));
            }


        },



    },

});
