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
Vue.component('dateorno-component', require('./components/DateOrNoComponent.vue').default);
Vue.component('cmorfeet-component', require('./components/CmorFeetComponent.vue').default);
Vue.component('bmi-component', require('./components/BmiComponent.vue').default);
Vue.component('getdatabyid-component', require('./components/GetdatabyPatientId.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data: {
        resultBmi: 0,
        weight: 0,
        getid:'',
        cmtom: 0,
        feetinchestom: 0,
        poundtokg:0
    },
    methods: {
        // Triggered when `childToParent` event is emitted by the child.
         getdatafromchild(value) {
            if (value.heightcmmodel != 0) {

                this.cmtom = value.heightcmmodel / 100;
                this.feetinchestom=0;
                if (this.weight != 0) {
                    this.poundtokg = this.weight / 2.205;
                    let fixfloat=this.poundtokg / (this.cmtom * this.cmtom)
                    this.resultBmi = Number.parseFloat(fixfloat).toFixed(2);

                } else {
                    this.resultBmi = 0;
                }

            } else {
                  this.cmtom=0;
                let inchestofeet = value.heightfeettwmodel / 12;
                let allfeet = Number(value.heightfeetmodel) +Number(inchestofeet);
                this.feetinchestom = allfeet / 3.281;
                if (this.weight != 0) {
                    this.poundtokg = this.weight / 2.205;
                    let fixfloat = this.poundtokg / (this.feetinchestom * this.feetinchestom);
                    this.resultBmi = Number.parseFloat(fixfloat).toFixed(2);


                } else {
                    this.resultBmi = 0;
                }


            }


        },
        onweightchangelister() {
            if (this.weight != 0) {
                if (this.cmtom != 0) {
                    this.poundtokg = this.weight / 2.205;
                    let fixfloat = this.poundtokg / (this.cmtom * this.cmtom);
                    this.resultBmi = Number.parseFloat(fixfloat).toFixed(2);

                }
                else{
                    this.poundtokg = this.weight / 2.205;
                    let fixfloat = this.poundtokg / (this.feetinchestom * this.feetinchestom);
                    this.resultBmi = Number.parseFloat(fixfloat).toFixed(2);

                }
            } else {
                this.resultBmi = 0;
            }
        },
        selectchange(){
             this.$refs.fromchild.getfromserver(this.getid)
        }

    }
    // data: {
    //     weight: oldweight,
    //     height:oldheight,
    // },
    // // methods:{
    // //   bmifn:function(){
    // //   let value=this.weight /Math.pow(this.height,2);
    // //   this.bmi=Number(value.toFixed(1))
    // //   console.log(this.bmi)
    // //   }
    // // },
    // methods:{
    //     seth(v){
    //         this.height=parseInt(v);
    //         console.log(this.height)
    //     },
    //     setw(sv){
    //         this.weight=sv;
    //     },
    //
    // },
    // computed: {
    //     // a computed getter
    //
    //     bmifn:function(){
    //         if(this.weight==0 && this.height==0){
    //             return 0;
    //         }else{
    //             let value=this.weight /Math.pow(this.height,2);
    //             return Number(value.toFixed(1));
    //         }
    //
    //
    //     },
    //
    //
    //
    // },

});
