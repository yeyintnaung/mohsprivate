<template>
    <div class="form-group">
        <label for="">{{ title }}</label>
        <div class="row">
            <div class="col-md-6">

                <select class="form-control form-select"
                        data-placeholder="Choose a Category"
                        tabindex="1" v-model="yesorno" v-bind:name="namefieldonselect" v-on:change="changeDisplay" :required="selectrequired">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>

                </select>
            </div>

            <div class="col-md-6">

                <input type="date"  v-bind:name="namefieldondate" v-bind:value=this.oldvalue class="form-control"
                       v-bind:class="[hideorshow]"
                       id=""
                       placeholder="HbA1C(last date)" :required="daterequired"/>
            </div>
        </div>

        <!--        <p class="text-danger">{{error}} </p>-->
        <p class="text-danger">{{error}} </p>

    </div>

</template>

<script>
export default {
    props: ['oldvalue','title','error','fieldname'],

    data() {
        return{
            daterequired:true,
            selectrequired:true,
            yesorno:'Yes',
            hideorshow:'d-none',
            namefieldonselect:'',
            namefieldondate:this.fieldname

        }
    },
    mounted(){
        if(this.oldvalue == 'No'){
            this.yesorno =this.oldvalue,
            this.daterequired=false

        }
        this.changeDisplay();
    },
    methods: {
        changeDisplay() {
            // `this` will refer to the component instance
            if(this.yesorno == 'Yes'){
                this.hideorshow='d-inline';
                this.namefieldondate=this.fieldname;
                this.daterequired=true;
                this.namefieldonselect='';
                this.selectrequired=false;

            }else{
                this.hideorshow='d-none';
                this.namefieldondate='';
                this.daterequired=false;
                this.selectrequired=true;
                this.namefieldonselect=this.fieldname;
            }
          console.log(this.yesorno)
        }
    },

    name: "DateOrNoComponent"
}
</script>

<style scoped>

</style>
